<!--
Template Name: Taildash - Tailwind Dashboard Admin Template
Author: Aribudin
Website: https://www.tailwinddashboard.com
Contact: support@tailwinddashboard.com
Purchase: https://themes.tailwindtemplate.net/taildash
License: You must have a valid license purchased only from official store (the above link) in order to legally use the theme for your project.
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Taildash | Tailwind Dashboard Template</title>
  <meta name="description" content="Tailwind Dashboard Template">

  <!-- Development css (used in all pages) -->
  <link rel="stylesheet" id="stylesheet" href="src/css/style.css">
  <!-- Production css (used in all pages) -->
  <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

  <!--start::Customizer Stylesheets (Only for demo purpose)-->
  <link rel="stylesheet" href="src/css/customizer.css">
  <!--end::Customizer Stylesheets (Only for demo purpose)-->

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="src/img/favicon.png">
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
  <!-- wrapper -->
  <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
    <div class="flex flex-col min-h-screen transition-all duration-500 ease-in-out">
      <!-- Navbar -->
      <nav class="flex flex-row flex-nowrap items-center justify-between mt-0 py-2 px-6 border-b border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-800" id="desktop-menu">
        <!-- logo -->
        <a class="flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="layout-topnav.html#">
          <span class="text-2xl font-semibold text-gray-200 block lg:hidden">
            <!-- <img class="inline-block w-7 h-auto -mt-1" src="src/img/logo.png"> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 -mt-1" viewBox="0 0 300.000000 300.000000"> 
              <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                -687 428 -110 29 -111 28 -153 -37z"/>
                <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                217 -10 16 -14 14 -45 -18z"/>
              </g>
            </svg>
          </span>
          <span class="text-2xl font-semibold text-gray-200 hidden lg:block dark:text-gray-300">
            <!-- <img class="inline-block w-7 h-auto mr-2 -mt-1" src="src/img/logo.png"> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 mr-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
              <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                -687 428 -110 29 -111 28 -153 -37z"/>
                <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                217 -10 16 -14 14 -45 -18z"/>
              </g>
            </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span></span>
        </a>

        <!-- sidenav button-->
        <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 focus:outline-none focus:ring-0 dark:text-gray-300 dark:hover:text-gray-200" aria-controls="desktp-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
          <span class="sr-only">Mobile menu</span>
          <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path class="hidden lg:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="lg:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>

          <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-filter-left" viewBox="0 0 16 16">
            <path class="lg:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="hidden lg:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <!-- <i class="text-2xl fas fa-bars"></i> -->
        </button>

        <!-- Search -->
        <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
          <div class="flex flex-wrap items-stretch w-full relative">
            <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Search…" aria-label="Search">
            <div class="flex -mr-px">
              <button class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <!-- <i class="fas fa-search"></i> -->
              </button>
            </div>
          </div>
        </form>

        <!-- menu -->
        <ul class="flex ltr:ml-auto rtl:mr-auto mt-2 mt-0">
          <!-- Customizer (Only for demo purpose) -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Customizer</span>
              <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>
              <!-- <i class="text-2xl fas fa-cog"></i> -->
            </a>

            <!-- Right Offcanvas -->
            <div class="fixed w-full h-full inset-0 z-50" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;">
              <!-- bg open -->
              <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

              <nav id="mobile-nav" class="flex flex-col ltr:right-0 rtl:left-0 w-72 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40 scrollbars show" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                <div class="p-6 bg-indigo-500 text-gray-100 border-b border-gray-200 dark:border-gray-700">
                  <div class="flex flex-row justify-between">
                    <h3 class="text-md font-bold">Customizer</h3>
                    <button @click="open = false" type="button" class="inline-block w-4 h-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                      <!-- <i class="fas fa-times"></i> -->
                    </Button>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Color Scheme</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="lightdark" id="lightdark" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="lightdark" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Sidebar Color</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="sidecolor" id="sidecolor" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="sidecolor" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Direction</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input  type="checkbox" name="rtlmode" id="rtlmode" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="rtlmode" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">LTR and RTL</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Layout</p>
                  <div class="relative mb-3">
                    <a href="index.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Default</a>
                    <a href="layout-compact.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Compact</a>
                    <a href="layout-topnav.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Topnav</a>
                  </div>
                </div>
                <div id="customcolor" class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Primary Color</p>
                  <div class="relative my-3">
                    <div id="custred" title="red" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-red-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custyellow" title="yellow" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-yellow-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custgreen" title="green" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-green-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custblue" title="blue" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-blue-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpurple" title="purple" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-purple-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpink" title="pink" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-pink-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custindigo" title="reset color" class="inline-block cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg></div>
                  </div>
                </div>
                <div class="pt-6 px-6">
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 p-3 rounded-lg mb-4">
                    <div>
                      How to apply? please read the documentation on <a href="docs/customize.html" class="underline font-semibold">Customize page</a>
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">×</span>
                      <!-- <i class="fas fa-times"></i> -->
                    </button>
                  </div>
                </div>
              </nav>
            </div>
          </li><!-- End Customizer (Only for demo purpose) -->

          <!-- messages -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" id="messages" @click="open = ! open">
              <div class="relative inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                </svg>
                <!-- <i class="text-2xl fas fa-envelope"></i> -->
                <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
              </div>
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Messages</div>
                  <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0">
                    <a @click="open = ! open" href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2" title="Search message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                      <!-- <i class="fas fa-search"></i> -->
                    </a>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white dark:bg-gray-700 z-10 rounded" style="min-width:16rem">
                       <form class="inline-block w-full">
                        <div class="flex flex-wrap items-stretch w-full relative">
                          <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Search messages…" aria-label="Search">
                          <div class="flex -mr-px">
                            <button class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                              <!-- <i class="fas fa-search"></i> -->
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <a href="layout-topnav.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Mark all as read">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-envelope-open" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
                      </svg>
                      <!-- <i class="fas fa-envelope-open"></i> -->
                    </a>
                    <a href="layout-topnav.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                      <!-- <i class="fas fa-edit"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                        <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Daniel Esteban</div>
                      <div class="text-gray-500 text-sm mt-1">What do you think about this project?</div>
                      <div class="text-gray-500 text-sm mt-1">12m ago</div>
                    </div>
                  </div>
                </a>
                <a href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                        <span title="busy" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Carlos Garcia</div>
                      <div class="text-gray-500 text-sm mt-1">Hello, how are you friends?</div>
                      <div class="text-gray-500 text-sm mt-1">30m ago</div>
                    </div>
                  </div>
                </a>
                <a href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Steven Rey</div>
                      <div class="text-gray-500 text-sm mt-1">Thank you for your help today.</div>
                      <div class="text-gray-500 text-sm mt-1">4h ago</div>
                    </div>
                  </div>
                </a>
                <a href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Roman Davis</div>
                      <div class="text-gray-500 text-sm mt-1">Do you have time? I want to call you.</div>
                      <div class="text-gray-500 text-sm mt-1">5h ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="layout-topnav.html#" class="hover:underline">Show all Messages</a>
              </div>
            </div>
          </li>
          
          <!-- notification -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
              <div class="relative inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg>
                <!-- <i class="text-2xl fas fa-bell"></i> -->
                <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">1</span></span>
              </div>
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Notifications</div>
                  <div class="absolute top-0 ltr:right-0 rtl:left-0">
                    <a href="layout-topnav.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Clear all">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                      <!-- <i class="fas fa-trash-alt"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a class="relative" href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-calendar4-event" viewBox="0 0 16 16">
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                          <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-calendar"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Event will coming</div>
                      <div class="text-gray-500 text-sm mt-1">Meeting with Mr.John Navas at:10.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">1h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-thumbs-up"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Daniel</b> like your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">3h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-hdd-stack" viewBox="0 0 16 16">
                          <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-server"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Server maintenance</div>
                      <div class="text-gray-500 text-sm mt-1">Server maintenance at:07.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">8h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="layout-topnav.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-chat-left" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-comment"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Carlos</b> comment in your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">1d ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="layout-topnav.html#" class="hover:underline">Show all Notifications</a>
              </div>
            </div>
          </li>

          <!-- profile -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
              <div class="relative">
                <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="src/img/avatar/avatar.png" alt="avatar">
                <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
              <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center">Ari Budin</span>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width:12rem;display: none;">
              <li class="relative">
                <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                  <div class="flex-shrink max-w-full px-4 w-1/3">
                    <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full" alt="Ari Budin">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                    <div class="font-bold"><a href="layout-topnav.html#" class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari Budin</a></div>
                    <div class="text-gray text-sm mt-1">Professional Front end developer.</div>
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Navbar -->

      <!-- desktop menu -->
      <div x-bind:aria-expanded="open" :class="{ 'block lg:hidden': open, 'hidden lg:flex': !(open) }" class="lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between mt-0 px-6 bg-gray-800 text-gray-400 dark:bg-gray-900" id="desktp-menu">
        <!-- menu -->
        <ul class="flex flex-col lg:ltr:mr-auto lg:rtl:ml-auto mt-3 lg:flex-row lg:mt-0">
          <!-- dropdown -->
          <li class="relative" x-data="{ open: false }"  @keydown.escape.stop="open = false" @click.away="open = false">
            <a id="dropdown-0" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300': open }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-1 rtl:ml-1 bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-home"></i> -->
              Dashboard
              <!-- caret -->
              <span class="inline-block ltr:ml-2 ltr:float-right rtl:mr-2 rtl:float-left mt-1.5 lg:float-none">
                <svg class="transform transition duration-300" xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
              </span>
            </a>
            <!-- dropdown menu -->
            <ul class="block lg:absolute ltr:border-l-2 rtl:border-r-2 border-gray-400 lg:ltr:border-l-0 lg:rtl:border-r-0 lg:border-t-2 lg:border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:bg-white lg:shadow-md lg:text-gray-600 dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-0" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index.html">CMS</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index-analytics.html">Analytics</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index-crm.html">CRM</a>
              </li>
               <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index-ecommerce.html">Ecommerce</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index-projects.html">Projects</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index-hosting.html">Hosting</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative" x-data="{ open: false }"  @keydown.escape.stop="open = false" @click.away="open = false">
            <a id="dropdown-01" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300': open }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-1 rtl:ml-1 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-columns"></i> -->
              Layout
              <!-- caret -->
              <span class="inline-block ltr:ml-2 ltr:float-right rtl:mr-2 rtl:float-left mt-1.5 lg:float-none">
                <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
              </span>
            </a>
            <!-- dropdown menu -->
            <ul class="block lg:absolute ltr:border-l-2 rtl:border-r-2 border-gray-400 lg:ltr:border-l-0 lg:rtl:border-r-0 lg:border-t-2 lg:border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:bg-white lg:shadow-md lg:text-gray-600 dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="index.html">Default</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-compact.html">Compact</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-rtl.html">RTL</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-dark.html">Dark</a>
              </li>
               <li class="relative">
                <a class="text-gray-300 lg:text-indigo-500 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html">Top Navbar</a>
              </li>
            </ul>
          </li>

          <!-- dropdown with submenu-->
          <li class="relative" x-data="{ open: false }"  @keydown.escape.stop="open = false" @click.away="open = false">
            <a id="dropdown-02" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300': open }">
              Dropdown
              <!-- caret -->
              <span class="inline-block ltr:ml-2 ltr:float-right rtl:mr-2 rtl:float-left mt-1.5 lg:float-none">
                <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
              </span>
            </a>
            <!-- dropdown menu -->
            <ul class="block lg:absolute ltr:border-l-2 rtl:border-r-2 border-gray-400 lg:ltr:border-l-0 lg:rtl:border-r-0 lg:border-t-2 lg:border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:bg-white lg:shadow-md lg:text-gray-600 dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
              <!--submenu-->
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                <a id="submenu-01" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="javascript:;"@click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300 lg:text-indigo-500': open }">
                  Dropdown item
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                    <svg :class="{ 'rotate-0 lg:ltr:-rotate-90 lg:rtl:rotate-90': open, 'ltr:-rotate-90 rtl:rotate-90': !(open) }" xmlns="http://www.w3.org/2000/svg" class="transform" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
                  </span>
                </a>

                <!--dropdown submenu-->
                <ul class="block lg:absolute lg:ltr:left-full lg:rtl:right-full lg:ltr:right-auto lg:rtl:left-auto lg:transform ltr:pl-6 rtl:pr-6 lg:ltr:pl-0 lg:rtl:pr-0 lg:border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:-mt-11 ml-0 mr-0 lg:bg-white lg:shadow-md dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="submenu-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                </ul>
              </li><!--end submenu-->

              <!--submenu-->
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                <a id="submenu-02" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="javascript:;"@click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300 lg:text-indigo-500': open }">
                  Dropdown item
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                    <svg :class="{ 'rotate-0 lg:ltr:-rotate-90 lg:rtl:rotate-90': open, 'ltr:-rotate-90 rtl:rotate-90': !(open) }" xmlns="http://www.w3.org/2000/svg" class="transform" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
                  </span>
                </a>

                <!--dropdown submenu-->
                <ul class="block lg:absolute lg:ltr:left-full lg:rtl:right-full lg:ltr:right-auto lg:rtl:left-auto lg:transform ltr:pl-6 rtl:pr-6 lg:ltr:pl-0 lg:rtl:pr-0 lg:border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:-mt-11 ml-0 mr-0 lg:bg-white lg:shadow-md dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="submenu-02" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                  <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown sub item</a></li>
                </ul>
              </li><!--end submenu-->
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown item</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="layout-topnav.html#">Dropdown item</a>
              </li>
            </ul>
          </li>

          <li class="relative">
            <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="layout-topnav.html#">
              About
            </a>
          </li>
          <li class="relative">
            <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="layout-topnav.html#">
              Services
            </a>
          </li>
          <li class="relative">
            <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 focus:text-gray-300" href="layout-topnav.html#">
              Support
            </a>
          </li>
        </ul>

        <!-- button -->
        <div class="text-center lg:block my-6 lg:my-auto">
          <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-300 bg-indigo-500 border border-indigo-500 hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" target="_blank" rel="noopener" href="layout-topnav.html#">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-1 rtl:ml-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"><circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg> Buy Now
          </a>
        </div>
      </div><!-- end desktop menu -->

			<main>
        <div class="mx-auto p-2">
          <!-- row -->
          <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full">   
              <p class="text-xl font-bold mt-3 mb-5">CMS</p>
            </div>
          </div>
          <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full w-full order-2 md:order-1 xl:w-2/3">
              <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-wrap flex-row items-center">
                      <div class="flex-shrink max-w-full w-1/2">
                        <h5 class="text-gray-500 mb-1">Total view</h5>
                        <h3 class="text-lg font-bold mb-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg> 143.210
                        </h3>
                        <p class="text-sm text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path>
                          </svg>
                          46.2%
                        </p>
                      </div>
                      <div class="flex-shrink max-w-full w-1/2">
                        <canvas class="max-w-100" id="LineAreaSm"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-wrap flex-row items-center">
                      <div class="flex-shrink max-w-full w-1/2">
                        <h5 class="text-gray-500 mb-1">Total likes</h5>
                        <h3 class="text-lg font-bold mb-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg> 24.310
                        </h3>
                        <p class="text-sm text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path>
                          </svg>
                          16.2%
                        </p>
                      </div>
                      <div class="flex-shrink max-w-full w-1/2">
                        <canvas class="max-w-100" id="BarChartSm"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-wrap flex-row items-center">
                      <div class="flex-shrink max-w-full w-1/2">
                        <h5 class="text-gray-500 mb-1">Total Comments</h5>
                        <h3 class="text-lg font-bold mb-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg> 54.350
                        </h3>
                        <p class="text-sm text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path>
                          </svg>
                          11.2%
                        </p>
                      </div>
                      <div class="flex-shrink max-w-full w-1/2">
                        <canvas class="max-w-100" id="BarComments"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-wrap flex-row items-center">
                      <div class="flex-shrink max-w-full w-1/2">
                        <h5 class="text-gray-500 mb-1">Total Share</h5>
                        <h3 class="text-lg font-bold mb-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                          </svg> 9.110
                        </h3>
                        <p class="text-sm text-pink-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
                          </svg>
                          6.2%
                        </p>
                      </div>
                      <div class="flex-shrink max-w-full w-1/2">
                        <canvas class="max-w-100" id="BarShare"></canvas>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-row justify-between pb-6">
                      <div class="flex flex-col">
                        <h3 class="text-base font-bold">Visitor traffic</h3>
                      </div>
                      <div x-data="{ open: false }" class="relative">
                        <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                          </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width: 12rem; display: none;">
                          <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="layout-topnav.html#">Daily</a>
                          <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="layout-topnav.html#">Weekly</a>
                          <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="layout-topnav.html#">Monthly</a>
                        </div>
                      </div>
                    </div>
                    <div class="relative">
                      <canvas class="max-w-100" id="PageView"></canvas>
                    </div>
                  </div>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">Most search</h3>
                    </div>
                    <div class="relative w-full text-sm">
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">Tailwind Css</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">Taildash</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">Js</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">CSS</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">HTML</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">UI UX</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">Web Design</a>
                      <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="layout-topnav.html#">Alpine js</a>
                    </div>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">Visitor by Country</h3>
                    </div>
                    <div class="relative overflow-x-auto">
                      <div id="worldmap" class="w-full" style="min-height: 10rem"></div>
                    </div>
                  </div>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">New Followers</h3>
                    </div>
                    <div class="relative">
                      <a href="layout-topnav.html#">
                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar.png" alt="Image Description">
                      </a>
                      <a href="layout-topnav.html#">
                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar2.png" alt="Image Description">
                      </a>
                      <a href="layout-topnav.html#">
                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar3.png" alt="Image Description">
                      </a>
                      <a href="layout-topnav.html#">
                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar4.png" alt="Image Description">
                      </a>
                      <a href="layout-topnav.html#">
                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar5.png" alt="Image Description">
                      </a>

                      <!-- more -->
                      <a href="layout-topnav.html#">
                        <span class="ltr:ml-5 rtl:mr-5 text-sm text-gray-500 font-semibold self-center">+232 more</span>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">Statistics</h3>
                    </div>
                    <div class="relative text-sm">
                      <div class="inline-flex flex-row items-center mb-3 ltr:mr-2 rtl:ml-2">
                        <div class="self-center py-1 px-2 rounded-full bg-transparent sm:bg-indigo-100 text-indigo-500 dark:bg-gray-900 dark:bg-opacity-20 relative flex items-center justify-center">
                          3.122
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center">Articles</h2>
                        </div>
                      </div>

                      <div class="inline-flex flex-row items-center mb-3 ltr:mr-2 rtl:ml-2">
                        <div class="self-center py-1 px-2 rounded-full bg-transparent sm:bg-indigo-100 text-indigo-500 dark:bg-gray-900 dark:bg-opacity-20 relative flex items-center justify-center">
                          654
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center">Tags</h2>
                        </div>
                      </div>

                      <div class="inline-flex flex-row items-center mb-3 ltr:mr-2 rtl:ml-2">
                        <div class="self-center py-1 px-2 rounded-full bg-transparent sm:bg-indigo-100 text-indigo-500 dark:bg-gray-900 dark:bg-opacity-20 relative flex items-center justify-center">
                          142
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center">Categories</h2>
                        </div>
                      </div>

                      <div class="inline-flex flex-row items-center mb-3 ltr:mr-2 rtl:ml-2">
                        <div class="self-center py-1 px-2 rounded-full bg-transparent sm:bg-indigo-100 text-indigo-500 dark:bg-gray-900 dark:bg-opacity-20 relative flex items-center justify-center">
                          32
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center">Pages</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg h-full shadow-lg p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">Status</h3>
                    </div>
                    <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                      <canvas id="GaugeChart" class="max-w-100"></canvas>
                      <div class="absolute ltr:left-1/2 rtl:right-1/2 top-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 translate-y-full">80%</div>
                    </div>
                    <div class="relative text-center">
                      <div class="p-3">
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          Articles: 
                        </div>
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-500"></span> Published 
                        </div>
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span> Draft 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex flex-col pb-6">
                      <h3 class="text-base font-bold">SEO score</h3>
                    </div>
                    <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                      <canvas id="SeoChart" class="max-w-100"></canvas>
                      <div class="absolute ltr:left-1/2 rtl:right-1/2 top-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 translate-y-full">85/100</div>
                    </div>
                    <div class="relative text-center">
                      <div class="p-3">
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span> Bad (0 - 60)
                        </div>
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500"></span> Medium (60+)
                        </div>
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500"></span> Good (80+)
                        </div>
                        <div class="inline-block ltr:mr-2 rtl:ml-2">
                          <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-500"></span> Excelent (90+)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full order-1 md:order-2 xl:w-1/3 mb-6">
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                <div class="flex justify-between mb-3">
                  <a href="layout-topnav.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-plus-lg" viewBox="0 0 16 16">
                      <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                    </svg>Add Post
                  </a>
                  <a href="layout-topnav.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-plus-lg" viewBox="0 0 16 16">
                      <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                    </svg><span class="xl:hidden">Add</span> Pages
                  </a>
                </div>
                
                <div class="hidden-header hidden-sort-after">
                  <table class="table-sorter table-bordered-bottom w-full text-sm ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                      <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                        <th>
                          Title
                        </th>
                        <th>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <title>Total view</title>
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                          </svg>
                        </th>
                        <th>
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                          <title>Total like</title>
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                          </svg>
                        </th>
                        <th>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <title>Total comment</title>
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                          </svg>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How to get started with Tailwind Css ?</a>
                        </td>
                        <td>
                          934
                        </td>
                        <td>
                          136
                        </td>
                        <td>
                          121
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Best Html admin template for Tailwind</a>
                        </td>
                        <td>
                          789
                        </td>
                        <td>
                          132
                        </td>
                        <td>
                          98
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Introducing Tailwind UI/UX Ecommerce</a>
                        </td>
                        <td>
                          629
                        </td>
                        <td>
                          92
                        </td>
                        <td>
                          87
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">The Next Generation of Tailwind CSS</a>
                        </td>
                        <td>
                          609
                        </td>
                        <td>
                          82
                        </td>
                        <td>
                          83
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">W3C TPAC 2021 Exhibition Space opens for registration</a>
                        </td>
                        <td>
                          600
                        </td>
                        <td>
                          90
                        </td>
                        <td>
                          72
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Minecraft Wild Update's Deep Cities Turn It Into A Horror Game</a>
                        </td>
                        <td>
                          529
                        </td>
                        <td>
                          72
                        </td>
                        <td>
                          81
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How Long Is A Day On Mars</a>
                        </td>
                        <td>
                          509
                        </td>
                        <td>
                          62
                        </td>
                        <td>
                          77
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Why The Moon Sequel Isn't Happening</a>
                        </td>
                        <td>
                          500
                        </td>
                        <td>
                          52
                        </td>
                        <td>
                          57
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How Far Away Is It From The Sun?</a>
                        </td>
                        <td>
                          489
                        </td>
                        <td>
                          62
                        </td>
                        <td>
                          66
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars is a cold planet filled with rocks & sand</a>
                        </td>
                        <td>
                          489
                        </td>
                        <td>
                          62
                        </td>
                        <td>
                          57
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Why Mars Has Longer Days Than Earth?</a>
                        </td>
                        <td>
                          329
                        </td>
                        <td>
                          42
                        </td>
                        <td>
                          47
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="layout-topnav.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars Dunes Look Massive In This Stunning Perseverance Photo</a>
                        </td>
                        <td>
                          249
                        </td>
                        <td>
                          32
                        </td>
                        <td>
                          34
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="bg-white dark:bg-gray-800 p-6 shadow-sm">
        <div class="mx-auto">
          <div class="flex flex-wrap flex-row -mx-4">
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:text-left">
              <ul class="pl-0">
                <li class="inline-block mr-3">
                  <a class="hover:text-indigo-500" href="layout-topnav.html#">Support</a>
                </li>
                <li class="inline-block mr-3">
                  <a class="hover:text-indigo-500" href="layout-topnav.html#">Help Center</a>
                </li>
                <li class="inline-block mr-3">
                  <a class="hover:text-indigo-500" href="layout-topnav.html#">Privacy</a>
                </li>
                <li class="inline-block mr-3">
                  <a class="hover:text-indigo-500" href="layout-topnav.html#">Terms of Service</a>
                </li>
              </ul>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:text-right">
              <p class="mb-0 mt-3 md:mt-0">
                <a href="index.html" class="hover:text-indigo-500">Tailnet</a> | All right reserved
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--start::Global javascript (used in all pages)-->
  <script src="vendors/alpinejs/dist/cdn.min.js"></script><!-- core js -->
  <script src="vendors/chart.js/dist/chart.min.js"></script><!-- charts -->
  <script src="vendors/flatpickr/dist/flatpickr.min.js"></script><!-- input date -->
  <script src="vendors/flatpickr/dist/plugins/rangePlugin.js"></script><!-- input range date -->
  <script src="vendors/@yaireo/tagify/dist/tagify.min.js"></script><!-- input tags -->
  <script src="vendors/pristinejs/dist/pristine.min.js"></script><!-- form validation -->
  <script src="vendors/simple-datatables/dist/umd/simple-datatables.js"></script><!--sort table-->
  <script src="vendors/glightbox/dist/js/glightbox.min.js"></script><!-- lightbox image -->
  <script src="vendors/flickity/dist/flickity.pkgd.min.js"></script><!-- slider -->
  <!--end::Global javascript (used in all pages)-->

  <!-- Minify Global javascript (for production purpose) -->
  <!-- <script src="dist/js/scripts.js"></script> -->

  <!--start::Vendor javascript (only on this page)-->
  <script src="vendors/dropzone/dist/min/dropzone.min.js"></script><!-- uploader images -->
  <script src="vendors/simplemde/dist/simplemde.min.js"></script><!-- textarea editor -->
  <script src="vendors/jsvectormap/dist/js/jsvectormap.min.js"></script><!-- vector map -->
  <script src="vendors/jsvectormap/dist/maps/world.js"></script><!-- world vector map -->
  <!--end::Vendor javascript (only on this page)-->

  <!--start::Demo javascript ( initialize global javascript )-->
  <script src="src/js/demo.js"></script>

  <!--start::Call vendor ( initialize vendor javascript )-->
  <script src="src/js/vendor.js"></script>

  <!--start::Customizer js ( Only for demo purpose )-->
  <script src="src/js/customizer.js"></script>
</body>
</html>