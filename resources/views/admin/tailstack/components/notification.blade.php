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
                <p class="text-xl font-bold mt-3 mb-5">Notifications</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="text-lg mb-6 font-light">Notifications are a small, urgent component to notify
                                users that there are new incoming messages or notifications on their dashboard.</p>
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <!-- example -->
                            <div class="bg-gray-100 p-8 mb-6 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div class="relative inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                        </path>
                                    </svg>
                                    <span class="flex justify-center absolute -top-2 -right-1 text-center bg-red-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
                                </div>

                                <div class="relative inline-block ltr:ml-8 rtl:mr-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                    </svg>
                                    <span class="flex justify-center absolute -top-2 -right-1 text-center bg-red-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">1</span></span>
                                </div>

                                <div class="relative inline-block ltr:ml-8 rtl:mr-8">
                                    <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="/img/avatar/avatar.png" alt="avatar">
                                    <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                                </div>
                            </div>
                            <pre class="mb-8">
			                <code class="language-html" data-lang="html">
&lt;div class="relative inline-block"&gt;
  &lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16"&gt;
    &lt;path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"&gt;&lt;/path&gt;
  &lt;/svg&gt;
  &lt;span class="flex justify-center absolute -top-2 -right-1 text-center bg-red-500 px-1 text-white rounded-full text-xs"&gt;&lt;span class="align-self-center"&gt;3&lt;/span&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;div class="relative inline-block ltr:ml-8 rtl:mr-8"&gt;
  &lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16"&gt;
    &lt;path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/&gt;
  &lt;/svg&gt;
  &lt;span class="flex justify-center absolute -top-2 -right-1 text-center bg-red-500 px-1 text-white rounded-full text-xs"&gt;&lt;span class="align-self-center"&gt;1&lt;/span&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;div class="relative inline-block ltr:ml-8 rtl:mr-8"&gt;
  &lt;img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="/img/avatar/avatar.png" alt="avatar"&gt;
  &lt;span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"&gt;&lt;/span&gt;
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