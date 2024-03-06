<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    @vite('resources/css/style.css')
</head>

<body>
    <nav class="nav-group">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute flex inset-y-0 left-0 items-center sm:hidden">
                    <!-- Start mobile menu button -->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>

                        <!-- Start icon when menu is closed. Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- End icon when menu is closed. Menu open: "hidden", Menu closed: "block" -->

                        <!-- Start icon when menu is open. Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <!-- End icon when menu is open. Menu open: "block", Menu closed: "hidden" -->
                    </button>
                    <!-- End mobile menu button -->
                </div>

                <div class="flex items-center justify-center max-sm:flex-1">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-12 w-auto" src="img/icon1.png" alt="hostfun">
                    </div>
                </div>

                <div class="hidden items-center justify-center sm:ml-6 sm:block">
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Hosting</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Domain</a>
                        </li>
                    </ul>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-amber-500 py-2 px-6 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 max-sm:hidden">Sign
                        Up
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <ul class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Hosting</a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Domain</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>