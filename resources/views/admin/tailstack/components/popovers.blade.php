<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>




    <div class="mx-auto p-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">Popovers</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                for adding custom Popovers.</p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <!-- example -->
                            <div class="bg-white p-8 pb-12 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <!-- Popovers top -->
                                <div x-data="{ open: false }" class="relative inline-block mb-3">
                                    <button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Popovers on top
                                    </button>

                                    <!-- Popovers area -->
                                    <div class="absolute top-auto bottom-full mb-3" x-show="open" @click.away="open = false">
                                        <div class="z-40 w-32 p-3 -mb-1 text-sm leading-tight text-gray-700 bg-white border border-gray-200 rounded-lg shadow-lg text-center">
                                            Popovers on top
                                        </div>
                                        <div class="absolute transform -rotate-45 p-1 w-1 bg-white border-l border-b border-gray-200 bottom-0 -mb-2 ltr:ml-6 rtl:mr-6">
                                        </div>
                                    </div>
                                </div>

                                <!-- Popovers bottom -->
                                <div x-data="{ open: false }" class="relative inline-block mb-3">
                                    <button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Popovers on bottom
                                    </button>

                                    <!-- Popovers area -->
                                    <div class="absolute top-full bottom-auto mt-3" x-show="open" @click.away="open = false">
                                        <div class="z-40 w-32 p-3 -mt-1 text-sm leading-tight text-gray-700 bg-white rounded-lg border border-gray-200 shadow-lg text-center">
                                            Popovers on bottom
                                        </div>
                                        <div class="absolute transform -rotate-45 p-1 w-1 bg-white border-r border-t border-gray-200 top-0 -mt-2 ltr:ml-6 rtl:mr-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Popovers top --&gt;
			                  &lt;div x-data="{ open: false }" class="relative inline-block mb-3"&gt;  
			                    &lt;button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                      Popovers on top
			                    &lt;/button&gt;
			                    &lt;!-- Popovers area --&gt;
			                    &lt;div class="absolute top-auto bottom-full mb-3" x-show="open" @click.away="open = false"&gt;
			                      &lt;div class="z-40 w-32 p-3 -mb-1 text-sm leading-tight text-gray-700 bg-white border border-gray-200 rounded-lg shadow-lg text-center"&gt;
			                        Popovers on top
			                      &lt;/div&gt;
			                      &lt;div class="absolute transform -rotate-45 p-1 w-1 bg-white border-l border-b border-gray-200 bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"&gt;&lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;

			                  &lt;!-- Popovers bottom --&gt;
			                  &lt;div x-data="{ open: false }" class="relative inline-block mb-3"&gt;  
			                    &lt;button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                      Popovers on bottom
			                    &lt;/button&gt;
			                    &lt;!-- Popovers area --&gt;
			                    &lt;div class="absolute top-full bottom-auto mt-3" x-show="open" @click.away="open = false"&gt;
			                      &lt;div class="z-40 w-32 p-3 -mt-1 text-sm leading-tight text-gray-700 bg-white rounded-lg border border-gray-200 shadow-lg text-center"&gt;
			                        Popovers on bottom
			                      &lt;/div&gt;
			                      &lt;div class="absolute transform -rotate-45 p-1 w-1 bg-white border-r border-t border-gray-200 top-0 -mt-2 ltr:ml-6 rtl:mr-6"&gt;&lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>