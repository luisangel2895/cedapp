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

            <div class="container relative flex items-center px-12 mx-auto screen-10rem">
                <x-logokid />
                <div class="z-10 flex flex-col items-start justify-start w-1/2">
                    <h1
                    class="mb-4 text-5xl font-bold text-primary-kids 2xl:text-7xl 2xl:mb-8"
                    >Conviértete en
                    <br> un artista </h1>
                    <p class="mb-4 2xl:mb-8">
                        ¿Quieres compartir tus creaciones? Puedes enviarnos tus dibujos o las fotos de tus creaciones para que otros niños y niñas que visiten nuestra página puedan verlas.
                    </p>
                    <button class="px-8 py-2 text-white transition-all duration-200 ease-in rounded bg-primary-kids hover:opacity-80 2xl:text-2xl">
                        Dibuja aquí
                    </button>
                </div>
                <div class="z-10 flex items-center justify-center w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  class="h-72 2xl:h-96" viewBox="0 0 534 534">
                        <defs>
                          <filter id="Elipse_1051" x="0" y="0" width="534" height="534" filterUnits="userSpaceOnUse">
                            <feOffset dy="3" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="3" result="blur"/>
                            <feFlood flood-opacity="0.161"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                          </filter>
                        </defs>
                        <g id="Grupo_1355" data-name="Grupo 1355" transform="translate(-1070 -345)">
                          <g id="Grupo_1354" data-name="Grupo 1354">
                            <g transform="matrix(1, 0, 0, 1, 1070, 345)" filter="url(#Elipse_1051)">
                              <circle id="Elipse_1051-2" data-name="Elipse 1051" cx="258" cy="258" r="258" transform="translate(9 6)" fill="#fff"/>
                            </g>
                            <g id="art" transform="translate(1208.37 451.5)">
                              <path id="Trazado_9040" data-name="Trazado 9040" d="M139.84,314.518c41.373-5.984,78.072-33.052,99.311-67.235a21.132,21.132,0,0,1-5.034-1.438,20.179,20.179,0,0,1-10.915-11.66c-1.541-3.6-6.934-7.756-12.2-11.839-14.947-11.557-29.431-22.805-26.272-48.872a47.1,47.1,0,0,1,5.162-16.077L170.35,121.469A20.367,20.367,0,0,1,168.141,115c-.231-.462-.462-.9-.642-1.361a99.026,99.026,0,0,1-18.414,8.27c-35.441,11.146-59.582-4.8-31.743-41.4,19.03-25.014-22.959-47.665-60.172-22.394C26.738,78.734.465,124.011,0,173.808-.639,245.871,62.512,325.69,139.84,314.518Zm108.326-92.557c-8.013-21.264-40.526-25.913-37.418-51.543a26.5,26.5,0,0,1,10.915-18.106,17.328,17.328,0,0,1,8.013-2.928,18.615,18.615,0,0,1,3.955.077c16.822,2.157,24.141,19.749,24.038,35-.1,14.074-5.445,28.121-9.5,37.5ZM227.543,89.675c-13.123,1.1-25.014,4.546-35.569,10.555l-15.409-84.6C175.024,8.931,174.921,4,182.42.328a10.183,10.183,0,0,1,7.422.822,11.258,11.258,0,0,1,4.674,6.138l33.027,82.387Zm5.111,48.924c-4.957-.488-13.175,1-17.874,5.47L194.414,106.65c11.4-6.472,23.191-10.632,35.672-10.838.925,17.9,0,24.654,2.568,42.786ZM40.76,142.245a19.3,19.3,0,1,0,3.107-27.12,19.284,19.284,0,0,0-3.107,27.12ZM158.382,249.852a21.689,21.689,0,0,0,33.977-26.966c-17.72-22.292-51.7,4.623-33.977,26.966Zm-72.14,21.624a26.413,26.413,0,1,0,4.263-37.11,26.414,26.414,0,0,0-4.263,37.11ZM34.571,213.743a22.868,22.868,0,1,0,3.7-32.128,22.888,22.888,0,0,0-3.7,32.128Z" transform="translate(0.002 -0.004)" fill="#a8cf45" fill-rule="evenodd"/>
                            </g>
                          </g>
                        </g>
                    </svg>
                </div>
            </div>

        </section>

        <section class="relative w-full overflow-x-hidden">
            <x-circlebuttons/>
            <div class="container px-12 mx-auto mt-12">
                <div class="flex flex-wrap justify-between w-full p-12 bg-gray-200 rounded-xl">

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo1.jpeg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 1</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo2.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 2</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo3.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 3</p>
                        </div>
                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo1.jpeg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 1</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo2.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 2</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo3.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 3</p>
                        </div>
                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo1.jpeg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 1</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo2.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 2</p>
                        </div>

                        <div class="w-1/3 p-4">
                            <img src="{{asset('images/dibujo3.jpg')}}" class="object-cover w-full mb-4 h-60 rounded-xl" alt="">
                            <p class="text-center">Dibujo 3</p>
                        </div>


                </div>
            </div>
        </section>

        <x-footer bg="bg-primary-kids" text="text-white" borders="border-white" :teens="false"/>

    </main>
@endsection
