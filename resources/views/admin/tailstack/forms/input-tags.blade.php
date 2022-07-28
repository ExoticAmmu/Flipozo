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
              <p class="text-xl font-bold mt-3 mb-5">Input tags</p>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <div class="relative">
                  <p class="text-lg mb-6 font-light">Very simple way to input tags with Tagify.</p>
                  <!-- Example input -->
                  <div class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                    <div class="mb-6">
                      <label for="exampletags" class="inline-block mb-2">Tags</label>
                      <input type="text" name="tags" value="Tags1, Tags2" class="tagify w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampletags" minlength="2">
                    </div>
                    <div class="mb-6">
                      <label for="tagsselect" class="inline-block mb-2">Tags Select</label>
                      <input name="selectname" value="" class="tagify-select w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="tagsselect" minlength="2">
                    </div>
                  </div>
                  <pre class="mb-8">
                    <code class="language-html" data-lang="html">
                    &lt;div class="mb-6"&gt;
                      &lt;label for="exampletags" class="inline-block mb-2"&gt;Tags&lt;/label&gt;
                      &lt;input type="text" name="tags" value="Tags1, Tags2" class="tagify w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampletags" minlength="2"&gt;
                    &lt;/div&gt;
                    &lt;div class="mb-6"&gt;
                      &lt;label for="tagsselect" class="inline-block mb-2"&gt;Tags Select&lt;/label&gt;
                      &lt;input name="selectname" value="" class="tagify-select w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="tagsselect" minlength="2"&gt;
                    &lt;/div&gt;  
                    </code>
                  </pre>
                  <p class="mb-4">Demo config available in <code class="text-pink-700">src/js/demo.js</code> function <code class="text-pink-700">myTagify();</code></p>
                  <p>More information about tagify please read <a target="_blank" href="https://github.com/yairEO/tagify" class="text-indigo-500">on here</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
  <script id="rendered-js">
    var inputElm = document.querySelector('input.tagify-select'),
        whitelist = ["Ari","Boy","Caca","Doni","Ema","Fanny","Ghosh","Hana","Icha","Jeje","Kalban","Leo","Mona","Nabil","Oman","Pepi","Qusa","Radja","Sasa","Toni","Udin","Verlyn","Weird","Xana","Yaoyao","Zuma"];

    // initialize Tagify on the above input node reference
    var tagify = new Tagify(inputElm, {
      enforceWhitelist: true,
      // make an array from the initial input value
      whitelist: inputElm.value.trim().split(/\s*,\s*/) 
    });

    // Chainable event listeners
    tagify.on('add', onAddTag).
    on('remove', onRemoveTag).
    on('input', onInput).
    on('edit', onTagEdit).
    on('invalid', onInvalidTag).
    on('click', onTagClick).
    on('focus', onTagifyFocusBlur).
    on('blur', onTagifyFocusBlur).
    on('dropdown:hide dropdown:show', e => console.log(e.type)).
    on('dropdown:select', onDropdownSelect);

    var mockAjax = function mockAjax() {
      var timeout;
      return function (duration) {
        clearTimeout(timeout); // abort last request
        return new Promise(function (resolve, reject) {
          timeout = setTimeout(resolve, duration || 700, whitelist);
        });
      };
    }();

    // tag added callback
    function onAddTag(e) {
      console.log("onAddTag: ", e.detail);
      console.log("original input value: ", inputElm.value);
      tagify.off('add', onAddTag); // exmaple of removing a custom Tagify event
    }

    // tag remvoed callback
    function onRemoveTag(e) {
      console.log("onRemoveTag:", e.detail, "tagify instance value:", tagify.value);
    }

    // on character(s) added/removed (user is typing/deleting)
    function onInput(e) {
      console.log("onInput: ", e.detail);
      tagify.settings.whitelist.length = 0; // reset current whitelist
      tagify.loading(true).dropdown.hide.call(tagify); // show the loader animation
      // get new whitelist from a delayed mocked request (Promise)
      mockAjax().
      then(function (result) {
        // replace tagify "whitelist" array values with new values
        // and add back the ones already choses as Tags
        tagify.settings.whitelist.push(...result, ...tagify.value);
        // render the suggestions dropdown.
        tagify.loading(false).dropdown.show.call(tagify, e.detail.value);
      });
    }

    function onTagEdit(e) {
      console.log("onTagEdit: ", e.detail);
    }

    // invalid tag added callback
    function onInvalidTag(e) {
      console.log("onInvalidTag: ", e.detail);
    }

    // invalid tag added callback
    function onTagClick(e) {
      console.log(e.detail);
      console.log("onTagClick: ", e.detail);
    }

    function onTagifyFocusBlur(e) {
      console.log(e.type, "event fired");
    }

    function onDropdownSelect(e) {
      console.log("onDropdownSelect: ", e.detail);
    }
    //# sourceURL=pen.js
  </script>

</x-admin-layout>