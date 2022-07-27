<footer class="bg-white dark:bg-gray-800 p-6 shadow-sm">
        <div class="mx-auto">
          <div class="flex flex-wrap flex-row -mx-4">
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-left md:rtl:text-right">
              <ul class="ltr:pl-0 rtl:pr-0">
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index.html#">Support</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index.html#">Help Center</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index.html#">Privacy</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="index.html#">Terms of Service</a>
                </li>
              </ul>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-right md:rtl:text-left">
              <p class="mb-0 mt-3 md:mt-0">
                <a href="index.html" class="hover:text-indigo-500">Tailnet</a> | All right reserved
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!--start::Global javascript (used in all pages)-->
  <script src="{{('/vendors/alpinejs/dist/cdn.min.js') }}"></script><!-- core js -->
  <script src="{{ ('/vendors/chart.js/dist/chart.min.js') }}"></script><!-- charts -->
  <script src="{{ ('/vendors/flatpickr/dist/flatpickr.min.js') }}"></script><!-- input date -->
  <script src="{{ ('/vendors/flatpickr/dist/plugins/rangePlugin.js') }}"></script><!-- input range date -->
  <script src="{{ ('/vendors/@yaireo/tagify/dist/tagify.min.js') }}"></script><!-- input tags -->
  <script src="{{ ('/vendors/pristinejs/dist/pristine.min.js') }}"></script><!-- form validation -->
  <script src="{{ ('/vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script><!--sort table-->
  <script src="{{ ('/vendors/glightbox/dist/js/glightbox.min.js') }}"></script><!-- lightbox image -->
  <script src="{{ ('/vendors/flickity/dist/flickity.pkgd.min.js ') }}"></script>
  <!-- slider -->
  <!--end::Global javascript (used in all pages)-->

  <!-- Minify Global javascript (for production purpose) -->
  <!-- <script src="dist/js/scripts.js"></script> -->

  <!--start::Vendor javascript (only on this page)-->
  <script src="{{ ('/vendors/dropzone/dist/min/dropzone.min.js') }}"></script><!-- uploader images -->
  <script src="{{ ('/vendors/simplemde/dist/simplemde.min.js') }}"></script><!-- textarea editor -->
  <script src="{{ ('/vendors/jsvectormap/dist/js/jsvectormap.min.js') }}"></script><!-- vector map -->
  <script src="{{ ('/vendors/jsvectormap/dist/maps/world.js') }}"></script><!-- world vector map -->
  <!--end::Vendor javascript (only on this page)-->

  <!--start::Demo javascript ( initialize global javascript )-->
  <script src="{{ ('/js/demo.js') }}"></script>

  <!--start::Call vendor ( initialize vendor javascript )-->
  <script src="{{ ('/js/vendor.js') }}"></script>

  <!--start::Customizer js ( Only for demo purpose )-->
  <script src="{{ ('/js/customizer.js') }}"></script>
  </footer>