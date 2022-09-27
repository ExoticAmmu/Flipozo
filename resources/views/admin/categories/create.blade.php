<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <div class="mx-auto p-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">Create Category</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <div class="relative">
                        <div class="mb-8">
                            <div class="bg-white dark:bg-opacity-20 dark:border-gray-800">
                                <form action="{{ route('admin.categories.create') }}" method="POST" 
                                class="flex flex-wrap flex-row -mx-4">
                                    @csrf
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="name" class="inline-block mb-2">Name</label>
                                        <input type="text"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="name" id="name">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="slug" class="inline-block mb-2">Slug</label>
                                        <input type="text"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="slug" id="slug">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                        <label for="text" class="inline-block mb-2">Description </label>
                                        <textarea
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="description" id="description" rows="3"></textarea>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-2/3 mb-6">
                                        <label for="inputAddress2" class="inline-block mb-2">Image</label>
                                        <input
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            type="file" name="image" id="image">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                      <label for="inputState" class="inline-block mb-2">Status</label>
                                      <select id="inputState" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="metaTitle" class="inline-block mb-2">Meta Title</label>
                                        <input type="text"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="meta_title" id="meta_title">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="metaKeyword" class="inline-block mb-2">Meta Keyword</label>
                                        <input type="text"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="meta_keyword" id="meta_keyword">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                        <label for="metaDescription" class="inline-block mb-2">Meta Description </label>
                                        <textarea
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="meta_description" id="meta_description" rows="3"></textarea>
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full text-right">
                                        <button type="submit"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-600 border border-indigo-600 hover:text-white hover:bg-indigo-700 hover:ring-0 hover:border-indigo-700 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
