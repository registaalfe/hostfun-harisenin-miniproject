@extends('layouts.app')

@section('content')
<section class="container flex mx-auto bg-[#311a50] min-w-full bg-cover bg-no-repeat bg-center"
    style="background-image: url('/img/background-homepage.png')">
    <div class="relative flex-col mb-16">

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

        <div id="slide" class="flex-col w-max mt-12">
            <div class="item bg-orange-400 w-[362px] h-[442px]">
                <div class="content">
                    <h1>DOMAIN MURAH</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>

            <div class="item bg-purple-400">
                <div class="content">
                    <h1>DOMAIN MURAH</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>

            <div class="item bg-green-400">
                <div class="content">
                    <h1>DOMAIN MURAH</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>

            <div class="item bg-red-400">
                <div class="content">
                    <h1>DOMAIN MURAH</h1>
                    <p>Banyak domain murah mulai dari 15k.</p>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection