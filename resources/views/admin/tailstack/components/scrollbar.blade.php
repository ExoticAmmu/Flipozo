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
                <p class="text-xl font-bold mt-3 mb-5">Scrollbar</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="text-lg mb-6 font-light">A scrollbar is an interaction technique or widget in
                                which continuous text, pictures, or any other content can be scrolled in a
                                predetermined direction (up, down, left, or right) on a computer display, window, or
                                viewport so that all of the content can be viewed, even if only a fraction of the
                                content can be seen on a device's screen at one time.</p>
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Custom Scrollbar
                            </h2>
                            <p class="text-lg mb-6 font-light">Just add <code class="text-pink-700">scrollbars show</code> or <code class="text-pink-700">scrollbars</code> in <code class="text-pink-700">overflow-y-auto</code> classes.</p>
                            <!-- example -->
                            <div class="bg-gray-100 p-8 mb-6 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div class="h-36 overflow-y-auto scrollbars show mb-6">
                                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying
                                        out print, graphic or web designs. The passage is attributed to an unknown
                                        typesetter in the 15th century who is thought to have scrambled parts of
                                        Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It
                                        usually begins with:</p>

                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.”
                                        The purpose of lorem ipsum is to create a natural looking block of text
                                        (sentence, paragraph, page, etc.) that doesn't distract from the layout. A
                                        practice not without controversy, laying out pages with meaningless filler
                                        text can be very useful when the focus is meant to be on design, not
                                        content.</p>

                                    <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                        used it on their dry-transfer sheets, and again during the 90s as desktop
                                        publishers bundled the text with their software. Today it's seen all around
                                        the web; on templates, websites, and stock designs. Use our generator to get
                                        your own, or read on for the authoritative history of lorem ipsum</p>
                                </div>
                            </div>
                            <pre class="mb-8">
			                <code class="language-html" data-lang="html">
			                	&lt;div class="h-36 overflow-y-auto scrollbars show mb-6"&gt;
				  &lt;p&gt;Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:&lt;/p&gt;
				  &lt;p&gt;“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.” The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.&lt;/p&gt;
				  &lt;p&gt;The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum&lt;/p&gt;
				&lt;/div&gt;
			                </code>
			              </pre>

                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Hover Scrollbar
                            </h2>
                            <!-- example -->
                            <div class="bg-gray-100 p-8 mb-6 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div class="h-36 overflow-y-auto scrollbars mb-6">
                                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying
                                        out print, graphic or web designs. The passage is attributed to an unknown
                                        typesetter in the 15th century who is thought to have scrambled parts of
                                        Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It
                                        usually begins with:</p>

                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.”
                                        The purpose of lorem ipsum is to create a natural looking block of text
                                        (sentence, paragraph, page, etc.) that doesn't distract from the layout. A
                                        practice not without controversy, laying out pages with meaningless filler
                                        text can be very useful when the focus is meant to be on design, not
                                        content.</p>

                                    <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                        used it on their dry-transfer sheets, and again during the 90s as desktop
                                        publishers bundled the text with their software. Today it's seen all around
                                        the web; on templates, websites, and stock designs. Use our generator to get
                                        your own, or read on for the authoritative history of lorem ipsum</p>
                                </div>
                            </div>
                            <pre class="mb-8">
			                <code class="language-html" data-lang="html">
			                	&lt;div class="h-36 overflow-y-auto scrollbars mb-6"&gt;
				  &lt;p&gt;Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:&lt;/p&gt;
				  &lt;p&gt;“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.” The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.&lt;/p&gt;
				  &lt;p&gt;The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum&lt;/p&gt;
				&lt;/div&gt;
			                </code>
			              </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>