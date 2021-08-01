@extends('layouts.app')

<!-- Set Title -->
@section('title', 'Pendeta')

@section('content')
<div>
    <section class="text-black-200">
        <div class="max-w-6xl mx-auto px-5" style="padding-top: 2rem; padding-bottom:2rem">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">Daftar Pendeta</h1>
            </div>
            <div class="flex flex-wrap m-4" style="margin:auto; padding-left: 4rem;">
                @foreach($pdt as $dataPdt)
                <div class="p-4" style="width: 20rem; height: 20rem;">
                    <div class="border border-gray-300 p-6 rounded-lg" style="border-color: black;">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <img src="{{ asset('/assets/img/person.png') }}" alt="">
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-2">{{$dataPdt->nama}}</h2>
                        <p class="leading-relaxed text-base">{{$dataPdt->tempat}} , {{ $dataPdt->tgl_lahir }}</p>
                        <p class="leading-relaxed text-base">{{$dataPdt->email}}</p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-indigo-100 mb-4">
                                    <a href="https://wa.me/{{$dataPdt->no_hp}}" target="_blank">
                                        <img src="{{ asset('/assets/img/whatsapp.png') }}">
                                    </a>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
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