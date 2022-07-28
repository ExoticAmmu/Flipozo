
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
              <p class="text-xl font-bold mt-3 mb-5">Not Found</p>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="relative">
                  <header class="text-center mx-auto mb-6">
                    <h1 class="text-4xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300">404 <span class="font-light">Not Found</span></h1>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">That page can't be found. It looks like nothing was found at this location.</p>
                  </header>
                  <div class="relative text-center">
                    <img src="src/img/svg/404.svg" class="max-w-full h-auto mx-auto mb-6" alt="Not found">
                    <a href="index.html" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" fill="currentColor" class="bi bi-house-door inline-block ltr:mr-2 rtl:ml-2" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
                      </svg>Back to Home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>