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
                <p class="text-xl font-bold mt-3 mb-5">List Group</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">List groups are a flexible
                                and powerful component for displaying a series of content. Modify and extend them to
                                support just about any content within.</p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <p class="mb-4">The most basic list group is an unordered list with list items and the
                                proper classes.</p>
                            <!-- example -->
                            <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <ul class="px-0 border-b border-gray-200 dark:border-gray-700">
                                    <li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4">
                                        An item</li>
                                    <li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4">
                                        A second item</li>
                                    <li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4">
                                        A third item</li>
                                    <li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4">
                                        A fourth item</li>
                                    <li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4">
                                        And a fifth one</li>
                                </ul>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;ul class="px-0 border-b border-gray-200 dark:border-gray-700"&gt;
			                    &lt;li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4"&gt;An item&lt;/li&gt;
			                    &lt;li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4"&gt;A second item&lt;/li&gt;
			                    &lt;li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4"&gt;A third item&lt;/li&gt;
			                    &lt;li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4"&gt;A fourth item&lt;/li&gt;
			                    &lt;li class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4" &gt;And a fifth one&lt;/li&gt;
			                  &lt;/ul&gt;
			                </code>
			              </pre>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">List group with
                                active item</h2>
                            <!-- example -->
                            <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <ul x-data="{ item: '1' }" class="px-0 border-b border-gray-200 dark:border-gray-700">
                                    <li :class="{ 'bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500">
                                        An item</li>
                                    <li :class="{ 'bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500">
                                        A second item</li>
                                    <li :class="{ 'bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500">
                                        A third item</li>
                                    <li :class="{ 'bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500">
                                        A fourth item</li>
                                    <li :class="{ 'bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500">
                                        And a fifth one</li>
                                </ul>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;ul x-data="{ item: '1' }" class="px-0 border-b border-gray-200 dark:border-gray-700"&gt;
			                    &lt;li :class="{ 'bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500"&gt;An item&lt;/li&gt;
			                    &lt;li :class="{ 'bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500"&gt;A second item&lt;/li&gt;
			                    &lt;li :class="{ 'bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500"&gt;A third item&lt;/li&gt;
			                    &lt;li :class="{ 'bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500"&gt;A fourth item&lt;/li&gt;
			                    &lt;li :class="{ 'bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="py-3 px-4 border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm hover:text-white hover:bg-indigo-500"&gt;And a fifth one&lt;/li&gt;
			                  &lt;/ul&gt;
			                </code>
			              </pre>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">List group with
                                badge</h2>
                            <!-- example -->
                            <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <ul class="px-0 border-b border-gray-200 dark:border-gray-700">
                                    <li class="group">
                                        <a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="list-group.html#">
                                            An item
                                            <span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white">14</span>
                                        </a>
                                    </li>
                                    <li class="group">
                                        <a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="list-group.html#">
                                            A second item
                                            <span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white">14</span>
                                        </a>
                                    </li>
                                    <li class="group">
                                        <a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="list-group.html#">
                                            A third item
                                            <span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white">14</span>
                                        </a>
                                    </li>
                                    <li class="group">
                                        <a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="list-group.html#">
                                            A fourth item
                                            <span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white">14</span>
                                        </a>
                                    </li>
                                    <li class="group">
                                        <a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="list-group.html#">
                                            And a fifth one
                                            <span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white">14</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;ul class="px-0 border-b border-gray-200 dark:border-gray-700"&gt;
			                    &lt;li class="group"&gt;
			                      &lt;a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="#"&gt;
			                        An item
			                        &lt;span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white"&gt;14&lt;/span&gt;
			                      &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li class="group"&gt;
			                      &lt;a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="#"&gt;
			                        A second item
			                        &lt;span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white"&gt;14&lt;/span&gt;
			                      &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li class="group"&gt;
			                      &lt;a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="#"&gt;
			                        A third item
			                        &lt;span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white"&gt;14&lt;/span&gt;
			                      &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li class="group"&gt;
			                      &lt;a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="#"&gt;
			                        A fourth item
			                        &lt;span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white"&gt;14&lt;/span&gt;
			                      &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li class="group"&gt;
			                      &lt;a class="border border-gray-200 dark:border-gray-700 border-b-0 list-none rounded-sm py-3 px-4 flex justify-between items-center group-hover:text-white group-hover:bg-indigo-500" href="#"&gt;
			                        And a fifth one
			                        &lt;span class="text-sm py-1 px-2 bg-indigo-500 text-gray-100 rounded group-hover:text-indigo-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 dark:group-hover:text-white"&gt;14&lt;/span&gt;
			                      &lt;/a&gt;
			                    &lt;/li&gt;
			                  &lt;/ul&gt;
			                </code>
			              </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>