@extends('layouts.app')

<!-- Set Title -->
@section('title', 'Warta')

@section('content')
<div class="mt-16 max-w-6xl mx-auto px-5" style="padding-bottom: 3rem;">
    <h3 class="text-gray-600 text-2xl font-medium">Gallery</h3>

    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        @foreach($gallery as $dataGallery)
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover">
                <img src="gallery/{{$dataGallery->gambar}}" alt="">
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $dataGallery->deskripsi }}</h3>
                <span class="text-gray-500 mt-2">{{ $dataGallery->created_at }}</span>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection

@push('after-script')
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