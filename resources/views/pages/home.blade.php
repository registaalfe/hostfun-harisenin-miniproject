@extends('layouts.app')

@section('content')
<section class="container flex mx-auto bg-[#311a50] min-w-full">
    <div class=" relative flex-col mb-16">

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

        <div class="btn-login text-center">
            <a href="#"
                class="signup-button text-base text-center font-semibold rounded-md mb-16 bg-[#E9E604] py-2 px-6 focus:outline-none max-sm:hidden">Get
                Started</a>
        </div>
    </div>

    <div class="flex">
        <div class="container">

        </div>
    </div>
</section>

@endsection