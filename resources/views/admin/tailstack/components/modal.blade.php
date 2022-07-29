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
                <h1 class="text-xl font-bold mt-3 mb-5">Modals</h1>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Add dialogs to your site for
                                lightboxes, user notifications, or completely custom content.</p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <!-- example -->
                            <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div x-data="{ open: false }">
                                    <div class="flex justify-center">
                                        <button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Launch
                                            Modal</Button>
                                    </div>

                                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                        <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                                <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                                <!-- modal title -->
                                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">
                                                    Title of the modal</div>
                                                <!-- modal content -->
                                                <div class="p-6 flex-grow">
                                                    <p>Woohoo, you're reading this text in a modal!</p>
                                                </div>
                                                <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                                    <button type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves
                                                        Changes</Button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div x-data="{ open: false }"&gt;
			                    &lt;!-- Button trigger modal --&gt;
			                    &lt;button @click="open = true" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Launch Modal&lt;/Button&gt;

			                    &lt;!-- Modal --&gt;
			                    &lt;div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6"&gt;
			                      &lt;div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="min-width: 500px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4"&gt;
			                        &lt;div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700"&gt;
			                          &lt;button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold"&gt;&times;&lt;/button&gt;
			                          &lt;!-- modal title --&gt;
			                          &lt;div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold"&gt;Title of the modal&lt;/div&gt;
			                          &lt;!-- modal content --&gt;
			                          &lt;div class="p-6 flex-grow"&gt;
			                            &lt;p&gt;Woohoo, you're reading this text in a modal!&lt;/p&gt;
			                          &lt;/div&gt;
			                          &lt;div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end"&gt;
			                            &lt;button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2"&gt;Close&lt;/Button&gt;
			                            &lt;button type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Saves Changes&lt;/Button&gt;
			                          &lt;/div&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"&gt;&lt;/div&gt;
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