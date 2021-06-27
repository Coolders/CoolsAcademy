@extends('layouts.app')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- SWipe JS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

</head>

<body class="antialiased">
    @section('show')
    <div
        
  
        <div class="container-md p-5" >
            <div class="panel panel-default">

                <div class="container-fluid d-flex flex-wrap justify-content-around">
                            <img src="{{ $course->image }}" class="card-img-top p-2" style="border-radius:1rem; max-height:600px; max-width:600px" alt="...">
                
                            <div class="card-body" style="max-width:30rem;">
                                <h5 class="card-title text-white">{{ $course->course_name }}</h5>
                                @if(($course->num_max - $course->inscritos()) <= 0)
                                <p class="text-danger">There are no places available</p>
                                else
                                <p class="card-text"><small class="text-white">{{$course->inscritos()}} de {{ $course->num_max }}</small></p>
                                @endif
                                <p class="card-text"><small class="text-white">{{ $course->date }}</small></p>
                                <p class="card-text text-white">{{ $course->description }}</p>
                               
                                @if ($course->date< now())  
                                    <p class="text-danger">The Course has been terminated</p>
                                @elseif (Auth::user()->isSubscribed($course)) 
                                    <a href="{{ route('unsubscribe',["id"=>$course->id])}}" class="text-white underline mr-2">Unsubscribe</a>
                                @else
                                    @if(($course->num_max - $course->inscritos()) > 0)
                                        <a href="{{ route('subscribe',["id"=>$course->id])}}" class="text-white underline mr-2">Inscribe</a>
                                    @endif
                                @endif
                            </div>
                            
                        
                </div>
            </div>
        </div>
    </div>
    @endsection
    

    <!--<div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>

                <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                    Shop
                </a>

                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>

                <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                    Sponsor
                </a>
            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>-->
    </div>
    </div>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        });
    </script>
</body>


</html>
