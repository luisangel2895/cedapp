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
                <div class="flex flex-wrap justify-between w-full">

                    @foreach($stories as $story)
                        <div class="w-1/3 p-4">
                            <img src="{{ Storage::disk('public') -> url($story -> image) }}" class="w-full mb-4 rounded-xl" alt="">
                            <a href="/kids/story/{{ $story->id }}"><p class="mb-2 text-2xl">{{ $story->title }}</p></a>
                            <p class="mb-2 text-gray-500">{{ $story->created_at }}</p>
{{--                            <div>{!! $story->story !!}</div>--}}
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <x-footer bg="bg-primary-kids" text="text-white" borders="border-white" :teens="false" />

    </main>
@endsection
