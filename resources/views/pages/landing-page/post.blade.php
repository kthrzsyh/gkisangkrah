@extends('layouts.app')
<!-- Set Title -->
@section('title', 'Warta')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
@endsection
@section('content')
<div style="padding-top:2rem; padding-bottom: 5rem;" class="mx-auto p-16 sm:p-24 lg:p-48 bg-gray-200">
    <form method="GET">
        <div class="relative text-gray-600 focus-within:text-gray-400 text-right">
            <input type="search" name="q" class="py-2 text-sm text-white bg-gray-900 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
        </div>
    </form>
    @forelse($warta as $dataWarta)
    <div class="container mx-auto my-5">

        <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">

            <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom" style="background-image: url( /warta/img/{{$dataWarta->gambar}}); background-blend-mode: multiply;"></div>
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">{{$dataWarta->judul??''}}</h3>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>

            <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none" style="width: 100%;">
                    <h3 class="hidden md:block font-bold text-2xl text-gray-700">{{$dataWarta->judul??''}}</h3>
                    <p class="text-gray-600 text-justify" style="
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;">{{ $dataWarta->isi}}</p>
                    <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="#!" data-id="{{$dataWarta->id}}" data-judul="{{$dataWarta->judul}}" data-isi="{{$dataWarta->isi}}" data-file="{{$dataWarta->file}}" data-author="{{$dataWarta->penulis->username}}" data-gambar="{{$dataWarta->gambar}}" id="lihat">
                        <span>Lihat Selengkapnya</span>
                        <span class="text-xs ml-1">&#x279c;</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    @empty
    <div style="text-align: center;">
        Data Tidak Di Temukan
    </div>
    @endforelse

    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="flex-1 flex justify-between sm:hidden">
            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Previous
            </a>
            <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Next
            </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Previous</span>
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                    @for($i = 0; $i < $total; $i++) <form>
                        <button type="submit" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            {{ $i }}
                        </button>
                        <input type="hidden" name="offset" value="{{$i}}">
                        <input type="hidden" name="q" value="{{ $ambilNama }}" class="page">
                        </form>
                        @endfor
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                </nav>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal" style="z-index: 999;overflow: auto; width: 100%">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div class="modal-container bg-white w-11/12 md:max-w-6xl  mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->

            <div class="modal-content py-4 text-left px-10">
                <div class="grid grid-cols-2 gap-4">
                    <div class="">
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold" id="judul"></p>
                        </div>
                        <img class="rounded" style="align-content: center;" src="" alt="" id="gambar">
                    </div>
                    <div class="">
                        <p style="text-align: justify;" id="isi"></p>
                        <a href="" target="_blank" style="font-style: italic; color:blue" id="file">Silahkan Download Disini</a>
                        <div class="grid grid-cols-2">
                            <div>Author</div>
                            <div>
                                <p id="author" style="font-style: italic;"></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@push('after-script')
<script>
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
    $(document).ready(function() {
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('q');
        $('page').val(myParam);
        // console.log(myParam);
    })
    $(document).on('click', '#lihat', function() {
        var judul = $(this).data('judul')
        var isi = $(this).data('isi')
        var author = $(this).data('author')
        var file = $(this).data('file')
        var gambar = $(this).data('gambar')

        $('#judul').html(judul)
        $('#isi').html(isi)
        $('#file').attr('href', 'warta/pdf/' + file)
        $('#gambar').attr('src', 'warta/img/' + gambar)
        $('#author').html(author)
        toggleModal('modal')

        // console.log($(this).data('judul'))
        // console.log('coba')

    })
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
</script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
</script>
@endpush