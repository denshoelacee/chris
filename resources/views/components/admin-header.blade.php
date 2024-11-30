
<header >
    <div class="flex mx-7">
      <div class="relative m-3 w-full">
        <form class="w-3/6 relative">
          <input type="text" class="w-full py-2 pr-10 pl-4 bg-slate-100 border border-gray-300 rounded-md shadow-sm focus:outline-none" placeholder="Search"/>
          <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <button onclick="performSearch()" class="focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="currentColor">
                <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
              </svg>
            </button>
          </div>
        </form>
      </div class="">
      
    </div>
    <hr>
  </header>
  
  <script>
    function performSearch() {
      const searchitem = document.querySelector('input').value;
    
      // LOGIC TO DISPLAY SEARCHES
    }
  </script>
