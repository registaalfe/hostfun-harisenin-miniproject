@extends('layouts.app')

@section('content')
<section class="container flex mx-auto bg-[#311a50] min-w-full min-h-full bg-cover bg-no-repeat bg-center"
    style="background-image: url('/img/background-homepage.png')">
    <div class="relative flex-col mb-16 min-h-full">

        <h1
            class="heading text-center font-extrabold leading-[1.1] text-white pt-14 pb-8 sm:mx-20 md:mx-20 lg:mx-36 xl:mx-72 sm:text-5xl md:text-5xl lg:text-6xl xl:text-6xl">
            Secure and Efficient Hosting for Your Website
        </h1>
        <p
            class="richtext text-center font-thin leading-[1.3] text-white pb-8 sm:mx-12 md:mx-20 lg:mx-32 xl:mx-72 sm:text-base md:text-lg">
            With our hosting solutions, easily scale your website as your
            business grows, accommodating increases in traffic and resource
            demands effortlessly.
        </p>

        <div class="btn-login text-center mt-8 mb-8">
            <a href="#"
                class="signup-button text-base text-center font-semibold rounded-sm mb-16 bg-[#E9E604] py-4 px-12 focus:outline-none max-sm:hidden hover:shadow-[6px_6px_0_#f4005c] duration-500">Get
                Started</a>
        </div>

        <div id="slide" class="w-max mt-12 bg-[#311a50]">
            <div class="item bg-[#342050] w-[362px] h-[442px] inline-block relative">
                <div class="content px-6 py-4">
                    <div class="heading-slider flex border-b-[1px] py-2">
                        <h3 class="text-white font-semibold text-left text-2xl">Domain Solutions
                        </h3>
                        <button id="next-up"
                            class="w-12 h-12 rounded-[50%] bg-slate-200 transition hover:bg-slate-400"><i
                                class="fa-lg fa-solid fa-angle-right fa-rotate-by"
                                style="--fa-rotate-angle: -45deg;"></i></button>
                    </div>

                    <p class="text-left text-gray-300 py-4">Find the perfect domain to match your unique vision
                        and goals effortlessly.</p>
                    <img src="/img/img-slider1.png" alt="">
                </div>
            </div>

            <div class="item bg-[#67498E] w-[362px] h-[442px] inline-block relative">
                <div class="content">
                    <h1>DOMAIN MURAH 2</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>

            <div class="item bg-[#67498E] w-[362px] h-[442px] inline-block relative">
                <div class="content">
                    <h1>DOMAIN MURAH 3</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>

            <div class="buttons absolute bottom-8 z-[222222] text-center w-full">
                <button id="prev" class="w-12 h-12 rounded-[50%] bg-slate-200 transition hover:bg-slate-400"><i
                        class="fa-solid fa-angle-left"></i></button>
                <button id="next" class="w-12 h-12 rounded-[50%] bg-slate-200 transition hover:bg-slate-400"><i
                        class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </div>


</section>

@endsection