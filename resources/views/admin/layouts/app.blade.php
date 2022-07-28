<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- Development css (used in all pages) -->
  <link rel="stylesheet" id="stylesheet" href="{{ ('/css/style.css') }}">
  <!-- Production css (used in all pages) -->
  <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

  <!--start::Customizer Stylesheets (Only for demo purpose)-->
  <link rel="stylesheet" href="{{ ('/css/customizer.css') }}">
  <!--end::Customizer Stylesheets (Only for demo purpose)-->

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="{{ ('/img/favicon.png') }}">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
    <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
            @include('admin.layouts.navigation')
            @include('admin.layouts.Sidebar')



            <!-- Page Heading -->
            <!-- <header class="bg-white shadow">
                <div class="flex flex-wrap flex-row">
                    {{ $header }}
                </div>
            </header> -->

            <div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
            <main class="pt-20 -mt-2">
                {{ $slot }}
            </main>
            @include('admin.layouts.footer')
        </div>
            <!-- Page Content -->
            
        </div>
    </body>
</html>
