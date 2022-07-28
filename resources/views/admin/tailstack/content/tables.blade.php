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
          <p class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Tables</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                  for opt-in styling of tables.</p>
              </div>

              <div class="mb-12">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Default Table
                </h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                  <table class="table-auto w-full">
                    <thead class="bg-gray-100 border-t border-l border-r dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700">
                      <tr>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Author</th>
                        <th class="px-4 py-3">Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          Intro to CSS</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          Adam</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          858</td>
                      </tr>
                      <tr>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          A Long and Winding Tour of the History of UI Frameworks and Tools
                          and the Impact on Design</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          Adam</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          112</td>
                      </tr>
                      <tr>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          Intro to JavaScript</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          Chris</td>
                        <td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium">
                          1,280</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!-- table --&gt;
                        &lt;table class="table-auto w-full"&gt;
                          &lt;thead class="bg-gray-100 border-t border-l border-r dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700"&gt;
                            &lt;tr&gt;
                              &lt;th class="px-4 py-3"&gt;Title&lt;/th&gt;
                              &lt;th class="px-4 py-3"&gt;Author&lt;/th&gt;
                              &lt;th class="px-4 py-3"&gt;Views&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;Intro to CSS&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;Adam&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;858&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;Adam&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;112&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;Intro to JavaScript&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;Chris&lt;/td&gt;
                              &lt;td class="border border-gray-200 px-4 py-3 dark:border-gray-700 font-medium"&gt;1,280&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-12">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Tables Bordered
                </h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                  <table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                      <tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Intro to CSS</td>
                        <td>Adam</td>
                        <td>858</td>
                      </tr>
                      <tr>
                        <td>A Long and Winding Tour of the History of UI Frameworks and Tools
                          and the Impact on Design</td>
                        <td>Adam</td>
                        <td>112</td>
                      </tr>
                      <tr>
                        <td>Intro to JavaScript</td>
                        <td>Chris</td>
                        <td>1,280</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400"&gt;
                          &lt;thead&gt;
                            &lt;tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40"&gt;
                              &lt;th&gt;Title&lt;/th&gt;
                              &lt;th&gt;Author&lt;/th&gt;
                              &lt;th&gt;Views&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to CSS&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;858&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;112&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to JavaScript&lt;/td&gt;
                              &lt;td&gt;Chris&lt;/td&gt;
                              &lt;td&gt;1,280&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-12">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Table small and
                  Border bottom</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                  <table class="table-sm table-bordered-bottom w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                      <tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Intro to CSS</td>
                        <td>Adam</td>
                        <td>858</td>
                      </tr>
                      <tr>
                        <td>A Long and Winding Tour of the History of UI Frameworks and Tools
                          and the Impact on Design</td>
                        <td>Adam</td>
                        <td>112</td>
                      </tr>
                      <tr>
                        <td>Intro to JavaScript</td>
                        <td>Chris</td>
                        <td>1,280</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;table class="table-sm table-bordered-bottom w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400"&gt;
                          &lt;thead&gt;
                            &lt;tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40"&gt;
                              &lt;th&gt;Title&lt;/th&gt;
                              &lt;th&gt;Author&lt;/th&gt;
                              &lt;th&gt;Views&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to CSS&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;858&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;112&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to JavaScript&lt;/td&gt;
                              &lt;td&gt;Chris&lt;/td&gt;
                              &lt;td&gt;1,280&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-12">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Table with
                  Sorter</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                  <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                      <tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Intro to CSS</td>
                        <td>Adam</td>
                        <td>858</td>
                      </tr>
                      <tr>
                        <td>A Long and Winding Tour of the History of UI Frameworks and Tools
                          and the Impact on Design</td>
                        <td>Adam</td>
                        <td>112</td>
                      </tr>
                      <tr>
                        <td>Intro to JavaScript</td>
                        <td>Chris</td>
                        <td>1,280</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400"&gt;
                          &lt;thead&gt;
                            &lt;tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40"&gt;
                              &lt;th&gt;Title&lt;/th&gt;
                              &lt;th&gt;Author&lt;/th&gt;
                              &lt;th&gt;Views&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to CSS&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;858&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;112&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to JavaScript&lt;/td&gt;
                              &lt;td&gt;Chris&lt;/td&gt;
                              &lt;td&gt;1,280&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-12">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Table small with
                  minimal Sorter</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                  <div class="hidden-header hidden-sort-after">
                    <table class="table-sorter table-sm text-sm table-bordered-bottom w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      <thead>
                        <tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
                          <th>Title</th>
                          <th>Author</th>
                          <th>Views</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Intro to CSS</td>
                          <td>Adam</td>
                          <td>858</td>
                        </tr>
                        <tr>
                          <td>A Long and Winding Tour of the History of UI Frameworks and
                            Tools and the Impact on Design</td>
                          <td>Adam</td>
                          <td>112</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <pre>
                      <code class="language-html" data-lang="html">
                        &lt;div class="hidden-header hidden-sort-after"&gt;
                        &lt;table class="table-sorter table-sm text-sm table-bordered-bottom w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400"&gt;
                          &lt;thead&gt;
                            &lt;tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40"&gt;
                              &lt;th&gt;Title&lt;/th&gt;
                              &lt;th&gt;Author&lt;/th&gt;
                              &lt;th&gt;Views&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to CSS&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;858&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design&lt;/td&gt;
                              &lt;td&gt;Adam&lt;/td&gt;
                              &lt;td&gt;112&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td&gt;Intro to JavaScript&lt;/td&gt;
                              &lt;td&gt;Chris&lt;/td&gt;
                              &lt;td&gt;1,280&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  <p class="mb-4">Demo config available in <code class="text-pink-700">src/js/demo.js</code> function <code class="text-pink-700">myTablesorter();</code></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
</x-admin-layout>