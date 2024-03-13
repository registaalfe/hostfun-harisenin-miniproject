<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    @vite('resources/css/style.css')

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Start navbar -->
    <div class="container flex-wrap inline">
        <nav class="nav-group">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-20 items-center justify-between">
                    <div class="absolute flex inset-y-0 justify-end items-center sm:hidden">
                        <!-- Start mobile menu button -->
                        <input type="checkbox" name="hamburger" id="hamburger" class="peer" hidden>
                        <label for="hamburger"
                            class="peer-checked:hamburger block relative z-20 p-6 mr-6 cursor-pointer lg:hidden">
                            <div class="m-auto h-0.5 w-6 rounded bg-white transition duration-300" aria-hidden:true>
                            </div>
                            <div class="m-auto mt-2 h-0.5 w-6 rounded bg-white transition duration-300"
                                aria-hidden:true>
                            </div>
                        </label>

                        <!-- Mobile menu, show/hide based on menu state. -->
                        <div
                            class="peer-checked:translate-x-0 fixed top-14 inset-0 translate-x-[-100%] bg-[#311a50] shadow-xl lg:w-auto lg:shadow-none lg:static">
                            <div class="flex flex-col h-full justify-between lg:flex-row">
                                <ul class="px-6 pt-16 space-y-4 md:px-12 lg:space-y-0">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <li>
                                        <a href="#"
                                            class="group relative block font-medium text-gray-300 py-2 px-4 hover:text-white">Home</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="group relative block font-medium text-gray-300 py-2 px-4 hover:text-white">Hosting</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="group relative block font-medium text-gray-300 py-2 px-4 hover:text-white">Domain</a>
                                    </li>
                                </ul>

                                <div class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0">
                                    <button type="button"
                                        class="signup-button block rounded-md bg-gradient-to-r bg-[#E9E604] py-3 px-48 font-bold">Sign
                                        In
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End mobile menu button -->
                    </div>

                    <div class="flex items-center justify-center max-sm:flex-1">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-12 w-auto" src="img/icon1.png" alt="hostfun">
                        </div>
                    </div>

                    <div class="nav-item hidden items-center justify-center sm:ml-6 sm:block">
                        <ul class="flex space-x-4">
                            <li>
                                <a href="#"
                                    class="text-gray-300 hover:text-white rounded-md px-3 py-2 text-base font-medium">Home</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-300 hover:text-white rounded-md px-3 py-2 text-base font-medium">Hosting</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-300 hover:text-white rounded-md px-3 py-2 text-base font-medium">Domain</a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button type="button"
                            class="signup-button text-base relative rounded-md bg-[#E9E604] py-1 px-6 focus:outline-none max-sm:hidden"><span
                                class="font-semibold">Sign
                                In</span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- End navbar -->

</body>

</html>