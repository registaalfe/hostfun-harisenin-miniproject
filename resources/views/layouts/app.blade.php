<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostfun</title>
    @vite('resources/css/style.css')

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Start navbar -->
    <header class="topnav flex flex-wrap bg-[#341953] xs:justify-between sm:min-w-full sm:mx-auto sm:justify-between md:justify-between md:self-center lg:justify-between xl:justify-between">
        <div class="flex mx-8 my-2 items-center">
            <img class="h-12 w-auto" src="img/icon1.png" alt="hostfun">
        </div>

        <nav class="flex">
            <span id="nav-label" class="hidden">Navigation</span>

            <!-- Start hamburger menu -->
            <button id="btnOpen" aria-expanded="false" aria-labelledby="nav-label"
                class="topnav__open mx-8 my-4 px-1 rounded-full h-14 w-14 bg-gradient-to-r from-[#6115A7] to-[#7054CE] items-center text-white md:hidden lg:hidden xl:hidden">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
            <!-- End hamburger menu to open topnav__menu -->

            <!-- Start show/hide menu -->
            <div role="dialog"
                class="topnav__menu xs:z-[9999999] xs:fixed xs:inset-0 xs:bg-gradient-to-r xs:from-[#6115A7] xs:to-[#7054CE] sm:z-[9999999] sm:fixed sm:inset-0 sm:bg-gradient-to-r sm:from-[#6115A7] sm:to-[#7054CE] md:self-center lg self-center">

                <!-- Start close menu -->
                <button id="btnClose" aria-label="Close" class="topnav_close p-8 text-white flex md:hidden lg:hidden xl:hidden">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
                <!-- End close menu -->

                <ul class="topnav__links flex gap-10 xs:gap-4 xs:flex-col sm:gap-4 sm:flex-col">
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#"
                            class="topnav__link text-gray-300 text-base font-medium hover:text-white xs:text-2xl xs:text-left sm:text-xl sm:text-left">Home</a>
                    </li>
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#"
                            class="topnav__link text-gray-300 text-base font-medium hover:text-white xs:text-2xl xs:text-left sm:text-xl sm:text-left">Hosting</a>
                    </li>
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#"
                            class="topnav__link text-gray-300 text-base font-medium hover:text-white xs:text-2xl xs:text-left sm:text-xl sm:text-left">Domain</a>
                    </li>
                </ul>
            </div>
            <!-- End show/hide menu -->

        </nav>

        <div class="flex items-center mx-8 xs:hidden sm:hidden">
            <button type="button"
                class="signup-button text-base rounded-md hover:shadow-[4px_4px_0_#684A90] duration-500 text-white bg-gradient-to-r from-[#6115A7] to-[#7054CE] py-1 px-6 focus:outline-none max-md:hidden">Sign
                In
            </button>
        </div>
    </header>
    <!-- End navbar -->

    @yield('content')


    <!-- Scripts -->
    <script src="js/script.js"></script>

    <!-- Swiper JS-->
    <script src="https://cdn.josetxu.com/js/pure-pajinate.es5.min.js"></script>
</body>

</html>