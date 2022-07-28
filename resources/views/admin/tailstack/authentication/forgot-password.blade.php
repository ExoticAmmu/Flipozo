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
                                <form id="login-form">
                                    <h1 class="text-2xl leading-normal mb-6 font-bold text-gray-800  dark:text-gray-300 text-center">
                                        Reset Password</h1>
                                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-gray-700 border-gray-700">
                                    <p class="text-gray-500 mb-6">Enter your email address and we'll send you an email
                                        with instructions to reset your password.</p>
                                    <div class="mb-6">
                                        <input name="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Email address" value="" aria-label="email" type="email" required="">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-key" viewBox="0 0 16 16">
                                                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg>
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End login -->
    </main>
</x-admin-layout>