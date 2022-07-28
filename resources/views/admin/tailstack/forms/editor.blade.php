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
              <h1 class="text-xl font-bold mt-3 mb-5">Text Editor</h1>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <div class="relative">
                  <p class="text-lg mb-6 font-light">A simple, beautiful, and embeddable JavaScript Markdown editor.</p>
                </div>
                <style>
                  .editor-preview h1, .editor-preview-side h1 {
                    font-size: 3rem;
                  }
                </style>
                <div class="relative">
                  <div class="mb-0">
                    <label for="texteditor" class="inline-block mb-2">Example textarea with editor</label>
                    <textarea class="texteditor w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="texteditor" rows="3"></textarea>
                  </div>
                </div>
                <h3 class="text-lg mb-3 font-light">Html form textarea</h3>
                <pre class="mb-8">
                  <code class="language-html" data-lang="html">
                    &lt;div class="mb-6"&gt;
                      &lt;label for="texteditor" class="inline-block mb-2"&gt;Example textarea with editor&lt;/label&gt;
                      &lt;textarea class="texteditor w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="texteditor" rows="3"&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                  </code>
                </pre>
                <h3 class="text-lg mb-3 font-light">Javascript</h3>
                <pre class="mb-8">
                  <code class="language-html" data-lang="html">
&lt;script src="vendors/simplemde/dist/simplemde.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
const text_editor = document.querySelectorAll(".texteditor");
if ( text_editor != null) {
  for( var i = 0; i < text_editor.length; i++)
  {
    const simplemde = new SimpleMDE({ element: text_editor[i]});
  }
};
&lt;/script&gt;
                  </code>
                </pre>
                <p class="mt-6 mb-6">Demo config available in <code class="text-pink-700">src/js/vendor.js</code> function <code class="text-pink-700">myEditor();</code></p>
                <h3 class="text-lg mb-3 font-light">HTML Content</h3>
                <p class="text-lg mb-6 font-light">Please add <code class="text-pink-700">post-content</code> classes in where you want to paste post content.</p>
                  <code class="language-html" data-lang="html">
                    &lt;div class="mb-6 post-content"&gt;
                      &lt;!-- paste content on here --&gt;
                    &lt;/div&gt;
                  </code>
                  <p class="mt-6">More information about SimpleMDE please read <a target="_blank" href="https://simplemde.com/" class="text-indigo-500">on here</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>