<div class="flex justify-around items-center lg:hidden top-6 left-6 text-white p-2 rounded">
    <button id="toggle-sidebar-button" class="lg:hidden bg-gray-800 text-white p-2 rounded h-10">
        Menu
    </button>
    <div class="justify-self-center">
        <a href="{{ route('dashboard') }}" class="flex justify-center items-center w-full mb-5 mt-6">
            <img src="{{ asset('storage/images/Icon.jpeg') }}" class="shadow-lg shadow-amber-400/50 h-10 mr-3 rounded-full" alt="Logo" />
            <span class="ml-2 text-xl self-center font-semibold whitespace-nowrap dark:text-white">SKShare</span>
        </a>
    </div>
</div>

<aside id="logo-sidebar" class="lg:block hidden shadow-lg shadow-white rounded-r-lg fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-gray-50 dark:bg-gray-800 h-full lg:w-1/5 sm:w-2/5 w-3/5" aria-label="Sidebar">
   <div class="h-5/6 flex flex-col items-start justify-start px-3 py-4 overflow-y-auto">
        <div class="flex flex-row justify-between w-full items-center">
          <a href="{{ route('dashboard') }}" class="flex justify-center items-center w-full mb-5 mt-6">
             <img src="{{ asset('storage/images/Icon.jpeg') }}" class="shadow-lg shadow-amber-400/50 lg:h-16 h-10 mr-3 sm:h-7 rounded-full" alt="Logo" />
             <span class="ml-2 lg:text-3xl sm:text-xl self-center font-semibold whitespace-nowrap dark:text-white">SKShare</span>
          </a>
          <button id="no-sidebar-button" class="lg:hidden bg-gray-800 text-white p-2 rounded h-10" aria-label="Close sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <ul class="w-full space-y-4 mt-6 font-medium text-xl">
           <li>
              <a href="{{ route('dashboard') }}" active="request()->routeIs('dashboard')" class="flex items-center justify-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                 </svg>
                 <span class="ml-3">Tableau de Bord</span>
              </a>
           </li>
           <li>
           <li>
              <span class="dark:text-white pl-2 italic">Sneakers</span>
           </li>
           <li>
              <a href="{{ route('sneakers') }}" active="request()->routeIs('sneakers')" class="flex items-center justify-start pl-4 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                    <path d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z" />
                  </svg>
                  <span class="ml-3">Toutes les Sneakers</span>
              </a>
           </li>
           <li>
              <a href="{{ route('sneakers.create') }}" active="request()->routeIs('sneakers.create')" class="flex items-center justify-start pl-4 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-3">Ajouter des Sneakers</span>
              </a>
           </li>
           <li>
              <a id="categories-dropdown-button" class="flex items-center justify-start text-gray-900 rounded-lg dark:text-white">
                  <span class="dark:text-white pl-2 italic">Catégories</span>
                  <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-4 transition-transform">
                      <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                  </svg>
              </a>
              <ul id="categories-dropdown" style="display: none;" class="w-full transition-transform">
                  <li class="pl-4 p-2 mt-4 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers') }}">Toutes les sneakers</a></li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'dunk']) }}">Dunk</a></li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Air Jordan Low']) }}">Air Jordan Low</a></li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Air Jordan High']) }}">Air Jordan High</a></li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Air Force']) }}">Air Force</a></li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Vans']) }}"></a>Vans</li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Nike Cortez']) }}"></a>Nike Cortez</li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'New Balance']) }}"></a>New Balance</li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Adidas']) }}"></a>Adidas</li>
                  <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full pl-8"><a href="{{ route('sneakers', ['category' => 'Autre']) }}"></a>Autre</li>
              </ul>
          </li>
        </ul>
  </div>
  <div class="h-1/6 flex items-center justify-around border-t shadow">
    @auth
        <button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top" class="bg-amber-50 shadow-lg shadow-amber-400/50 mr-3 mb-3 md:mb-0 text-black focus:ring-4 focus:outline-none focus:ring-amber-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center self-center" type="button">
          {{ Auth::user()->name }} 
          <svg class="w-2.5 h-2.5 ml-2.5 fill-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
    @else
        <a href="{{ route('login') }}" class="mr-3 mb-3 md:mb-0 text-black bg-amber-50 hover:bg-amber-200 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-amber-50 dark:hover:bg-amber-200 dark:focus:ring-amber-300 self-center">
          Se connecter
        </a>
    @endauth
    <div id="dropdownTop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
          <li>
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit Profile</a>
          </li>
          <li>
              <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  @csrf
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a>
              </form>
          </li>
      </ul>
    </div>
    <form method="POST" action="{{ route('toggle-dark-mode') }}">
        @csrf
        <button type="submit" class="dark-mode-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
            </svg>
        </button>
    </form>
  </div>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const categoriesDropdownButton = document.getElementById("categories-dropdown-button");
        const categoriesDropdown = document.getElementById("categories-dropdown");
        const dropdownIcon = document.getElementById("dropdown-icon");

        categoriesDropdownButton.addEventListener("click", function () {
            if (categoriesDropdown.style.display == "none") {
                categoriesDropdown.style.display = "block";
                dropdownIcon.classList.add("rotate-90");
            } else {
                categoriesDropdown.style.maxHeight = "0px";
                categoriesDropdown.style.display = "none";
                dropdownIcon.classList.remove("rotate-90");
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("logo-sidebar");
        const toggleSidebarButton = document.getElementById("toggle-sidebar-button");
        const noSidebarButton = document.getElementById("no-sidebar-button");
        toggleSidebarButton.addEventListener("click", function () {
            sidebar.classList.toggle("hidden");
            sidebar.classList.toggle("-translate-x-full");
        });
        noSidebarButton.addEventListener("click", function () {
            sidebar.classList.toggle("hidden");
            sidebar.classList.toggle("-translate-x-full");
        });
    });
</script>

