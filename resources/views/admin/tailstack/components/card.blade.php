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
                    <p class="text-xl font-bold mt-3 mb-5">Cards</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Taildash cards provide a
                                    flexible and extensible content container with multiple variants and options.</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Default card
                                </h2>
                                <p class="mb-4">Taildash default vertical card.</p>
                                <!-- example -->
                                <div class="bg-gray-100 p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <div class="flex flex-wrap flex-row -mx-4">
                                        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                                            <!-- card -->
                                            <div class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden shadow">
                                                <div class="relative overflow-hidden">
                                                    <a href="card.html#">
                                                        <div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10">
                                                        </div>
                                                        <img class="max-w-full h-auto" src="/img/products/product1.jpg" alt="alt title">
                                                    </a>
                                                </div>
                                                <div class="p-6 flex-1">
                                                    <div class="mb-2">
                                                        <h3 class="text-lg leading-normal mb-3 font-bold text-gray-800 dark:text-gray-300">
                                                            <a href="card.html#" class="hover:text-indigo-700">New web
                                                                design layout trends in 2021</a>
                                                        </h3>
                                                        <div class="text-gray-500">
                                                            <svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                                                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                            </svg><span>04 May 2020</span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore
                                                        ducimus est, excepturi nam odit possimus.</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                                            <!-- card -->
                                            <div class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden">
                                                <div class="relative overflow-hidden">
                                                    <a href="card.html#">
                                                        <div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10">
                                                        </div>
                                                        <img class="max-w-full h-auto" src="/img/products/product2.jpg" alt="alt title">
                                                    </a>
                                                </div>
                                                <div class="p-6 flex-1">
                                                    <div class="mb-2">
                                                        <h3 class="text-lg leading-normal mb-3 font-bold text-gray-800 dark:text-gray-300">
                                                            <a href="card.html#" class="hover:text-indigo-700">New web
                                                                design layout trends in 2021</a>
                                                        </h3>
                                                        <div class="text-gray-500">
                                                            <svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                                                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                            </svg><span>04 May 2020</span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore
                                                        ducimus est, excepturi nam odit possimus.</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                                            <!-- card -->
                                            <div class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden">
                                                <div class="relative overflow-hidden">
                                                    <a href="card.html#">
                                                        <div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10">
                                                        </div>
                                                        <img class="max-w-full h-auto" src="/img/products/product3.jpg" alt="alt title">
                                                    </a>
                                                </div>
                                                <div class="p-6 flex-1">
                                                    <div class="mb-2">
                                                        <h3 class="text-lg leading-normal mb-3 font-bold text-gray-800 dark:text-gray-300">
                                                            <a href="card.html#" class="hover:text-indigo-700">New web
                                                                design layout trends in 2021</a>
                                                        </h3>
                                                        <div class="text-gray-500">
                                                            <svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                                                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                            </svg><span>04 May 2020</span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore
                                                        ducimus est, excepturi nam odit possimus.</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- card --&gt;
			                  &lt;div class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden shadow"&gt;
			                    &lt;div class="relative overflow-hidden"&gt;
			                      &lt;a href="#"&gt;
			                        &lt;div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"&gt;&lt;/div&gt;
			                        &lt;img class="max-w-full h-auto" src="/img/products/product1.jpg" alt="alt title"&gt;
			                      &lt;/a&gt;
			                    &lt;/div&gt;
			                    &lt;div class="p-6 flex-1"&gt;
			                      &lt;div class="mb-2"&gt;
			                        &lt;h3 class="text-lg leading-normal mb-3 font-bold text-gray-800 dark:text-gray-300"&gt;&lt;a href="#" class="hover:text-indigo-700"&gt;New web design layout trends in 2021&lt;/a&gt;&lt;/h3&gt;
			                        &lt;div class="text-gray-500"&gt;
			                          &lt;svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                              &lt;path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;&lt;span&gt;04 May 2020&lt;/span&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.&lt;/p&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;&lt;!-- end card --&gt;

			                  &lt;!-- card --&gt;
			                  &lt;div class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden shadow"&gt;
			                    &lt;div class="relative overflow-hidden"&gt;
			                      &lt;a href="#"&gt;
			                        &lt;div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"&gt;&lt;/div&gt;
			                        &lt;img class="max-w-full h-auto" src="/img/products/product1.jpg" alt="alt title"&gt;
			                      &lt;/a&gt;
			                    &lt;/div&gt;
			                    &lt;div class="p-6 flex-1"&gt;
			                      &lt;div class="mb-2"&gt;
			                        &lt;h3 class="text-lg leading-normal mb-3 font-bold text-gray-800 dark:text-gray-300"&gt;&lt;a href="#" class="hover:text-indigo-700"&gt;New web design layout trends in 2021&lt;/a&gt;&lt;/h3&gt;
			                        &lt;div class="text-gray-500"&gt;
			                          &lt;svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                              &lt;path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;&lt;span&gt;04 May 2020&lt;/span&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.&lt;/p&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;&lt;!-- end card --&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Horizontal card
                                </h2>
                                <p class="mb-4">Taildash default horizontal card.</p>
                                <!-- example -->
                                <div class="bg-gray-100 p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- card start -->
                                    <div class="flex flex-col lg:flex-row bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden">
                                        <div class="relative overflow-hidden lg:flex-shrink lg:w-1/3 rounded">
                                            <a href="card.html#">
                                                <div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10">
                                                </div>
                                                <img class="max-w-full h-auto" src="/img/products/product1.jpg" alt="alt title">
                                            </a>
                                        </div>
                                        <div class="p-6 flex-1 lg:flex-shrink lg:w-2/3">
                                            <div class="mb-2">
                                                <h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800 dark:text-gray-300">
                                                    <a href="card.html#" class="hover:text-indigo-700">New web design
                                                        layout trends in 2021</a>
                                                </h3>
                                                <div class="text-gray-500">
                                                    <svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                                                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                    </svg><span>04 May 2020</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus
                                                est, excepturi nam odit possimus.</p>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- card start --&gt;
			                  &lt;div class="flex flex-col lg:flex-row bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden"&gt;
			                    &lt;div class="relative overflow-hidden lg:flex-shrink lg:w-1/3 rounded"&gt;
			                      &lt;a href="#"&gt;
			                        &lt;div class="absolute inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"&gt;&lt;/div&gt;
			                        &lt;img class="max-w-full h-auto" src="/img/products/product1.jpg" alt="alt title"&gt;
			                      &lt;/a&gt;
			                    &lt;/div&gt;
			                    &lt;div class="p-6 flex-1 lg:flex-shrink lg:w-2/3"&gt;
			                      &lt;div class="mb-2"&gt;
			                        &lt;h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800 dark:text-gray-300"&gt;&lt;a href="#" class="hover:text-indigo-700"&gt;New web design layout trends in 2021&lt;/a&gt;&lt;/h3&gt;
			                        &lt;div class="text-gray-500"&gt;
			                          &lt;svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                              &lt;path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;&lt;span&gt;04 May 2020&lt;/span&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.&lt;/p&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;&lt;!-- end card --&gt;
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