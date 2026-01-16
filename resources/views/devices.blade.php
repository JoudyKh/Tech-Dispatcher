@include('layouts.main')

<body>
    <div class="col-lg-11 mx-auto my-5 flipIn">
        <div class="row mx-auto flex justify-between gap-3 max-md:flex-col">
            @if(count($devices)==0)
            <h1 class="text-white ">لا يوجد نتائج مطابقة </h1>
            @endif
            @foreach($devices as $device)
            <div class="col-lg-3 col-md-5 col-sm-11 border-2 border-blue-700 rounded-xl !px-0 mx-auto">
                <div class="w-[100%]">
                    
                    <img src="
                    @if($device->type=='LAPTOP')
                    {{asset('Images/pexels-caio-56759.jpg')}}
                    @elseif($device->type=='MOBILE')
                    {{asset('Images/mobile.JPEG')}}
                    @else
                    {{asset('Images/tablet.webp')}}
                    @endif
                    " alt="" class="w-full h-36 max-md:h-64" />
                </div>
                <h1 class="text-blue-700 font-semibold text-xl">{{$device->name}}</h1>
                <div class="flex justify-between my-1 mx-2">
                    <h1 class="text-blue-700 font-semibold text-xl">{{$device->company}}</h1>
                    <h1 class="text-blue-700 text-xl">{{$device->price}} $ </h1>
                </div>
                <div class="flex justify-between mx-1">
                    @if($device->type=='LAPTOP')
                    <div>
                        <h1 class="text-white"> {{$device->hard_disk}} :الهارد </h1>

                    </div>
                    <div>
                        <h1 class="text-white"> {{$device->graphics_card}} :كرت الشاشة </h1>
                    </div>
                    @endif

                </div>
                <div>
                    <div class=" flex justify-center">
                        <h1 class="text-center text-white"> GB {{$device->ram}} :الرامات </h1>
                    </div>
                    @if($device->type!='LAPTOP')
                    <div class=" flex justify-center">
                        <h1 class="text-center text-white"> GB {{$device->capacity}} :السعة </h1>
                    </div>
                    @endif
                </div>

                <div class="flex justify-center">
                    <div class=" flex justify-center">
                        <h1 class="text-center text-white">اللون : {{$device->color}}</h1>
                    </div>

                </div>
                <div class=" flex justify-center">
                    <h1 class="text-center text-white">الملحقات : {{$device->accessories}}</h1>
                </div>


            </div>
            @endforeach

        </div>
    </div>
</body>