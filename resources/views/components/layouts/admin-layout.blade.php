<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | OnlineReservation</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/bf9cf80d96.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>
<style>
    * {
        font-family: Inter;
    }

    .dropdown-menu {
        opacity: 0;
        pointer-events: none;
    }

    #tombol:has(#dropdown:checked)+.dropdown-menu {
        pointer-events: auto;
        opacity: 1;
    }

    .mobile-navbar {
        opacity: 1;
        transition: all .5s ease-in-out;
        transform: translate(0px, 0px);
    }

    .desktop-navbar:has(#close-check:checked)+.mobile-navbar {
        transform: translate(300px, 0px);
        opacity: 0;
    }
</style>

<body class="bg-slate-100">
    

<nav class="fixed top-0 z-50 min-w-full shadow-sm bg-white flex justify-center">
    <div class="px-10 py-3 w-full max-w-screen-xl">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
           </button>
           <button id="sidebar-btn" class="flex items-center cursor-pointer">
            <i class="fa-solid fa-bars-staggered text-gray-900 text-lg"></i>
           </button>
          <a href="https://flowbite.com" class="flex ms-2 md:me-24">
            <span class="self-center text-xl font-bold whitespace-nowrap text-gray-900">Online<span
                class="text-blue-600">Reservation</span></span>
          </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Neil Sims
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    neil.sims@flowbite.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-64 bg-white border-r border-gray-200" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="#" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                 <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                 </svg>
                 <span class="ms-3">Dashboard</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                 <div class="w-5 h-5">
                    <i class="fa-solid fa-bed text-base text-gray-500"></i>
                 </div>
                 <span class="ms-3">Rooms</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                 <div class="w-5 h-5">
                    <i class="fa-solid fa-building text-base text-gray-500"></i>
                 </div>
                 <span class="ms-3">Reservations</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                 <div class="w-5 h-5">
                    <i class="fa-solid fa-users text-base text-gray-500"></i>
                 </div>
                 <span class="ms-3">Users</span>
              </a>
           </li>
        </ul>
     </div>
  </aside>
  
    @yield('main')
    
    @stack('scripts')
    <script>
        document.getElementById('sidebar-btn').onclick = () => {
            document.getElementById('logo-sidebar').classList.toggle('-translate-x-64')
            document.querySelector('#sidebar-btn i').classList.toggle('fa-bars-staggered')
            document.querySelector('#sidebar-btn i').classList.toggle('fa-xmark')
        }
        window.addEventListener('scroll', function() {
            if (window.scrollY > 0) {
                document.querySelector('.navbar-back').classList.remove('bg-transparent')
                document.querySelector('.navbar-back').classList.add('bg-white')
                document.querySelector('.navbar-back .desktop-navbar').classList.remove('p-2')
                document.querySelector('.navbar-back .desktop-navbar').classList.add('p-4')
            } else {
                document.querySelector('.navbar-back').classList.add('bg-transparent')
                document.querySelector('.navbar-back').classList.remove('bg-white')
                document.querySelector('.navbar-back .desktop-navbar').classList.add('p-2')
                document.querySelector('.navbar-back .desktop-navbar').classList.remove('p-4')
            }
        });
    </script>
</body>

</html>
