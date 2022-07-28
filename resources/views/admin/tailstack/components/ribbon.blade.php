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
                    <p class="text-xl font-bold mt-3 mb-5">Ribbons</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Add ribbon in left or right
                                    any element.</p>
                            </div>

                            <div class="mb-12">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example ribbon
                                </h2>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <div class="relative p-12 mb-12 bg-blue-700 text-gray-100 border border-gray-200 dark:border-gray-700">
                                        <!-- ribbon -->
                                        <div class="absolute top-0 ltr:right-0 ltr:text-right rtl:left-0 rtl:text-left w-36 h-36 text-sm">
                                            <span class="absolute top-4 ltr:right-0 rtl:left-0 px-4 py-2 block align-center shadow bg-yellow-300 text-gray-800">Popular</span>
                                        </div>
                                    </div>

                                    <div class="relative p-12 mb-12 bg-blue-700 text-gray-100 border border-gray-200 dark:border-gray-700">
                                        <!-- ribbon -->
                                        <div class="absolute top-0 ltr:left-0 ltr:text-left rtl:right-0 rtl:text-right w-36 h-36 text-sm">
                                            <span class="absolute top-4 ltr:left-0 rtl:right-0 px-4 py-2 block align-center shadow bg-yellow-300 text-gray-800">Popular</span>
                                        </div>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- ribbon --&gt;
			                  &lt;div class="absolute top-0 ltr:right-0 ltr:text-right rtl:left-0 rtl:text-left w-36 h-36 text-sm"&gt;
			                    &lt;span class="absolute top-4 ltr:right-0 rtl:left-0 px-4 py-2 block align-center shadow bg-yellow-300 text-gray-800"&gt;Popular&lt;/span&gt;
			                  &lt;/div&gt;

			                  &lt;!-- ribbon --&gt;
			                  &lt;div class="absolute top-0 ltr:left-0 ltr:text-left rtl:right-0 rtl:text-right w-36 h-36 text-sm"&gt;
			                    &lt;span class="absolute top-4 ltr:left-0 rtl:right-0 px-4 py-2 block align-center shadow bg-yellow-300 text-gray-800"&gt;Popular&lt;/span&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                                <p class="my-4"><span class="text-red-700 font-bold uppercase">Note:</span> Parent
                                    ribbon component must have <code class="text-pink-700">relative</code> classes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-admin-layout>