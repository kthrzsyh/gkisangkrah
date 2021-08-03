@extends('layouts.app')

<!-- Set Title -->
@section('title', 'Gallery')

@section('content')
<div class="mt-16 max-w-6xl mx-auto px-5" style="padding-bottom: 3rem;">
    <h3 class="text-gray-600 text-2xl font-medium">Gallery</h3>

    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        @foreach($gallery as $dataGallery)
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover">
                <a id="lihat" href="#!" data-gambar="{{$dataGallery->gambar}}" data-id="{{$dataGallery->id}}"><img src="gallery/{{$dataGallery->gambar}}" alt="" style="object-fit: cover; height: 100%;width:100%"></a>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $dataGallery->deskripsi }}</h3>
                <span class="text-gray-500 mt-2">{{ $dataGallery->created_at }}</span>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal" style="z-index: 999;overflow: auto; width: 100%">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div class="modal-container w-11/12 md:max-w-4xl  mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content" style="display:flex; justify-content: center; padding-left: 1rem;">
                <img class="rounded" src="" alt="" id="gambar">
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
        var gambar = $(this).data('gambar')

        $('#gambar').attr('src', 'gallery/' + gambar)
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
    //JS to switch slides and replace text in bar//
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("description");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" opacity-100", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " opacity-100";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
@endpush