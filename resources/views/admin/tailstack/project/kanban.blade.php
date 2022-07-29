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
                    <p class="text-xl font-bold mt-3 mb-5">Kanban board</p>
                </div>
            </div>
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink px-4 w-full max-w-full mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <!-- nav kanban -->
                        <div class="flex flex-col justify-center md:flex-row md:justify-between mb-3">
                            <div x-data="{ open: false }">
                                <button @click="open = true" type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                        </path>
                                    </svg> Add new task
                                </button>
                                <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6" style="display:none">
                                    <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                        <div class="bg-white dark:bg-gray-800 rounded shadow-lg border dark:border-gray-700 flex flex-col overflow-hidden">
                                            <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                            <!-- modal title -->
                                            <div class="px-6 py-3 text-xl border-b dark:text-gray-300 dark:border-gray-700 font-bold">
                                                Add new task</div>
                                            <!-- modal content -->
                                            <form id="pristinejs-form" class="py-4" action="kanban.html" novalidate method="post">
                                                <div class="px-6 flex-grow">
                                                    <div class="form-group mb-4">
                                                        <label for="exampleTextarea1" class="inline-block mb-2">Description</label>
                                                        <textarea class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleTextarea1" rows="3" minlength="10" data-pristine-required-message="Please insert description" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap flex-row mb-4">
                                                    <div class="form-group flex-shrink max-w-full px-6 w-full lg:w-1/2 mb-4 lg:mb-0">
                                                        <label for="inputcategory" class="inline-block mb-2">Category</label>
                                                        <select id="inputcategory" class="inline-block w-full leading-5 relative py-3 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-3 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none" required>
                                                            <option>Select category</option>
                                                            <option>Development</option>
                                                            <option>UI/UX</option>
                                                            <option>Fix bugs</option>
                                                            <option>New features</option>
                                                            <option>Front end</option>
                                                            <option>Back end</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group flex-shrink max-w-full px-6 w-full lg:w-1/2 mb-4 lg:mb-0">
                                                        <label for="inputUrgency" class="inline-block mb-2">Urgency</label>
                                                        <select id="inputUrgency" class="inline-block w-full leading-5 relative py-3 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-3 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none" required>
                                                            <option selected>Low</option>
                                                            <option>Medium</option>
                                                            <option>High</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="flex flex-wrap flex-row mb-4">
                                                    <div class="form-group flex-shrink max-w-full px-6 w-full lg:w-1/2 mb-4 lg:mb-0">
                                                        <label for="datepick" class="inline-block mb-2">Due date</label>
                                                        <div id="datepicks" class="flex flex-row justify-between">
                                                            <input id="datepick" class="datepick w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="duedate" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group flex-shrink max-w-full px-6 w-full lg:w-1/2 mb-4 lg:mb-0">
                                                        <label for="inputAssigned" class="inline-block mb-2">Assigned
                                                            to</label>
                                                        <input name="tags" value="" class="tagify-select w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAssigned" minlength="2">
                                                    </div>
                                                </div>

                                                <div class="pt-4 px-6 border-t dark:border-gray-700 flex justify-end">
                                                    <button @click="open = false" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2 dark:bg-gray-300">Cancel</Button>

                                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-800 focus:outline-none focus:ring-0">Add
                                                        task</Button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                    </div>
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="inline-block ltr:mr-2 rtl:ml-2">
                                    Urgency:
                                </div>
                                <div class="inline-block ltr:mr-2 rtl:ml-2">
                                    <span class="inline-block w-3 h-3 mr-1 rounded-full bg-green-200"></span> Low
                                </div>
                                <div class="inline-block ltr:mr-2 rtl:ml-2">
                                    <span class="inline-block w-3 h-3 mr-1 rounded-full bg-yellow-200"></span> Medium
                                </div>
                                <div class="inline-block ltr:mr-2 rtl:ml-2">
                                    <span class="inline-block w-3 h-3 mr-1 rounded-full bg-pink-200"></span> High
                                </div>
                            </div>
                        </div>

                        <!-- kanban -->
                        <div class="flex flex-grow space-x-6 overflow-y-hidden overflow-auto" style="height:34rem">
                            <div class="flex flex-col flex-shrink-0 w-72 overflow-y-auto" style="max-height:32rem">
                                <div class="flex flex-col py-2 px-4 bg-gray-200 text-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:text-gray-300">
                                    <h3 class="text-base font-semibold">Backlog</h3>
                                </div>
                                <div class="flex flex-col pt-4 pb-6 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 overflow-auto">
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-yellow-200 hover:bg-opacity-90 text-yellow-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-green-200 hover:bg-opacity-90 text-green-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 overflow-y-auto" style="max-height:32rem">
                                <div class="flex flex-col py-2 px-4 bg-gray-200 text-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:text-gray-300">
                                    <h3 class="text-base font-semibold">List</h3>
                                </div>
                                <div class="flex flex-col pt-4 pb-6 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 overflow-auto">
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-yellow-200 hover:bg-opacity-90 text-yellow-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-green-200 hover:bg-opacity-90 text-green-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 overflow-y-auto" style="max-height:32rem">
                                <div class="flex flex-col py-2 px-4 bg-gray-200 text-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:text-gray-300">
                                    <h3 class="text-base font-semibold">Doing</h3>
                                </div>
                                <div class="flex flex-col pt-4 pb-6 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 overflow-auto">
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-yellow-200 hover:bg-opacity-90 text-yellow-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-green-200 hover:bg-opacity-90 text-green-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 overflow-y-auto" style="max-height:32rem">
                                <div class="flex flex-col py-2 px-4 bg-gray-200 text-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:text-gray-300">
                                    <h3 class="text-base font-semibold">Done</h3>
                                </div>
                                <div class="flex flex-col pt-4 pb-6 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 overflow-auto">
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-yellow-200 hover:bg-opacity-90 text-yellow-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-green-200 hover:bg-opacity-90 text-green-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 overflow-y-auto" style="max-height:32rem">
                                <div class="flex flex-col py-2 px-4 bg-gray-200 text-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:text-gray-300">
                                    <h3 class="text-base font-semibold">Canceled</h3>
                                </div>
                                <div class="flex flex-col pt-4 pb-6 px-4 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 overflow-auto">
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-yellow-200 hover:bg-opacity-90 text-yellow-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-green-200 hover:bg-opacity-90 text-green-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="bg-pink-200 hover:bg-opacity-90 text-pink-900 relative flex flex-col items-start p-4 mb-4 rounded-lg cursor-pointer" draggable="true">
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Development</span>
                                        <h4 class="mt-3 text-sm font-medium">This is the description of the task for the
                                            thing that needs to be done.</h4>
                                        <div class="flex justify-between items-center w-full mt-3 text-xs font-medium">
                                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-pink-400 border border-pink-400 bg-white">Due:
                                                15 Aug</span>
                                            <div class="relative">
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                                                </a>
                                                <a href="kanban.html#">
                                                    <span class="ltr:ml-5 rtl:mr-5 text-sm font-semibold self-center">+2
                                                        more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script id="rendered-js">
        var inputElm = document.querySelector('input[name=tags]'),
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