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
                    <p class="text-xl font-bold mt-3 mb-5">Dropdowns</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Toggle contextual overlays
                                    for displaying lists of links and more with the Alpine js</p>
                            </div>

                            <div class="mb-0">
                                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Example</h2>
                                <p class="mb-4">Wrap the dropdown’s toggle (your button or link) and the dropdown menu.
                                </p>
                                <!-- example -->
                                <div class="flex inline-flex bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <!-- default dropdown -->
                                    <div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4">
                                        <button @click="show = ! show" type="button"
                                            class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0">
                                            <span class="ltr:pr-2 rtl:pl-2">Dropdown</span>
                                            <svg class="fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg"
                                                height="24" viewBox="0 0 24 24" width="24">
                                                <path d="M7 10l5 5 5-5z" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                            </svg>
                                        </button>
                                        <div x-show="show" @click.away="show = false"
                                            class="absolute bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                                            style="min-width:12rem">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Another action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Something else here</a>
                                            <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- up dropdown -->
                                    <div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4">
                                        <button @click="show = ! show" type="button"
                                            class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0">
                                            <span class="ltr:pr-2 rtl:pl-2">Dropdown</span>
                                            <svg class="fill-current text-gray-100 transform rotate-180"
                                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24">
                                                <path d="M7 10l5 5 5-5z" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                            </svg>
                                        </button>
                                        <div x-show="show" @click.away="show = false"
                                            class="absolute left-0 bottom-full top-auto bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                                            style="min-width:12rem">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Another action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Something else here</a>
                                            <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- right dropdown -->
                                    <div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4">
                                        <button @click="show = ! show" type="button"
                                            class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0">
                                            <span class="ltr:pr-2 rtl:pl-2">Dropdown</span>
                                            <svg class="fill-current text-gray-100 transform -rotate-90"
                                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24">
                                                <path d="M7 10l5 5 5-5z" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                            </svg>
                                        </button>
                                        <div x-show="show" @click.away="show = false"
                                            class="absolute top-0 left-full right-auto bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                                            style="min-width:12rem">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Another action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Something else here</a>
                                            <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- right dropdown -->
                                    <div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4">
                                        <button @click="show = ! show" type="button"
                                            class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0">
                                            <svg class="fill-current text-gray-100 transform rotate-90"
                                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24">
                                                <path d="M7 10l5 5 5-5z" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                            </svg> <span class="ltr:pl-2 rtl:pr-2">Dropdown</span>
                                        </button>
                                        <div x-show="show" @click.away="show = false"
                                            class="absolute top-0 ltr:right-full ltr:left-auto rtl:left-full rtl:right-full bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                                            style="min-width:12rem">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Another action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Something else here</a>
                                            <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- Split dropdown -->
                                    <div x-data="{ show: false }" class="relative flex inline-flex mr-2" role="group">
                                        <button type="button"
                                            class="flex py-2 px-4 inline-block text-center ltr:rounded-l rtl:rounded-r leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0 -mr-0.5">
                                            <span class="ltr:pr-2 rtl:pl-2">Dropdown</span>
                                        </button>
                                        <button @click="show = ! show" type="button"
                                            class="flex py-2 px-4 inline-block text-center ltr:rounded-r rtl:rounded-l leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0 -ml-0.5">
                                            <svg class="fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg"
                                                height="24" viewBox="0 0 24 24" width="24">
                                                <path d="M7 10l5 5 5-5z" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                            </svg>
                                        </button>
                                        <div x-show="show" @click.away="show = false"
                                            class="absolute top-full bottom-auto left-0 bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                                            style="min-width:12rem">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Another action</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Something else here</a>
                                            <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
                                                href="dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- default dropdown --&gt;
                        &lt;div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4"&gt;
                          &lt;button @click="show = ! show" type="button" class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0"&gt;
                            &lt;span class="ltr:pr-2 rtl:pl-2"&gt;Dropdown&lt;/span&gt; 
                            &lt;svg class="fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"&gt;&lt;path d="M7 10l5 5 5-5z"/&gt;&lt;path d="M0 0h24v24H0z" fill="none"/&gt;&lt;/svg&gt;
                          &lt;/button&gt;
                          &lt;div x-show="show" @click.away="show = false" class="absolute bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="min-width:12rem"&gt;
                              &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Action&lt;/a&gt;
                              &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Another action&lt;/a&gt;
                              &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Something else here&lt;/a&gt;
                              &lt;hr class="border-t border-gray-200 dark:border-gray-700 my-0"&gt;
                              &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Separated link&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;!-- up dropdown --&gt;
                        &lt;div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4"&gt;
                          &lt;button @click="show = ! show" type="button" class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0"&gt;
                            &lt;span class="ltr:pr-2 rtl:pl-2"&gt;Dropdown&lt;/span&gt; 
                            &lt;svg class="fill-current text-gray-100 transform rotate-180" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"&gt;&lt;path d="M7 10l5 5 5-5z"/&gt;&lt;path d="M0 0h24v24H0z" fill="none"/&gt;&lt;/svg&gt;
                          &lt;/button&gt;
                          &lt;div x-show="show" @click.away="show = false" class="absolute left-0 bottom-full top-auto bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="min-width:12rem"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Another action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Something else here&lt;/a&gt;
                            &lt;hr class="border-t border-gray-200 dark:border-gray-700 my-0"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Separated link&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;!-- right dropdown --&gt;
                        &lt;div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4"&gt;
                          &lt;button @click="show = ! show" type="button" class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0"&gt;
                            &lt;span class="ltr:pr-2 rtl:pl-2"&gt;Dropdown&lt;/span&gt; 
                            &lt;svg class="fill-current text-gray-100 transform -rotate-90" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"&gt;&lt;path d="M7 10l5 5 5-5z"/&gt;&lt;path d="M0 0h24v24H0z" fill="none"/&gt;&lt;/svg&gt;
                          &lt;/button&gt;
                          &lt;div x-show="show" @click.away="show = false" class="absolute top-0 left-full right-auto bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="min-width:12rem"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Another action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Something else here&lt;/a&gt;
                            &lt;hr class="border-t border-gray-200 dark:border-gray-700 my-0"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Separated link&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;!-- right dropdown --&gt;
                        &lt;div x-data="{ show: false }" class="relative ltr:mr-4 rtl:ml-4"&gt;
                          &lt;button @click="show = ! show" type="button" class="flex py-2 px-4 inline-block text-center rounded-md leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0"&gt;
                            &lt;svg class="fill-current text-gray-100 transform rotate-90" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"&gt;&lt;path d="M7 10l5 5 5-5z"/&gt;&lt;path d="M0 0h24v24H0z" fill="none"/&gt;&lt;/svg&gt; &lt;span class="ltr:pl-2 rtl:pr-2"&gt;Dropdown&lt;/span&gt;
                          &lt;/button&gt;
                          &lt;div x-show="show" @click.away="show = false" class="absolute top-0 ltr:right-full ltr:left-auto rtl:left-full rtl:right-full bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="min-width:12rem"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Another action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Something else here&lt;/a&gt;
                            &lt;hr class="border-t border-gray-200 dark:border-gray-700 my-0"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Separated link&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        
                        &lt;!-- Split dropdown --&gt;
                        &lt;div x-data="{ show: false }" class="relative flex inline-flex mr-2" role="group"&gt;
                          &lt;button type="button" class="flex py-2 px-4 inline-block text-center ltr:rounded-l rtl:rounded-r leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0 -mr-0.5"&gt;
                            &lt;span class="ltr:pr-2 rtl:pl-2"&gt;Dropdown&lt;/span&gt;
                          &lt;/button&gt;
                          &lt;button @click="show = ! show" type="button" class="flex py-2 px-4 inline-block text-center ltr:rounded-r rtl:rounded-l leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-700 focus:border-indigo-700 focus:outline-none focus:ring-0 -ml-0.5"&gt;
                            &lt;svg class="fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"&gt;&lt;path d="M7 10l5 5 5-5z"/&gt;&lt;path d="M0 0h24v24H0z" fill="none"/&gt;&lt;/svg&gt;
                          &lt;/button&gt;
                          &lt;div x-show="show" @click.away="show = false" class="absolute top-full bottom-auto left-0 bg-white z-10 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="min-width:12rem"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Another action&lt;/a&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Something else here&lt;/a&gt;
                            &lt;hr class="border-t border-gray-200 dark:border-gray-700 my-0"&gt;
                            &lt;a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:focus:bg-gray-900" href="#"&gt;Separated link&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                            </div>

                            <div id="dropdown-desktop" class="my-12">
                                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Navbar dropdown menu</h2>
                                <p class="my-6">Navbar dropdown menu, submenu and mega menu can insert in desktop
                                    dropdown.</p>
                                <!-- example -->
                                <div class="relative bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <!-- menu -->
                                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Home
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                        <!-- dropdown -->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @mouseleave="open = false">
                                            <a id="dropdown-01"
                                                class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                                    :class="{ 'opacity-100': open }"></span>
                                                Dropdown
                                                <!-- caret -->
                                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                                        fill="currentColor" viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <!-- dropdown menu -->
                                            <ul class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01"
                                                x-transition:enter="transition duration-200"
                                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                                x-transition:leave="transition translate-y-4"
                                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- dropdown --&gt;
                        &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false"&gt;
                          &lt;a id="dropdown-01" class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                            &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100" :class="{ 'opacity-100': open }"&gt;&lt;/span&gt;
                            Dropdown
                            &lt;!-- caret --&gt;
                            &lt;span class="inline-block ltr:ml-2 rtl:mr-2"&gt;
                              &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;
                          &lt;!-- dropdown menu --&gt;
                          &lt;ul class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4"&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li class="relative"&gt;
                          &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;
                            &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
                            Menu
                          &lt;/a&gt;
                        &lt;/li&gt;
                      </code>
                    </pre>
                                <p class="my-4">You can change hover dropdown to click dropdown with replace <code
                                        class="text-pink-700">@mouseleave</code> with <code
                                        class="text-green-700">@click.away</code> and <code
                                        class="text-pink-700">@mouseenter</code> with <code
                                        class="text-green-700">@click</code></p>
                            </div>

                            <div class="mb-12">
                                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Navbar dropdown submenu</h2>
                                <!-- example -->
                                <div class="relative bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <!-- menu -->
                                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Home
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                        <!-- dropdown with submenu-->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @mouseleave="open = false">
                                            <a id="dropdown-02"
                                                class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                                    :class="{ 'opacity-100': open }"></span>
                                                Dropdown submenu
                                                <!-- caret -->
                                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                                        fill="currentColor" viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <!-- dropdown menu -->
                                            <ul class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02"
                                                x-transition:enter="transition duration-200"
                                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                                x-transition:leave="transition translate-y-4"
                                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @mouseleave="open = false">
                                                    <a id="submenu-01"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="javascript:;" @mouseenter="open = !open"
                                                        aria-haspopup="true" x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform ltr:-rotate-90 rtl:rotate-90"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block absolute ltr:left-full rtl:right-full ltr:right-auto rtl:left-auto transform border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="submenu-01"
                                                        x-transition:enter="transition duration-200"
                                                        x-transition:enter-start="transform opacity-0 translate-y-4"
                                                        x-transition:enter-end="transform opacity-100 translate-y-0"
                                                        x-transition:leave="transition translate-y-4"
                                                        x-transition:leave-start="transform opacity-100 translate-y-0"
                                                        x-transition:leave-end="transform opacity-0 translate-y-4">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @mouseleave="open = false">
                                                    <a id="submenu-02"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="javascript:;" @mouseenter="open = !open"
                                                        aria-haspopup="true" x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform ltr:-rotate-90 rtl:rotate-90"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block absolute ltr:left-full rtl:right-full ltr:right-auto rtl:left-auto transform border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="submenu-02"
                                                        x-transition:enter="transition duration-200"
                                                        x-transition:enter-start="transform opacity-0 translate-y-4"
                                                        x-transition:enter-end="transform opacity-100 translate-y-0"
                                                        x-transition:leave="transition translate-y-4"
                                                        x-transition:leave-start="transform opacity-100 translate-y-0"
                                                        x-transition:leave-end="transform opacity-0 translate-y-4">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- dropdown with submenu--&gt;
                        &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false"&gt;
                          &lt;a id="dropdown-02" class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                            &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100" :class="{ 'opacity-100': open }"&gt;&lt;/span&gt;
                            Dropdown submenu
                            &lt;!-- caret --&gt;
                            &lt;span class="inline-block ltr:ml-2 rtl:mr-2"&gt;
                              &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;
                          &lt;!-- dropdown menu --&gt;
                          &lt;ul class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4"&gt;
                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false"&gt;
                              &lt;a id="submenu-01" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform ltr:-rotate-90 rtl:rotate-90" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block absolute ltr:left-full rtl:right-full ltr:right-auto rtl:left-auto transform border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="submenu-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;

                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false"&gt;
                              &lt;a id="submenu-02" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform ltr:-rotate-90 rtl:rotate-90" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block absolute ltr:left-full rtl:right-full ltr:right-auto rtl:left-auto transform border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="submenu-02" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                      </code>
                    </pre>
                                <p class="my-4">You can change hover dropdown to click dropdown with replace <code
                                        class="text-pink-700">@mouseleave</code> with <code
                                        class="text-green-700">@click.away</code> and <code
                                        class="text-pink-700">@mouseenter</code> with <code
                                        class="text-green-700">@click</code></p>
                            </div>

                            <div class="mb-0">
                                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Navbar dropdown mega menu</h2>
                                <!-- example -->
                                <div class="relative bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <!-- menu -->
                                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                                        <!-- dropdown -->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @mouseleave="open = false">
                                            <a id="dropdown-mega"
                                                class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                                    :class="{ 'opacity-100': open }"></span>
                                                Home
                                                <!-- caret -->
                                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                                        fill="currentColor" viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <div class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                                style="min-width: 38rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-mega"
                                                x-transition:enter="transition duration-200"
                                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                                x-transition:leave="transition translate-y-4"
                                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                                <div class="flex flex-wrap flex-row text-center">
                                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4">
                                                        <div class="py-5">
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1rem"
                                                                        height="1rem" fill="currentColor"
                                                                        class="bi bi-megaphone" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Advertising</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-briefcase" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Branding</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-lightbulb" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Creative</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-laptop" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z">
                                                                        </path>
                                                                        <path
                                                                            d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Digital</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-palette" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                                                        </path>
                                                                        <path
                                                                            d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Graphic</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex-shrink w-full max-w-full md:w-1/2 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20">
                                                        <div class="py-5">
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-bar-chart" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Marketing</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-app-indicator" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                                        </path>
                                                                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Mobile App</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-search" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">SEO</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-share" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Social Media</p>
                                                                </div>
                                                            </a>
                                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">
                                                                <div
                                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-globe2" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <p class="fw-medium">Web Design</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex-shrink w-full px-4 text-center border-t border-gray-200 dark:border-gray-700">
                                                        <div class="p-4 text-sm">Pre-build landing pages for your
                                                            professional Agency.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Menu
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- dropdown mega --&gt;
                        &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false"&gt;
                          &lt;a id="dropdown-mega" class="group block py-3 lg:py-7 px-6 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                            &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-500 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100" :class="{ 'opacity-100': open }"&gt;&lt;/span&gt;
                            Home
                            &lt;!-- caret --&gt;
                            &lt;span class="inline-block ltr:ml-2 rtl:mr-2"&gt;
                              &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;

                          &lt;!-- dropdown menu --&gt;
                          &lt;div class="block absolute ltr:left-1/2 rtl:right-1/2 ltr:right-auto rtl:left-auto transform ltr:-translate-x-1/2 rtl:translate-x-1/2 border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md" style="min-width: 38rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-mega" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4"&gt;
                            &lt;div class="flex flex-wrap flex-row text-center"&gt;
                              &lt;div class="flex-shrink w-full max-w-full md:w-1/2 px-4"&gt;
                                &lt;div class="py-5"&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Advertising&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Branding&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Creative&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16"&gt;
                                        &lt;path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"&gt;&lt;/path&gt;
                                        &lt;path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Digital&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"&gt;&lt;/path&gt;
                                        &lt;path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Graphic&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-shrink w-full max-w-full md:w-1/2 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20"&gt;
                                &lt;div class="py-5"&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Marketing&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16"&gt;
                                        &lt;path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"&gt;&lt;/path&gt;
                                        &lt;path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Mobile App&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;SEO&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Social Media&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                  &lt;a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100" href="#"&gt;
                                    &lt;div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-indigo-500 text-white rounded"&gt;
                                      &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16"&gt;
                                        &lt;path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"&gt;&lt;/path&gt;
                                      &lt;/svg&gt;
                                    &lt;/div&gt;
                                    &lt;div class="drop-text"&gt;
                                      &lt;p class="fw-medium"&gt;Web Design&lt;/p&gt;
                                    &lt;/div&gt;
                                  &lt;/a&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-shrink w-full px-4 text-center border-t border-gray-200 dark:border-gray-700"&gt;
                                &lt;div class="p-4 text-sm"&gt;Pre-build landing pages for your professional Agency.&lt;/div&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/li&gt;
                      </code>
                    </pre>
                                <p class="my-4">You can change hover dropdown to click dropdown with replace <code
                                        class="text-pink-700">@mouseleave</code> with <code
                                        class="text-green-700">@click.away</code> and <code
                                        class="text-pink-700">@mouseenter</code> with <code
                                        class="text-green-700">@click</code></p>
                                <p class="mb-4"><span class="text-red-700 font-bold uppercase">Warning:</span> You must
                                    insert dropdown menu code in <a href="navbar.html"
                                        class="text-indigo-500">navbar</a></p>
                            </div>

                            <div id="dropdown-offcanvas" class="mt-12">
                                <h2 class="text-2xl mb-6 font-semibold text-gray-800">Dropdown in Offcanvas Mobile</h2>
                                <!-- example -->
                                <div class="relative bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <ul>
                                        <li class="relative">
                                            <a href="dropdowns.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100">Home</a>
                                        </li>

                                        <!-- dropdown with submenu-->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @click.away="open = false">
                                            <a id="mobiledrop-04"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                Dropdown
                                                <!-- caret -->
                                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="transform transition duration-300"
                                                        :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                        width=".8rem" height=".8rem" fill="currentColor"
                                                        viewBox="0 0 512 512">
                                                        <polyline points="184 112 328 256 184 400"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-04">
                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-01"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                        x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                        Dropdown Item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="184 112 328 256 184 400"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-01">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-02"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                        x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="184 112 328 256 184 400"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-02">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-03"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                        href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                        x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-500 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="184 112 328 256 184 400"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-03">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100"
                                                                href="dropdowns.html#">Dropdown sub item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->
                                            </ul>
                                        </li>
                                        <li class="relative">
                                            <a href="dropdowns.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100">Snippets</a>
                                        </li>
                                    </ul>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- dropdown with submenu--&gt;
                        &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                          &lt;a id="mobiledrop-04" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                            Dropdown
                            &lt;!-- caret --&gt;
                            &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                              &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform transition duration-300" :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;

                          &lt;!-- dropdown menu --&gt;
                          &lt;ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-04"&gt;
                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                              &lt;a id="sidemenu-01" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                                Dropdown Item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform transition duration-300" :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="sidemenu-01"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;

                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                              &lt;a id="sidemenu-02" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform transition duration-300" :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="sidemenu-02"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;

                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                              &lt;a id="sidemenu-03" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" class="transform transition duration-300" :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="sidemenu-03"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-100" href="#"&gt;Dropdown sub item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                      </code>
                    </pre>
                                <p class="my-4"><span class="text-red-700 font-bold uppercase">Note:</span> You can
                                    insert dropdown menu code in <a href="navbar.html#navbar-offcanvas"
                                        class="text-indigo-500">navbar Offcanvas mobile</a></p>
                            </div>

                            <div id="dropdown-mobiles" class="mt-12">
                                <h2 class="text-2xl mb-6 font-semibold text-gray-800">Dropdown in Mobile menu</h2>
                                <!-- example -->
                                <div class="relative bg-white p-8 border border-gray-200 dark:bg-gray-800">
                                    <ul>
                                        <li class="relative">
                                            <!-- active -->
                                            <a class="group block py-3 px-0 text-indigo-600 hover:text-indigo-600 focus:text-indigo-600 dark:text-gray-100 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"></span>
                                                Home
                                            </a>
                                        </li>

                                        <!-- dropdown with submenu-->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @click.away="open = false">
                                            <a id="mobiledrop-02"
                                                class="group block py-3 px-0 hover:text-indigo-600 focus:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-indigo-600 dark:text-gray-100': open }">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Dropdown
                                                <!-- caret -->
                                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                                        fill="currentColor" viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 pl-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md mb-4"
                                                style="min-width: 12rem;display:none" x-description="Dropdown menu"
                                                x-show="open" role="menu" aria-orientation="vertical"
                                                aria-labelledby="mobiledrop-02">
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="mobilesub-01"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                        x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-600 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width=".8rem"
                                                                height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem;display:none"
                                                        x-description="Dropdown menu" x-show="open" role="menu"
                                                        aria-orientation="vertical" aria-labelledby="mobilesub-01">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="dropdowns.html#">Sub dropdown item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="dropdowns.html#">Sub dropdown item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="dropdowns.html#">Sub dropdown item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="mobilesub-02"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                        x-bind:aria-expanded="open"
                                                        :class="{ 'text-indigo-600 dark:text-gray-100': open }">
                                                        Dropdown item
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width=".8rem"
                                                                height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem;display:none"
                                                        x-description="Dropdown menu" x-show="open" role="menu"
                                                        aria-orientation="vertical" aria-labelledby="mobilesub-02">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="dropdowns.html#">Sub dropdown item</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="dropdowns.html#">Sub dropdown item</a></li>
                                                    </ul>
                                                </li>
                                                <!--end submenu-->

                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="dropdowns.html#">Dropdown item</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="relative">
                                            <a class="group block py-3 px-0 hover:text-indigo-600 focus:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="dropdowns.html#">
                                                <span
                                                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                Services
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- dropdown with submenu--&gt;
                        &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                          &lt;a id="mobiledrop-02" class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-600 dark:text-gray-100': open }"&gt;
                            &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
                            Dropdown
                            &lt;!-- caret --&gt;
                            &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                              &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;

                          &lt;!-- dropdown menu --&gt;
                          &lt;ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 pl-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md mb-4" style="min-width: 12rem;display:none" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-02"&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;

                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                              &lt;a id="mobilesub-01" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-600 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800" style="min-width: 12rem;display:none" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="mobilesub-01"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Sub dropdown item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Sub dropdown item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Sub dropdown item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;

                            &lt;!--submenu--&gt;
                            &lt;li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"&gt;
                              &lt;a id="mobilesub-02" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-600 dark:text-gray-100': open }"&gt;
                                Dropdown item
                                &lt;!-- caret --&gt;
                                &lt;span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1"&gt;
                                  &lt;svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                              &lt;/a&gt;

                              &lt;!--dropdown submenu--&gt;
                              &lt;ul class="block border-l-2 border-indigo-600 rounded rounded-t-none top-full z-50 ml-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800" style="min-width: 12rem;display:none" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="mobilesub-02"&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Sub dropdown item&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Sub dropdown item&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;&lt;!--end submenu--&gt;

                            &lt;li class="relative"&gt;
                              &lt;a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-600 dark:hover:text-gray-100 dark:focus:text-gray-100" href="#"&gt;Dropdown item&lt;/a&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                      </code>
                    </pre>
                                <p class="mb-4"><span class="text-red-700 font-bold uppercase">Note:</span> You can
                                    insert dropdown menu code in <a href="navbar.html#navbar-dropdowns"
                                        class="text-indigo-500">navbar mobile dropdown</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-admin-layout>