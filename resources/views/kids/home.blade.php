@extends('layouts.main')

@section('content')
    <x-leftbutton/>

    <main id="main">
        {{-- PRIMER SECTION --}}
        <section class="relative w-full h-screen overflow-x-hidden">

            <x-navbarKids /> {{-- NAVBAR --}}

            <div class="trapezoid-wrapper">
                <div class="trapezoid bg-primary-kids"></div>
            </div>{{-- trapezoid background  --}}

            <div class="container relative z-20 flex items-center px-12 mx-auto screen-10rem">
                <x-logokid />
                <div class="z-10 flex flex-col items-start justify-start w-1/2">
                    <h1
                    class="mb-4 text-5xl font-bold text-primary-kids 2xl:text-7xl 2xl:mb-8"
                    >Conversa gratis con <br> especialistas</h1>
                    <p class="mb-4 2xl:mb-8">
                        ¡Hola! Este es un espacio seguro y gratuito en donde podemos jugar, dibujar y hablar sobre cómo te sientes. Nosotros te acompañaremos por chat, llamadas o videollamadas.
                    </p>
                    <button class="px-8 py-2 text-white transition-all duration-200 ease-in rounded bg-primary-kids hover:opacity-80 2xl:text-2xl">
                        Conversa aquí
                    </button>
                </div>
                <div class="z-10 flex items-center justify-center w-1/2">
                    <img src="{{asset('images/kid-write.png')}}" alt="niña escribiendo" class="h-96 2xl:h-auto">
                </div>
            </div>

        </section>

        {{--SEGUNDA SECTION--}}

        <section class="relative w-full overflow-x-hidden h-double-screen">

            <x-bgblocks :teens="false"/>

            <x-circlebuttons/>

            <div class="container relative z-20 flex flex-col justify-between mx-auto" style="height: 135vh">
                <div class="flex items-center justify-center w-full">
                    <div class="relative z-10 flex flex-col items-center justify-center w-6/12 p-12" style="filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.5))">
                        <div class="w-full">
                            <iframe width="672" height="400" src="https://www.youtube.com/embed/qA8g9bqY5pA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="w-full p-4 bg-yellow-200 rounded-b-xl">
                            Hazlo tú mismo: Origami de perro
                        </div>
                    </div>
                    <div class="relative z-10 flex flex-col items-center justify-center w-6/12 p-12" style="filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.5))">
                        <div class="w-full shadow">
                            <iframe width="672" height="400" src="https://www.youtube.com/embed/nVNTlEzJQ-c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="w-full p-4 bg-yellow-200 rounded-b-xl">
                            Hazlo tú mismo: Pintando piedras
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full mt-32">
                    <div class="relative z-10 flex flex-col items-center justify-center w-6/12 p-12" style="filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.5))">
                        <div class="w-full">
                            <img class="w-full rounded-t-xl" src="{{asset('images/game-child1.png')}}">
                        </div>
                        <div class="w-full p-4 text-white bg-pink-300 rounded-b-xl">
                            Red bounce ball
                        </div>
                    </div>
                    <div class="relative z-10 flex flex-col items-center justify-center w-6/12 p-12" style="filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.5))">
                        <div class="w-full shadow">
                            <img class="w-full rounded-t-xl" src="{{asset('images/game-child2.png')}}">
                        </div>
                        <div class="w-full p-4 text-white bg-pink-300 rounded-b-xl">
                            Labirun (pacman)
                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{--TERCERA SECTION--}}

        <section class="container relative w-full px-12 mx-auto -mt-64 overflow-x-hidden">
            <div class="flex justify-center w-full mb-12">
                <img src="{{asset('images/arte.png')}}"  class="h-24">
            </div>
            <div class="px-24 ">
                <!-- Slider main container -->
                <div class="relative flex justify-between w-full p-12 bg-gray-200 rounded shadow-xl h-96 swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="absolute z-10 cursor-pointer top-1/2 left-4" id="swiper-prev"><i class="fas fa-arrow-left fa-lg text-primary-kids"></i></div>

                    <div class="z-0 swiper-wrapper">
                        <!-- Slides -->
                        <div class="pt-12 ml-14 h-72 swiper-slide">
                            <img class="w-72 h-72" src="{{asset('images/dibujo1.jpeg')}}" alt="">
                        </div>
                        <div class="pt-12 h-72 swiper-slide">
                            <img class="w-72 h-72" src="{{asset('images/dibujo2.jpg')}}" alt="">
                        </div>
                        <div class="pt-12 h-72 swiper-slide">
                            <img class="w-72 h-72" src="{{asset('images/dibujo3.jpg')}}" alt="">
                        </div>
                        <div class="pt-12 h-72 swiper-slide">
                            <img class="w-72 h-72" src="{{asset('images/dibujo4.jpg')}}" alt="">
                        </div>
                        <div class="pt-12 h-72 swiper-slide">
                            <img class="w-72 h-72" src="{{asset('images/dibujo5.jpg')}}" alt="">
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="absolute z-10 cursor-pointer right-4 top-1/2" id="swiper-next"><i class="fas fa-arrow-right fa-lg text-primary-kids"></i></div>
                </div>
            </div>
        </section>

        {{--CUARTA SECTION--}}

        <section class="container relative w-full px-12 mx-auto overflow-x-hidden">
            <div class="flex justify-center w-full mt-20 mb-10">
                <img src="{{asset('images/blog.png')}}"  class="h-24">
            </div>
            <div class="flex justify-between w-full">
               <div class="flex flex-col items-center justify-start w-1/3 p-6">
                    <img src="{{asset('images/bus.jpg')}}" alt="" class="w-full rounded-lg shadow-lg">
                    <span class="p-3 text-xl">TITULO BLOG</span>
               </div>
               <div class="flex flex-col items-center justify-start w-1/3 p-6">
                    <img src="{{asset('images/child.jpg')}}" alt="" class="w-full rounded-lg shadow-lg">
                    <span class="p-3 text-xl">TITULO BLOG</span>
               </div>
               <div class="flex flex-col items-center justify-start w-1/3 p-6">
                    <img src="{{asset('images/park.jpg')}}" alt="" class="w-full rounded-lg shadow-lg">
                    <span class="p-3 text-xl">TITULO BLOG</span>
               </div>

            </div>
        </section>

         {{--QUINTA SECTION--}}

        <section class="container relative w-full px-12 mx-auto overflow-x-hidden ">
            <div class="flex justify-center w-full mt-10 mb-16">
                <img src="{{asset('images/nosotros.png')}}"  class="h-24">
            </div>
            <div class="flex justify-between w-full mt-8">
               <div class="w-1/2">
                    <h2 class="my-8 text-5xl font-black text-primary-kids">Somos CEDAPP</h2>
                    <p class="pr-16 mt-8 text-2xl">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam esse sit explicabo tempora quis nisi totam dicta repellat blanditiis eaque id, fugiat et tempore harum praesentium laborum quaerat. Ipsa, illo?
                    </p>
               </div>
               <div class="w-1/2 p-3">
                    <img src="{{asset('images/directora.jpg')}}" alt="" class="shadow-lg rounded-xl">
               </div>
            </div>
        </section>

        <x-footer bg="bg-primary-kids" text="text-white" borders="border-white" :teens="false"/>

    </main>
@endsection
