<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <main>
        <!-- =========={ login }==========  -->
        <div id="login-area" class="relative py-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- login form -->
                    <div class="max-w-full w-full md:w-2/3 lg:w-1/2 px-6 sm:px-12">
                        <div class="relative">
                            <div class="p-6 sm:py-8 sm:px-12 rounded-lg bg-white dark:bg-gray-800 shadow-xl">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="text-indigo-500 mx-auto w-16 h-16 bi bi-envelope-open mb-6"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                                    </svg>
                                    <h1 class="text-2xl font-bold mb-2">Please check your email</h1>
                                    <p class="text-gray-500 mb-6">A email has been send to email@domain.com. Please
                                        check for an email and click on the included link to reset your password.</p>
                                    <a href="confirm-email.html#"
                                        class="py-2 px-4 inline-block text-center mb-3 rounded leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-house"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg>
                                        <!-- <i class="fas fa-home"></i> -->
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End login -->
    </main>
</x-admin-layout>