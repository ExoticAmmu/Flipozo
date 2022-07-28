
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
              <h1 class="text-xl font-bold mt-3 mb-5">File Manager</h1>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="py-6 px-10 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="relative">
                  <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full">
                      <div class="md:flex md:justify-between mb-6">
                        <a href="file-manager.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></a>
                        <!-- search -->
                        <div class="relative flex items-center w-full md:w-64 h-full group mt-6 md:mt-0">
                          <svg class="absolute left-0 z-20 w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                          <input type="text" class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:outline-none bg-gray-100 border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-700" placeholder="Search files">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- vertical tabs -->
                  <div x-data="{ tabs: 1 }" class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full mb-6">
                      <div class="flex flex-wrap flex-row -mx-4">
                        <a href="javascript:;" @click.prevent="tabs = 1" :class="{ 'text-gray-800 dark:text-gray-200': tabs === 1 }" class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                          <div :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40 text-gray-800 dark:text-gray-200 rounded': tabs === 1 }" class="bg-white dark:bg-gray-800 shadow block p-6 font-semibold rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block text-indigo-500 ltr:mr-2 rtl:ml-2 bi bi-folder2" viewBox="0 0 16 16">
                              <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z"/>
                            </svg>My Files
                            <div class="w-full h-2 bg-indigo-200 rounded-full my-2" title="36%">
                              <div class="h-full text-center text-xs text-white bg-indigo-500 rounded-full" style="width:36%"></div>
                            </div>
                            <div class="text-sm inline-block text-gray-500 dark:text-gray-100">
                              <span class="text-gray-700 dark:text-white font-bold">11 Gb</span>/30 Gb
                            </div>
                          </div>
                        </a>
                        <a href="javascript:;" @click.prevent="tabs = 2" :class="{ 'text-gray-800 dark:text-gray-200': tabs === 2 }" class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                          <div :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40 text-gray-800 dark:text-gray-200 rounded': tabs === 2 }" class="bg-white dark:bg-gray-800 shadow block p-6 font-semibold rounded">
                            <svg viewBox="0 0 87.3 78" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2" xmlns="http://www.w3.org/2000/svg">
                              <path d="m6.6 66.85 3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3l13.75-23.8h-27.5c0 1.55.4 3.1 1.2 4.5z" fill="#0066da"/>
                              <path d="m43.65 25-13.75-23.8c-1.35.8-2.5 1.9-3.3 3.3l-25.4 44a9.06 9.06 0 0 0 -1.2 4.5h27.5z" fill="#00ac47"/>
                              <path d="m73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.502l5.852 11.5z" fill="#ea4335"/>
                              <path d="m43.65 25 13.75-23.8c-1.35-.8-2.9-1.2-4.5-1.2h-18.5c-1.6 0-3.15.45-4.5 1.2z" fill="#00832d"/>
                              <path d="m59.8 53h-32.3l-13.75 23.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2z" fill="#2684fc"/>
                              <path d="m73.4 26.5-12.7-22c-.8-1.4-1.95-2.5-3.3-3.3l-13.75 23.8 16.15 28h27.45c0-1.55-.4-3.1-1.2-4.5z" fill="#ffba00"/>
                            </svg>Google Drive
                            <div class="w-full h-2 bg-indigo-200 rounded-full my-2" title="66%">
                              <div class="h-full text-center text-xs text-white bg-indigo-500 rounded-full" style="width:66%"></div>
                            </div>
                            <div class="text-sm inline-block text-gray-500 dark:text-gray-100">
                              <span class="text-gray-700 dark:text-white font-bold">80 Gb</span>/120 Gb
                            </div>
                          </div>
                        </a>
                        <a href="javascript:;" @click.prevent="tabs = 3" :class="{ 'text-gray-800 dark:text-gray-200': tabs === 3 }" class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
                          <div :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40 text-gray-800 dark:text-gray-200 rounded': tabs === 3 }" class="bg-white dark:bg-gray-800 shadow block p-6 font-semibold rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block ltr:mr-2 rtl:ml-2 text-indigo-500" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><path d="M256.32,126.24,136.16,204.49l120.16,78.24L136.16,361,16,282.08l120.16-78.24L16,126.24,136.16,48ZM135.52,385.76l120.16-78.25,120.16,78.25L255.68,464Zm120.8-103.68,120.16-78.24-120.16-77.6L375.84,48,496,126.24,375.84,204.49,496,282.73,375.84,361Z"/></svg>Dropbox
                            <div class="w-full h-2 bg-indigo-200 rounded-full my-2" title="20%">
                              <div class="h-full text-center text-xs text-white bg-indigo-500 rounded-full" style="width:20%"></div>
                            </div>
                            <div class="text-sm inline-block text-gray-500 dark:text-gray-100">
                              <span class="text-gray-700 dark:text-white font-bold">50 Gb</span>/256 Gb
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full">
                      <div  x-data="{ tab: 'all' }" class="relative">
                        <h3 class="text-lg font-semibold text-gray-600 dark:text-gray-200 mb-3">Quick Access</h3>
                        <!-- filter start -->
                        <div class="inline-block mb-6">
                          <a href="javascript:;" @click.prevent="tab = 'all'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'all' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-indigo-500 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-earmark" viewBox="0 0 16 16">
                              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            </svg>All
                          </a>
                          <a href="javascript:;" @click.prevent="tab = 'image'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'image' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-purple-500 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-earmark-image" viewBox="0 0 16 16">
                              <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                              <path d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z"/>
                            </svg>Image
                          </a>
                          <a href="javascript:;" @click.prevent="tab = 'video'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'video' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-play" viewBox="0 0 16 16">
                              <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
                              <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                            </svg>Video
                          </a>
                          <a href="javascript:;" @click.prevent="tab = 'music'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'music' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-yellow-600 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-earmark-music" viewBox="0 0 16 16">
                              <path d="M11 6.64a1 1 0 0 0-1.243-.97l-1 .25A1 1 0 0 0 8 6.89v4.306A2.572 2.572 0 0 0 7 11c-.5 0-.974.134-1.338.377-.36.24-.662.628-.662 1.123s.301.883.662 1.123c.364.243.839.377 1.338.377.5 0 .974-.134 1.338-.377.36-.24.662-.628.662-1.123V8.89l2-.5V6.64z"/>
                              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg>Music
                          </a>
                          <a href="javascript:;" @click.prevent="tab = 'zip'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'zip' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-indigo-500 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-zip" viewBox="0 0 16 16">
                              <path d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z"/>
                              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm5.5-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9v1H8v1h1v1H8v1h1v1H7.5V5h-1V4h1V3h-1V2h1V1z"/>
                            </svg>Zip
                          </a>
                          <a href="javascript:;" @click.prevent="tab = 'others'" :class="{ 'bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40' : tab === 'others' }" class="inline-block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-900 shadow rounded text-center ltr:mr-2 rtl:ml-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-indigo-500 inline-block ltr:mr-1 rtl:ml-1 bi bi-file-earmark" viewBox="0 0 16 16">
                              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            </svg>Others
                          </a>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-600 dark:text-gray-200 mb-3">My Files</h3>
                        <!-- content filter start -->
                        <table class="table-auto w-full ltr:text-left rtl:text-right text-sm">
                          <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                            <tr>
                              <th class="px-4 py-3 font-normal">File name</th>
                              <th class="px-4 py-3 font-normal hidden md:table-cell">Last modified</th>
                              <th class="px-4 py-3 font-normal">File size</th>
                              <th class="px-4 py-3 font-normal text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr  x-show="tab === 'others' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-folder-fill" viewBox="0 0 16 16">
                                      <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                    </svg>
                                  </span>My Dream (32)
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">41 Gb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'others' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-folder-fill" viewBox="0 0 16 16">
                                      <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                    </svg>
                                  </span>My Projects (12)
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">32 Gb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'video' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 inline-block bi bi-play-btn-fill" viewBox="0 0 16 16">
                                      <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                    </svg>
                                  </span>Home Design3.mp4
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">421 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'video' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 inline-block bi bi-play-btn-fill" viewBox="0 0 16 16">
                                      <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                    </svg>
                                  </span>Web Design Tutorial.mp4
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">421 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'music' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-yellow-600 inline-block bi bi-music-note-beamed" viewBox="0 0 16 16">
                                      <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                      <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                                      <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                                    </svg>
                                  </span>Welcome New Normal.mp3
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">65 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'zip' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-file-zip" viewBox="0 0 16 16">
                                      <path d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z"></path>
                                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm5.5-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9v1H8v1h1v1H8v1h1v1H7.5V5h-1V4h1V3h-1V2h1V1z"></path>
                                    </svg>
                                  </span>Project Design.zip
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">121 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'music' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-yellow-600 inline-block bi bi-music-note-beamed" viewBox="0 0 16 16">
                                      <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                      <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                                      <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                                    </svg>
                                  </span>Babby Dragon.mp3
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">421 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'image' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-purple-500 inline-block bi bi-image" viewBox="0 0 16 16">
                                      <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                      <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                  </span>Home Design.png
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">421 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                            <tr  x-show="tab === 'image' || tab === 'all'">
                              <td class="px-4 py-3 font-medium">
                                <a href="javascript:;">
                                  <span class="mr-1 text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-purple-500 inline-block bi bi-image" viewBox="0 0 16 16">
                                      <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                      <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                  </span>Beach.jpg
                                </a>
                              </td>
                              <td class="px-4 py-3 font-medium hidden md:table-cell">Nov 12, 2022</td>
                              <td class="px-4 py-3 font-medium">201 Mb</td>
                              <td class="px-4 py-3 font-medium text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Rename">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>