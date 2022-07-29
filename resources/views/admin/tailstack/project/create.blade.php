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
                    <p class="text-xl font-bold mt-3 mb-5">Create new project</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <form class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full px-4 w-full mb-4">
                                <label for="inputtitle" class="inline-block mb-2">Project title</label>
                                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputtitle">
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full mb-4">
                                <label for="inputdes" class="inline-block mb-2">Project description</label>
                                <textarea type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputdes"></textarea>
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                                <label for="inputbudget" class="inline-block mb-2">Project Budget</label>
                                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputbudget">
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                                <label for="inputtask" class="inline-block mb-2">Total Task</label>
                                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputtask">
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full mb-4">
                                <label for="imageSingle" class="inline-block mb-2">Thumbnail (80x80 png, gif, svg or
                                    jpg)</label>
                                <div id="imageSingle" class="dropzone single-dropzone mb-4">
                                    <div class="dz-message" data-dz-message>
                                        <div class="pre-upload flex flex-col justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z">
                                                </path>
                                                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z">
                                                </path>
                                            </svg>
                                            <div class="py-3"><span>Drag & drop images here</span></div>
                                        </div>
                                        <div class="pre-upload text-center">
                                            <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300">Browse
                                                file</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full mb-4">
                                <label for="rangetime" class="inline-block mb-2">Start and End date</label>
                                <div id="rangetime" class="flex flex-col justify-center md:flex-row md:justify-between">
                                    <input id="startDate" class="startDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="start">
                                    <span class="px-4 text-center">to</span>
                                    <input id="endDate" class="endDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="end">
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full mb-4">
                                <label for="tagsselect" class="inline-block mb-2">Tags Select</label>
                                <input name="selectname" value="" class="tagify-select w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="tagsselect" minlength="2">

                                <div class="relative mt-2">
                                    <a href="create.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                    </a>
                                    <a href="create.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                    </a>
                                    <a href="create.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar5.png" alt="Image Description">
                                    </a>
                                </div>
                            </div>

                            <div class="flex-shrink max-w-full px-4 w-full">
                                <button type="submit" class="py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add
                                    new project <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                        </path>
                                    </svg></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script id="rendered-js">
        var inputElm = document.querySelector('input.tagify-select'),
            whitelist = ["Ari", "Boy", "Caca", "Doni", "Ema", "Fanny", "Ghosh", "Hana", "Icha", "Jeje", "Kalban", "Leo",
                "Mona", "Nabil", "Oman", "Pepi", "Qusa", "Radja", "Sasa", "Toni", "Udin", "Verlyn", "Weird", "Xana",
                "Yaoyao", "Zuma"
            ];

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
            return function(duration) {
                clearTimeout(timeout); // abort last request
                return new Promise(function(resolve, reject) {
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
            then(function(result) {
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