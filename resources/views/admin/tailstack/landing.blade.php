<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <main id="content">
        <!-- =========={ Hero }==========  -->
        <div id="hero" class="relative z-0 pt-32 lg:pt-36 pb-20 text-gray-300 bg-indigo-600 bg-gradient-to-r from-indigo-800 via-indigo-700 to-green-500 dark:from-gray-800 dark:via-gray-700 dark:to-green-700 overflow-hidden">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- hero content -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:ltr:pr-12 lg:rtl:pl-12">
                        <div class="text-center lg:ltr:text-left lg:rtl:text-right mt-6 lg:mt-0">
                            <div class="mb-8">
                                <h1 class="text-white text-4xl leading-normal mb-3 font-bold">Taildash is Tailwind Css
                                    dashboard template</h1>
                                <p class="text-gray-400 leading-relaxed font-light text-xl mx-auto pb-2">Tailwind
                                    dashboard come with popular tools like npm, gulp and browsersync. Very simple and
                                    easy to use.</p>
                            </div>
                            <a class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-700 bg-gray-300 border border-gray-300  hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-4" href="landing.html#features">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg>Our Features
                            </a>
                        </div>
                    </div>

                    <!-- hero image -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center">
                        <div class="px-12 md:ml-16 md:pr-0 mt-4">
                            <img src="/img/svg/meeting.svg" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end hero -->

        <!-- =========={ features }==========  -->
        <div id="features" class="relative pt-14 pb-2 md:pt-16 md:pb-4 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">Our</span> Features</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Clean and well commented
                        code allows easy customization of the theme even for beginners.</p>
                </header><!-- end section header -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg viewBox="0 0 48 31" class="h-8">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.517 0C18.712 0 14.46 3.382 12.758 10.146c2.552-3.382 5.529-4.65 8.931-3.805 1.941.482 3.329 1.882 4.864 3.432 2.502 2.524 5.398 5.445 11.722 5.445 6.804 0 11.057-3.382 12.758-10.145-2.551 3.382-5.528 4.65-8.93 3.804-1.942-.482-3.33-1.882-4.865-3.431C34.736 2.92 31.841 0 25.517 0zM12.758 15.218C5.954 15.218 1.701 18.6 0 25.364c2.552-3.382 5.529-4.65 8.93-3.805 1.942.482 3.33 1.882 4.865 3.432 2.502 2.524 5.397 5.445 11.722 5.445 6.804 0 11.057-3.381 12.758-10.145-2.552 3.382-5.529 4.65-8.931 3.805-1.941-.483-3.329-1.883-4.864-3.432-2.502-2.524-5.398-5.446-11.722-5.446z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Latest Tailwind Css</h3>
                            <p>Supports latest version of tailwind css with alpine.js</p>
                        </div> <!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-tablet" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Responsive Design</h3>
                            <p>Responsive designed with mobile first, supported in any device</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 256 512">
                                    <path d="M209.8 391.1l-14.1 24.6-4.6 80.2c0 8.9-28.3 16.1-63.1 16.1s-63.1-7.2-63.1-16.1l-5.8-79.4-14.9-25.4c41.2 17.3 126 16.7 165.6 0zm-196-253.3l13.6 125.5c5.9-20 20.8-47 40-55.2 6.3-2.7 12.7-2.7 18.7.9 5.2 3 9.6 9.3 10.1 11.8 1.2 6.5-2 9.1-4.5 9.1-3 0-5.3-4.6-6.8-7.3-4.1-7.3-10.3-7.6-16.9-2.8-6.9 5-12.9 13.4-17.1 20.7-5.1 8.8-9.4 18.5-12 28.2-1.5 5.6-2.9 14.6-.6 19.9 1 2.2 2.5 3.6 4.9 3.6 5 0 12.3-6.6 15.8-10.1 4.5-4.5 10.3-11.5 12.5-16l5.2-15.5c2.6-6.8 9.9-5.6 9.9 0 0 10.2-3.7 13.6-10 34.7-5.8 19.5-7.6 25.8-7.6 25.8-.7 2.8-3.4 7.5-6.3 7.5-1.2 0-2.1-.4-2.6-1.2-1-1.4-.9-5.3-.8-6.3.2-3.2 6.3-22.2 7.3-25.2-2 2.2-4.1 4.4-6.4 6.6-5.4 5.1-14.1 11.8-21.5 11.8-3.4 0-5.6-.9-7.7-2.4l7.6 79.6c2 5 39.2 17.1 88.2 17.1 49.1 0 86.3-12.2 88.2-17.1l10.9-94.6c-5.7 5.2-12.3 11.6-19.6 14.8-5.4 2.3-17.4 3.8-17.4-5.7 0-5.2 9.1-14.8 14.4-21.5 1.4-1.7 4.7-5.9 4.7-8.1 0-2.9-6-2.2-11.7 2.5-3.2 2.7-6.2 6.3-8.7 9.7-4.3 6-6.6 11.2-8.5 15.5-6.2 14.2-4.1 8.6-9.1 22-5 13.3-4.2 11.8-5.2 14-.9 1.9-2.2 3.5-4 4.5-1.9 1-4.5.9-6.1-.3-.9-.6-1.3-1.9-1.3-3.7 0-.9.1-1.8.3-2.7 1.5-6.1 7.8-18.1 15-34.3 1.6-3.7 1-2.6.8-2.3-6.2 6-10.9 8.9-14.4 10.5-5.8 2.6-13 2.6-14.5-4.1-.1-.4-.1-.8-.2-1.2-11.8 9.2-24.3 11.7-20-8.1-4.6 8.2-12.6 14.9-22.4 14.9-4.1 0-7.1-1.4-8.6-5.1-2.3-5.5 1.3-14.9 4.6-23.8 1.7-4.5 4-9.9 7.1-16.2 1.6-3.4 4.2-5.4 7.6-4.5.6.2 1.1.4 1.6.7 2.6 1.8 1.6 4.5.3 7.2-3.8 7.5-7.1 13-9.3 20.8-.9 3.3-2 9 1.5 9 2.4 0 4.7-.8 6.9-2.4 4.6-3.4 8.3-8.5 11.1-13.5 2-3.6 4.4-8.3 5.6-12.3.5-1.7 1.1-3.3 1.8-4.8 1.1-2.5 2.6-5.1 5.2-5.1 1.3 0 2.4.5 3.2 1.5 1.7 2.2 1.3 4.5.4 6.9-2 5.6-4.7 10.6-6.9 16.7-1.3 3.5-2.7 8-2.7 11.7 0 3.4 3.7 2.6 6.8 1.2 2.4-1.1 4.8-2.8 6.8-4.5 1.2-4.9.9-3.8 26.4-68.2 1.3-3.3 3.7-4.7 6.1-4.7 1.2 0 2.2.4 3.2 1.1 1.7 1.3 1.7 4.1 1 6.2-.7 1.9-.6 1.3-4.5 10.5-5.2 12.1-8.6 20.8-13.2 31.9-1.9 4.6-7.7 18.9-8.7 22.3-.6 2.2-1.3 5.8 1 5.8 5.4 0 19.3-13.1 23.1-17 .2-.3.5-.4.9-.6.6-1.9 1.2-3.7 1.7-5.5 1.4-3.8 2.7-8.2 5.3-11.3.8-1 1.7-1.6 2.7-1.6 2.8 0 4.2 1.2 4.2 4 0 1.1-.7 5.1-1.1 6.2 1.4-1.5 2.9-3 4.5-4.5 15-13.9 25.7-6.8 25.7.2 0 7.4-8.9 17.7-13.8 23.4-1.6 1.9-4.9 5.4-5 6.4 0 1.3.9 1.8 2.2 1.8 2 0 6.4-3.5 8-4.7 5-3.9 11.8-9.9 16.6-14.1l14.8-136.8c-30.5 17.1-197.6 17.2-228.3.2zm229.7-8.5c0 21-231.2 21-231.2 0 0-8.8 51.8-15.9 115.6-15.9 9 0 17.8.1 26.3.4l12.6-48.7L228.1.6c1.4-1.4 5.8-.2 9.9 3.5s6.6 7.9 5.3 9.3l-.1.1L185.9 74l-10 40.7c39.9 2.6 67.6 8.1 67.6 14.6zm-69.4 4.6c0-.8-.9-1.5-2.5-2.1l-.2.8c0 1.3-5 2.4-11.1 2.4s-11.1-1.1-11.1-2.4c0-.1 0-.2.1-.3l.2-.7c-1.8.6-3 1.4-3 2.3 0 2.1 6.2 3.7 13.7 3.7 7.7.1 13.9-1.6 13.9-3.7z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Modern Tools</h3>
                            <p>Coming with modern tools like npm, gulp and browsersync</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-braces" viewBox="0 0 16 16">
                                    <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">Clean
                                Code</h3>
                            <p>The indentation code is neatly written and well commented on</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-circle-square" viewBox="0 0 16 16">
                                    <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"></path>
                                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">Svg
                                and Font Icons</h3>
                            <p>Using the default svg icon and the icon font as an alternative</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div class="p-6 mb-12 shadow-lg rounded-lg bg-white dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 512 512">
                                    <line x1="48" y1="112" x2="336" y2="112" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <line x1="192" y1="64" x2="192" y2="112" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <polyline points="272 448 368 224 464 448" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </polyline>
                                    <line x1="301.5" y1="384" x2="434.5" y2="384" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <path d="M281.3,112S257,206,199,277,80,384,80,384" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                    <path d="M256,336s-35-27-72-75-56-85-56-85" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">RTL
                                Supported</h3>
                            <p>Supports RTL Direction for Arabic or Persian site developers</p>
                        </div><!-- end service block -->
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- End features -->

        <!-- =========={ about }==========  -->
        <div id="about-us" class="relative pt-14 md:pt-16 bg-gray-50 dark:bg-gray-800">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">About</span> Taildash</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 relative">
                        <div class="pb-8 px-3 text-center">
                            <img class="mx-auto max-w-full h-auto" src="/img/svg/website.svg" alt="company profile">
                        </div>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2">
                        <div class="pb-8 px-3">
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3">Tailwind admin template with
                                flat design and fast loading. This template is perfect for make awesome dasboard admin
                                for your site.</p>
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-12">Comes with a variety of
                                ready-to-use pages that help to speed up the development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End about-->

        <!-- =========={ demo }==========  -->
        <div id="demo" class="relative pt-14 pb-4 md:pt-16 md:pb-6 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">Layout</span> Preview</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">There are three layout
                        options that you can use.</p>
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink w-full max-w-full px-4 md:w-1/2 mb-12">
                        <div x-data="{ tabs: 3 }" class="px-2 text-center">
                            <p class="mb-2">Theme Skin</p>
                            <!-- button group -->
                            <div class="flex inline-flex mb-4" role="group">
                                <button @click="tabs = 1" :class="{ 'bg-indigo-600': tabs === 1 }" type="button" class="rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-sun" viewBox="0 0 16 16">
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>Light
                                </button>
                                <button @click="tabs = 2" :class="{ 'bg-indigo-600': tabs === 2 }" type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-moon" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    </svg>Dark
                                </button>
                                <button @click="tabs = 3" :class="{ 'bg-indigo-600': tabs === 3 }" type="button" class="rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-moon" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    </svg>Sidedark
                                </button>
                            </div>
                            <div x-show="tabs === 1" class="relative">
                                <a target="_blank" href="index.html">
                                    <img src="/img/demo/light.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-dark.html">
                                    <img src="/img/demo/dark.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-sidedark.html">
                                    <img src="/img/demo/sidedark.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink w-full max-w-full px-4 md:w-1/2 mb-12">
                        <div x-data="{ tabs: 1 }" class="px-2 text-center">
                            <p class="mb-2">Layout</p>
                            <!-- button group -->
                            <div class="flex inline-flex mb-4" role="group">
                                <button @click="tabs = 1" :class="{ 'bg-indigo-600': tabs === 1 }" type="button" class="rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    Compact
                                </button>
                                <button @click="tabs = 2" :class="{ 'bg-indigo-600': tabs === 2 }" type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    Topnav
                                </button>
                                <button @click="tabs = 3" :class="{ 'bg-indigo-600': tabs === 3 }" type="button" class="rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    RTL
                                </button>
                            </div>
                            <div x-show="tabs === 1" class="relative">
                                <a target="_blank" href="layout-compact.html">
                                    <img src="/img/demo/compact.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-topnav.html">
                                    <img src="/img/demo/top-navbar.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-rtl.html">
                                    <img src="/img/demo/rtl.jpg" class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700" alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End demo-->

        <!-- =========={ PRICING }==========  -->
        <div id="pricing" class="relative py-14 md:py-16 bg-gray-50 dark:bg-gray-800">
            <div x-data="{ open: false }" class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">Our</span> Pricing</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">No additional costs. Pay
                        only one time and free for next update!</p>
                </header><!-- end section header -->

                <div class="pt-6">
                    <div class="flex flex-wrap flex-row -mx-4 justify-center">
                        <div class="flex-shrink max-w-full w-full sm:w-11/12 md:w-1/2 lg:w-1/3 px-4">
                            <div class="px-6 md:px-2 lg:px-4">
                                <!-- pricing table -->
                                <div class="relative py-16 px-12 mb-12 lg:-mt-6 bg-white dark:bg-gray-900 dark:bg-opacity-40 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                    <!-- ribbon -->
                                    <div class="absolute top-0 ltr:right-0 ltr:text-right rtl:left-0 rtl:text-left w-36 h-36 text-sm">
                                        <span class="absolute top-4 ltr:right-0 rtl:left-0 px-4 py-2 block align-center shadow bg-indigo-500 text-gray-100">Popular</span>
                                    </div>
                                    <!-- pricing title -->
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Single</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>25</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>1 End products</li>
                                        <li>Personal or client</li>
                                        <li>Lifetime Update</li>
                                        <li>Supports 24/7</li>
                                        <li>Most Popular</li>
                                        <li>Can't product sold</li>
                                        <li>Can't for generators</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener" class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Buy
                                            Now</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>

                        <div class="flex-shrink max-w-full w-full sm:w-11/12 md:w-1/2 lg:w-1/3 px-4">
                            <div class="px-6 md:px-2 lg:px-4">
                                <!-- pricing table -->
                                <div class="relative py-16 px-12 mb-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-30 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                    <!-- pricing Title -->
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Extended</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>699</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>1 End products</li>
                                        <li>Personal or client</li>
                                        <li>Lifetime Update</li>
                                        <li>Supports 24/7</li>
                                        <li>Can for product sold</li>
                                        <li>Can't for generators</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener" class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Buy
                                            Now</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>

                        <div class="flex-shrink max-w-full w-full px-4">
                            <p class="text-center font-small mb-0">
                                <a class="text-gray-500" rel="noopener" href="landing.html#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-2 rtl:ml-2" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 640 512">
                                        <path d="M256 336h-.02c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0C-2.06 328.75.02 320.33.02 336H0c0 44.18 57.31 80 128 80s128-35.82 128-80zM128 176l72 144H56l72-144zm511.98 160c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0-87.12 174.26-85.04 165.84-85.04 181.51H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02zM440 320l72-144 72 144H440zm88 128H352V153.25c23.51-10.29 41.16-31.48 46.39-57.25H528c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H383.64C369.04 12.68 346.09 0 320 0s-49.04 12.68-63.64 32H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h129.61c5.23 25.76 22.87 46.96 46.39 57.25V448H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z">
                                        </path>
                                    </svg>
                                    Full license details
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Pricing -->

        <!-- =========={ BRAND }==========  -->
        <div id="partner-brand" class="relative py-16 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-40">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="w-full px-4">
                        <!-- slider brand -->
                        <div class="nav-dark-button" data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false, "imagesLoaded": true }'>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img1.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img2.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img3.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img4.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img5.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto" src="/img/brand/img6.png" alt="Image Description">
                                </a>
                            </div>
                        </div><!-- end slider brand -->
                    </div>
                </div>
            </div>
        </div><!-- End brand-->
        <!-- end main -->
</x-admin-layout>