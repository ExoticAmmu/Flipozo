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
          <p class="text-xl font-bold mt-3 mb-5">Pagination</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                  for showing pagination to indicate a series of related content exists across
                  multiple pages.</p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                <p class="mb-4">Example pagination with active page.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <!-- left pagination -->
                  <nav aria-label="Page navigation">
                    <ul x-data="{ item: '1' }" class="flex justify-start space-x-0">
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative p-3 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 ltr:rounded-l rtl:rounded-r dark:bg-gray-800 dark:border-gray-700" href="pagination.html#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">1</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">2</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">3</a></li>
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="pagination.html#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <!-- center pagination -->
                  <nav aria-label="Page navigation">
                    <ul x-data="{ item: '1' }" class="flex justify-center space-x-0">
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-l rtl:rounded-r" href="pagination.html#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">1</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">2</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">3</a></li>
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="pagination.html#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <!-- right pagination -->
                  <nav aria-label="Page navigation">
                    <ul x-data="{ item: '1' }" class="flex justify-end space-x-0">
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-l rtl:rounded-r" href="pagination.html#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">1</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">2</a></li>
                      <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="pagination.html#">3</a></li>
                      <li>
                        <a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="pagination.html#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
&lt;!-- left pagination --&gt;
&lt;nav aria-label="Page navigation"&gt;
  &lt;ul x-data="{ item: '1' }" class="flex justify-start space-x-0"&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative p-3 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 ltr:rounded-l rtl:rounded-r dark:bg-gray-800 dark:border-gray-700" href="#" aria-label="Previous"&gt;
        &lt;span aria-hidden="true"&gt;&laquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="#" aria-label="Next"&gt;
        &lt;span aria-hidden="true"&gt;&raquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- center pagination --&gt;
&lt;nav aria-label="Page navigation"&gt;
  &lt;ul x-data="{ item: '1' }" class="flex justify-center space-x-0"&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-l rtl:rounded-r" href="#" aria-label="Previous"&gt;
        &lt;span aria-hidden="true"&gt;&laquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="#" aria-label="Next"&gt;
        &lt;span aria-hidden="true"&gt;&raquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- right pagination --&gt;
&lt;nav aria-label="Page navigation"&gt;
  &lt;ul x-data="{ item: '1' }" class="flex justify-end space-x-0"&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '1' }" @click="item = '1'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-l rtl:rounded-r" href="#" aria-label="Previous"&gt;
        &lt;span aria-hidden="true"&gt;&laquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 -mr-0.5 dark:bg-gray-800 dark:border-gray-700" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
      &lt;a :class="{ 'bg-indigo-500 dark:bg-indigo-500 text-gray-100': item === '5' }" @click="item = '5'" class="block relative py-3 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="#" aria-label="Next"&gt;
        &lt;span aria-hidden="true"&gt;&raquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
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