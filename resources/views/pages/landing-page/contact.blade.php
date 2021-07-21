@extends('layouts.app')

<!-- Set Title -->
@section('title', 'Contact')

@section('content')
<section class="h-full w-full px-8 py-20 bg-white">
    <div class="content-3-1 flex lg:flex-row flex-col items-center" style="font-family: 'Poppins', sans-serif">
        <!-- Left Column -->
        <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=GKI%20Sangkrah&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }
                    </style><a href="https://www.embedgooglemap.net">add google maps html</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                    </style>
                </div>
            </div>
        </div>
        <!-- Right Column -->
        <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
            <h2 class="md:text-4xl text-3xl font-semibold mb-10 tracking-tight text-medium-black">
                Contact Us
            </h2>
            <ul>
                <li class="mb-8">
                    <h4 class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                        <span class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full"></span>
                        Address
                    </h4>
                    <p class="text-base leading-7 tracking-wide caption">
                        Jl. Demangan 2, Surakarta - 57135
                    </p>
                </li>
                <li class="mb-8">
                    <h4 class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                        <span class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full"></span>
                        Email
                    </h4>
                    <p class="text-base leading-7 tracking-wide caption">
                        <b>majelisjemaatgkisangkrah@gmail.com</b>
                        <br>
                        <b>gkisangkrahsolo@gmail.com </b>
                    </p>
                </li>
                <li class="mb-16">
                    <h4 class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                        <span class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full"></span>
                        Phone
                    </h4>
                    <p class="text-base leading-7 tracking-wide caption">
                        (0271) 647286 <br>
                        0822-2800-3300
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection

@push('after-style')

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .btn-outline-header-2-3 {
        border: 1px solid #707092;
        color: #707092;
    }

    .btn-outline-header-2-3:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
    }

    .btn-outline-header-2-3:hover div path {
        fill: #ffffff;
    }

    .box-shadow-header-2-3:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .navigation-header-2-3 a:hover,

    .active::after {
        font-weight: 600;
    }

    .navigation-header-2-3 a:hover {
        color: #e7e7e8;
    }

    .navigation-header-2-3 {
        color: #707092;
    }

    .bg-screen-header-2-3 {
        background-color: #707092;
    }

    .bg-popup-header-2-3 {
        background-color: #141432;
    }
</style>
@endpush