<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full my-4">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <h1 class="text-3xl mb-4 font-semibold text-gray-800 dark:text-gray-300">Changelogs</h1>
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">See what's new added,
                                changed, fixed, improved or updated in the latest Taildash versions.</p>
                        </div>

                        <div class="mb-6">
                            <div id="210-release">
                                <h3 class="text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300 mb-6">
                                    Version <code class="text-pink-700">2.1.0</code> - <span class="text-sm">April
                                        29, 2022</span></h3>
                                <pre class="mb-2 bg-gray-100"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">update</span> Update tailwindcss v3.0.24, alpine js v3.10.2, flickity v2.3.0, chart js v3.7.1</pre>
                                <pre class="mb-2"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">Fix</span> Fixed minor css on landing page & Documentation</pre>
                                <br>
                                <br>
                                <div class="my-9"></div>
                            </div>
                            <div id="200-release">
                                <h3 class="text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300 mb-6">
                                    Version <code class="text-pink-700">2.0.0</code> - <span class="text-sm">January
                                        2022</span></h3>
                                <pre class="mb-2 bg-gray-100"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">update</span> Update to Tailwind css 3.x.x</pre>
                                <pre class="mb-2"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">update</span> New build system</pre>
                                <pre class="mb-2 bg-gray-100"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">update</span> Pre css updated</pre>
                                <br>
                                <br>
                                <div class="my-9"></div>
                            </div>
                            <div id="initial-release">
                                <h3 class="text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300 mb-6">
                                    Version <code class="text-pink-700">1.0.0</code> - <span class="text-sm">November 2021</span></h3>
                                <pre class="mb-2"><span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded">new</span> Initial Release of <span class="italic text-gray-500">Taildash - Tailwind Dashboard Template</span></pre>
                                <br>
                                <br>
                                <div class="my-9"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>