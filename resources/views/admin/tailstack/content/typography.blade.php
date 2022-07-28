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
          <p class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Typography</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                  for Space typography, including global settings, headings, body text, lists, and
                  more.</p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Heading</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <h6 class="text-4xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H1</h6>
                  <h6 class="text-3xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H2</h6>
                  <h6 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H3</h6>
                  <h6 class="text-xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H4</h6>
                  <h6 class="text-lg leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H5</h6>
                  <h6 class="text-base leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">
                    H6</h6>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;h1 class="text-4xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H1&lt;/h1&gt;
                        &lt;h2 class="text-3xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H2&lt;/h2&gt;
                        &lt;h3 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H3&lt;/h3&gt;
                        &lt;h4 class="text-xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H4&lt;/h4&gt;
                        &lt;h5 class="text-lg leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H5&lt;/h5&gt;
                        &lt;h6 class="text-base leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"&gt;H6&lt;/h6&gt;
                      </code>
                    </pre>
                <p class="my-6">Heading also can change with <code class="text-pink-700">&lt;p class="..."&gt;</code></p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-normal text-gray-800 dark:text-gray-300">Display</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <h2 class="text-8xl mb-6 font-normal text-gray-800 dark:text-gray-300">Display 1
                  </h2>
                  <h2 class="text-7xl mb-6 font-normal text-gray-800 dark:text-gray-300">Display 2
                  </h2>
                  <h2 class="text-6xl mb-6 font-normal text-gray-800 dark:text-gray-300">Display 3
                  </h2>
                  <h2 class="text-5xl mb-6 font-normal text-gray-800 dark:text-gray-300">Display 4
                  </h2>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;h2 class="text-8xl mb-6 font-normal text-gray-800 dark:text-gray-300"&gt;Display 1&lt;/h2&gt;
                        &lt;h2 class="text-7xl mb-6 font-normal text-gray-800 dark:text-gray-300"&gt;Display 2&lt;/h2&gt;
                        &lt;h2 class="text-6xl mb-6 font-normal text-gray-800 dark:text-gray-300"&gt;Display 3&lt;/h2&gt;
                        &lt;h2 class="text-5xl mb-6 font-normal text-gray-800 dark:text-gray-300"&gt;Display 4&lt;/h2&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Lead</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                    non commodo luctus.</p>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2"&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.&lt;/p&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Link</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <a href="typography.html#" class="text-indigo-500 hover:underline">Click this
                    link</a><br>
                  <a href="typography.html#" target="_blank" rel="noopener" class="text-indigo-500 hover:underline">External link</a>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;a href="#" class="text-indigo-500 hover:underline"&gt;Click this link&lt;/a&gt;
                        &lt;a href="#" target="_blank" rel="noopener" class="text-indigo-500 hover:underline"&gt;External link&lt;/a&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Text Muted</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <p class="text-gray-500">Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                    dolor auctor</p>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;p class="text-gray-500"&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800dark:text-gray-300">Blockquote</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <blockquote class="relative p-4 ltr:border-l-4 rtl:border-r-4 border-blue-700 bg-gray-100 dark:bg-gray-700 mb-4 text-xl">
                    <span class="absolute opacity-80 w-8 h-8">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270.000000 270.000000">
                        <g transform="translate(0.000000,270.000000) scale(0.100000,-0.100000)" fill="#4f46e5" stroke="none">
                          <path d="M920 2182 c-290 -124 -482 -341 -540 -610 -30 -140 -40 -296 -40 -644 l0 -328 370 0 370 0 0 370 0 370 -181 0 -181 0 7 63 c26 243 129 387 342 477 35 15 66 29 69 32 7 7 -132 298 -143 298 -4 0 -37 -13 -73 -28z">
                          </path>
                          <path d="M2179 2186 c-249 -103 -442 -295 -520 -516 -50 -142 -61 -247 -66 -677 l-5 -393 371 0 371 0 0 370 0 370 -181 0 -181 0 7 53 c21 170 67 281 150 363 51 49 143 107 215 134 19 7 39 17 44 21 10 9 -124 298 -139 298 -5 0 -35 -10 -66 -23z">
                          </path>
                        </g>
                      </svg>
                    </span>
                    <p class="ltr:ml-16 rtl:mr-16 mb-4">Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="ltr:ml-16 rtl:mr-16 text-base">Quote by <cite title="Source Title">Ari Budin</cite></footer>
                  </blockquote>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;blockquote class="relative p-4 ltr:border-l-4 rtl:border-r-4 border-blue-700 bg-gray-100 dark:bg-gray-700 mb-4 text-xl"&gt;
                          &lt;span class="absolute opacity-80 w-8 h-8"&gt;
                            &lt;svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270.000000 270.000000"&gt;&lt;g transform="translate(0.000000,270.000000) scale(0.100000,-0.100000)" fill="#4f46e5" stroke="none"&gt;&lt;path d="M920 2182 c-290 -124 -482 -341 -540 -610 -30 -140 -40 -296 -40 -644 l0 -328 370 0 370 0 0 370 0 370 -181 0 -181 0 7 63 c26 243 129 387 342 477 35 15 66 29 69 32 7 7 -132 298 -143 298 -4 0 -37 -13 -73 -28z"&gt;&lt;/path&gt;&lt;path d="M2179 2186 c-249 -103 -442 -295 -520 -516 -50 -142 -61 -247 -66 -677 l-5 -393 371 0 371 0 0 370 0 370 -181 0 -181 0 7 53 c21 170 67 281 150 363 51 49 143 107 215 134 19 7 39 17 44 21 10 9 -124 298 -139 298 -5 0 -35 -10 -66 -23z"&gt;&lt;/path&gt;&lt;/g&gt;&lt;/svg&gt;
                          &lt;/span&gt;
                          &lt;p class="ltr:ml-16 rtl:mr-16 mb-4"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                          &lt;footer class="ltr:ml-16 rtl:mr-16 text-base"&gt;Quote by &lt;cite title="Source Title"&gt;Ari Budin&lt;/cite&gt;&lt;/footer&gt;
                        &lt;/blockquote&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800">Dropcaps</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <p><span class="block ltr:float-left rtl:float-right text-6xl ltr:mr-3 rtl:ml-3 mb-3 text-center">A</span>enean
                    sodales lacus est, at ultricies augue ele ifend sit amet. <ins>Be yourself</ins>
                    everyone else is already taken, sem mi placerat felis, ac suscip ligula ex id
                    metus. Vivamus aliquet sit amet nisi non faucibus. Orci varius natoque penatibus
                    et magnis dis parturient montes. Vivamus aliquet sit amet nisi non faucibus.
                    Orci varius natoque penatibus et magnis dis parturient montes. Be yourself
                    everyone else is already taken, sem mi placerat felis, ac suscip ligula ex id
                    metus. Vivamus aliquet sit amet nisi non faucibus. Orci varius natoque penatibus
                    et magnis dis parturient montes. Vivamus aliquet sit amet nisi non faucibus.
                    Orci varius natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;p&gt;&lt;span class="block ltr:float-left rtl:float-right text-6xl ltr:mr-3 rtl:ml-3 mb-3 text-center"&gt;A&lt;/span&gt;enean sodales lacus est, at ultricies augue ele ifend sit amet. &lt;ins&gt;Be yourself&lt;/ins&gt; everyone else is already taken, sem mi placerat felis, ac suscip ligula ex id metus.&lt;/p&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800">Text inline</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                  <p><del>This line of text is meant to be treated as deleted text.</del></p>
                  <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                  <p><ins>This line of text is meant to be treated as an addition to the
                      document.</ins></p>
                  <p><u>This line of text will render as underlined</u></p>
                  <p><small>This line of text is meant to be treated as fine print.</small></p>
                  <p><strong>This line rendered as bold text.</strong></p>
                  <p><em>This line rendered as italicized text.</em></p>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
                        &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
                      </code>
                    </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800">List Ul and Ol</h2>
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                  <ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2">
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                      praesentium
                      <ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2">
                        <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                        <li>which of us ever undertakes laborious physical exercise</li>
                      </ul>
                    </li>
                    <li>Et harum quidem rerum facilis est et expedita distinctio</li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                    <li>which of us ever undertakes laborious physical exercise</li>
                  </ul>
                  <br>
                  <ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2">
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                      praesentium
                      <ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2">
                        <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                        <li>which of us ever undertakes laborious physical exercise</li>
                      </ol>
                    </li>
                    <li>Et harum quidem rerum facilis est et expedita distinctio</li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                    <li>which of us ever undertakes laborious physical exercise</li>
                  </ol>
                  <br>
                  <ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2">
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                      praesentium
                      <ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2">
                        <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                        <li>which of us ever undertakes laborious physical exercise</li>
                      </ol>
                    </li>
                    <li>Et harum quidem rerum facilis est et expedita distinctio</li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus</li>
                    <li>which of us ever undertakes laborious physical exercise</li>
                  </ul>
                </div>
                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                          &lt;li&gt;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            &lt;ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                              &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                              &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                            &lt;/ul&gt;
                          &lt;/li&gt;
                          &lt;li&gt;Et harum quidem rerum facilis est et expedita distinctio&lt;/li&gt;
                          &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                          &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                        &lt;/ul&gt;
                        
                        &lt;ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                          &lt;li&gt;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            &lt;ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                              &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                              &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                            &lt;/ol&gt;
                          &lt;/li&gt;
                          &lt;li&gt;Et harum quidem rerum facilis est et expedita distinctio&lt;/li&gt;
                          &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                          &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                        &lt;/ol&gt;

                        &lt;ul class="list-disc list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                          &lt;li&gt;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            &lt;ol class="list-decimal list-inside ltr:pl-8 rtl:pr-8 my-2"&gt;
                              &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                              &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                            &lt;/ol&gt;
                          &lt;/li&gt;
                          &lt;li&gt;Et harum quidem rerum facilis est et expedita distinctio&lt;/li&gt;
                          &lt;li&gt;Itaque earum rerum hic tenetur a sapiente delectus&lt;/li&gt;
                          &lt;li&gt;which of us ever undertakes laborious physical exercise&lt;/li&gt;
                        &lt;/ul&gt;
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