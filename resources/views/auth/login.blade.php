@extends('layouts.guest')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="my-10 mr-10 w-full md:flex sm:flex-wrap">
        <div class="flex items-center justify-center p-5 mx-24 h-auto">
            <img src="{{ asset('/img/login.png') }}" alt="login picture" class="w-full max-w-[800px] h-auto">
        </div>        
        <div class="bg-[#F1F1F1] shadow-md rounded-lg md:m-10 pt-5 mr-10 p-5 w-full max-w-md min-h-[500px]">
            <p class="m-5 text-center font-black text-2xl md:text-3xl mb-6">Sign In</p>
            <br>
            <form method="POST" class="w-full" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="flex flex-col mb-6 mx-5">
                    <label for="email" class="relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="email" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" required  autocomplete="username" />
                        <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs" >
                            {{ __('Email') }}
                        </span>
                    </label>
            
                    <!-- <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> 
                    -->
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="flex flex-col mb-6 mx-5">   
                    <div class="flex justify-end items-center mt-[-10px]"  >
                        <div class="flex " onclick="togglePasswordVisibility()">
                            <svg id="toggle-icon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                <path fill="gray" d="M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z"/>
                            </svg >
                            <span id="toggle-label" class="flex items-center justify-center h-full">
                                <h5 class="text-[12px] text-center">Show</h5>
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-between">
                    <label for="password" class="w-full relative block overflow-hidden rounded-md border border-gray-600 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                        <x-text-input id="password" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                        <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                            {{ __('Password') }}
                        </span>
                    </label>
                        
                        <!-- <x-input-label for="password" :value="__('Password')"/>
                        <div class="flex" onclick="togglePasswordVisibility()">
                            <svg id="toggle-icon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                <path fill="gray" d="M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z"/>
                            </svg>
                            <span id="toggle-label" class="flex items-center justify-center h-full">
                                <h5 class="text-[12px] text-center">Show</h5>
                            </span>
                        </div>
                    </div>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    -->
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class=" my-5 text-xs md:text-base w-full">
                    <x-primary-button>
                        {{ __('Sign in')}}
                    </x-primary-button>
                    <!-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    -->
                    @endif
                </div>
                <!-- Remember Me -->
                <div class="flex items-center justify-between  my-5">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    <a href="#" class="text-sm">Need help?</a>
                </div>
                <p class="text-sm">Don't have an account <a class="text-blue-700 underline"href="{{route('register')}}">Sign up</a></p>
            </form>
        </div>
    </div>
    <script>
    function togglePasswordVisibility() {
            // Get the password input, label, and icon
            var passwordInput = document.getElementById("password");
            var label = document.getElementById("toggle-label");
            var icon = document.getElementById("toggle-icon");
            // Toggle the password type and update label text
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                label.textContent = "Show";
                label.style="font-size:12px;"
                icon.style.fill = "red"; // Optional: Change icon color to indicate state
            } else {
                passwordInput.type = "password";
                label.textContent = "Hide";
                icon.style.fill = "gray"; // Optional: Reset icon color
            }
        }
    </script>
@endsection
