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
                    <p class="text-xl font-bold mt-3 mb-5">Progress</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                    for using custom progress bars featuring support for stacked bars, animated
                                    backgrounds, and text labels.</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                                <p class="mb-4">Example progress bar.</p>
                                <!-- example -->
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- progress -->
                                    <div class="flex h-4 overflow-hidden bg-blue-100 rounded mb-4">
                                        <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-blue-700"
                                            role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">25%</div>
                                    </div>
                                    <!-- progress -->
                                    <div class="flex h-4 overflow-hidden bg-red-100 rounded mb-4">
                                        <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-red-700"
                                            role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                            aria-valuemax="100">45%</div>
                                    </div>
                                    <!-- progress -->
                                    <div class="flex h-4 overflow-hidden bg-yellow-100 rounded mb-4">
                                        <div class="flex flex-col justify-center overflow-hidden text-gray-800 text-center whitespace-nowrap bg-yellow-300"
                                            role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                            aria-valuemax="100">85%</div>
                                    </div>
                                    <!-- progress -->
                                    <div class="flex h-4 overflow-hidden bg-green-100 rounded mb-4">
                                        <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-green-700"
                                            role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
                                            aria-valuemax="100">95%</div>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- progress --&gt;
			                  &lt;div class="flex h-4 overflow-hidden bg-blue-100 rounded mb-4"&gt;
			                    &lt;div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-blue-700" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- progress --&gt;
			                  &lt;div class="flex h-4 overflow-hidden bg-red-100 rounded mb-4"&gt;
			                    &lt;div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-red-700" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"&gt;45%&lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- progress --&gt;
			                  &lt;div class="flex h-4 overflow-hidden bg-yellow-100 rounded mb-4"&gt;
			                    &lt;div class="flex flex-col justify-center overflow-hidden text-gray-800 text-center whitespace-nowrap bg-yellow-300" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"&gt;85%&lt;/div&gt;
			                  &lt;/div&gt;
			                  &lt;!-- progress --&gt;
			                  &lt;div class="flex h-4 overflow-hidden bg-green-100 rounded mb-4"&gt;
			                    &lt;div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-green-700" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"&gt;95%&lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Vertical
                                    progress</h2>
                                <p class="mb-4">Example vertical progress bar.</p>
                                <!-- example -->
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- vertical progress -->
                                    <div class="flex flex-wrap flex-row -mx-4">
                                        <!-- Vertical Progress Bar -->
                                        <div class="flex-shrink w-1/4 px-4 max-w-full text-center">
                                            <div
                                                class="flex flex-col flex-nowrap justify-end bg-blue-500 dark:bg-opacity-40 h-48 rounded mb-4">
                                                <div class="relative bg-blue-700" style="height:73%"><span
                                                        class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold">73%</span>
                                                </div>
                                            </div>
                                            <p class="text-lg leading-normal mb-2 font-normal text-gray-800">UI/UX</p>
                                        </div>

                                        <!-- Vertical Progress Bar -->
                                        <div class="flex-shrink w-1/4 px-4 max-w-full text-center">
                                            <div
                                                class="flex flex-col flex-nowrap justify-end bg-red-500 dark:bg-opacity-40 h-48 rounded mb-4">
                                                <div class="relative bg-red-700" style="height:53%"><span
                                                        class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold">53%</span>
                                                </div>
                                            </div>
                                            <p class="text-lg leading-normal mb-2 font-normal text-gray-800">SEO</p>
                                        </div>

                                        <!-- Vertical Progress Bar -->
                                        <div class="flex-shrink w-1/4 px-4 max-w-full text-center">
                                            <div
                                                class="flex flex-col flex-nowrap justify-end bg-yellow-500 dark:bg-opacity-40 h-48 rounded mb-4">
                                                <div class="relative bg-yellow-300" style="height:83%"><span
                                                        class="w-full text-gray-800 pt-2 absolute left=0 right-0 py-1 font-bold">83%</span>
                                                </div>
                                            </div>
                                            <p class="text-lg leading-normal mb-2 font-normal text-gray-800">Web</p>
                                        </div>

                                        <!-- Vertical Progress Bar -->
                                        <div class="flex-shrink w-1/4 px-4 max-w-full text-center">
                                            <div
                                                class="flex flex-col flex-nowrap justify-end bg-green-500 dark:bg-opacity-40 h-48 rounded mb-4">
                                                <div class="relative bg-green-700" style="height:93%"><span
                                                        class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold">93%</span>
                                                </div>
                                            </div>
                                            <p class="text-lg leading-normal mb-2 font-normal text-gray-800">Apps</p>
                                        </div>
                                    </div>
                                </div>

                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- vertical progress --&gt;
			                  &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
			                    &lt;!-- Vertical Progress Bar --&gt;
			                    &lt;div class="flex-shrink w-1/4 px-4 max-w-full text-center"&gt;
			                      &lt;div class="flex flex-col flex-nowrap justify-end bg-blue-500 dark:bg-opacity-40 h-48 rounded mb-4"&gt;
			                        &lt;div class="relative bg-blue-700" style="height:73%"&gt;&lt;span class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold"&gt;73%&lt;/span&gt;&lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p class="text-lg leading-normal mb-2 font-normal text-gray-800"&gt;UI/UX&lt;/p&gt;
			                    &lt;/div&gt;

			                    &lt;!-- Vertical Progress Bar --&gt;
			                    &lt;div class="flex-shrink w-1/4 px-4 max-w-full text-center"&gt;
			                      &lt;div class="flex flex-col flex-nowrap justify-end bg-red-500 dark:bg-opacity-40 h-48 rounded mb-4"&gt;
			                        &lt;div class="relative bg-red-700" style="height:53%"&gt;&lt;span class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold"&gt;53%&lt;/span&gt;&lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p class="text-lg leading-normal mb-2 font-normal text-gray-800"&gt;SEO&lt;/p&gt;
			                    &lt;/div&gt;

			                    &lt;!-- Vertical Progress Bar --&gt;
			                    &lt;div class="flex-shrink w-1/4 px-4 max-w-full text-center"&gt;
			                      &lt;div class="flex flex-col flex-nowrap justify-end bg-yellow-500 dark:bg-opacity-40 h-48 rounded mb-4"&gt;
			                        &lt;div class="relative bg-yellow-300" style="height:83%"&gt;&lt;span class="w-full text-gray-800 pt-2 absolute left=0 right-0 py-1 font-bold"&gt;83%&lt;/span&gt;&lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p class="text-lg leading-normal mb-2 font-normal text-gray-800"&gt;Web&lt;/p&gt;
			                    &lt;/div&gt;

			                    &lt;!-- Vertical Progress Bar --&gt;
			                    &lt;div class="flex-shrink w-1/4 px-4 max-w-full text-center"&gt;
			                      &lt;div class="flex flex-col flex-nowrap justify-end bg-green-500 dark:bg-opacity-40 h-48 rounded mb-4"&gt;
			                        &lt;div class="relative bg-green-700" style="height:93%"&gt;&lt;span class="w-full text-white pt-2 absolute left=0 right-0 py-1 font-bold"&gt;93%&lt;/span&gt;&lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;p class="text-lg leading-normal mb-2 font-normal text-gray-800"&gt;Apps&lt;/p&gt;
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