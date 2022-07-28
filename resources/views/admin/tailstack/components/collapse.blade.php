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
                    <p class="text-xl font-bold mt-3 mb-5">Collapse</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Toggle the visibility of
                                    content across your project with a few classes and Alpine js</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                                <p class="mb-4">Click the buttons below to show and hide another element via alpine js
                                </p>
                                <!-- example -->
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <div x-data="{open:false}">
                                        <p class="flex">
                                            <a x-on:click.prevent="open=!open"
                                                class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">
                                                Link with href
                                            </a>
                                            <button @click="open=!open"
                                                class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                type="button">
                                                Button with data-target
                                            </button>
                                        </p>
                                        <div x-show="open" class="border px-4 py-3 my-2 dark:border-gray-700">
                                            Some placeholder content for the collapse component. This panel is hidden by
                                            default but revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div x-data="{open:false}"&gt;
			                    &lt;p class="flex"&gt;
			                      &lt;a x-on:click.prevent="open=!open" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2"&gt;
			                      Link with href
			                      &lt;/a&gt;
			                      &lt;button  @click="open=!open" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button"&gt;
			                      Button with data-target
			                      &lt;/button&gt;
			                    &lt;/p&gt; 
			                    &lt;div x-show="open" class="border px-4 py-3 my-2 dark:border-gray-700"&gt;
			                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
    </main>

</x-admin-layout>