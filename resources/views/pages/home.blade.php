@extends('layouts.app')

@section('content')
<section class="container flex mx-auto bg-[#FDF9F2] min-w-full min-h-full">

    <!-- Start hero page -->
    <div class="relative flex flex-col mb-16 min-h-full">
        <h1
            class="heading text-center font-extrabold leading-[1.1] text-[#12294A] pt-14 pb-8 xs:mx-6 xs:text-4xl sm:mx-12 sm:text-5xl md:mx-20 md:text-5xl lg:mx-36 lg:text-6xl xl:mx-72 xl:text-6xl">
            Top Hosting Platforms Support Multinational Enterprises
        </h1>
        <p
            class="richtext text-center font-medium leading-[1.3] text-[#161519] pb-8 xs:mx-12 xs:text-base sm:mx-24 sm:text-base md:text-lg md:mx-36 lg:mx-72 lg:text-lg xl:mx-96 xl:text-lg">
            Easily scale your website as your business grows and accommodating increases in traffic effortlessly
        </p>    

        <div class="btn-login text-center mt-8 mb-8">
            <a href="#"
                class="signup-button text-base text-center font-semibold rounded-full mb-16 text-white bg-[#12294A] py-4 px-12 focus:outline-none max-sm:hidden hover:shadow-[6px_6px_0_#684A90] duration-500">Get
                Started</a>
        </div>

        <!-- Start card slider feature -->
        <!-- <div class="container flex mx-auto flex-row min-w-full justify-evenly self-center">
            <div class="icon-group z-[222222] self-center">
                <button id="prev"
                    class="w-12 h-12 rounded-md rotate-45 border border-[#684A90] transition hover:bg-[#6B60DB]"><i
                        class="icon-left fa-solid fa-angle-up"></i></button>
            </div>
            <div id="slide" class="slide mt-14">
                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">Domain Solutions
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Find the perfect domain to match your unique vision
                            and goals effortlessly.</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider1.png"
                            alt="Domain Solutions">
                    </div>
                </div>

                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">Hosting Packages
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Ready to launch your website? Get hosting from us
                            and get online with easily!</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider2.png"
                            alt="Domain Solutions">
                    </div>
                </div>

                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">VPS Purchase
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Upgrade to VPS hosting for better speed, security,
                            and reliability with our product.</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider3.png"
                            alt="Domain Solutions">
                    </div>
                </div>
            </div>
            <div class="icon-group z-[222222] self-center">
                <button style="left: 20%" id="next"
                    class="w-12 h-12 rounded-md rotate-45 border border-[#684A90] transition hover:bg-[#6B60DB]"><i
                        class="icon-next fa-solid fa-angle-right"></i></button>
            </div>
        </div> -->
        <!-- End card slider feature -->
    </div>
    <!-- End hero page -->

    <!-- Start about page -->
    
    <!-- End about page -->

    

</section>

@endsection