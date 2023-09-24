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

<aside id="logo-sidebar" class="block lg:translate-x-0 -translate-x-full lg:shadow-lg lg:shadow-white rounded-r-lg fixed top-0 left-0 z-40 h-screen transition-all bg-gray-50 dark:bg-gray-800 lg:w-1/5 sm:w-2/5 w-3/5" aria-label="Sidebar">
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
               <span class="dark:text-amber-100 text-black pl-2 italic">Sneakers</span>
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
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                       <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                   </svg>
                   <span class="ml-3">Ajouter des Sneakers</span>
               </a>
            </li>
            <li>
               <span class="dark:text-amber-100 text-black pl-2 italic">Classements</span>
            </li>
            <li>
                <a href="{{ route('sneakers.rankings.likes') }}" active="request()->routeIs('sneakers.rankings.likes')" class="flex items-center justify-start pl-4 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                    </svg>
                    <span class="ml-3">Classement des likes</span>
                </a>
            </li>
            <li>
                <a href="{{ route('sneakers.rankings.users') }}" active="request()->routeIs('sneakers.rankings.users')" class="flex items-center justify-start pl-4 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <span class="ml-3">Classement des utilisateurs</span>
                </a>
            </li>
            <li>
               <a id="categories-dropdown-button" class="flex items-center justify-start text-gray-900 rounded-lg dark:text-white">
                   <span class="dark:text-amber-100 text-black pl-2 italic">Catégories</span>
                   <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-4 transition-transform text-gray-400">
                       <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                   </svg>
               </a>
               <ul id="categories-dropdown" style="display: none;" class="w-full transition-transform">
                   <li class="pl-4 p-2 mt-4 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers') }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Toutes les sneakers</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'dunk']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Dunk</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Air Jordan Low']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Air Jordan Low</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Air Jordan High']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Air Jordan High</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Air Force']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Air Force</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Vans']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Vans</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Nike Cortez']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Nike Cortez</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'New Balance']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>New Balance</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full"><a href="{{ route('sneakers', ['category' => 'Adidas']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Adidas</a></li>
                   <li class="pl-4 p-2 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full mb-2"><a href="{{ route('sneakers', ['category' => 'Autre']) }}" class="flex items-center justify-start"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>Autre</a></li>
               </ul>
            </li>
        </ul>
  </div>
  <div class="h-1/6 flex items-center justify-center border-t shadow">
    @auth
        @if (Auth::user()->profile_image !== null)
            <img src="{{ asset('storage/images/ProfileImage.png') }}" alt="{{ Auth::user()->name }}'s Profile Image" class="w-14 rounded-full shadow-lg shadow-amber-100/50">
        @else
            <img src="{{ asset('storage/profile_images/Default.jpeg') }}" alt="{{ Auth::user()->name }}'s Profile Image" class="w-14 rounded-full shadow-lg shadow-amber-100/50">
        @endif
        <button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top" class="font-medium text-xl dark:text-white rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center self-center" type="button">
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
            sidebar.classList.toggle("-translate-x-full");
        });
        noSidebarButton.addEventListener("click", function () {
            sidebar.classList.toggle("-translate-x-full");
        });
        document.addEventListener("click", function (event) {
            if (!sidebar.contains(event.target) && sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
            }
        });
    });
</script>

