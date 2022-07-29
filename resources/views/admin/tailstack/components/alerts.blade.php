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
        <p class="text-xl font-bold mt-3 mb-5">Alerts</p>
      </div>
      <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          <div class="relative">
            <div class="mb-12">
              <p class="text-lg mb-6 font-light">Provide contextual feedback messages for typical user
                actions with the handful of available and flexible alert messages.</p>
              <div class="mb-6">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                <p class="mb-4">Alerts are available for any length of text, as well as an optional
                  dismiss button.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="relative bg-gray-200 text-blue-900 py-3 px-6 rounded mb-4">
                    This is a primary alert—check it out!
                  </div>
                  <div class="relative bg-red-100 text-red-900 py-3 px-6 rounded mb-4">
                    This is a danger alert—check it out!
                  </div>
                  <div class="relative bg-yellow-100 text-yellow-900 py-3 px-6 rounded mb-4">
                    This is a warning alert—check it out!
                  </div>
                  <div class="relative bg-green-100 text-green-900 py-3 px-6 rounded mb-4">
                    This is a success alert—check it out!
                  </div>
                  <div class="relative bg-blue-200 text-gray-900 py-3 px-6 rounded mb-4">
                    This is a info alert—check it out!
                  </div>
                  <div class="relative bg-gray-50 text-gray-900 py-3 px-6 rounded mb-4">
                    This is a light alert—check it out!
                  </div>
                  <div class="relative bg-gray-500 text-gray-100 py-3 px-6 rounded mb-4">
                    This is a dark alert—check it out!
                  </div>
                </div>
                <pre>
				                <code class="language-html" data-lang="html">
				                  &lt;div class="relative bg-gray-200 text-blue-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a primary alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-red-100 text-red-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a danger alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-yellow-100 text-yellow-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a warning alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-green-100 text-green-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a success alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-blue-200 text-gray-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a info alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-gray-50 text-gray-900 py-3 px-6 rounded mb-4"&gt;
				                    This is a light alert—check it out!
				                  &lt;/div&gt;
				                  &lt;div class="relative bg-gray-500 text-gray-100 py-3 px-6 rounded mb-4"&gt;
				                    This is a dark alert—check it out!
				                  &lt;/div&gt;
				                </code>
				              </pre>
              </div>

              <div class="mb-6">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Dismiss
                  Alert</h2>
                <p class="mb-4">Using the Alpine js, it’s possible to dismiss any alert inline.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-200 text-blue-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Primary!</a>
                      You should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-red-100 text-red-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Danger!</a>
                      You should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Warning!</a>
                      You should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-green-100 text-green-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Success!</a>
                      You should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-blue-200 text-gray-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Info!</a> You
                      should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-50 text-gray-900 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Light!</a>
                      You should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-500 text-gray-100 py-3 px-6 rounded mb-4">
                    <div>
                      <a href="alerts.html#" class="underline font-bold">Dismiss Dark!</a> You
                      should check in on some of those fields below.
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">&times;</span>
                    </button>
                  </div>
                </div>
                <pre>
				                <code class="language-html" data-lang="html">
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-200 text-blue-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Primary!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-red-100 text-red-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Danger!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Warning!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-green-100 text-green-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Success!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-blue-200 text-gray-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Info!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-50 text-gray-900 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Light!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
				                  &lt;/div&gt;
				                  &lt;div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-gray-500 text-gray-100 py-3 px-6 rounded mb-4"&gt;
				                    &lt;div&gt;
				                      &lt;a href="#" class="underline font-bold"&gt;Dismiss Dark!&lt;/a&gt; You should check in on some of those fields below.
				                    &lt;/div&gt;
				                    &lt;button type="button" @click="open = false"&gt;
				                      &lt;span class="text-2xl"&gt;&times;&lt;/span&gt;
				                    &lt;/button&gt;
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

</x-admin-layout>