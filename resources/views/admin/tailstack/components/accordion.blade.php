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
          <p class="text-xl font-bold mt-3 mb-5">Accordions</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="text-lg mb-6 font-light">Build vertically collapsing accordions in combination
                  with Alpinejs plugin. The accordion uses collapse internally to make it collapsible.
                </p>

                <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-700 dark:bg-opacity-20 dark:border-gray-800">
                  <div id="Accordione" x-data="{selected:0}">
                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                      <div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingOnee">
                        <div class="d-grid mb-0">
                          <button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 0 ? selected = 0 : selected = null">
                            How is the SEO services system at Taidash?
                            <span>
                              <svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 0 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div id="CollapseOnee" x-show="selected == 0">
                        <div class="flex-1 p-6">
                          <p>The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                        </div>
                      </div>
                    </div>

                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                      <div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingTwoe">
                        <div class="d-grid mb-0">
                          <button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 1 ? selected = 1 : selected = null">
                            How many keywords are optimized?
                            <span>
                              <svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 1 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div id="CollapseTwoe" x-show="selected == 1">
                        <div class="flex-1 p-6">
                          <p>The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                        </div>
                      </div>
                    </div>

                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                      <div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingThreee">
                        <div class="d-grid mb-0">
                          <button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 2 ? selected = 2 : selected = null">
                            Do you offer any discounted plans?
                            <span>
                              <svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 2 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div id="CollapseThreee" x-show="selected == 2">
                        <div class="flex-1 p-6">
                          <p>The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                        </div>
                      </div>
                    </div>

                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                      <div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingFoure">
                        <div class="d-grid mb-0">
                          <button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 3 ? selected = 3 : selected = null">
                            Can I cancel my account at any time?
                            <span>
                              <svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 3 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div id="CollapseFoure" x-show="selected == 3">
                        <div class="flex-1 p-6">
                          <p>The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div id="Accordione" x-data="{selected:0}"&gt;
			                    &lt;!-- list --&gt;
			                    &lt;div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800"&gt;
			                      &lt;div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingOnee"&gt;
			                        &lt;div class="d-grid mb-0"&gt;
			                          &lt;button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"  @click="selected !== 0 ? selected = 0 : selected = null"&gt;
			                            How is the SEO services system at Taidash?
			                            &lt;span&gt;
			                              &lt;svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 0 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                                &lt;path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;/svg&gt;
			                            &lt;/span&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;div id="CollapseOnee" x-show="selected == 0"&gt;
			                        &lt;div class="flex-1 p-6"&gt;
			                          &lt;p&gt;The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.&lt;/p&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                    &lt;/div&gt;

			                    &lt;!-- list --&gt;
			                    &lt;div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800"&gt;
			                      &lt;div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingTwoe"&gt;
			                        &lt;div class="d-grid mb-0"&gt;
			                          &lt;button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 1 ? selected = 1 : selected = null"&gt;
			                            How many keywords are optimized?
			                            &lt;span&gt;
			                              &lt;svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 1 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                                &lt;path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;/svg&gt;
			                            &lt;/span&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;div id="CollapseTwoe" x-show="selected == 1"&gt;
			                        &lt;div class="flex-1 p-6"&gt;
			                          &lt;p&gt;The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.&lt;/p&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                    &lt;/div&gt;

			                    &lt;!-- list --&gt;
			                    &lt;div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800"&gt;
			                      &lt;div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingThreee"&gt;
			                        &lt;div class="d-grid mb-0"&gt;
			                          &lt;button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 2 ? selected = 2 : selected = null"&gt;
			                            Do you offer any discounted plans?
			                            &lt;span&gt;
			                              &lt;svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 2 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                                &lt;path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;/svg&gt;
			                            &lt;/span&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;div id="CollapseThreee" x-show="selected == 2"&gt;
			                        &lt;div class="flex-1 p-6"&gt;
			                          &lt;p&gt;The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.&lt;/p&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                    &lt;/div&gt;

			                    &lt;!-- list --&gt;
			                    &lt;div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800"&gt;
			                      &lt;div class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4" id="HeadingFoure"&gt;
			                        &lt;div class="d-grid mb-0"&gt;
			                          &lt;button class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0" @click="selected !== 3 ? selected = 3 : selected = null"&gt;
			                            Can I cancel my account at any time?
			                            &lt;span&gt;
			                              &lt;svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 3 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"&gt;
			                                &lt;path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"&gt;&lt;/path&gt;
			                              &lt;/svg&gt;
			                            &lt;/span&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                      &lt;div id="CollapseFoure" x-show="selected == 3"&gt;
			                        &lt;div class="flex-1 p-6"&gt;
			                          &lt;p&gt;The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.&lt;/p&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
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