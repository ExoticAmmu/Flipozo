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
                <p class="text-xl font-bold mt-3 mb-5">Grid</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Use our powerful mobile-first
                                flexbox grid to build layouts of all shapes and sizes thanks to a twelve column
                                system.</p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Default
                                container</h2>
                            <p class="mb-4">Our default .container class is a responsive, fixed-width container,
                                meaning its max-width changes at each breakpoint.</p>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="container xl:max-w-6xl mx-auto px-4"&gt;
			                    &lt;!-- Content here --&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            <p class="mt-4">After creating the container, then please create grid rows and columns
                            </p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Row Column</h2>
                            <p class="mb-4">Tailback’s grid system uses a series of containers, rows, and columns to
                                layout and align content.</p>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;!-- Grid column in here --&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Grid column</h2>
                            <p class="mb-4"></p>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/4"&gt;
			                    &lt;!-- Content here --&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            <p>You can edit grid column with change <code class="text-pink-700">w-full md:w-1/2 lg:w-1/3 xl:w-1/4</code></p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example
                                Responsive Grid</h2>
                            <p class="mb-4"></p>
                            <!-- example -->
                            <div class="bg-white p-12 border text-center border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                      example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                      example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                      example content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            <p>You can edit grid column with change <code class="text-pink-700">w-full lg:w-1/3</code></p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">12 Grid Column
                            </h2>
                            <p class="mb-4"></p>
                            <!-- example -->
                            <div class="bg-white p-12 border border-gray-200 text-center dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <!-- row 1 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4 justify-center">
                                    <div class="max-w-full px-4 w-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 2 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 3 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 4 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 5 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4 justify-center">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 6 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">example content</div>
                                    </div>
                                </div>
                                <!-- row 12 -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="py-5 h-20 w-full">content</div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- row with column 1 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4 justify-center"&gt;
			                    &lt;div class="max-w-full px-4 w-full"&gt;
			                       example content    
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 2 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/2"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/2"&gt;
			                       example content 
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 3 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                       example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/3"&gt;
			                       example content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 4 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4"&gt;
			                       example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4"&gt;
			                       example content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/4"&gt;
			                       example content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 5 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4 justify-center"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5"&gt;
			                       example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5"&gt;
			                       example content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5"&gt;
			                       example content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/5"&gt;
			                       example content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 6 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:w-1/3 xl:w-1/6"&gt;
			                       example content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row with column 12 --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 lg:w-1/6 xl:w-1/12"&gt;
			                       content
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            <p>You can edit responsive grid column with change <code class="text-pink-700">sm:, md:, lg:, xl:</code></p>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Mix Responsive
                                Grid</h2>
                            <p class="mb-4"></p>
                            <!-- example -->
                            <div class="bg-white p-12 border text-center border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <!-- row -->
                                <div class="flex flex-wrap flex-row -mx-4 mb-4">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">.w-1/3</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-2/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">.w-2/3</div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">.w-1/6</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">.w-2/3</div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/6 border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="p-5 h-20 w-full">.w-1/6</div>
                                    </div>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- row --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3"&gt;
			                       .w-1/3    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full md:w-2/3"&gt;
			                       .w-2/3 
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- row --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/6"&gt;
			                       .w-1/6    
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-2/3"&gt;
			                       .w-2/3 
			                    &lt;/div&gt;
			                    &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/6"&gt;
			                       .w-1/6
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            <p>You can see complete width of Tailwind css in here <a target="_blank" class="text-blue-500" href="https://tailwindcss.com/docs/width">Tailwindcss
                                    Width</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>