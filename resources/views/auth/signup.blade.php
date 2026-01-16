@include('layouts.main')

<body class="">
    <div class="col-lg-11 mx-auto flex justify-between items-center my-10 max-lg:flex-col max-lg:space-y-5">
        <div class="col-lg-5 max-lg:w-[90%] max-lg:flex max-lg:justify-center">
            <img src="./Images/logo.jpg" alt="" class="w-full h-full max-lg:h-[350px] flex justify-center items-center" />
        </div>
        <div class="col-lg-7 max-xl:w-[90%]">
            <p class="text-2xl text-center font-semibold text-blue-700 mb-6">
                WELCOME ELECTRONIC PICK
            </p>
            <form method="POST" action="{{ route('signup.submit') }}">
                @csrf
                <div class="col-lg-9 mx-auto border-2 border-blue-700 rounded-xl space-y-4 px-6 py-2">

                    <h1 class="text-start text-blue-700 text-2xl font-bold">Sign Up</h1>

                    <input name="email" type="email" placeholder="Email" class="px-2 py-3 border-2 w-full rounded-xl" />
                    <input name="phone_number" type="text" placeholder="Phone Number" class="px-3 py-3 border-2 w-full rounded-xl" />
                    <div class="flex">
                        <input name="password" type="password" placeholder="password" class="px-3 py-3 border-2 w-full rounded-xl" id="id_password" />
                        <i class="far fa-eye ml-[-30px] mt-5 cursor-pointer" id="togglePassword"></i>
                    </div>
                    <div class="flex">
                        <input name="password_confirmation" type="password" placeholder="confirm password" class="px-3 py-3 border-2 w-full rounded-xl" id="id_password_1" />
                        <i class="far fa-eye ml-[-30px] mt-5 cursor-pointer" id="togglePasswor"></i>
                    </div>

                    @if ($errors->any())
                    <div class="alert-box">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <a>

                        <button type="submit" class="w-full rounded-xl bg-blue-700 text-white text-center py-3 mt-3 mb-5">
                            Sign Up
                        </button>
                    </a>



                </div>
            </form>
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
    <script>
        const togglePasswor = document.querySelector("#togglePasswor");
        const passwor = document.querySelector("#id_password_1");

        togglePasswor.addEventListener("click", function(e) {
            // toggle the type attribute
            const type =
                passwor.getAttribute("type") === "password" ? "text" : "password";
            passwor.setAttribute("type", type);

            // toggle the eye slash icon
            this.classList.toggle("fa-eye-slash");
        });
    </script>
</body>

</html>