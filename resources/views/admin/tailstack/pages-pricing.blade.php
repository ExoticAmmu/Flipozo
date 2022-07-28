<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row -->
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <p class="text-xl font-bold mt-3 mb-5">Pricing</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-4 xl:p-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative xl:px-16">
                            <header class="text-center mx-auto mb-16">
                                <h1 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                                    <span class="font-light">Our</span> Pricing</h1>
                                <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">No additional
                                    costs. Pay only one time and free for next update!</p>
                            </header>
                            <div class="flex flex-wrap flex-row -mx-4 justify-center">
                                <div class="flex-shrink max-w-full w-full sm:w-11/12 lg:w-1/2 px-4">
                                    <div class="px-6 md:px-2 lg:px-4">
                                        <!-- pricing -->
                                        <div
                                            class="relative py-16 px-12 mb-12 lg:-mt-6 bg-white dark:bg-gray-900 dark:bg-opacity-40 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                            <!-- ribbon -->
                                            <div
                                                class="absolute top-0 ltr:right-0 rtl:left-0 ltr:text-right rtl:text-left w-36 h-36 text-sm">
                                                <span
                                                    class="absolute top-4 ltr:right-0 rtl:left-0 px-4 py-2 block align-center shadow bg-indigo-500 text-gray-100">Popular</span>
                                            </div>
                                            <!-- pricing title -->
                                            <h3 class="text-lg mb-4 font-semibold uppercase">Single</h3>
                                            <div class="pb-2">
                                                <h4 class="text-4xl mb-2 font-semibold"><small>$</small>29</h4>
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
                                                <a href="pages-pricing.html#" rel="noopener"
                                                    class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Buy
                                                    Now</a>
                                            </div>
                                        </div><!-- end pricing -->
                                    </div>
                                </div>

                                <div class="flex-shrink max-w-full w-full sm:w-11/12 lg:w-1/2 px-4">
                                    <div class="px-6 md:px-2 lg:px-4">
                                        <!-- pricing -->
                                        <div
                                            class="relative py-16 px-12 mb-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-30 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
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
                                                <a href="pages-pricing.html#" rel="noopener"
                                                    class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Buy
                                                    Now</a>
                                            </div>
                                        </div><!-- end pricing -->
                                    </div>
                                </div>

                                <div class="flex-shrink max-w-full w-full px-4">
                                    <p class="text-center font-small mb-0">
                                        <a class="text-gray-500" rel="noopener" href="pages-pricing.html#"
                                            target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-2 rtl:ml-2"
                                                fill="currentColor" width="1rem" height="1rem" viewBox="0 0 640 512">
                                                <path
                                                    d="M256 336h-.02c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0C-2.06 328.75.02 320.33.02 336H0c0 44.18 57.31 80 128 80s128-35.82 128-80zM128 176l72 144H56l72-144zm511.98 160c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0-87.12 174.26-85.04 165.84-85.04 181.51H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02zM440 320l72-144 72 144H440zm88 128H352V153.25c23.51-10.29 41.16-31.48 46.39-57.25H528c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H383.64C369.04 12.68 346.09 0 320 0s-49.04 12.68-63.64 32H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h129.61c5.23 25.76 22.87 46.96 46.39 57.25V448H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z">
                                                </path>
                                            </svg>
                                            Full license details
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>