<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function filter(Request $request)
    {
        $type = $request->type;
        $companies = Device::where('type', $type)
            ->distinct('company')->pluck('company');

        $rams = Device::where('type', $type)
            ->orderBy('ram')
            ->distinct('ram')->pluck('ram');
        $colors = Device::where('type', $type)
            ->distinct('color')->pluck('color');
        $accessories = Device::where('type', $type)
            ->distinct('accessories')->pluck('accessories');
        $capacities = null;
        $hard_disks = null;
        $graphics_cards = null;
        if ($type == 'LAPTOP') {
            $hard_disks = Device::where('type', $type)
                ->distinct('hard_disk')->pluck('hard_disk');
            $graphics_cards = Device::where('type', $type)
                ->distinct('graphics_card')->pluck('graphics_card');
        } else {
            $capacities = Device::where('type', $type)
                ->orderBy('capacity')
                ->distinct('capacity')->pluck('capacity');
        }

        return view('filter', compact('companies', 'capacities', 'rams', 'colors', 'accessories', 'graphics_cards', 'hard_disks', 'type'));
    }

    public function devices(Request $request)
    {
        $devices = Device::query();
        if ($request->company) {
            $devices->where('company', $request->company);
        }
        if ($request->capacity) {
            $devices->where('capacity', $request->capacity);
        }
        if ($request->ram) {
            $devices->where('ram', $request->ram);
        }
        if ($request->price) {
            $devices->where('price', '<=', $request->price);
        }
        if ($request->accessories) {
            $devices->where('accessories', $request->accessories);
        }
        if ($request->cpu) {
            $devices->where('cpu', $request->cpu);
        }
        if ($request->graphics_card) {
            $devices->where('graphics_card', $request->graphics_card);
        }
        if ($request->color) {
            $devices->orWhere('color', $request->color);
        }
        $devices->where('type',$request->type);
        $devices = $devices->get();
        return view('devices', compact('devices'));
    }
}
