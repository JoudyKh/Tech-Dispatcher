@include('layouts.main')

<body class="">
    <div class="row flex-col mx-auto mt-12">
        <div class="col-md-3 mx-auto">
            <img src="./Images/logo.jpg" alt="" class="rounded-full" />
        </div>
    </div>
    <div class="row mx-auto flex justify-between mt-12">
        <div class="col-md-3 mx-auto bg-blue-700 text-white rounded-full border-blue-700 text-center p-16 text-3xl font-bold">
            <a href="{{route('devices.filter',['type'=>'MOBILE'])}}"> جوال </a>
        </div>

        <div class="col-md-3 mx-auto bg-blue-700 text-white rounded-full border-blue-700 text-center p-16 text-3xl font-bold">
            <a href="{{route('devices.filter',['type'=>'TABLET'])}}"> جهاز لوحي</a>

        </div>

        <div class="col-md-3 mx-auto bg-blue-700 text-white rounded-full border-blue-700 text-center p-16 text-3xl font-bold">
            <a href="{{route('devices.filter',['type'=>'LAPTOP'])}}"> لابتوب </a>

        </div>


    </div>
    <div class="w-full">
        <div class="text-center">
            <a href="{{route('logout')}}" class="">
                <button class=" bg-[#70CCDB]  text-black btn px-1 w-[50%]">
                    تسجيل الخروج
                </button>
            </a>
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