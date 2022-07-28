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
              <p class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Embed video</p>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="relative">
                  <div class="mb-4">
                    <p class="leading-relaxed font-light text-lg mx-auto pb-2">Aspect ratio is perfect for responsively handling video or slideshow embeds based on the width of the parent.</p>
                  </div>
                  
                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Responsive Video</h2>
                    <p class="mb-4">Wrap any embed, like an iframe, in a parent element with add aspect ratio classes. The immediate child element is automatically sized. Combine the <code class="text-pink-700">.aspect-w-{n}</code> and <code class="text-pink-700">.aspect-h-{n}</code> classes to specify the aspect ratio for an element:</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;div class="aspect-w-16 aspect-h-9"&gt;
                          &lt;iframe src="https://www.youtube.com/embed/VIDEOID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen&gt;&lt;/iframe&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                    <p class="my-6">For more information about this tailwind plugins please read documentaion <a href="https://github.com/tailwindlabs/tailwindcss-aspect-ratio" target="_blank" class="text-blue-500">in here</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>