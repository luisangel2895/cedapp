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

            <x-firstSectionCuentos/>

        </section>

        <section class="relative w-full overflow-x-hidden">
            <x-circlebuttons />
            <div class="container px-12 mx-auto mt-12">
                <img src="{{ Storage::disk('public') -> url($story -> image) }}" class="object-cover object-center w-full max-h-96">

                <h2 class="my-8 text-4xl font-black text-left text-black">{{ $story->title }}</h2>

                <span class="block mb-8 text-3xl font-black text-left text-gray-300">
                    {{ $story->created_at }}
                </span>

                <div class="mb-8">
                    {!! $story->story !!}
                </div>
                <div class="flex justify-between">
                    <div class="inline-flex items-center cursor-pointer"><i class="mr-4 fas fa-arrow-left fa-lg text-primary-kids"></i> Anterior</div>
                    <div class="inline-flex items-center cursor-pointer">Siguiente <i class="ml-4 fas fa-arrow-right fa-lg text-primary-kids"></i></div>
                </div>
            </div>
        </section>

        <section class="container px-12 mx-auto mt-12">
            <div class="flex justify-center w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24" viewBox="0 0 414 96">
                    <g id="Grupo_1350" data-name="Grupo 1350" transform="translate(-769.016 -3884.484)">
                      <path id="Trazado_9356" data-name="Trazado 9356" d="M885.6,598.98a4.851,4.851,0,0,0-4.191-2.408H532.086a4.856,4.856,0,0,0-4.34,2.682l-29.109,58.22a4.851,4.851,0,0,0,4.215,7.02l340.587,8.732.124,0a4.849,4.849,0,0,0,4.223-2.465l37.844-66.952A4.853,4.853,0,0,0,885.6,598.98Z" transform="translate(276.769 3306.413)" fill="#b34c93"/>
                      <text id="Otros" transform="translate(769.016 3884.484)" fill="#fff" font-size="72" font-family="SegoeUI, Segoe UI"><tspan x="118.775" y="78">Otros</tspan></text>
                    </g>
                </svg>
            </div>

            <div class="flex flex-wrap justify-between w-full mt-12">

                    <div class="w-1/3 p-4">
                        <img src="{{asset('images/child.jpg')}}" class="w-full mb-4 rounded-xl" alt="">
                        <p class="mb-2 text-2xl">Cuento 1</p>
                    </div>

                    <div class="w-1/3 p-4">
                        <img src="{{asset('images/child.jpg')}}" class="w-full mb-4 rounded-xl" alt="">
                        <p class="mb-2 text-2xl">Cuento 2</p>
                    </div>


                    <div class="w-1/3 p-4">
                        <img src="{{asset('images/child.jpg')}}" class="w-full mb-4 rounded-xl" alt="">
                        <p class="mb-2 text-2xl">Cuento 3</p>
                    </div>


            </div>

        </section>

        <x-footer bg="bg-primary-kids" text="text-white" borders="border-white" :teens="false" />

    </main>
@endsection
