<x-guest-layout>



    <!-- header -->
    <header class="py-4 shadow-sm bg-pink-100 lg:bg-white">
        <div class="container flex items-center justify-between">
            <!-- logo -->
            <a href="#" class="block w-32">
                <img src="images/logo.svg" alt="logo" class="w-full">
            </a>
            <!-- logo end -->

            <!-- searchbar -->
            <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary" placeholder="search">
                <button type="submit" class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition">
                    Search
                </button>
            </div>
            <!-- searchbar end -->

            <!-- navicons -->
            <div class="space-x-4 flex items-center">
                <a href="wishlist.html" class="block text-center text-gray-700 hover:text-primary transition relative">
                    <span class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">5</span>
                    <div class="text-2xl">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wish List</div>
                </a>
                <a href="cart.html" class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative">
                    <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
                    <div class="text-2xl">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                </a>
                <a href="account.html" class="block text-center text-gray-700 hover:text-primary transition">
                    <div class="text-2xl">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div>
            <!-- navicons end -->

        </div>
    </header>
    <!-- header end -->

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
                    <div class="absolute left-0 top-full w-full divide-gray-300 divide-dashed divide-y bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/sofa.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/office.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Office</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/terrace.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed-2.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#" class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
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
    <div class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
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
            <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
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
            <div id="closeMenu" class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
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

    <!-- breadcrum -->
    <div class="py-4 container flex gap-3 items-center">
        <a href="index.html" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">checkout</p>
    </div>
    <!-- breadcrum end -->

    <!-- checkout wrapper -->
    <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
        <!-- checkout form -->
        <div class="lg:col-span-8 border border-gray-200 px-4 py-4 rounded">
            <form action="">
                <h3 class="text-lg font-medium capitalize mb-4">
                    checkout
                </h3>

                <div class="space-y-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                First Name <span class="text-primary">*</span>
                            </label>
                            <input type="text" class="input-box">
                        </div>
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                Last Name <span class="text-primary">*</span>
                            </label>
                            <input type="text" class="input-box">
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Company Name
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            County/Region <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Street Address <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Town/City <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Zip Code <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Phone Number <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                </div>
            </form>
        </div>
        <!-- checkout form end -->

        <!-- order summary -->
        <div class="lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
            <div class="space-y-2">
                <div class="flex justify-between" v-for="n in 3" :key="n">
                    <div>
                        <h5 class="text-gray-800 font-medium">Italian Shape Sofa</h5>
                        <p class="text-sm text-gray-600">Size: M</p>
                    </div>
                    <p class="text-gray-600">x3</p>
                    <p class="text-gray-800 font-medium">$320</p>
                </div>
            </div>
            <div class="flex justify-between border-b border-gray-200 mt-1">
                <h4 class="text-gray-800 font-medium my-3 uppercase">Subtotal</h4>
                <h4 class="text-gray-800 font-medium my-3 uppercase">$320</h4>
            </div>
            <div class="flex justify-between border-b border-gray-200">
                <h4 class="text-gray-800 font-medium my-3 uppercase">Shipping</h4>
                <h4 class="text-gray-800 font-medium my-3 uppercase">Free</h4>
            </div>
            <div class="flex justify-between">
                <h4 class="text-gray-800 font-semibold my-3 uppercase">Total</h4>
                <h4 class="text-gray-800 font-semibold my-3 uppercase">$320</h4>
            </div>

            <!-- agreeement  -->
            <div class="flex items-center mb-4 mt-2">
                <input type="checkbox" id="agreement" class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                <label for="agreement" class="text-gray-600 ml-3 cursor-pointer text-sm">
                    Agree to our
                    <a href="#" class="text-primary">terms & conditions</a>
                </label>
            </div>

            <!-- checkout -->
            <a href="order-complete.html" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
         hover:text-primary transition text-sm w-full block text-center">
                Place order
            </a>
            <!-- checkout end -->
        </div>
        <!-- order summary end -->
    </div>
    <!-- checkout wrapper end -->

    <!-- footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <!-- footer text -->
                <div class="space-y-8 xl:col-span-1">
                    <img class="w-30" src="images/logo.svg" alt="Company name">
                    <p class="text-gray-500 text-base">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio facere rem
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <!-- footer text end -->
                <!-- footer links -->
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Solutions
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Marketing
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Analytics
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Commerce
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Insights
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Support
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Pricing
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Documentation
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Guides
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    API Status
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Company
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    About
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Blog
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Jobs
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Press
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Legal
                            </h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Claim
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Privacy
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Policy
                                </a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">
                                    Terms
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer links end -->
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">© RAFCART - All Rights Reserved</p>
            <div>
                <img src="images/methods.png" class="h-5">
            </div>
        </div>
    </div>
    <!-- copyright end -->
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