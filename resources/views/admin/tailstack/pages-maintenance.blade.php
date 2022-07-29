<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <main id="content">
        <!-- =========={ Hero }==========  -->
        <div id="hero" class="relative z-0 py-12 text-gray-300 overflow-hidden">
            <div class="container xl:max-w-6xl mx-auto px-4 z-10">
                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- hero content -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                        <div class="text-center lg:ltr:text-left lg:rtl:text-right mt-6 lg:mt-0">
                            <div class="mb-6">
                                <h1 class="text-white text-4xl leading-normal mb-3 font-bold">Site is Under Maintenance
                                </h1>
                                <p class="text-gray-400 leading-relaxed font-light text-xl mx-auto pb-2">We're making
                                    the system more awesome. We'll be back shortly. If you have any questions, please
                                    contact us.</p>
                            </div>
                            <a class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0 mr-4" href="pages-maintenance.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 ltr:mr-2 rtl:ml-2 inline-block bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                    </path>
                                </svg>Contact us
                            </a>
                        </div>
                    </div>

                    <!-- hero image -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center">
                        <div class="relative px-12 md:ml-16 md:pr-0 mt-4">
                            <img src="/img/svg/maintenance.svg" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end hero -->
    </main>
</x-admin-layout>