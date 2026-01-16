@include('layouts.main')

<body>
    <form action="{{ route('devices') }}" method="GET">

        <div class="col-md-11 mx-auto mt-5">
            <div class="row mx-auto justify-between space-y-2">
                <div class="">
                    <h1 class="text-blue-700 text-3xl font-semibold my-5">
                        اختر المواصفات المطلوبة
                    </h1>
                </div>

                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> نوع الشركة</p>
                    </div>
                    <select name="company" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($companies as $company)
                        <option value="{{$company}}" class="text-center">{{$company}}</option>
                        @endforeach
                    </select>


                </div>

                @if($type=='LAPTOP')


                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> الهارد </p>
                    </div>
                    <select name="hard_disk" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($hard_disks as $hard_disk)
                        <option value="{{$hard_disk}}" class="text-center">{{$hard_disk}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> كرت الشاشة</p>
                    </div>
                    <select name="graphics_card" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($graphics_cards as $graphics_card)
                        <option value="{{$graphics_card}}" class="text-center">{{$graphics_card}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> السعة</p>
                    </div>
                    <select name="capacity" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($capacities as $capacity)
                        <option value="{{$capacity}}" class="text-center">{{$capacity}}</option>
                        @endforeach
                    </select>

                </div>

                @endif
                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> الرام</p>
                    </div>
                    <select name="ram" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($rams as $ram)
                        <option value="{{$ram}}" class="text-center">{{$ram}}</option>
                        @endforeach
                    </select>


                </div>

                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> اللون</p>
                    </div>
                    <select name="color" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($colors as $color)
                        <option value="{{$color}}" class="text-center">{{$color}}</option>
                        @endforeach
                    </select>


                </div>

                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> السعر</p>
                    </div>
                    <input type="text" id="text" name="price" class="input_c w-full !text-blue-700" placeholder="   السعر" />


                </div>
                <div class="col-md-6 mt-2">
                    <div>
                        <p class="text-end text-blue-700 font-bold mb-2"> الملحقات</p>
                    </div>
                    <select name="accessories" class="input_c w-full text-start text-blue-700 !px-1 font-bold" style="direction: rtl">
                        @foreach($accessories as $accessories)
                        <option value="{{$accessories}}" class="text-center">{{$accessories}}</option>
                        @endforeach

                    </select>


                </div>
                <input hidden value="{{$type}}" name="type">

                <div class="col-md-12 flex justify-center">
                    <div class="col-sm-7 mt-10">
                        <a>
                            <button type='submit' class="w-full rounded-xl bg-blue-700 text-white text-center py-3 mt-3 mb-5">
                                بحث 
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>