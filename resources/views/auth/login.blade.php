@include('layouts.main')

<body class="">
  <div class="col-lg-11 mx-auto flex justify-between items-center my-10 max-lg:flex-col max-lg:space-y-5">
    <div class="col-lg-5 max-lg:w-[90%] max-lg:flex max-lg:justify-center">
      <img src="./Images/logo.jpg" alt="" class="w-full h-full max-lg:h-[350px]" />
    </div>
    <div class="col-lg-7 max-xl:w-[90%]">
      <p class="text-2xl text-center font-semibold text-blue-700 mb-6">
        WELCOME ELECTRONIC PICK
      </p>
      <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div class="col-lg-9 mx-auto border-2 border-blue-700 rounded-xl space-y-4 px-6 py-2">
          <h1 class="text-start text-blue-700 text-2xl font-bold">Sign in</h1>

          <input name="email" type="email" placeholder="Email" class="px-2 py-3 border-2 w-full rounded-xl" />
          <div class="flex">
            <input name="password" type="password" placeholder="password" class="px-3 py-3 border-2 w-full rounded-xl" id="id_password" />
            <i class="far fa-eye ml-[-30px] mt-5 cursor-pointer" id="togglePassword"></i>
          </div>


          <button type="submit" class="w-full rounded-xl bg-blue-700 text-white text-center py-3 text-lg font-bold">
            Login
          </button>

          @if (session('error'))
          <div class="alert-box">
            {{ session('error') }}
          </div>
          @endif
          <br>
          <div class="flex justify-center text-sm">
            <h1 class="text-blue-700">
              Don’t have an account?
              <a href="{{route('signup')}}" class="text-blue-700 hover:text-yellow-600">
                Sign up</a>
            </h1>
      </form>

    </div>
  </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/web.js"></script>
  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#id_password");

    togglePassword.addEventListener("click", function(e) {
      // toggle the type attribute
      const type =
        password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      // toggle the eye slash icon
      this.classList.toggle("fa-eye-slash");
    });
  </script>
</body>

</html>