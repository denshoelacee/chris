@extends('layouts.guest')

@section('content')

<div class="flex flex-col-reverse w-full h-auto md:flex-row my-5 content-center ">   
    <div class="w-full p-5 mt-[80px] md:w-1/2 flex flex-col items-center md:items-start ">
        <h1 class="text-3xl md:text-4xl  md:mx-10 uppercase font-black tracking-wide text-center ">
            Inventory Management <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">System</span>
        </h1>
        <div class="w-full md:w-[100%] mt-8">
            <h3 class="text-xl md:text-1xl mx-4 md:mx-10 font-black text-center md:text-left"> Welcome to our Inventory Management System ──</h3>
            <h3 class="text-xl md:text-2xl mx-4 md:mx-10 font-black text-center md:text-left">
                where <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">efficiency</span> meets 
                <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">simplicity.</span>
            </h3>
            <h4 class="text-base md:text-lg mx-4 md:mx-10 font-thin text-center md:text-left">Say goodbye to stockouts and overstock situations with our cutting-edge solution designed to streamline your inventory processes</h4>
        </div>
        <x-contact/>
    </div>

    <div class="hidden md:flex md:w-1/2 justify-center mt-[60px]">
        <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="w-full max-w-md h-[65%] md:w-full max-h-[100%]">
    </div>
    
</div>

<hr class="hiddenmd:h-[2px] bg-black">

<!-- SERVICES SECTION -->
<div id="services" class="px-5 md:px-10 lg:px-20 py-20 content-center h-auto md:h-screen">
    <h2 class="text-3xl font-black">
        Services We Offer
    </h2>
    <hr class="w-24 border-0 h-1 bg-blue-600 mb-10">

    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div class="px-5">
            <i class="services-circle  text-3xl text-blue-600">
                <i class='bx bx-package'></i>
            </i>
            <h2 class="text-2xl font-black">Warehousing Services</h2>
            <p class="text-md py-4">
                A pay-as-you-go solution for: pallet storage, inventory management, fulfillment (e.g., pick and pack), in/out-bound solutions, and more.
            </p>
        </div>
        <div class="px-5">
            <i class="services-circle text-3xl text-blue-600">
                <i class='bx bx-package'></i>
            </i>
            <h2 class="text-2xl font-black">Global Freight</h2>
            <p class="text-md py-4">
                Search and compare the best shipping rates among dozens of trusted logistics partners for last-mile delivery and freight.
            </p>
        </div>
        <div class="px-5">
            <i class="services-circle text-3xl text-blue-600">
                <i class='bx bx-package'></i>
            </i>
            <h2 class="text-2xl font-black">Packaging Solution</h2>
            <p class="text-md py-4">
                Our packaging solutions are optimized for each individual customer and are selected based on specific needs and requirements.
            </p>
        </div>
    </div>
</div>


<hr class="hiddenmd:h-[2px] bg-black ">

<!--CONTACT  -->
    <div id="contact" class="py-20 px-4 sm:px-10 lg:px-20 flex justify-center"> 
        <div class="flex flex-col lg:flex-row shadow-[0_3px_10px_rgb(0,0,0,0.2)] w-full max-w-6xl">
            <div class="rounded bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600 p-10 flex flex-col">
                <h2 class="text-3xl text-white">Contact Information</h2>
                <h3 class="text-sm text-white mt-2">Say something to start a live chat!</h3>
                <div class="mt-10">
                    <h3 class="text-white md:text-sm mb-2 mt-5"> 
                    <i class='bx bxs-phone-call text-2xl md:text-2xl mr-3'></i>
                    09123456789
                    </h3>
                    <h3 class="text-white md:text-sm mb-2 mt-5"> 
                    <i class='bx bxs-envelope text-2xl md:text-2xl mr-3' ></i>
                    demo@gmail.com
                    </h3>
                    <h3 class="text-white md:text-sm mb-2 mt-5"> 
                    <i class='bx bxs-location-plus text-2xl md:text-2xl mr-3' ></i>
                    Sabang Danao City, Cebu
                    </h3>
                </div>
                <div class="flex mt-auto gap-4 ">
                    <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10">
                        <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10 hover:bg-blue-900">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                </div>
            </div>
            <div class="flex-grow rounded py-10 px-5 ">
                <form class="w-full">
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <x-input-label for="firstname" :value="__('FIRST NAME')" />
                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required /> 
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <x-input-label for="lastname" :value="__('LAST NAME')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required /> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <x-input-label for="email" :value="__('EMAIL ADDRESS')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /> 
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <x-input-label for="phonenum" :value="__('PHONE NUMBER')" />
                            <x-text-input id="phonenum" class="block mt-1 w-full" type="tel" name="phonenum" :value="old('phonenum')" required /> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <x-input-label for="message" :value="__('MESSAGE')" />                            
                            <textarea class="w-full border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="10" ></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection
