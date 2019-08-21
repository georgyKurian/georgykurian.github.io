@extends('_layouts.master')

@section('extra-header')
<div class="relative w-full h-full">
    <div class="flex justify-around container mx-auto my-48">
        <div class="flex-1">
            <h1 class="text-center text-gray-100 font-normal">Full Stack Developer</h1>
            <h2 class="text-center text-gray-200 font-normal mt-1">Open source technologies enthusiast</h2>
        </div>
    </div>
    {{--  <div class="absolute bottom-0 inset-x-0 bg-cover bg-center h-56" style="background-image: url('/assets/img/hero-divider.svg')">&nbsp;</div> --}}
</div>
@endsection

@section('body')
<div class="bg-gray-200 whiteGradient">
    <div class="container flex-1 max-w-4xl mx-auto py-20 px-6 md:py-16">
        <h3 class="text-center">Hi, I’m Georgi. Nice to meet you.</h3>
        <p class="text-center">Since beginning my journey as a freelance designer nearly 8 years ago, I've done remote
            work for agencies, consulted for startups, and collaborated with talented people to create digital products
            for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on
            improving my chops one design problem at a time.</p>
    </div>
</div>

<!-- Timeline -->
@component('_components.timeline')
@endcomponent

<div class="flex whiteGradient">
    <div class="container flex flex-wrap max-w-5xl mx-auto py-20 px-6 md:py-16 text-gray-800">
        @for($i = 1; $i < 5; $i++) <div class="w-1/3 m-auto">
            @component('_components.project')
            @slot('index')
            {{ $i }}
            @endslot
            @endcomponent
    </div>
    @endfor
</div>
</div>

<!-- Skill -->
<div class="flex whiteGradient">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto py-20 px-6 md:py-16 text-gray-800 ">
        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['database'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">DATABASES</span>
        @endslot
        @endcomponent

        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['server-side'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">SERVER</span>
        @endslot
        @endcomponent

        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['front-end'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">FRONT-END</span>
        @endslot
        @endcomponent

        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['server-side-frameworks'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">FRAMEWORK</span>
        @endslot
        @endcomponent

        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['tools'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">TOOLS</span>
        @endslot
        @endcomponent

        @component('_components.tech-stack',['skills' => $page->getjsondata('my_skills.json')['cloud-services'] ])
        @slot('svg_icon')
        <svg class="ml-auto text-white fill-current" height="35" width="35" viewBox="0 0 800 1000"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M384 960C171.969 960 0 902.625 0 832c0-38.625 0-80.875 0-128 0-11.125 5.562-21.688 13.562-32C56.375 727.125 205.25 768 384 768s327.625-40.875 370.438-96c8 10.312 13.562 20.875 13.562 32 0 37.062 0 76.375 0 128C768 902.625 596 960 384 960zM384 704C171.969 704 0 646.625 0 576c0-38.656 0-80.844 0-128 0-6.781 2.562-13.375 6-19.906l0 0C7.938 424 10.5 419.969 13.562 416 56.375 471.094 205.25 512 384 512s327.625-40.906 370.438-96c3.062 3.969 5.625 8 7.562 12.094l0 0c3.438 6.531 6 13.125 6 19.906 0 37.062 0 76.344 0 128C768 646.625 596 704 384 704zM384 448C171.969 448 0 390.656 0 320c0-20.219 0-41.594 0-64 0-20.344 0-41.469 0-64C0 121.34400000000005 171.969 64 384 64c212 0 384 57.344 384 128 0 19.969 0 41.156 0 64 0 19.594 0 40.25 0 64C768 390.656 596 448 384 448zM384 128c-141.375 0-256 28.594-256 64s114.625 64 256 64 256-28.594 256-64S525.375 128 384 128z" />
        </svg>
        <span class="ml-3 mr-auto my-auto font-medium">SERVICES</span>
        @endslot
        @endcomponent
    </div>
</div>


<div class="">
    <div class="container max-w-4xl mx-auto py-20 px-6 md:py-16 lg:py-20 xlg:py-24 text-gray-200">
        <h3>Something...</h3>
    </div>
</div>
@stop