@extends('layouts.app')

@section('content')
<div class="flex bg-[#311a50]">
    <div class="flex-row">
        <h1 class="heading text-center font-extrabold text-6xl leading-[1.1] text-white mx-80 pt-14 pb-8">
            Secure and Efficient Hosting for Your Website
        </h1>
        <p class="richtext text-center font-thin text-xl leading-[1.3] text-white mx-64 pb-8">
            With our hosting solutions, easily scale your website as your
            business grows, accommodating increases in traffic and resource
            demands effortlessly.
        </p>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button"
                class="signup-button text-base relative rounded-md bg-[#E9E604] py-1 px-6 focus:outline-none max-sm:hidden"><span
                    class="font-semibold">Sign
                    In</span>
            </button>
        </div>
    </div>
</div>

@endsection