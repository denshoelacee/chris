@extends('layouts.guest')

@section('content')
<div class="flex flex-col-reverse w-full h-auto md:flex-row my-5  mb-32 content-center ">   
    <div class="w-full mx-10 p-5 mt-[80px] md:w-full flex flex-col items-center md:items-start ">
        
        <h1 class="text-3xl md:text-4xl  md:mx-10 uppercase font-black tracking-wide text-center ">
            About Us
        </h1>
        <hr class="mx-10 w-36 border-0 h-1 bg-blue-600 mb-10">
        <div class="w-full md:w-[100%] mt-8">
            <h4 class="text-base md:text-xl mx-4 md:mx-10 font-thin text-center md:text-left">
                Welcome to <span class="text-blue-600 font-black border-b-2 border-blue-500">Stocklytic</span>, your partner in simple and efficient inventory management.
                We help businesses of all sizes track inventory, reduce waste, and make smarter decisions. With real-time updates and seamless integration, you’ll have full control over your stock anytime, anywhere.
                Built to simplify your workflow, <span class="text-blue-600 font-black border-b-2 border-blue-500">Stocklytic</span> combines innovation with ease of use, whether you run a small store or a large supply chain.
                Transform your inventory management—efficiently and effortlessly.</h4>
        </div>
    </div>
</div>

<hr class="hiddenmd:h-[2px] bg-black">

<div class="flex flex-col-reverse w-full h-auto md:flex-row my-5 content-center ">   
    <div class="w-full p-5 mx-10 mt-[80px] md:w-1/2 flex flex-col items-center md:items-start ">
        <h1 class="text-3xl md:text-4xl  md:mx-10 uppercase font-black tracking-wide text-center ">
            MISSION 
        </h1>
        <hr class="mx-10 w-36 border-0 h-1 bg-blue-600 mb-10">
        <div class="w-full md:w-[100%] mt-8">
            <h4 class="text-base md:text-2xl mx-4 md:mx-10 font-thin text-center md:text-left">"Our mission is to streamline inventory processes and enhance efficiency for businesses of all sizes."</h4>
        </div>
    </div>

    <div class="hidden md:flex md:w-1/2 justify-center mt-[60px]">
        <img src="{{ asset('/img/about.png') }}" alt="Inventory Management" class="w-full max-w-xl h-[100%] md:w-full max-h-[100%]">
    </div>
    
</div>
<hr class="hiddenmd:h-[2px] bg-black">

<div class="flex flex-col-reverse w-full h-auto md:flex-row my-5 content-center ">   
    <div class="w-full p-5 mx-10 mb-32 mt-[80px] md:w-1/2 flex flex-col items-center md:items-start ">
        <h1 class="text-3xl md:text-4xl  md:mx-10 uppercase font-black tracking-wide text-center ">
            Features 
        </h1>
        <hr class="mx-10 w-36 border-0 h-1 bg-blue-600 mb-10">
        <div class="w-max mx-24 mt-8 justify-center">
            <div class="grid grid-cols-2 gap-x-8 md:gap-x-16 px-8 md:px-16 w-full">
                <ul class="list-disc">
                    <li class="text-base py-2 md:text-2xl mx-4 font-thin text-center md:text-left">
                        Real-Time Inventory Tracking
                    </li>
                    <li class="text-base py-2 md:text-2xl mx-4 font-thin text-center md:text-left">
                        Stock Alerts And Notifications
                    </li>
                    <li class="text-base py-2 md:text-2xl mx-4 font-thin text-center md:text-left">
                        Multi-Device Accessibility
                    </li>
                </ul>
                <ul class="list-disc mx-5">
                    <li class="text-base py-2 md:text-2xl mx-4 font-thin text-center md:text-left">
                        Supplier And Customer Management
                    </li>
                    <li class="text-base py-2 md:text-2xl mx-4 font-thin text-center md:text-left">
                        Detailed Reporting And Analytics
                    </li>
                </ul>
            </div>
        </div>  
    </div>
</div>
@endsection

