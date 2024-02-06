<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('app_name') }} - AI Technology & Startup HTML Template</title>
    <meta name="description" content="AIMass Tailwind based SASS Template" />

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- Site font -->
    <link href="{{ asset('assets/fonts/fonts.css') }}" rel="stylesheet" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    <!-- Development css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
<div class="page-wrapper relative z-[1] bg-black text-white">
    <!--...::: Header Start :::... -->
    <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
        <div class="global-container">
            <div class="flex items-center justify-between gap-x-8">
                <!-- Header Logo -->
                <a href="index.html" class="">
                    <img src="assets/img/logo-light.png" alt="AIMass" width="96" height="24" />
                </a>
                <!-- Header Logo -->

                <!-- Header Navigation -->
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <img class="dropdown-icon" src="assets/img/icon-black-long-arrow-right.svg"
                                     alt="cheveron-right" width="16" height="16" />
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main is-text-white">
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Demo
                                    <img class="dropdown-icon" src="assets/img/icon-black-cheveron-right.svg"
                                         alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-1">
                                    <li class="sub-menu--item">
                                        <a href="index.html">home 01</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-2.html">home 02</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-3.html">home 03</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-4.html"> home 04</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link-item">About</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Services
                                    <img class="dropdown-icon" src="assets/img/icon-black-cheveron-right.svg"
                                         alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-2">
                                    <li class="sub-menu--item">
                                        <a href="services.html">Services</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="service-details.html">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Pages
                                    <img class="dropdown-icon" src="assets/img/icon-black-cheveron-right.svg"
                                         alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-3">
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">blogs
                                            <img class="dropdown-icon"
                                                 src="assets/img/icon-black-cheveron-right.svg" alt="cheveron-right"
                                                 width="16" height="16" /></a>
                                        <ul class="sub-menu shape-none" id="submenu-4">
                                            <li class="sub-menu--item">
                                                <a href="blog.html">blogs</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="blog-details.html">blog details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                            <img class="dropdown-icon"
                                                 src="assets/img/icon-black-cheveron-right.svg" alt="cheveron-right"
                                                 width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-5">
                                            <li class="sub-menu--item">
                                                <a href="teams.html">Teams</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="team-details.html">Teams Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                                            <img class="dropdown-icon"
                                                 src="assets/img/icon-black-cheveron-right.svg" alt="cheveron-right"
                                                 width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-6">
                                            <li class="sub-menu--item">
                                                <a href="faq.html">FAQ-1</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="faq-2.html">FAQ-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                            <img class="dropdown-icon"
                                                 src="assets/img/icon-black-cheveron-right.svg" alt="cheveron-right"
                                                 width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-7">
                                            <li class="sub-menu--item">
                                                <a href="portfolio.html">Portfolio</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details.html">Portfolio Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="pricing.html" data-menu-get="h3" class="drop-trigger">Pricing
                                        </a>
                                    </li>

                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                            <img class="dropdown-icon"
                                                 src="assets/img/icon-black-cheveron-right.svg" alt="cheveron-right"
                                                 width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-8">
                                            <li class="sub-menu--item">
                                                <a href="error-404.html">Error 404</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="signup.html">Signup</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="reset-password.html">Reset Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link-item">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Navigation -->

                <!-- Header User Event -->
                <div class="flex items-center gap-6">
                    <a href="login.html"
                       class="hidden border-b-2 border-transparent font-bold text-white transition-all duration-300 hover:border-colorGreen hover:text-colorGreen lg:inline-block">Login</a>
                    <a href="signup.html"
                       class="button hidden h-full rounded border-none bg-colorGreen py-3 text-base text-black after:border-none after:bg-white lg:inline-block">Sign
                        up free</a>
                    <!-- Responsive Offcanvas Menu Button -->
                    <div class="block lg:hidden">
                        <button class="mobile-menu-trigger is-white">
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- Header User Event -->
            </div>
        </div>
    </header>
    <!--...::: Header End :::... -->

   @yield('content')

    <!--...::: Footer-2 Section Start :::... -->
    <footer id="footer-4">
        <div class="relative z-[1] overflow-hidden bg-black text-white">
            <!-- Section Container -->
            <div class="pb-10">
                <!-- Footer Center -->
                <div class="mt-[100px]">
                    <!-- Section Container -->
                    <div class="global-container">
                        <!-- Footer Widgets Block -->
                        <div
                            class="grid gap-x-10 gap-y-[60px] sm:grid-cols-2 md:grid-cols-4 lg:flex lg:justify-between lg:gap-x-20">
                            <!-- Footer Widget -->
                            <div class="flex flex-col gap-y-6">
                                <!-- Footer Title -->
                                <h4 class="text-[21px] font-semibold capitalize text-white">
                                    Primary Pages
                                </h4>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="index.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">About
                                            Us</a>
                                    </li>
                                    <li>
                                        <a href="services.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Services</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">pricing</a>
                                    </li>
                                    <li>
                                        <a href="contact.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget -->
                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6">
                                <!-- Footer Title -->
                                <h4 class="text-[21px] font-semibold capitalize text-white">
                                    Utility pages
                                </h4>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="signup.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Signup</a>
                                    </li>
                                    <li>
                                        <a href="login.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Login</a>
                                    </li>
                                    <li>
                                        <a href="error-404.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">404
                                            Not found</a>
                                    </li>
                                    <li>
                                        <a href="reset-password.html"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Password
                                            Reset</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item -->

                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6">
                                <!-- Footer Title -->
                                <h4 class="text-[21px] font-semibold capitalize text-white">
                                    Technical Resources
                                </h4>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">URL
                                            Categorization</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Advisories</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">Security
                                            Check Up</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">User
                                            Center</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer"
                                           class="transition-all duration-300 ease-linear hover:text-colorGreen">App
                                            Version</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item -->
                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6">
                                <!-- Footer Title -->
                                <h4 class="text-[21px] font-semibold capitalize text-white">
                                    Socials
                                </h4>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[15px] capitalize">
                                    <li>
                                        <a href="http://www.facebook.com" class="group flex items-center gap-x-3">
                                            <div
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-green-600">
                                                <img src="assets/img/th-1/facebook-icon-white.svg"
                                                     alt="facebook-icon-white" width="14" height="14" />
                                            </div>
                                            <span class="inline-block flex-1">Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.twitter.com" class="group flex items-center gap-x-3">
                                            <div
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-green-600">
                                                <img src="assets/img/th-1/twitter-icon-white.svg"
                                                     alt="twitter-icon-white" width="14" height="14" />
                                            </div>
                                            <span class="inline-block flex-1">Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.instagram.com" class="group flex items-center gap-x-3">
                                            <div
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-green-600">
                                                <img src="assets/img/th-1/instagram-icon-white.svg"
                                                     alt="instagram-icon-white" width="14" height="14" />
                                            </div>
                                            <span class="inline-block flex-1">Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.linkedin.com" class="group flex items-center gap-x-3">
                                            <div
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-green-600">
                                                <img src="assets/img/th-1/linkedin-icon-white.svg"
                                                     alt="linkedin-icon-white" width="14" height="14" />
                                            </div>
                                            <span class="inline-block flex-1">Linkedin</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item -->
                        </div>
                        <!-- Footer Widgets Block -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Footer Center -->

                <!-- Footer Separator -->
                <div class="global-container">
                    <div class="mb-10 mt-[60px] h-[1px] w-full bg-white opacity-10"></div>
                </div>
                <!-- Footer Separator -->

                <!-- Footer Bottom -->
                <div>
                    <div class="global-container">
                        <div
                            class="flex flex-wrap items-center justify-center gap-5 text-center md:justify-between md:text-left">
                            <a href="index.html">
                                <img src="assets/img/logo-light.png" alt="logo-light" width="111" height="23" />
                            </a>

                            <p>&copy; Copyright 2024, All Rights Reserved by Mthemeus</p>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
            </div>
            <!-- Section Container -->
            <!-- Background Gradient -->
            <div
                class="absolute left-1/2 top-[80%] -z-[1] h-[1280px] w-[1280px] -translate-x-1/2 rounded-full bg-gradient-to-t from-[#39FF14] to-[#37ff1460] blur-[150px]">
            </div>
        </div>
    </footer>
    <!--...::: Footer-2 Section End :::... -->
</div>

<!--Vendor js-->
<script src="{{ asset('assets/js/vendors/counterup.js') }}" type="module"></script>
<script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/menu.js') }}"></script>

<!-- Main js -->
<script src="assets/js/main.js"></script>
</body>

</html>
