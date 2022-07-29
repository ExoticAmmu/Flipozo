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
                <p class="text-xl font-bold mt-3 mb-5">Tooltips</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                for adding custom tooltips.</p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <!-- example -->
                            <div class="bg-white p-8 pb-12 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <!-- Tooltip top -->
                                <div x-data="{ tooltips: false }" class="relative inline-block mb-3">
                                    <button x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Tooltip on top
                                    </button>

                                    <!-- tooltip area -->
                                    <div class="absolute top-auto bottom-full mb-3" x-cloak x-show.transition.origin.top="tooltips">
                                        <div class="z-40 w-32 p-3 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
                                            Tooltip on top
                                        </div>
                                        <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6">
                                        </div>
                                    </div>
                                </div>

                                <!-- Tooltip bottom -->
                                <div x-data="{ tooltips: false }" class="relative inline-block mb-3">
                                    <button x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Tooltip on bottom
                                    </button>

                                    <!-- tooltip area -->
                                    <div class="absolute top-full bottom-auto mt-3" x-cloak x-show.transition.origin.top="tooltips">
                                        <div class="z-40 w-32 p-3 -mt-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
                                            Tooltip on bottom
                                        </div>
                                        <div class="absolute transform -rotate-45 p-1 w-1 bg-black top-0 -mt-2 ltr:ml-6 rtl:mr-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Tooltip top --&gt;
			                  &lt;div x-data="{ tooltips: false }" class="relative inline-block mb-3"&gt;  
			                    &lt;button x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                      Tooltip on top
			                    &lt;/button&gt;
			                    &lt;!-- tooltip area --&gt;
			                    &lt;div class="absolute top-auto bottom-full mb-3" x-cloak x-show.transition.origin.top="tooltips"&gt;
			                      &lt;div class="z-40 w-32 p-3 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center"&gt;
			                        Tooltip on top
			                      &lt;/div&gt;
			                      &lt;div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"&gt;&lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;

			                  &lt;!-- Tooltip bottom --&gt;
			                  &lt;div x-data="{ tooltips: false }" class="relative inline-block mb-3"&gt;  
			                    &lt;button x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                      Tooltip on bottom
			                    &lt;/button&gt;
			                    &lt;!-- tooltip area --&gt;
			                    &lt;div class="absolute top-full bottom-auto mt-3" x-cloak x-show.transition.origin.top="tooltips"&gt;
			                      &lt;div class="z-40 w-32 p-3 -mt-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center"&gt;
			                        Tooltip on bottom
			                      &lt;/div&gt;
			                      &lt;div class="absolute transform -rotate-45 p-1 w-1 bg-black top-0 -mt-2 ltr:ml-6 rtl:mr-6"&gt;&lt;/div&gt;
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