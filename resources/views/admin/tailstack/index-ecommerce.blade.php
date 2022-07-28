
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
<html lang="en" dir="ltr">

<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
  <!-- wrapper -->
  <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-gray-800 shadow-sm">
      <div class="h-full overflow-y-auto scrollbars">
        <!--logo-->
        <div class="mh-18 text-center py-5">
          <a href="index-ecommerce.html#" class="relative">
            <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden hidden-compact">
              <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="src/img/logo.png"> -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
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
              </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span>
            <h2 class="text-3xl font-semibold mx-auto logo-compact hidden">
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
            </h2>
          </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{selected:1}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
              <!-- <i class="ltr:mr-2 rtl:ml-2 fas fa-home"></i> -->
              <span>Dashboards</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index.html">CMS</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-analytics.html">Analytics</a>
              </li>
              <li class="relative">
                <a class="text-indigo-500 dark:text-gray-300 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html">Ecommerce</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-projects.html">Projects</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-crm.html">CRM</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-hosting.html">Hosting</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="calendar.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Calendar</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 2 }" @click="selected !== 2 ? selected = 2 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-store"></i> -->
              <span>Ecommerce</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/product.html">Products</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/product-detail.html">Product Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/order.html">Orders</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/order-detail.html">Order Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/customers.html">Customers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/cart.html">Shopping Cart</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/checkout.html">Checkout</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/seller.html">Sellers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/invoice.html">Invoice</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-suitcase"></i> -->
              <span>Projects</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="project/list.html">List</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="project/detail.html">Detail</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="project/kanban.html">Kanban</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="project/create.html">Create</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-file"></i> -->
              <span>Pages</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 4" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
               <a @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="auth" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                  Authentication
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="auth">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/register-basic.html">Register basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/register-cover.html">Register cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/register-ilustration.html">Register ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/login-basic.html">Login basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/login-cover.html">Login cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/login-ilustration.html">Login ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/forgot-password.html">Forgot password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/confirm-email.html">Confirm email</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/change-password.html">Change password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="authentication/logout-page.html">Logout page</a>
                  </li>
                </ul>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-profile.html">Profile</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-service.html">Services</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-faq.html">Faq</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-pricing.html">Pricing</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-maintenance.html">Maintenance</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-404.html">404</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pages-starter.html">Starter</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="landing.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-window-sidebar" viewBox="0 0 16 16">
                <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
              <span>Landing page</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-columns"></i> -->
              <span>Layout</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-sidedark.html">Side Dark</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-dark.html">Dark mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-rtl.html">RTL mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-compact.html">Compact</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-topnav.html">Top Navbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="layout-preloader.html">Preloader</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layers" viewBox="0 0 16 16">
                <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-layer-group"></i> -->
              <span>Components</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/accordion.html">Accordion</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/alerts.html">Alerts</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/avatar.html">Avatar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/badge.html">Badge</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/breadcrumb.html">Breadcrumb</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/buttons.html">Buttons</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/card.html">Card</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/carousel.html">Carousel</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/collapse.html">Collapse</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/devices.html">Devices</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/dropdowns.html">Dropdowns</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/grid.html">Grid</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/list-group.html">List Group</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/lightbox.html">Lightbox</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/map.html">Map</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/modal.html">Modal</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/navbar.html">Navbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/notification.html">Notification</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/offcanvas.html">Offcanvas</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/pagination.html">Pagination</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/popovers.html">Popovers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/progress.html">Progress</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/ribbon.html">Ribbon</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/scrollbar.html">Scrollbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/spinners.html">Spinners</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/sweetalert.html">Sweet alert</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/tabs.html">Tabs</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="components/tooltips.html">Tooltips</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="widgets.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
                <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
              <span>Widgets</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 7 }" @click="selected !== 7 ? selected = 7 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-card-list" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-list-alt"></i> -->
              <span>Forms</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 7" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/basic.html">Basic Form</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/datepicker.html">Datepicker</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/editor.html">Editor</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/input-tags.html">Input tags</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/uploader.html">Uplader</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/validation.html">Validation</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="forms/layout.html">Layout</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 8 }" @click="selected !== 8 ? selected = 8 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-blockquote-right" viewBox="0 0 16 16">
                <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm10.113-5.373a6.59 6.59 0 0 0-.445-.275l.21-.352c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.326-.182.569-.182h.281a1.686 1.686 0 0 0-.123-.498 1.379 1.379 0 0 0-.252-.37 1.94 1.94 0 0 0-.346-.298zm-2.168 0A6.59 6.59 0 0 0 10 6.352L10.21 6c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.327-.182.569-.182h.281a1.749 1.749 0 0 0-.117-.492 1.402 1.402 0 0 0-.258-.375 1.94 1.94 0 0 0-.346-.3z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-file-alt"></i> -->
              <span>Content</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 8" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="content/typography.html">Typography</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="content/tables.html">Tables</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="content/images.html">Images</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="content/embed-video.html">Embed video</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="content/icons.html">Icons</a>
              </li>
            </ul>
          </li>

          <li class="relative">
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="charts.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-chart-bar"></i> -->
              <span>Charts</span>
            </a>
          </li>

          <li class="relative">
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="file-manager.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-folder"></i> -->
              <span>File Manager</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 9 }" @click="selected !== 9 ? selected = 9 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi  bi-file-text" viewBox="0 0 16 16">
                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-book"></i> -->
              <span>Documentation</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 9" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/introduction.html">Introduction</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/tools.html">Tools</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/customize.html">Customize</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/rtl.html">RTL Direction</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/credits.html">Credits</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="docs/changelog.html">Changelog</a>
              </li>
            </ul>
          </li>
          
          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 10 }" @click="selected !== 10 ? selected = 10 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-list-nested" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-stream"></i> -->
             <span>Multi Level</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }"></i> -->
              </span>
            </a>
            <ul x-show="selected == 10" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
               <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-91" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                  Second Level
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-91">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html#">Item 1</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html#">Item 2</a>
                  </li>
                </ul>
              </li>
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-92" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                  Third Level
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-92">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html#">Item 1</a>
                  </li>
                  <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                    <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-93" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                      <span> Item 2 </span>
                      <!-- caret -->
                      <span class="inline-block ltr:float-right rtl:float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                      </span>
                    </a>
                    <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-93">
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html#">Item 2.1</a>
                      </li>
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index-ecommerce.html#">Item 2.2</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Banner -->
        <div class="px-4 box-banner">
          <div class="my-8 p-4 text-center bg-gray-300 dark:bg-gray-700 bg-opacity-50 rounded-lg">
            <h4 class="font-bold inline-block mb-2">Sales Report</h4>
            <div class="mb-3 text-sm">
              Monthly sales report is ready for download!
            </div>

            <div class="grid">
              <a href="index-ecommerce.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" target="_blank">Download</a>
            </div>
          </div>
        </div><!-- end banner -->
      </div>
    </nav>

    <div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
      <!-- Navbar -->
      <nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }" class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 px-6 bg-white dark:bg-gray-800 shadow-sm transition-all duration-500 ease-in-out" id="desktop-menu">
        <!-- sidenav button-->
        

        <!-- Search -->
        

        <!-- menu -->
        <ul class="flex ltr:ml-auto rtl:mr-auto mt-2 mt-0">
         

          <!-- messages -->
          <li x-data="{ open: false }" class="relative">
            

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Messages</div>
                  <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0">
                    
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white dark:bg-gray-700 z-10 rounded" style="min-width:16rem">
                       
                    </div>
                    <a href="index-ecommerce.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Mark all as read">
                      
                      <!-- <i class="fas fa-envelope-open"></i> -->
                    </a>
                    <a href="index-ecommerce.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                      
                      <!-- <i class="fas fa-edit"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a href="index-ecommerce.html#">
                  
                </a>
                <a href="index-ecommerce.html#">
                  
                </a>
                <a href="index-ecommerce.html#">
                  
                </a>
                <a href="index-ecommerce.html#">
                  
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="index-ecommerce.html#" class="hover:underline">Show all Messages</a>
              </div>
            </div>
          </li>
          
          <!-- notification -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
              
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Notifications</div>
                  <div class="absolute top-0 ltr:right-0 rtl:left-0">
                    <a href="index-ecommerce.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Clear all">
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
                <a class="relative" href="index-ecommerce.html#">
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
                <a class="relative" href="index-ecommerce.html#">
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
                <a class="relative" href="index-ecommerce.html#">
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
                <a class="relative" href="index-ecommerce.html#">
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
                <a href="index-ecommerce.html#" class="hover:underline">Show all Notifications</a>
              </div>
            </div>
          </li>

          <!-- profile -->
          <li x-data="{ open: false }" class="relative">
            
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width:12rem;display: none;">
              <li class="relative">
                <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                  
                  <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                    <div class="font-bold"><a href="index-ecommerce.html#" ">Ari Budin</a></div>
                    
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="index-ecommerce.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="index-ecommerce.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="index-ecommerce.html#">
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
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="index-ecommerce.html#">
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

      <main class="pt-20 -mt-2">
				<div class="mx-auto p-2">
					<!-- row -->
					<div class="flex flex-wrap flex-row">
						<div class="flex-shrink max-w-full px-4 w-full">   
					    <p class="text-xl font-bold mt-3 mb-5">Ecommerce</p>
					  </div>                                                    
          	<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
          		<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
							  <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
							  	Total Orders 
							  	<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-green-500">
							  		+12%
							  		<div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
									    <div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									      Since last month
									    </div>
									    <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
									  </div>
							  	</div>
							  </div>
							  <div class="flex flex-row justify-between px-6 py-4">
							  	<div class="self-center w-14 h-14 rounded-full text-pink-500 bg-pink-100 dark:bg-pink-900 dark:bg-opacity-40 relative text-center">
								  	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-cart3" viewBox="0 0 16 16">
										  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
										</svg>
									</div>
							    <h2 class="self-center text-3xl">421</h2>
							  </div>
							  <div class="px-6 pb-6">
							  	<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
							  </div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
          		<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
							  <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
							  	Total Sales 
							  	<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-green-500">
							  		+15%
							  		<div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
									    <div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									      Since last month
									    </div>
									    <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
									  </div>
							  	</div>
							  </div>
							  <div class="flex flex-row justify-between px-6 py-4">
							  	<div class="self-center w-14 h-14 rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:bg-opacity-40 relative text-center">
								  	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-credit-card" viewBox="0 0 16 16">
										  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
										  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
										</svg>
									</div>
							    <h2 class="self-center text-3xl"><span>$</span>31K</h2>
							  </div>
							  <div class="px-6 pb-6">
							  	<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
							  </div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
          		<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
							  <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
							  	New Customers
							  	<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-pink-500">
							  		-5%
							  		<div class="absolute top-auto bottom-full mb-3" x-cloak x-show.transition.origin.top="tooltips">
									    <div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									      Since last month
									    </div>
									    <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
									  </div>
							  	</div>
							  </div>
							  <div class="flex flex-row justify-between px-6 py-4">
							  	<div class="self-center w-14 h-14 rounded-full text-green-500 bg-green-100 dark:bg-green-900 dark:bg-opacity-40 relative text-center">
								  	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-person" viewBox="0 0 16 16">
										  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
										</svg>
									</div>
							    <h2 class="self-center text-3xl">1.2K</h2>
							  </div>
							  <div class="px-6 pb-6">
							  	<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
							  </div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
          		<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
							  <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
							  	Users Online <span class="ltr:float-right rtl:float-left w-2 h-2 rounded-full bg-green-500 mt-1 animate-pulse"></span>
							  </div>
							  <div class="flex flex-row justify-between px-6 py-4">
							  	<div class="self-center w-14 h-14 rounded-full text-indigo-500 bg-indigo-100 dark:bg-indigo-900 dark:bg-opacity-40 relative text-center">
								  	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-people" viewBox="0 0 16 16">
										  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
										</svg>
									</div>
							    <h2 class="self-center text-3xl">602</h2>
							  </div>
							  <div class="px-6 pb-6">
							  	<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
							  </div>
							</div>
						</div>                                                            
					</div>

					<!-- row -->
					<div class="flex flex-wrap flex-row">                                                  
          	<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
          		<!-- visitor -->
          		<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
          			<div class="flex flex-row justify-between pb-6">
								  <div class="flex flex-col">
		                <h3 class="text-base font-bold">Monthly Sales</h3>
		                <span class="text-gray-500 text-sm">Monthly Traffic and Sales</span>
		              </div>
		              <div x-data="{ open: false }" class="relative">
			              <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Daily</a>
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Weekly</a>
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Yearly</a>
                    </div>
                  </div>
		            </div>
	              <div class="relative">
			            <canvas class="max-w-100" id="BarChart"></canvas>
	              </div>
							</div>

              <!-- Paid ads -->
              <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
	              <div class="relative">
			            <table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
	                  <thead>
	                    <tr class="border-b dark:border-gray-700">
	                      <th>
	                        Platform
	                      </th>
	                      <th>
	                        Visitors
	                      </th>
	                      <th>
	                        Ads budget
	                      </th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
	                      <td>
	                        Facebook Ads
	                      </td>
	                      <td>
	                        1,520
	                      </td>
	                      <td>
	                        <div class="flex items-center">
	                          <span class="ltr:mr-2 rtl:ml-2">78%</span>
	                          <div class="relative w-full">
	                            <div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
	                              <div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td>
	                        Google Ads
	                      </td>
	                      <td>
	                        980
	                      </td>
	                      <td>
	                        <div class="flex items-center">
	                          <span class="ltr:mr-2 rtl:ml-2">65%</span>
	                          <div class="relative w-full">
	                            <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
	                              <div style="width:65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td>
	                        Microsoft Ads
	                      </td>
	                      <td>
	                        540
	                      </td>
	                      <td>
	                        <div class="flex items-center">
	                          <span class="ltr:mr-2 rtl:ml-2">55%</span>
	                          <div class="relative w-full">
	                            <div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
	                              <div style="width:55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td>
	                        Tiktok Ads
	                      </td>
	                      <td>
	                        350
	                      </td>
	                      <td>
	                        <div class="flex items-center">
	                          <span class="ltr:mr-2 rtl:ml-2">40%</span>
	                          <div class="relative w-full">
	                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-400">
	                              <div style="width:40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-700">
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                  </tbody>
	                </table>
	              </div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
          		<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          			<div class="flex flex-row justify-between pb-6">
								  <div class="flex flex-col">
		                <h3 class="text-base font-bold">Traffic Source</h3>
		                <span class="text-gray-500 text-sm">Monthly traffic source</span>
		              </div>
		              <div x-data="{ open: false }" class="relative">
			              <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Daily</a>
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Weekly</a>
                      <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Yearly</a>
                    </div>
                  </div>
		            </div>
	              <div class="relative mx-auto text-center w-full sm:w-2/3 lg:w-full">
			            <canvas class="max-w-100" id="DoughnutChart"></canvas>
	              </div>
							</div>
						</div>
					</div>

					<!-- row -->
					<div class="flex flex-wrap flex-row">
					  <!-- revenue -->                                                  
          	<div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
          		<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          			<div class="flex flex-row justify-between pb-6">
								  <div class="flex flex-col">
		                <h3 class="text-base font-bold">Revenue</h3>
		                <span class="text-gray-500 font-semibold text-sm">Today's Earning: <span class="text-green-500">$1,570.30</span></span>
		              </div>
		            </div>
	              <div class="relative">
			            <canvas class="max-w-100" id="LineChart"></canvas>
	              </div>
							</div>
						</div>
            <!-- product -->
						<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
          		<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
							  <div class="mb-2">
							  	<table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
	                  <thead>
	                    <tr class="border-b dark:border-gray-700">
	                      <th>
	                        Best Seller
	                      </th>
	                      <th>
	                        Sales
	                      </th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
	                      <td>
	                      	<a href="index-ecommerce.html#" class="hover:text-indigo-500">
		                        <div class="flex items-center">
		                          <div class="flex-shrink-0 h-10 w-10">
		                            <img class="h-10 w-10 rounded-full" src="src/img/products/product1.jpg" alt="product images">
		                          </div>
		                          <div class="ltr:ml-4 rtl:mr-4">
		                            <div class="leading-5">
		                              Nike Women's Race Running Shoe
		                            </div>
		                            <div class="text-xs leading-5 text-gray-500">
		                              Women shoes
		                            </div>
		                          </div>
		                        </div>
		                      </a>
	                      </td>
	                      <td>
	                        <div class="leading-5 text-green-700">$4,345</div>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td>
	                      	<a href="index-ecommerce.html#" class="hover:text-indigo-500">
		                        <div class="flex items-center">
		                          <div class="flex-shrink-0 h-10 w-10">
		                            <img class="h-10 w-10 rounded-full" src="src/img/products/product2.jpg" alt="product images">
		                          </div>
		                          <div class="ltr:ml-4 rtl:mr-4">
		                            <div class="leading-5">
		                              Nike Womens Free RN Flyknit 2018
		                            </div>
		                            <div class="text-xs leading-5 text-gray-500">
		                              Women shoes
		                            </div>
		                          </div>
		                        </div>
		                      </a>
	                      </td>
	                      <td>
	                        <div class="leading-5 text-green-700">$3,235</div>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td>
	                      	<a href="index-ecommerce.html#" class="hover:text-indigo-500">
		                        <div class="flex items-center">
		                          <div class="flex-shrink-0 h-10 w-10">
		                            <img class="h-10 w-10 rounded-full" src="src/img/products/product3.jpg" alt="product images">
		                          </div>
		                          <div class="ltr:ml-4 rtl:mr-4">
		                            <div class="leading-5">
		                              Nike Women's Sneaker Running Shoes
		                            </div>
		                            <div class="text-xs leading-5 text-gray-500">
		                              Women shoes
		                            </div>
		                          </div>
		                        </div>
		                      </a>
	                      </td>
	                      <td>
	                        <div class="leading-5 text-green-700">$1,545</div>
	                      </td>
	                    </tr>
                      <tr>
                        <td>
                          <a href="index-ecommerce.html#" class="hover:text-indigo-500">
                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="src/img/products/product4.jpg" alt="product images">
                              </div>
                              <div class="ltr:ml-4 rtl:mr-4">
                                <div class="leading-5">
                                  Nike Women's Gymnastics Tennis Shoes
                                </div>
                                <div class="text-xs leading-5 text-gray-500">
                                  Women shoes
                                </div>
                              </div>
                            </div>
                          </a>
                        </td>
                        <td>
                          <div class="leading-5 text-green-700">$1,045</div>
                        </td>
                      </tr>
	                  </tbody>
	                </table>
							  </div>
							</div>
						</div>
					</div>

					<!-- row -->
					<div class="flex flex-wrap flex-row">                                                  
          	<div class="flex-shrink max-w-full px-4 w-full mb-6">
          		<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          			<div class="flex flex-row justify-between pb-2">
								  <div class="flex flex-col">
		                <h3 class="text-base font-bold">Latest Orders</h3>
		              </div>
		            </div>
          			<div class="overflow-x-auto">
	                <table class="table-sorter table-bordered-bottom w-full text-gray-500 dark:text-gray-400">
	                  <thead>
	                    <tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
	                    	<th>
	                        Order ID
	                      </th>
	                      <th class="hidden lg:table-cell">
	                        Customer
	                      </th>
	                      <th>
	                        Status
	                      </th>
	                      <th class="hidden lg:table-cell">
	                        Date Added
	                      </th>
	                      <th>
	                        Total
	                      </th>
	                      <th data-sortable="false">
	                        Action
	                      </th>
	                    </tr>
	                  </thead>
	                  <tbody class="text-sm">
	                    <tr>
	                    	<td>
	                        <div class="leading-5 uppercase">#inv12637</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              John Thomas
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, USA
                            </div>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-pink-100 text-pink-700 dark:bg-opacity-80 rounded-full">Paid</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="leading-5">May 09, 2025</div>
	                      </td>
	                      <td>
	                        <div class="leading-5 font-bold text-green-700">$79</div>
	                      </td>
	                      <td class="text-center">
	                        <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
	                        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
														</svg>
	                        </a>
	                      </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                        <div class="leading-5 uppercase">#inv12636</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Daniel
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              San Francisco, USA
                            </div>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-purple-100 text-purple-700 dark:bg-opacity-80 rounded-full">Processing</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="leading-5">May 09, 2025</div>
	                      </td>
	                      <td>
	                        <div class="leading-5 font-bold text-green-700">$119</div>
	                      </td>
	                      <td class="text-center">
	                        <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
	                        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
														</svg>
	                        </a>
	                      </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                        <div class="leading-5 uppercase">#inv12635</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Vinjay Khan
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              New Delhi, India
                            </div>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-opacity-80 rounded-full">Packing</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="leading-5">May 09, 2025</div>
	                      </td>
	                      <td>
	                        <div class="leading-5 font-bold text-green-700">$58</div>
	                      </td>
	                      <td class="text-center">
	                        <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
	                        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
														</svg>
	                        </a>
	                      </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                        <div class="leading-5 uppercase">#inv12634</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              David Arya
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              Jakarta, Indonesia
                            </div>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">Shipped</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="leading-5">May 09, 2025</div>
	                      </td>
	                      <td>
	                        <div class="leading-5 font-bold text-green-700">$79</div>
	                      </td>
	                      <td class="text-center">
	                        <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
	                        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
														</svg>
	                        </a>
	                      </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                        <div class="leading-5 uppercase">#inv12633</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              William Stone
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              London, UK
                            </div>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
	                      </td>
	                      <td class="hidden lg:table-cell">
	                        <div class="leading-5">May 09, 2025</div>
	                      </td>
	                      <td>
	                        <div class="leading-5 font-bold text-green-700">$158</div>
	                      </td>
	                      <td class="text-center">
	                        <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
	                        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
														</svg>
	                        </a>
	                      </td>
	                    </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12632</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Danile
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$128</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12631</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Romano
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$98</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12630</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Yonanda
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$138</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12629</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Danile
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$128</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12628</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Romano
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$98</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12627</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Yonanda
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$138</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12626</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Danile
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$128</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12625</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Romano
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$98</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="leading-5 uppercase">#inv12624</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="flex flex-wrap flex-row items-center">
                            <div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                              Yonanda
                            </div>
                            <div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
                              California, US
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
                        </td>
                        <td class="hidden lg:table-cell">
                          <div class="leading-5">May 08, 2025</div>
                        </td>
                        <td>
                          <div class="leading-5 font-bold text-green-700">$138</div>
                        </td>
                        <td class="text-center">
                          <a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </a>
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
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-left md:rtl:text-right">
              <ul class="ltr:pl-0 rtl:pr-0">
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index-ecommerce.html#">Support</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index-ecommerce.html#">Help Center</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index-ecommerce.html#">Privacy</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index-ecommerce.html#">Terms of Service</a>
                </li>
              </ul>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-right md:rtl:text-left">
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

  <!--start::Demo javascript ( initialize global javascript )-->
  <script src="src/js/demo.js"></script>

  <!--start::Customizer js ( Only for demo purpose )-->
  <script src="src/js/customizer.js"></script>
</body>
</x-admin-layout>