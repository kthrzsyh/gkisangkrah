@extends('layouts.app')

<!-- Set Title -->
@section('title', 'Home')

@section('content')
<section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">
    <div style="font-family: 'Poppins', sans-serif">
        <!-- Hero-header-2-3 -->
        <div>
            <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">

                    <p class="mb-8 leading-relaxed font-semibold text-sm" style="color: #F9F871">
                        GKI Sangkrah Surakarta
                    </p>

                    <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight" style="color: white; line-height: 1.2">
                        Selamat Datang<br>
                        di GKI Sangkrah
                    </h1>

                    <h1 class="lg:hidden block title-font sm:text-5xl lg:text-6xl text-4xl mb-8 lg::px-10 md:px-10 sm:px-6 px-0 font-semibold sm:leading-tight" style="color: #F9F871; line-height: 1.2">
                        Selamat Datang di GKI Sangkrah
                    </h1>

                    <div class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 sm:space-x-3 space-x-0">

                        <button class="inline-flex font-semibold text-white text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-2-3" style="background: #DC745F; font-family: 'Poppins', sans-serif;">
                            Warta
                        </button>

                        <button class="btn-outline-header-2-3 font-normal text-black text-base py-4 px-6 rounded-xl focus:outline-none rounded hover:border" style="font-family: 'Poppins', sans-serif">
                            <div class="flex items-center">
                                <img style="height: 20px;" class="mr-2" src="{{ asset('/assets/img/icon-1.png') }}" alt="" />
                                Gallery
                            </div>
                        </button>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
                    <img id="hero-header-2-3" style="height: 75%;" src="{{ asset('/assets/img/hero-1.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-white text-black py-8">
        <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Sejarah GKI Sangkrah</p>
                <p class="text-sm md:text-base text-black-50 mb-4">
                    Berikut adalah sejarah singkat dari GKI Sangkrah
                </p>
                <!-- <a href="#" class="bg-transparent mr-auto hover:bg-yellow-300 text-yellow-300 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                    Explore Now</a> -->
            </div>
            <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                <div class="container mx-auto w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                        <div class="border-2-2 border-555 absolute h-full border" style="right: 50%; border: 2px solid #141432; border-radius: 1%;"></div>
                        <div class="border-2-2 border-yellow-555 absolute h-full border" style="left: 50%; border: 2px solid #141432; border-radius: 1%;"></div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <p class="mb-3 text-base text-yellow-300">1-6 May, 2021</p>
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Registration</h4>
                                <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100">
                                    Pick your favourite event(s) and register in that event by filling the form corresponding to that
                                    event. Its that easy :)
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1  w-5/12 px-1 py-4 text-left">
                                <p class="mb-3 text-base text-yellow-300">6-9 May, 2021</p>
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Participation</h4>
                                <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100">
                                    Participate online. The links for your registered events will be sent to you via email and whatsapp
                                    groups. Use those links and show your talent.
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <p class="mb-3 text-base text-yellow-300"> 10 May, 2021</p>
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Result Declaration</h4>
                                <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100">
                                    The ultimate genius will be revealed by our judging panel on 10th May, 2021 and the resukts will be
                                    announced on the whatsapp groups and will be mailed to you.
                                </p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>

                            <div class="order-1  w-5/12 px-1 py-4">
                                <p class="mb-3 text-base text-yellow-300">12 May, 2021</p>
                                <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Prize Distribution</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                    The winners will be contacted by our team for their addresses and the winning goodies will be sent at
                                    their addresses.
                                </p>
                            </div>
                        </div>
                    </div>
                    <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
                </div>
            </div>
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