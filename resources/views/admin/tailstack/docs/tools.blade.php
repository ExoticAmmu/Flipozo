<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full my-4">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <h1 class="text-3xl mb-4 font-semibold text-gray-800 dark:text-gray-300">Build tools
                            </h1>
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Learn how to use Taildash
                                included npm scripts to automate your time-consuming tasks in your development
                                workflow with Gulp, Browsersync and PostCSS.</p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Tooling setup
                            </h2>
                            <p class="mb-4">Taildash uses NPM scripts for its build system. Our <code class="text-pink-700">package.json</code> includes convenient methods for
                                working with the framework, including compiling code, running tests, and more.</p>
                            <p>To use our build system and run our documentation locally, you'll need a copy of
                                Taildash's source files and Node. Follow these steps and you should be ready to
                                rock:</p>
                            <ul class="list-decimal list-inside pl-8 my-4">
                                <li class="mb-2"><a class="text-blue-500" href="https://nodejs.org/download/">Download and install Node.js</a>, which
                                    we use to manage our dependencies.</li>
                                <li class="mb-2">Run <code class="text-pink-700">npm install --global gulp-cli</code> command. If you
                                    already installed Gulp CLI previously, you can skip this step and jump to step
                                    3.</li>
                                <li class="mb-2">Navigate to the root <code class="text-pink-700">tailback/</code>
                                    directory and run <code class="text-pink-700">npm install</code>.</li>
                                <li class="mb-2">After Npm install complete, run <code class="text-pink-700">npm run start</code> to start development.</li>
                                </ol>
                                <p>Yup, that's it.</p>
                        </div>

                        <div id="gulps" class="mb-8">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Gulp, Sass and
                                Browsersync</h2>
                            <p class="mb-4">When install processing completed, you'll be able to run the various
                                commands provided from the command line. Now you have an integrated workflow.</p>
                            <p class="mb-4">Our <code class="text-pink-700">gulpfile.js</code> includes the
                                following tasks:</p>
                            <table class="table-auto">
                                <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                    <tr class="border border-gray-200 dark:border-gray-700">
                                        <th class="py-2">Core Task</th>
                                        <th class="py-2">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            <code class="text-pink-700">npm run start</code>
                                        </td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            Start development process with generate <code class="text-pink-700">src/scss/*.scss</code> to <code class="text-pink-700">src/css/style.css</code>, Minify images to
                                            <code class="text-pink-700">dist/img-min/*</code> and launch Browsersync
                                            in <code class="text-pink-700">http://localhost:3100/</code> with
                                            automate page reload
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            <code class="text-pink-700">npm run build</code>
                                        </td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            Generates a <code class="text-pink-700">dist/</code> directory with all
                                            the production files <code class="text-pink-700">Minify css, js and other files</code></td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            <code class="text-pink-700">npm run updateplugins</code>
                                        </td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-500 dark:border-gray-700 font-medium">
                                            Update all plugins in <code class="text-pink-700">vendors/*</code> with
                                            new version. Dont forget to run <code class="text-pink-700">npm update</code> before running this task.
                                            You can running this task before start development process.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4 class="text-xl mb-2 font-semibold text-gray-800 dark:text-gray-300 text-primary">
                                WARNING</h4>
                            <p class="mb-4">If you are using MacOS please use <code class="text-pink-700">sudo</code> keyword in the command because they need
                                administrator rights to install Gulp globally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>