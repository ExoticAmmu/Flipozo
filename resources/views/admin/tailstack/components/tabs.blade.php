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
					    <p class="text-xl font-bold mt-3 mb-5">Tabs</p>
					  </div>                                                 
          	<div class="flex-shrink max-w-full px-4 w-full mb-6">
          		<div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
	              <div class="relative">
	              	<div class="my-6">
			              <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples for how to use tabs with Alpine js.</p>
			            </div>
			            
			            <div class="mb-12">
			              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Example tabs</h2>
			              
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <div x-data="{ tabs: 1 }" class="p-6">
			                  <ul class="flex border-b dark:border-gray-700">
			                    <li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1">
			                      <a :class="{ '-mb-px border-l border-t border-r rounded-t text-indigo-500 dark:border-gray-700': tabs === 1 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Home</a>
			                    </li>
			                    <li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1">
			                      <a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 2 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Profile</a>
			                    </li>
			                    <li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1">
			                      <a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 3 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Contact</a>
			                    </li>
			                  </ul>
			                  <div class="w-full pt-4">
			                    <div x-show="tabs === 1">
			                      <p>Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
			                    </div>
			                    <div x-show="tabs === 2">
			                      <p>Placeholder content for the tab panel. This one relates to the profile tab. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
			                    </div>
			                    <div x-show="tabs === 3">
			                      <p>Placeholder content for the tab panel. This one relates to the contact tab. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.</p>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- tabs --&gt;
			                  &lt;div x-data="{ tabs: 1 }"&gt;
			                    &lt;ul class="flex border-b dark:border-gray-700"&gt;
			                      &lt;li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1"&gt;
			                        &lt;a :class="{ '-mb-px border-l border-t border-r rounded-t text-indigo-500 dark:border-gray-700': tabs === 1 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;"&gt;Home&lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1"&gt;
			                        &lt;a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 2 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;"&gt;Profile&lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1"&gt;
			                        &lt;a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 3 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;"&gt;Contact&lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ul&gt;
			                    &lt;div class="w-full pt-4"&gt;
			                      &lt;div x-show="tabs === 1"&gt;......&lt;/div&gt;
			                      &lt;div x-show="tabs === 2"&gt;......&lt;/div&gt;
			                      &lt;div x-show="tabs === 3"&gt;......&lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-12">
			              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Vertical tabs</h2>
			              
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <div x-data="{ tabs: 1 }" class="flex justify-between -mx-4">
			                  <ul class="max-w-full px-4">
			                    <li @click="tabs = 1" :class="{ '-mr-px': tabs === 1 }" class="mr-1">
			                      <a :class="{ 'bg-indigo-500 text-gray-100 rounded dark:bg-indigo-500': tabs === 1 }" class="bg-white dark:bg-gray-800 text-center block py-2 px-4 font-semibold mb-4" href="javascript:;">Home</a>
			                    </li>
			                    <li @click="tabs = 2" :class="{ '-mr-px': tabs === 2 }" class="mr-1">
			                      <a :class="{ 'bg-indigo-500 text-gray-100 rounded dark:bg-indigo-500': tabs === 2 }" class="bg-white dark:bg-gray-800 text-center block py-2 px-4 font-semibold mb-4" href="javascript:;">Profile</a>
			                    </li>
			                    <li @click="tabs = 3" :class="{ '-mr-px': tabs === 3 }" class="mr-1">
			                      <a :class="{ 'bg-indigo-500 text-gray-100 rounded dark:bg-indigo-500': tabs === 3 }" class="bg-white dark:bg-gray-800 text-center block py-2 px-4 font-semibold mb-4" href="javascript:;">Contact</a>
			                    </li>
			                  </ul>
			                  <div class="max-w-full px-4">
			                    <div x-show="tabs === 1">
			                      <p>Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
			                    </div>
			                    <div x-show="tabs === 2">
			                      <p>Placeholder content for the tab panel. This one relates to the profile tab. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
			                    </div>
			                    <div x-show="tabs === 3">
			                      <p>Placeholder content for the tab panel. This one relates to the contact tab. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.</p>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- vertical tabs --&gt;
			                  &lt;div x-data="{ tabs: 1 }" class="flex justify-between -mx-4"&gt;
			                    &lt;ul class="max-w-full px-4"&gt;
			                      &lt;li @click="tabs = 1" :class="{ '-mr-px': tabs === 1 }" class="mr-1"&gt;
			                        &lt;a :class="{ 'bg-indigo-500 text-gray-100 rounded': tabs === 1 }" class="bg-white text-center block py-2 px-4 font-semibold mb-4" href="javascript:;"&gt;Home&lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li @click="tabs = 2" :class="{ '-mr-px': tabs === 2 }" class="mr-1"&gt;
			                        &lt;a :class="{ 'bg-indigo-500 text-gray-100 rounded': tabs === 2 }" class="bg-white text-center block py-2 px-4 font-semibold mb-4" href="javascript:;"&gt;Profile&lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li @click="tabs = 3" :class="{ '-mr-px': tabs === 3 }" class="mr-1"&gt;
			                        &lt;a :class="{ 'bg-indigo-500 text-gray-100 rounded': tabs === 3 }" class="bg-white text-center block py-2 px-4 font-semibold mb-4" href="javascript:;"&gt;Contact&lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ul&gt;
			                    &lt;div class="max-w-full px-4"&gt;
			                      &lt;div x-show="tabs === 1"&gt;......&lt;/div&gt;
			                      &lt;div x-show="tabs === 2"&gt;......&lt;/div&gt;
			                      &lt;div x-show="tabs === 3"&gt;......&lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-12">
			              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Tabs with chart.js</h2>
			              
			              <!-- example -->
			              <div class="bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-800">
                      <div x-data="{ tabs: 1 }">
											  <ul class="flex bg-gray-50 dark:bg-gray-900 dark:bg-opacity-40">
											    <li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1">
											      <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 1 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
			                        <div class="block text-center px-6">
			                          <h6 class="text-sm font-semibold nowrap block">Sessions</h6>
			                          <h5 class="text-2xl font-bold block">6.3K</h5>
			                          <div class="block items-center">
			                            <h6 class="text-sm text-green-500">
			                            	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
																		  <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
																		</svg>
				                            46.2%
				                          </h6>
			                          </div>
			                        </div>
											      </a>
											    </li>
											    <li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1">
											      <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 2 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
			                        <div class="block text-center px-6">
			                          <h6 class="text-sm font-semibold nowrap block">Sessions Duration</h6>
			                          <h5 class="text-2xl font-bold block">32m 20s</h5>
			                          <div class="block items-center">
			                            <h6 class="text-sm text-green-500">
			                            	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
																		  <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
																		</svg>
				                            16.2%
				                          </h6>
			                          </div>
			                        </div>
											      </a>
											    </li>
											    <li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1">
											      <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 3 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
			                        <div class="block text-center px-6">
			                          <h6 class="text-sm font-semibold nowrap block">Bounce Rate</h6>
			                          <h5 class="text-2xl font-bold block">50.32%</h5>
			                          <div class="block items-center">
			                            <h6 class="text-sm text-red-500">
			                            	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
																		  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
																		</svg>
				                            46.2%
				                          </h6>
			                          </div>
			                        </div>
											      </a>
											    </li>
											  </ul>
											  <div class="w-full px-6 pt-6 pb-3">
			                    <div class="relative">
			                      <canvas x-show="tabs === 1" class="max-w-100" id="SesionLine"></canvas>
			                      <canvas x-show="tabs === 2" class="max-w-100" id="SesionDuration"></canvas>
			                      <canvas x-show="tabs === 3" class="max-w-100" id="BounceLine"></canvas>
						              </div>
											  </div>
											</div>
											<pre>
												<code class="language-html" data-lang="html">
													&lt;div x-data="{ tabs: 1 }"&gt;
														&lt;ul class="flex bg-gray-50 dark:bg-gray-800"&gt;
															&lt;li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1"&gt;
																&lt;a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 1 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;"&gt;
																	&lt;div class="block text-center px-6"&gt;
																		&lt;h6 class="text-sm font-semibold nowrap block"&gt;Sessions&lt;/h6&gt;
																		&lt;h5 class="text-2xl font-bold block"&gt;6.3K&lt;/h5&gt;
																		&lt;div class="block items-center"&gt;
																			&lt;h6 class="text-sm text-green-500"&gt;
																				&lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16"&gt;
																					&lt;path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/&gt;
																				&lt;/svg&gt;
																				46.2%
																			&lt;/h6&gt;
																		&lt;/div&gt;
																	&lt;/div&gt;
																&lt;/a&gt;
															&lt;/li&gt;
															&lt;li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1"&gt;
																&lt;a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 2 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;"&gt;
																	&lt;div class="block text-center px-6"&gt;
																		&lt;h6 class="text-sm font-semibold nowrap block"&gt;Sessions Duration&lt;/h6&gt;
																		&lt;h5 class="text-2xl font-bold block"&gt;32m 20s&lt;/h5&gt;
																		&lt;div class="block items-center"&gt;
																			&lt;h6 class="text-sm text-green-500"&gt;
																				&lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16"&gt;
																					&lt;path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/&gt;
																				&lt;/svg&gt;
																				16.2%
																			&lt;/h6&gt;
																		&lt;/div&gt;
																	&lt;/div&gt;
																&lt;/a&gt;
															&lt;/li&gt;
															&lt;li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1"&gt;
																&lt;a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 3 }" class="inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;"&gt;
																	&lt;div class="block text-center px-6"&gt;
																		&lt;h6 class="text-sm font-semibold nowrap block"&gt;Bounce Rate&lt;/h6&gt;
																		&lt;h5 class="text-2xl font-bold block"&gt;50.32%&lt;/h5&gt;
																		&lt;div class="block items-center"&gt;
																			&lt;h6 class="text-sm text-red-500"&gt;
																				&lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16"&gt;
																					&lt;path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/&gt;
																				&lt;/svg&gt;
																				46.2%
																			&lt;/h6&gt;
																		&lt;/div&gt;
																	&lt;/div&gt;
																&lt;/a&gt;
															&lt;/li&gt;
														&lt;/ul&gt;
														&lt;div class="w-full px-6 pt-6 pb-3"&gt;
															&lt;div class="relative"&gt;
																&lt;canvas x-show="tabs === 1" class="max-w-100" id="SesionLine"&gt;&lt;/canvas&gt;
																&lt;canvas x-show="tabs === 2" class="max-w-100" id="SesionDuration"&gt;&lt;/canvas&gt;
																&lt;canvas x-show="tabs === 3" class="max-w-100" id="BounceLine"&gt;&lt;/canvas&gt;
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
				</div>
			</main>
</x-admin-layout>