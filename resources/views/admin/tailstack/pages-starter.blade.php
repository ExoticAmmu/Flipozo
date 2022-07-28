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
          <p class="text-xl font-bold mt-3 mb-5">Starter</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <h1 class="text-center">Insert your content</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</x-admin-layout>