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
                    <p class="text-xl font-bold mt-3 mb-5">Badges</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                    for badges, our small count and labeling component.</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                                <p class="mb-4">Example badge for heading element.</p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <h1 class="text-4xl leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h1>
                                    <h2 class="text-3xl leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h2>
                                    <h3 class="text-2xl leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h3>
                                    <h4 class="text-xl leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h4>
                                    <h5 class="text-lg leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h5>
                                    <h6 class="text-base leading-normal mb-2">Example heading <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">New</span></h6>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;h1 class="text-4xl leading-normal mb-2">Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h1&gt;
			                  &lt;h2 class="text-3xl leading-normal mb-2"&gt;Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h2&gt;
			                  &lt;h3 class="text-2xl leading-normal mb-2"&gt;Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h3&gt;
			                  &lt;h4 class="text-xl leading-normal mb-2"&gt;Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h4&gt;
			                  &lt;h5 class="text-lg leading-normal mb-2"&gt;Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h5&gt;
			                  &lt;h6 class="text-base leading-normal mb-2"&gt;Example heading &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;New&lt;/span&gt;&lt;/h6&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-12">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Badge with
                                    colors</h2>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;">Primary</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-red-700 text-gray-100 font-bold rounded" style="font-size: .75em;">Danger</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-yellow-300 text-gray-900 font-bold rounded" style="font-size: .75em;">Warning</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-green-700 text-gray-100 font-bold rounded" style="font-size: .75em;">Success</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-blue-400 text-gray-900 font-bold rounded" style="font-size: .75em;">Info</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded" style="font-size: .75em;">Light</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-black text-gray-100 font-bold rounded" style="font-size: .75em;">Dark</span>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;Primary&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-red-700 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;Danger&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-yellow-300 text-gray-900 font-bold rounded" style="font-size: .75em;"&gt;Warning&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-green-700 text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;Success&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-blue-400 text-gray-900 font-bold rounded" style="font-size: .75em;"&gt;Info&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded" style="font-size: .75em;"&gt;Light&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-black text-gray-100 font-bold rounded" style="font-size: .75em;"&gt;Dark&lt;/span&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-12">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Pill Badge with
                                    colors</h2>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded-xl" style="font-size: .75em;">Primary</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-red-700 text-gray-100 font-bold rounded-xl" style="font-size: .75em;">Danger</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-yellow-300 text-gray-900 font-bold rounded-xl" style="font-size: .75em;">Warning</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-green-700 text-gray-100 font-bold rounded-xl" style="font-size: .75em;">Success</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-blue-400 text-gray-900 font-bold rounded-xl" style="font-size: .75em;">Info</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded-xl" style="font-size: .75em;">Light</span>
                                    <span class="inline-block leading-none text-center py-1 px-2 bg-black text-gray-100 font-bold rounded-xl" style="font-size: .75em;">Dark</span>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-indigo-500 text-gray-100 font-bold rounded-xl" style="font-size: .75em;"&gt;Primary&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-red-700 text-gray-100 font-bold rounded-xl" style="font-size: .75em;"&gt;Danger&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-yellow-300 text-gray-900 font-bold rounded-xl" style="font-size: .75em;"&gt;Warning&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-green-700 text-gray-100 font-bold rounded-xl" style="font-size: .75em;"&gt;Success&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-blue-400 text-gray-900 font-bold rounded-xl" style="font-size: .75em;"&gt;Info&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded-xl" style="font-size: .75em;"&gt;Light&lt;/span&gt;
			                  &lt;span class="inline-block leading-none text-center py-1 px-2 bg-black text-gray-100 font-bold rounded-xl" style="font-size: .75em;"&gt;Dark&lt;/span&gt;
			                </code>
			              </pre>
                            </div>

                            <div class="mb-12">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Badge in button
                                </h2>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <a href="badge.html#" class="py-3 px-5 ltr:-ml-1 rtl:-mr-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-600 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Notifications <span class="ml-2 inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded" style="font-size: .75em;">6</span>
                                    </a>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;a href="#" class="py-3 px-5 ltr:-ml-1 rtl:-mr-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-600 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                    Notifications &lt;span class="ml-2 inline-block leading-none text-center py-1 px-2 bg-gray-100 text-gray-900 font-bold rounded" style="font-size: .75em;"&gt;6&lt;/span&gt;
			                  &lt;/a&gt;
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