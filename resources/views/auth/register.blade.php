@extends('layouts.guest')

@section('content')
    <div class="my-10 mr-10 w-full md:flex sm:flex-wrap">
        <div class="flex items-center justify-center p-5 mx-24 h-auto">
            <img src="{{ asset('/img/login.png') }}" alt="login picture" class="w-full max-w-[800px] h-auto">
        </div> 
        <div class="bg-[#F1F1F1] shadow-md rounded-lg md:m-10 pt-5 mr-10 p-5 w-full max-w-md min-h-[500px]">
            <p class="m-5 text-center font-black text-2xl md:text-3xl mb-6">Create an account</p>
            <form method="POST" class="w-full" action="{{ route('register') }}">
                @csrf

                                    <!-- Name -->
                    <div class="flex flex-col mb-6 mx-5">
                        <label for="name" class="relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <x-text-input id="name" type="text" name="name" :value="old('name')" placeholder="name" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" required  autocomplete="username" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs" >
                                {{ __('Name') }}
                            </span>
                        </label>
                
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    
                    <!-- Email Address -->
                    <div class="flex flex-col mb-6 mx-5">
                        <label for="email" class="relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="email" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" required  autocomplete="username" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs" >
                                {{ __('Email') }}
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col mb-6 mx-5">
                        <label for="password" class="relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <x-text-input id="password" type="password" name="password" :value="old('password')" placeholder="password" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" required  autocomplete="current-password" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs" >
                                {{ __('Password') }}
                            </span>
                        </label>
                    
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>


                    <!-- Password -->
                    <div class="flex flex-col mb-6 mx-5">
                        <label for="password_confirmation" class="relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <x-text-input id="password_confirmation" type="password" name="password_confirmation" :value="old('password_confirmation')" placeholder="password_confirmation" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" required  autocomplete="current-password" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs" >
                                {{ __('Password') }}
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex flex-col mb-6 mx-5">
                        <x-input-label for="user-role" :value="__('Select Account Role')" />

                        <x-select id="user-role" class="block mt-1 py-2 px-2 w-full" name="role" required>
                            <option value="Rider">Rider</option>
                            <option value="Admin">Admin</option>
                            <option value="Supplier">Supplier</option>
                        </x-select>

                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>

                    <div class="mx-5 my-2 text-xs md:text-base">
                        <x-primary-button>
                            {{ __('Sign Up')}}
                        </x-primary-button>
                    </div>

                <div class="flex items-center px-5 my-5">
                    <label for="termsandpolicy" class="inline-flex ">
                        <input id="termsandpolicy" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="termsandpolicy">
                        <span class="ml-2 text-sm text-gray-600">By creating an account, I agree to our <a class="underline" href="#">Terms of use </a> and <a class="underline"  href="#">Privacy Policy</a></span>
                    </label>
                </div>

                <div class="flex items-center px-6 my-5">
                    <p class="text-sm">Already have an account? <a class="text-blue-700 underline"href="{{route('register')}}">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>

    @endsection
