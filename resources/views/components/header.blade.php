<!-- FRONT END BY: DENSHOW -->
<!--THIS IS A HEADER SIDE -->
<!---------------------------->
<header>
    <!--RESPONSIVE SCREEN DEFAULT--> 
    <nav class="flex items-center justify-between p-8 ">
        <!--HIDDEN HAMBURGER ICON IF MOBILE SCREEN IT WILL EXIST -->
        <div class="flex md:hidden fixed top-0 left-0 right-0 bg-white p-4">
            <button id="hamburger" class="text-black focus:outline-none text-xl float-right">
                &#9776;
            </button>
        </div>
        <!-- IF MOBILE SCREEN DISAPPEARS-->
        <ul class="hidden md:flex md:ml-auto flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8 mr-10 gap-7">
            <li><a href="{{ route('home') }}" class="text-black hover:text-blue-800 font-black">Home</a></li>
            <li><a href="{{ request()->is('login') ? route('about') : 'about' }}" class="text-black hover:text-blue-800 font-black">About Us</a></li>
            <li><a href="{{ request()->is('login') ? route('home') . '#services' : '#services' }}" class="text-black hover:text-blue-800 font-black">Services</a></li>
            <li><a href="{{ request()->is('login') ? route('home') . '#contact' : '#contact' }}" class="pr-10 text-black hover:text-blue-800 font-black">Contact Us</a></li>
            <x-log-in-buttons>
                <a href="{{ route('login') }}">{{ __('Sign In')}}</a>
            </x-log-in-buttons>
        </ul>
        
    </nav>
    
    <!-- HAMBURGER ICON FOR MOBILE SCREEN IF CLICKED CHANAN GAWAS DAYON -->
    <ul id="mobile-menu" class="hidden md:hidden flex flex-col space-y-2 p-8 fixed bg-white top-10 w-[100%] h-[100%] text-1xl  ">
        <li><a href="#" class="text-black hover:text-blue-800 ">Home</a></li>
        <hr class="py-2">
        <li><a href="#services" class="text-black hover:text-blue-800 ">Services</a></li>
        <hr class="py-2">
        <li><a href="#contact" class="text-black hover:text-blue-800 ">Contact Us</a></li>
        <hr class="py-2">
        <x-log-in-buttons/>
    </ul>
</header>

<script>
    /* 
    // Toggle the visibility of the mobile menu when the hamburger icon is clicked
    document.getElementById('hamburger').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Close the mobile menu when any menu item is clicked
    const menuItems = document.querySelectorAll('#mobile-menu a'); // Select all links inside the mobile menu
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.add('hidden'); // Hide the menu
        });
    });


 // Check if the current page is home
 if (window.location.pathname === '/home') {
        // If on home page, add scroll functionality
        const menuLinks = document.querySelectorAll('ul li a');
        
        menuLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                const href = link.getAttribute('href');
                
                if (href.includes('#')) {  // Check if the href is an internal link (contains '#')
                    event.preventDefault();  // Prevent default behavior
                    const targetId = href.split('#')[1];  // Extract the target id
                    const targetElement = document.getElementById(targetId);  // Find the target element
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });  // Smooth scroll to the target section
                    }
                }
            });
        });
    }
</script>
