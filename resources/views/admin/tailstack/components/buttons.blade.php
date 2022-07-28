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
                    <p class="text-xl font-bold mt-3 mb-5">Buttons</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Use Taildash custom button
                                    styles for actions in forms, dialogs, and more with multiple sizes, states, and
                                    more.</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Examples</h2>
                                <p class="mb-4">Taildash includes several predefined button styles, each serving its own
                                    semantic purpose, with a few extras thrown in for more control.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Primary</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0 mr-2">Success</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0 mr-2">Danger</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-yellow-300 border border-yellow-300 hover:text-gray-900 hover:bg-yellow-400 hover:ring-0 hover:border-yellow-400 focus:bg-yellow-400 focus:border-yellow-400 focus:outline-none focus:ring-0 mr-2">Warning</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-indigo-300 border border-indigo-300 hover:text-gray-900 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0 mr-2">Info</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2">Dark</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 mr-2 cursor-not-allowed opacity-70" disabled>Primary</button>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-yellow-300 border border-yellow-300 hover:text-gray-900 hover:bg-yellow-400 hover:ring-0 hover:border-yellow-400 focus:bg-yellow-400 focus:border-yellow-400 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-indigo-300 border border-indigo-300 hover:text-gray-900 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 mr-2 cursor-not-allowed opacity-70" disabled&gt;Primary&lt;/button&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Outline buttons
                                </h2>
                                <p class="mb-4">Taildash button with outline style.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:text-gray-100 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0 mr-2">Primary</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-green-500 bg-transparent border border-green-500 hover:text-white hover:bg-green-500 hover:ring-0 hover:border-green-500 focus:text-white focus:bg-green-500 focus:border-green-500 focus:outline-none focus:ring-0 mr-2">Success</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-red-500 bg-transparent border border-red-500 hover:text-white hover:bg-red-500 hover:ring-0 hover:border-red-500 focus:text-white focus:bg-red-500 focus:border-red-500 focus:outline-none focus:ring-0 mr-2">Danger</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-yellow-500 bg-transparent border border-yellow-500 hover:text-gray-100 hover:bg-yellow-500 hover:ring-0 hover:border-yellow-500 focus:text-gray-900 focus:bg-yellow-500 focus:border-yellow-500 focus:outline-none focus:ring-0 mr-2">Warning</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-300 bg-transparent border border-indigo-300 hover:text-gray-900 hover:bg-indigo-300 hover:ring-0 hover:border-indigo-300 focus:text-gray-900 focus:bg-indigo-300 focus:border-indigo-300 focus:outline-none focus:ring-0 mr-2">Info</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-transparent border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-900 bg-transparent border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:text-white focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2">Dark</button>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:text-gray-100 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0">Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-green-500 bg-transparent border border-green-500 hover:text-white hover:bg-green-500 hover:ring-0 hover:border-green-500 focus:text-white focus:bg-green-500 focus:border-green-500 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-red-500 bg-transparent border border-red-500 hover:text-white hover:bg-red-500 hover:ring-0 hover:border-red-500 focus:text-white focus:bg-red-500 focus:border-red-500 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-yellow-500 bg-transparent border border-yellow-500 hover:text-gray-100 hover:bg-yellow-500 hover:ring-0 hover:border-yellow-500 focus:text-gray-900 focus:bg-yellow-500 focus:border-yellow-500 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-300 bg-transparent border border-indigo-300 hover:text-gray-900 hover:bg-indigo-300 hover:ring-0 hover:border-indigo-300 focus:text-gray-900 focus:bg-indigo-300 focus:border-indigo-300 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-transparent border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-900 bg-transparent border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:text-white focus:bg-black focus:border-black focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Gradient button
                                </h2>
                                <p class="mb-4">Taildash button with background gradient style.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 bg-gradient-to-b from-indigo-400 to-indigo-600 hover:bg-indigo-600 hover:from-indigo-500 hover:to-indigo-600 focus:from-indigo-400 focus:to-indigo-600 hover:text-white hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Primary</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 bg-gradient-to-b from-green-400 to-green-600 hover:bg-green-600 hover:from-green-500 hover:to-green-600 focus:from-green-500 focus:to-green-600 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0 mr-2">Success</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 bg-gradient-to-b from-red-400 to-red-600 hover:bg-red-600 hover:from-red-500 hover:to-red-600 focus:from-red-500 focus:to-red-600 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0 mr-2">Danger</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-yellow-500 border border-yellow-500 bg-gradient-to-b from-yellow-400 to-yellow-600 hover:bg-yellow-600 hover:from-yellow-500 hover:to-yellow-600 focus:from-yellow-500 focus:to-yellow-600 hover:text-white hover:bg-yellow-600 hover:ring-0 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:outline-none focus:ring-0 mr-2">Warning</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-300 bg-gradient-to-b from-indigo-300 to-indigo-500 hover:bg-indigo-600 hover:from-indigo-300 hover:to-indigo-500 focus:from-indigo-300 focus:to-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-400 focus:bg-indigo-600 focus:border-indigo-400 focus:outline-none focus:ring-0 mr-2">Info</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 bg-gradient-to-b from-gray-100 to-gray-300 hover:bg-gray-200 hover:from-gray-300 hover:to-gray-100 focus:from-gray-300 focus:to-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-800 border border-gray-800 bg-gradient-to-b from-gray-700 to-gray-900 hover:bg-gray-800 hover:from-gray-900 hover:to-gray-700 focus:from-gray-900 focus:to-gray-700 hover:text-white hover:bg-gray-900 hover:ring-0 hover:border-gray-900 focus:bg-gray-900 focus:border-gray-900 focus:outline-none focus:ring-0 mr-2">Dark</button>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 bg-gradient-to-b from-indigo-400 to-indigo-600 hover:bg-indigo-600 hover:from-indigo-500 hover:to-indigo-600 focus:from-indigo-400 focus:to-indigo-600 hover:text-white hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 bg-gradient-to-b from-green-400 to-green-600 hover:bg-green-600 hover:from-green-500 hover:to-green-600 focus:from-green-500 focus:to-green-600 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 bg-gradient-to-b from-red-400 to-red-600 hover:bg-red-600 hover:from-red-500 hover:to-red-600 focus:from-red-500 focus:to-red-600 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-yellow-500 border border-yellow-500 bg-gradient-to-b from-yellow-400 to-yellow-600 hover:bg-yellow-600 hover:from-yellow-500 hover:to-yellow-600 focus:from-yellow-500 focus:to-yellow-600 hover:text-white hover:bg-yellow-600 hover:ring-0 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-300 bg-gradient-to-b from-indigo-300 to-indigo-500 hover:bg-indigo-600 hover:from-indigo-300 hover:to-indigo-500 focus:from-indigo-300 focus:to-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-400 focus:border-indigo-400 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 bg-gradient-to-b from-gray-100 to-gray-300 hover:bg-gray-200 hover:from-gray-300 hover:to-gray-100 focus:from-gray-300 focus:to-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-800 border border-gray-800 bg-gradient-to-b from-gray-700 to-gray-900 hover:bg-gray-800 hover:from-gray-900 hover:to-gray-700 focus:from-gray-900 focus:to-gray-700 hover:text-white hover:bg-gray-900 hover:ring-0 hover:border-gray-900 focus:bg-gray-900 focus:border-gray-900 focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button styles
                                    and Icon</h2>
                                <p class="mb-4">Taildash button variant and style.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
                                            <circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </circle>
                                            <circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </circle>
                                            <polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </polyline>
                                            <path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </path>
                                        </svg> Buy Now
                                    </button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2">
                                        Play Now <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block ml-1" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M238.23,342.43l89.09-74.13a16,16,0,0,0,0-24.6l-89.09-74.13A16,16,0,0,0,212,181.86V330.14A16,16,0,0,0,238.23,342.43Z" />
                                            <path d="M448,256c0-106-86-192-192-192S64,150,64,256s86,192,192,192S448,362,448,256Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px" />
                                        </svg>
                                    </button>

                                    <button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z" />
                                        </svg>
                                    </button>
                                    <button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z" />
                                        </svg>
                                    </button>

                                    <!--App store button-->
                                    <a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2" href="https://itunes.apple.com">
                                        <span class="flex items-center">
                                            <!--icon-->
                                            <span class="ltr:mr-3 rtl:ml-3">
                                                <!-- <span class="fab fa-apple font-size-2"></span> -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512">
                                                    <path d="M256,32C132.26,32,32,132.26,32,256S132.26,480,256,480,480,379.74,480,256,379.74,32,256,32ZM171,353.89a15.48,15.48,0,0,1-13.46,7.65,14.91,14.91,0,0,1-7.86-2.16,15.48,15.48,0,0,1-5.6-21.21l15.29-25.42a8.73,8.73,0,0,1,7.54-4.3h2.26c11.09,0,18.85,6.67,21.11,13.13Zm129.45-50L200.32,304H133.77a15.46,15.46,0,0,1-15.51-16.15c.32-8.4,7.65-14.76,16-14.76h48.24l57.19-97.35h0l-18.52-31.55C217,137,218.85,127.52,226,123a15.57,15.57,0,0,1,21.87,5.17l9.9,16.91h.11l9.91-16.91A15.58,15.58,0,0,1,289.6,123c7.11,4.52,8.94,14,4.74,21.22l-18.52,31.55-18,30.69-39.09,66.66v.11h57.61c7.22,0,16.27,3.88,19.93,10.12l.32.65c3.23,5.49,5.06,9.26,5.06,14.75A13.82,13.82,0,0,1,300.48,303.92Zm77.75.11H351.09v.11l19.82,33.71a15.8,15.8,0,0,1-5.17,21.53,15.53,15.53,0,0,1-8.08,2.27A15.71,15.71,0,0,1,344.2,354l-29.29-49.86-18.2-31L273.23,233a38.35,38.35,0,0,1-.65-38c4.64-8.19,8.19-10.34,8.19-10.34L333,273h44.91c8.4,0,15.61,6.46,16,14.75A15.65,15.65,0,0,1,378.23,304Z" />
                                                </svg>
                                            </span>
                                            <!--text-->
                                            <span class="ltr:text-left rtl:text-right">
                                                <span class="block">Download on the</span>
                                                <strong>App Store</strong>
                                            </span>
                                            <!--end text-->
                                        </span>
                                    </a>

                                    <!--google play-->
                                    <a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2" href="https://play.google.com">
                                        <span class="flex items-center">
                                            <!--icon-->
                                            <span class="ltr:mr-3 rtl:ml-3">
                                                <!-- <span class="fab fa-google-play font-size-2"></span> -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512">
                                                    <path d="M48,59.49v393a4.33,4.33,0,0,0,7.37,3.07L260,256,55.37,56.42A4.33,4.33,0,0,0,48,59.49Z" />
                                                    <path d="M345.8,174,89.22,32.64l-.16-.09c-4.42-2.4-8.62,3.58-5,7.06L285.19,231.93Z" />
                                                    <path d="M84.08,472.39c-3.64,3.48.56,9.46,5,7.06l.16-.09L345.8,338l-60.61-57.95Z" />
                                                    <path d="M449.38,231l-71.65-39.46L310.36,256l67.37,64.43L449.38,281C468.87,270.23,468.87,241.77,449.38,231Z" />
                                                </svg>
                                            </span>
                                            <!--text-->
                                            <span class="ltr:text-left rtl:text-right">
                                                <span class="block">Get it on</span>
                                                <strong>Google Play</strong>
                                            </span>
                                            <!--end text-->
                                        </span>
                                    </a>
                                    <!--end google play-->
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/circle&gt;&lt;circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/circle&gt;&lt;polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/polyline&gt;&lt;path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/path&gt;&lt;/svg&gt; Buy Now
			                  &lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"&gt;
			                    Play Now &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block ml-1" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M238.23,342.43l89.09-74.13a16,16,0,0,0,0-24.6l-89.09-74.13A16,16,0,0,0,212,181.86V330.14A16,16,0,0,0,238.23,342.43Z"/&gt;&lt;path d="M448,256c0-106-86-192-192-192S64,150,64,256s86,192,192,192S448,362,448,256Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;

			                  &lt;button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;
			                  &lt;button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;

			                  &lt;!--App store button--&gt;
			                  &lt;a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0" href="https://itunes.apple.com"&gt;
			                    &lt;span class="flex items-center"&gt;
			                      &lt;!--icon--&gt;
			                      &lt;span class="ltr:mr-3 rtl:ml-3"&gt;
			                        &lt;!-- &lt;span class="fab fa-apple font-size-2"&gt;&lt;/span&gt; --&gt;
			                         &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M256,32C132.26,32,32,132.26,32,256S132.26,480,256,480,480,379.74,480,256,379.74,32,256,32ZM171,353.89a15.48,15.48,0,0,1-13.46,7.65,14.91,14.91,0,0,1-7.86-2.16,15.48,15.48,0,0,1-5.6-21.21l15.29-25.42a8.73,8.73,0,0,1,7.54-4.3h2.26c11.09,0,18.85,6.67,21.11,13.13Zm129.45-50L200.32,304H133.77a15.46,15.46,0,0,1-15.51-16.15c.32-8.4,7.65-14.76,16-14.76h48.24l57.19-97.35h0l-18.52-31.55C217,137,218.85,127.52,226,123a15.57,15.57,0,0,1,21.87,5.17l9.9,16.91h.11l9.91-16.91A15.58,15.58,0,0,1,289.6,123c7.11,4.52,8.94,14,4.74,21.22l-18.52,31.55-18,30.69-39.09,66.66v.11h57.61c7.22,0,16.27,3.88,19.93,10.12l.32.65c3.23,5.49,5.06,9.26,5.06,14.75A13.82,13.82,0,0,1,300.48,303.92Zm77.75.11H351.09v.11l19.82,33.71a15.8,15.8,0,0,1-5.17,21.53,15.53,15.53,0,0,1-8.08,2.27A15.71,15.71,0,0,1,344.2,354l-29.29-49.86-18.2-31L273.23,233a38.35,38.35,0,0,1-.65-38c4.64-8.19,8.19-10.34,8.19-10.34L333,273h44.91c8.4,0,15.61,6.46,16,14.75A15.65,15.65,0,0,1,378.23,304Z"/&gt;&lt;/svg&gt;
			                      &lt;/span&gt;
			                      &lt;!--text--&gt;
			                      &lt;span class="ltr:text-left rtl:text-right"&gt;
			                        &lt;span class="block"&gt;Download on the&lt;/span&gt;
			                        &lt;strong&gt;App Store&lt;/strong&gt;
			                      &lt;/span&gt;&lt;!--end text--&gt;
			                    &lt;/span&gt;
			                  &lt;/a&gt;

			                  &lt;!--google play--&gt;
			                  &lt;a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0" href="https://play.google.com"&gt;
			                    &lt;span class="flex items-center"&gt;
			                      &lt;!--icon--&gt;
			                      &lt;span class="ltr:mr-3 rtl:ml-3"&gt;
			                        &lt;!-- &lt;span class="fab fa-google-play font-size-2"&gt;&lt;/span&gt; --&gt;
			                        &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M48,59.49v393a4.33,4.33,0,0,0,7.37,3.07L260,256,55.37,56.42A4.33,4.33,0,0,0,48,59.49Z"/&gt;&lt;path d="M345.8,174,89.22,32.64l-.16-.09c-4.42-2.4-8.62,3.58-5,7.06L285.19,231.93Z"/&gt;&lt;path d="M84.08,472.39c-3.64,3.48.56,9.46,5,7.06l.16-.09L345.8,338l-60.61-57.95Z"/&gt;&lt;path d="M449.38,231l-71.65-39.46L310.36,256l67.37,64.43L449.38,281C468.87,270.23,468.87,241.77,449.38,231Z"/&gt;&lt;/svg&gt;
			                      &lt;/span&gt;
			                      &lt;!--text--&gt;
			                      &lt;span class="ltr:text-left rtl:text-right"&gt;
			                        &lt;span class="block"&gt;Get it on&lt;/span&gt;
			                        &lt;strong&gt;Google Play&lt;/strong&gt;
			                      &lt;/span&gt;&lt;!--end text--&gt;
			                    &lt;/span&gt;
			                  &lt;/a&gt;
			                  &lt;!--end google play--&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button size</h2>
                                <p class="mb-4">Taildash button size.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Small</button>
                                    <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Normal</button>
                                    <button type="button" class="text-2xl py-4 px-8 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Large</button>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Small&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Normal&lt;/button&gt;
			                  &lt;button type="button" class="text-2xl py-4 px-8 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Large&lt;/button&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button group
                                </h2>
                                <p class="mb-4">Taildash button group.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- button group -->
                                    <div class="flex inline-flex mr-2" role="group">
                                        <button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5">Left</button>
                                        <button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
                                        <button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5">Right</button>
                                    </div>

                                    <!-- outline button group -->
                                    <div class="flex inline-flex" role="group">
                                        <button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5">Left</button>
                                        <button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
                                        <button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5">Right</button>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- button group --&gt;
			                  &lt;div class="flex inline-flex" role="group"&gt;
			                    &lt;button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;

			                  &lt;!-- outline button group --&gt;
			                  &lt;div class="flex inline-flex" role="group"&gt;
			                    &lt;button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button group
                                    vertical</h2>
                                <p class="mb-4">Taildash button group vertical style.</p>
                                <!-- example -->
                                <div class="float-left w-full bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- button group vertical -->
                                    <div class="flex flex-col float-left w-32 mr-4" role="group">
                                        <button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5">Left</button>
                                        <button type="button" class="py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
                                        <button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5">Right</button>
                                    </div>

                                    <!-- outline button group vertical -->
                                    <div class="flex flex-col float-left w-32" role="group">
                                        <button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5">Left</button>
                                        <button type="button" class="py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
                                        <button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5">Right</button>
                                    </div>
                                </div>
                                <div class="clear-both"></div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- button group vertical --&gt;
			                  &lt;div class="flex flex-col float-left w-32 mr-4" role="group"&gt;
			                    &lt;button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;&lt;div class="clear-both"&gt;&lt;/div&gt;

			                  &lt;!-- outline button group vertical --&gt;
			                  &lt;div class="flex flex-col float-left w-32" role="group"&gt;
			                    &lt;button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;&lt;div class="clear-both"&gt;&lt;/div&gt;
			                </code>
			              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>