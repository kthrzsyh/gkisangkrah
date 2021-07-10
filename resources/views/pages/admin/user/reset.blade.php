@extends('layouts.admin')

@push('before-style')
<style>
    .-z-1 {
        z-index: -1;
    }

    .origin-0 {
        transform-origin: 0%;
    }

    input:focus~label,
    input:not(:placeholder-shown)~label,
    textarea:focus~label,
    textarea:not(:placeholder-shown)~label,
    select:focus~label,
    select:not([value='']):valid~label {
        /* @apply transform; scale-75; -translate-y-6; */
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        --tw-scale-x: 0.75;
        --tw-scale-y: 0.75;
        --tw-translate-y: -1.5rem;
    }

    input:focus~label,
    select:focus~label {
        /* @apply text-black; left-0; */
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity));
        left: 0px;
    }
</style>
@endpush

<!-- Set Title -->
@section('title', 'Reset Password')

@section('content')
<header class="bg-white shadow">
    <div class="flex max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="flex-grow text-3xl font-bold text-gray-900">
            Reset Password
        </h1>
    </div>
</header>
<div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
        <h1 class="text-2xl font-bold mb-8" style="text-align: center;">Reset Password {{$user->username}}</h1>
        <form method="post" id="form" novalidate action="/admin/user/update">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <input type="hidden" name="username" value="{{$user->username}}">
            <div class="relative z-0 w-full mb-5">
                <input type="password" name="password" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Masukkan Password Baru</label>
            </div>
            <button id="button" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-green-500 hover:bg-blue-600 hover:shadow-lg focus:outline-none">
                Simpan
            </button>
        </form>
    </div>
</div>

<script>
    'use strict'

    document.getElementById('button').addEventListener('click', toggleError)
    const errMessages = document.querySelectorAll('#error')

    function toggleError() {
        // Show error message
        errMessages.forEach((el) => {
            el.classList.toggle('hidden')
        })

        // Highlight input and label with red
        const allBorders = document.querySelectorAll('.border-gray-200')
        const allTexts = document.querySelectorAll('.text-gray-500')
        allBorders.forEach((el) => {
            el.classList.toggle('border-red-600')
        })
        allTexts.forEach((el) => {
            el.classList.toggle('text-red-600')
        })
    }
</script>
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