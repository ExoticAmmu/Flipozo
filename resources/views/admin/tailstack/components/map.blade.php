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
                <h1 class="text-xl font-bold mt-3 mb-5">Map</h1>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <p class="text-lg mb-6 font-light">For vector maps we use the plugin from jvectormap. This
                            plugin is lightweight and does not depend on jquery.</p>
                        <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                        <!-- example -->
                        <div class="bg-gray-100 p-8 mb-6 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                            <div id="worldmap" class="w-full" style="min-height: 18rem"></div>
                        </div>
                        <pre class="mb-8">
			              <code class="language-html" data-lang="html">
					            &lt;div id="worldmap" class="w-full" style="min-height: 18rem"&gt;&lt;/div&gt;
				            </code>
				          </pre>
                        <p class="text-lg mb-6 font-light">Don't forget to call and editing map value</p>
                        <pre class="mb-8">
			              <code class="language-html" data-lang="html">
					            &lt;script src="vendors/jsvectormap/dist/js/jsvectormap.min.js"&gt;&lt;/script&gt;
&lt;script src="vendors/jsvectormap/dist/maps/world.js"&gt;&lt;/script&gt;
&lt;!-- Maps --&gt;
&lt;script&gt;
const worldmap = document.getElementById('worldmap');
if ( worldmap != null) {
  const map = new jsVectorMap({
    selector: "#worldmap",
    map: "world",
    visualizeData: {
      scale: ['#eeeeee', '#3b82f6'],
      values: {
        IN: 259,
        US: 220,
        ID: 175,
        CA: 160,
        BR: 175,
        AR: 155,
        ES: 235,
        UK: 227,
        RU: 176,
        // ...
      }
    }
  });
}
&lt;/script&gt;
				            </code>
				          </pre>
                        <p class="mb-4">Demo config available in <code class="text-pink-700">src/js/vendor.js</code>
                            function <code class="text-pink-700">myMaps();</code></p>
                        <p class="text-lg mb-6 font-light">For more documentation read in <a href="https://themustafaomar.com/open-source/jsvectormap/" target="_blank" class="hover:text-blue-500">
                                https://themustafaomar.com/open-source/jsvectormap/
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>