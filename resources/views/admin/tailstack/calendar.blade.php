r
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
              <h1 class="text-xl font-bold mt-3 mb-5">Calendar</h1>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 p-6">
                <div class="flex flex-col md:flex-row justify-center md:justify-between mb-6">
                  <div class="self-center">
                    <div x-data="{ open: false }">
                      <div class="flex">
                        <button @click="open = true" type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-1 rtl:ml-1 bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                          </svg>
                          Add Schedule
                        </button>
                      </div>

                      <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6" style="display:none">
                        <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                          <div class="bg-white dark:bg-gray-800 rounded shadow-lg border dark:border-gray-700 flex flex-col overflow-hidden">
                            <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <!-- modal title -->
                            <div class="px-6 py-3 text-xl border-b dark:text-gray-300 dark:border-gray-700 font-bold">Create Schedule</div>
                            <!-- modal content -->
                            <form action="calendar.html#">
                              <div class="p-6 flex-grow">
                                <div class="mb-6">
                                  <label for="exampleInput1" class="inline-block mb-2">Title</label>
                                  <input type="text" class="w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleInput1">
                                </div>
                                <div class="mb-6">
                                  <label for="rangetime" class="inline-block mb-2">Start and End date</label>
                                  <div id="rangetime" class="flex flex-col justify-center md:flex-row md:justify-between">
                                    <input id="startDate" class="startDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="start">
                                    <span class="px-4 text-center">to</span>
                                    <input id="endDate" class="endDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="end">  
                                  </div>
                                </div>
                                <div class="mb-6">
                                  <label class="flex items-center">
                                    <input type="checkbox" name="checked-demo" value="1" class="form-checkbox text-indigo-500 h-5 w-5 border border-gray-300 dark:border-gray-700 dark:focus:border-gray-600 dark:bg-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2">
                                    <span>All Day</span>
                                  </label>
                                </div>
                                <div class="mb-6">
                                  <label for="exampleLink" class="inline-block mb-2">With Link</label>
                                  <input type="text" class="w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleLink" placeholder="https://">
                                </div>
                                <div class="mb-6">
                                  <label for="exampleTextarea1" class="inline-block mb-2">Description</label>
                                  <textarea class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleTextarea1" rows="3"></textarea>
                                </div>
                                <select class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 select-caret appearance-none dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" aria-label="Default select example">
                                  <option selected>Label</option>
                                  <option value="1">Important</option>
                                  <option value="2">Business</option>
                                  <option value="3">Personal</option>
                                </select>
                              </div>
                              <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                <button @click="open = false" type="button" class="ltr:mr-2 rtl:ml-2 py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0">Close</Button>
                                <button type="submit" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Save</Button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                      </div>
                    </div>
                  </div>
                  <div class="self-center"><h2 class="text-lg font-semibold">Schedule Calendar</h2></div>
                </div>
                <div class="relative custom-calendar">
                  <div id="calendar"></div>
                </div>
              </div>

              <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <div class="relative">
                  <p class="text-lg mb-3 font-light">For the event calendar we use the fullcalendar plugin, this is a popular plugin for creating event schedules.</p>
                  <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">How to install ?</h2>
                    <pre class="mb-8">
                      <code class="language-html" data-lang="html">
&lt;script src="vendors/fullcalendar/main.min.js"&gt;&lt;/script&gt;

&lt;!-- Calendar Event --&gt;
&lt;script&gt;
const fullcalendars = document.getElementById('calendar');
if ( fullcalendars != null) {
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var date = new Date();
    var dates = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) + '-' + date.getDate().toString().padStart(2, 0);
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      initialDate: dates,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events: [
        {
          title: 'All Day Event',
          start: '2021-10-01'
        },
        {
          title: 'Long Event',
          start: '2021-10-03',
          end: '2021-10-06'
        },
        {
          groupId: '999',
          title: 'Repeating Event',
          start: '2021-10-09T16:00:00'
        },
        {
          groupId: '999',
          title: 'Repeating Event',
          start: '2021-10-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '11',
          end: '2021-10-13'
        },
        {
          title: 'Meeting',
          start: '2021-10-12T10:30:00',
          end: '2021-10-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2021-10-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2021-10-12T14:30:00'
        },
        {
          title: 'Birthday Party',
          start: '2021-10-20T07:00:00'
        },
        {
          title: 'Evant with link',
          url: 'http://google.com/',
          start: '2021-10-28'
        }
      ]
    });
    calendar.render();

  });
}
&lt;/script&gt;
</code></pre>
<p class="mb-4">Demo config available in <code class="text-pink-700">src/js/vendor.js</code> function <code class="text-pink-700">myCalendar();</code></p>
<p class="mb-4">Html code</p>
									<pre class="mb-8">
                    <code class="language-html" data-lang="html">
                    	&lt;div id="calendar"&gt;&lt;/div&gt;
                  	</code>
                  </pre>
                  <p class="mb-4 font-light">For more documentation please check in here <a target="_blank" href="https://github.com/fullcalendar/fullcalendar" class="text-blue-500 hover:underline">https://github.com/fullcalendar/fullcalendar</a>.
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>