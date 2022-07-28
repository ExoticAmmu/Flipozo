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
                    <h1 class="text-xl font-bold mt-3 mb-1">Charts</h1>
                    <p class="text-gray-500 mb-5">Charts on this page use Chart.js - Simple yet flexible JavaScript
                        charting for designers & developers.</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Bar chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="BarChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="BarChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Bar chart horizontal</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="PipelineChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="PipelineChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Bar chart combo</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="TrafficChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="TrafficChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Line chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="SesionLine"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="SesionLine"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Line chart interpolation</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="LineChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="LineChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Line chart area</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="LineArea"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="LineArea"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Line chart thin</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="UserChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="UserChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Plain chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex flex-wrap flex-row items-center">
                                <div class="flex-shrink max-w-full w-1/2">
                                    <canvas class="max-w-100" id="LineAreaSm"></canvas>
                                </div>
                                <div class="flex-shrink max-w-full w-1/2">
                                    <canvas class="max-w-100" id="BarChartSm"></canvas>
                                </div>
                            </div>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="LineAreaSm"&gt;&lt;/canvas&gt;
                      &lt;canvas class="max-w-100" id="BarChartSm"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Gauge chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                                <canvas id="GaugeChart" class="max-w-100"></canvas>
                            </div>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;div class="relative" style="margin-top: -18%;margin-bottom:-18%"&gt;
                        &lt;canvas id="GaugeChart" class="max-w-100"&gt;&lt;/canvas&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Mixed chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="CrmChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="CrmChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Doughnut chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="StorageChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="StorageChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Pie chart</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="PieChart"></canvas>
                            <br>
                            <pre>
                    <code class="language-html" data-lang="html">
                      &lt;canvas class="max-w-100" id="PieChart"&gt;&lt;/canvas&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full">
                    <p class="text-gray-500 mb-5">All demo chart config is available in <code
                            class="text-pink-700">src/js/demo.js</code>. Please read more documentaion about chart in <a
                            target="_blank" href="https://www.chartjs.org/"
                            class="hover:underline text-blue-500">https://www.chartjs.org/</a></p>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>