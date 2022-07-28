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
          <p class="text-xl font-bold mt-3 mb-5">Devices</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="leading-relaxed font-light text-lg mx-auto pb-2">The easiest way to wrap your
                  screenshots on Iphone, Samsung (Android) and Macbook. Make screenshots for Iphone
                  with size 375x812, for Samsung size 480x1066 and for macbook size 500x800.</p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Potrait</h2>
                <p class="mb-4">Screenshot Iphone and Samsung (Android) Potrait style.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Android potrait -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf">
                              <rect x="50" y="16.5" width="480" height="1066"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf)" xlink:href="../src/img/app/android-potrait.jpg" height="94%" width="100%" style="transform:translateY(15px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/android-dark.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Iphone potrait -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf2">
                              <rect x="52" y="10" width="380" height="818"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf2)" xlink:href="../src/img/app/iphone-potrait.jpg" height="92%" width="100%" style="transform:translateY(30px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/iphone-dark.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Iphone light potrait -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf3">
                              <rect x="52" y="10" width="380" height="818"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf3)" xlink:href="../src/img/app/iphone-potrait.jpg" height="92%" width="100%" style="transform:translateY(30px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/iphone-light.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Android potrait --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf"&gt;
			                          &lt;rect x="50" y="16.5" width="480" height="1066"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf)" xlink:href="src/img/app/android-potrait.jpg" height="94%" width="100%" style="transform:translateY(15px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/android-dark.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;

			                  &lt;!-- Iphone potrait --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf2"&gt;
			                          &lt;rect x="52" y="10" width="380" height="818"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf2)" xlink:href="src/img/app/iphone-potrait.jpg" height="92%" width="100%" style="transform:translateY(30px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/iphone-dark.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;

			                  &lt;!-- Iphone light potrait --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf3"&gt;
			                          &lt;rect x="52" y="10" width="380" height="818"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf3)" xlink:href="src/img/app/iphone-potrait.jpg" height="92%" width="100%" style="transform:translateY(30px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/iphone-light.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;
			                </code>
			              </pre>
                <p class="mb-4">Very simple to change screenshot, just edit <code class="text-pink-700">Phone screen</code> source images. If you use more than 1
                  style, you must make new id in <code class="text-pink-700">clipPath</code>.</p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Landscape</h2>
                <p class="mb-4">Screenshot Iphone and Samsung (Android) in Landscape style.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Android landscape -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf4">
                              <rect y="50" x="26.5" width="1066" height="480"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf4)" xlink:href="../src/img/app/android-landscape.jpg" height="100%" width="95%" style="transform:translateX(15px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/android-dark-landscape.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Iphone landscape -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf5">
                              <rect y="52" x="18" height="380" width="818"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf5)" xlink:href="../src/img/app/iphone-landscape.jpg" width="96%" height="100%" style="transform:translateX(30px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/iphone-dark-landscape.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/3">
                      <!-- Iphone light landscape -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf6">
                              <rect y="52" x="18" height="380" width="818"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf6)" xlink:href="../src/img/app/iphone-landscape.jpg" width="96%" height="100%" style="transform:translateX(30px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/iphone-light-landscape.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Android landscape --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf4"&gt;
			                          &lt;rect y="50" x="26.5" width="1066" height="480"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf4)" xlink:href="src/img/app/android-landscape.jpg" height="100%" width="95%" style="transform:translateX(15px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/android-dark-landscape.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;

			                  &lt;!-- Iphone landscape --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf5"&gt;
			                          &lt;rect y="52" x="18" height="380" width="818"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf5)" xlink:href="src/img/app/iphone-landscape.jpg" width="96%" height="100%" style="transform:translateX(30px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/iphone-dark-landscape.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;

			                  &lt;!-- Iphone light landscape --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 906.000000 480.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf6"&gt;
			                          &lt;rect y="52" x="18" height="380" width="818"/&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf6)" xlink:href="src/img/app/iphone-landscape.jpg" width="96%" height="100%" style="transform:translateX(30px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/iphone-light-landscape.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;
			                </code>
			              </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Macbook</h2>
                <p class="mb-4">Screenshot in Macbook.</p>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-2/3">
                      <!-- Macbook -->
                      <figure class="relative">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.000000 574.000000">
                          <!-- Clip path image -->
                          <defs>
                            <clipPath id="svgf77">
                              <rect y="0" x="5" width="800" height="470"></rect>
                            </clipPath>
                          </defs>
                          <!-- Phone screen -->
                          <image clip-path="url(#svgf77)" xlink:href="../src/img/app/macbook-screen2.jpg" height="80%" width="80%" style="transform:translate(96px, 40px);"></image>
                          <!-- Phone cover -->
                          <image xlink:href="../src/img/app/device/macbook.png" height="100%" width="100%"></image>
                        </svg>
                      </figure>
                    </div>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Macbook --&gt;
			                  &lt;figure class="relative"&gt;
			                    &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.000000 574.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf77"&gt;
			                          &lt;rect y="0" x="5" width="800" height="470"&gt;&lt;/rect&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf77)" xlink:href="src/img/app/macbook-screen2.jpg" height="80%" width="80%" style="transform:translate(96px, 40px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/macbook.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                  &lt;/figure&gt;
			                </code>
			              </pre>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Iphone x and
                  Macbook</h2>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-2/3">
                      <div class="relative" style="padding-bottom:66%">
                        <!-- Macbook -->
                        <figure class="absolute top-0 right-0 w-full">
                          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.000000 574.000000">
                            <!-- Clip path image -->
                            <defs>
                              <clipPath id="svgf77">
                                <rect y="0" x="5" width="800" height="470"></rect>
                              </clipPath>
                            </defs>
                            <!-- Phone screen -->
                            <image clip-path="url(#svgf77)" xlink:href="../src/img/app/macbook-screen2.jpg" height="80%" width="80%" style="transform:translate(96px, 40px);">
                            </image>
                            <!-- Phone cover -->
                            <image xlink:href="../src/img/app/device/macbook.png" height="100%" width="100%"></image>
                          </svg>
                        </figure>

                        <!-- Iphone potrait -->
                        <figure class="absolute left-0 bottom-1 w-1/4">
                          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000">
                            <!-- Clip path image -->
                            <defs>
                              <clipPath id="svgf2">
                                <rect x="52" y="10" width="380" height="818"></rect>
                              </clipPath>
                            </defs>
                            <!-- Phone screen -->
                            <image clip-path="url(#svgf2)" xlink:href="../src/img/app/iphone-potrait2.jpg" height="92%" width="100%" style="transform:translateY(30px);"></image>
                            <!-- Phone cover -->
                            <image xlink:href="../src/img/app/device/iphone-dark.png" height="100%" width="100%"></image>
                          </svg>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="relative" style="padding-bottom:66%"&gt;
			                    &lt;!-- Macbook --&gt;
			                    &lt;figure class="position-absolute top-0 end-0 w-100"&gt;
			                      &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.000000 574.000000"&gt;
			                      &lt;!-- Clip path image --&gt;
			                      &lt;defs&gt;
			                        &lt;clipPath id="svgf77"&gt;
			                          &lt;rect y="0" x="5" width="800" height="470"&gt;&lt;/rect&gt;
			                        &lt;/clipPath&gt;
			                      &lt;/defs&gt;
			                      &lt;!-- Phone screen --&gt;
			                      &lt;image clip-path="url(#svgf77)" xlink:href="src/img/app/macbook-screen2.jpg" height="80%" width="80%" style="transform:translate(96px, 40px);"&gt;&lt;/image&gt;
			                      &lt;!-- Phone cover --&gt;
			                      &lt;image xlink:href="src/img/app/device/macbook.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                    &lt;/svg&gt;
			                    &lt;/figure&gt;

			                    &lt;!-- Iphone potrait --&gt;
			                    &lt;figure class="position-absolute start-0 bottom-1 w-25"&gt;
			                      &lt;svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.000000 906.000000"&gt;
			                        &lt;!-- Clip path image --&gt;
			                        &lt;defs&gt;
			                          &lt;clipPath id="svgf2"&gt;
			                            &lt;rect x="52" y="10" width="380" height="818"/&gt;
			                          &lt;/clipPath&gt;
			                        &lt;/defs&gt;
			                        &lt;!-- Phone screen --&gt;
			                        &lt;image clip-path="url(#svgf2)" xlink:href="src/img/app/iphone-potrait.jpg" height="92%" width="100%" style="transform:translateY(30px);"&gt;&lt;/image&gt;
			                        &lt;!-- Phone cover --&gt;
			                        &lt;image xlink:href="src/img/app/device/iphone-dark.png" height="100%" width="100%"&gt;&lt;/image&gt;
			                      &lt;/svg&gt;
			                    &lt;/figure&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</x-admin-layout>