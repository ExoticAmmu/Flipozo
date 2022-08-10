<x-guest-layout>

    <!-- navbar -->
    <nav class="bg-gray-800 hidden lg:block">
        <div class="container">
            <div class="flex">

                <!-- all category -->
                <div class="px-8 py-4 bg-primary flex items-center cursor-pointer group relative">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All categories</span>
                    <div
                        class="absolute left-0 top-full w-full divide-gray-300 divide-dashed divide-y bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/sofa.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/office.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Office</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/terrace.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed-2.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/restaurant.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- all category end -->

                <!-- nav menu -->
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 text-base capitalize">
                        <a href="index.html" class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="shop.html" class="text-gray-200 hover:text-white transition">Shop</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
                    </div>
                    <a href="login.html" class="ml-auto justify-self-end text-gray-200 hover:text-white transition">
                        Login/Register
                    </a>
                </div>
                <!-- nav menu end -->

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- mobile menubar -->
    <div
        class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
        <a href="javascript:void(0)" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>
        <a href="cart.html" class="text-center text-gray-700 hover:text-primary transition relative">
            <span
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden" id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu"
                class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
            <!-- navlink -->
            <h3 class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4">Menu</h3>
            <div class="">
                <a href="index.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Home
                </a>
                <a href="shop.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Shop
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    About Us
                </a>
                <roa href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Contact Us
                </roa>
            </div>
            <!-- navlinks end -->
        </div>
    </div>
    <!-- mobile sidebar menu end -->


    <!-- form wrapper -->
    <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">
                create an acocunt
            </h2>
            <p class="text-gray-600 mb-6 text-sm">
                Register here if you don't have account
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Full Name <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <input type="email" class="input-box" placeholder="example@mail.com">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Password <span class="text-primary">*</span></label>
                        <input type="password" class="input-box" placeholder="type password">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Confirm Password
                            <span class="text-primary">*</span>
                        </label>
                        <input type="password" class="input-box" placeholder="confirm your password">
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <input type="checkbox" id="agreement"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                        I have read and agree to the
                        <a href="#" class="text-primary">terms & conditions</a>
                    </label>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        create account
                    </button>
                </div>
            </form>
            <!-- login with social -->
            <div class="mt-6 flex justify-center relative">
                <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
                <div class="text-gray-600 uppercase px-3 bg-white relative z-10">
                    OR SINGUP IN WITH
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <a href="#"
                    class="block w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm">
                    Facebook
                </a>
                <a href="#"
                    class="block w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto font-medium text-sm">
                    Google
                </a>
            </div>
            <!-- login with social end -->
            <p class="mt-4 text-gray-600 text-center">
                Already have an account? <a href="login.html" class="text-primary">Login Now</a>
            </p>
        </div>
    </div>
    <!-- form wrapper end -->




    <script>
        let menuBar = document.querySelector('#menuBar')
        let mobileMenu = document.querySelector('#mobileMenu')
        let closeMenu = document.querySelector('#closeMenu')

        menuBar.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden')
        })

        closeMenu.addEventListener('click', function() {
            mobileMenu.classList.add('hidden')
        })
    </script>


</x-guest-layout>
