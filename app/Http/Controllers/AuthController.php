<?php

namespace App\Http\Controllers;

use App\Constants\Constants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
        if(Auth::user())
        return redirect()->route('/');

        return view('auth.signup');
    }

    public function showLoginForm()
    {
        if(Auth::user())
        return redirect()->route('/');

        return view('auth.login');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }
    public function showProfileForm()
    {
        $user = Auth::user();
        return view('auth.update-profile', compact('user'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->route('login')
            ->with('error', 'Invalid email or password');
    }

    public function signup(Request $request)
    {
        $data = $request->all();
        $rules = [
            'phone_number' => 'required|string|max:12',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
            'email' => 'required|email|max:255|unique:users',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('/');
    }

    public function submitProfileForm(Request $request)
    {
        $data = $request->except('type', '_token');
        $user = Auth::user();
        $rules = [
            'full_name' => 'required|string|max:255',
            'university_password' => 'nullable|max:255',
            'number' => 'nullable|integer',
            'id_number' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'building_number' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'secoundry_number' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'postal_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $userData = $request->only('username', 'email', 'password');
        if ($request->password)
            $userData['password'] = Hash::make($request->password);
        $studentData = $request->except('username', 'email', 'password', 'university_password', 'type', '_token');
        if ($request->university_password)
            $studentData['university_password'] = Hash::make($request->university_password);
        $user->update($userData);
        $user->student()->update($studentData);
        return redirect()->route('profile');
    }
}
