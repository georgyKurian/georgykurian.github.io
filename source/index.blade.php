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
        @component('_components.tech-stack',[
            'title' => 'Databases',
            'skills' => $page->getjsondata('my_skills.json')['database']
            ])
        @endcomponent

        @component('_components.tech-stack',[
            'title' => 'Server',
            'skills' => $page->getjsondata('my_skills.json')['server-side'] ])
        @endcomponent

        @component('_components.tech-stack',[
            'title' => 'Front-End',
            'skills' => $page->getjsondata('my_skills.json')['front-end'] ])
        @endcomponent

        @component('_components.tech-stack',[
            'title' => 'Tools',
            'skills' => $page->getjsondata('my_skills.json')['tools'] ])
        @endcomponent

        @component('_components.tech-stack',[
            'title' => 'Cloud Services',
            'skills' => $page->getjsondata('my_skills.json')['cloud-services'] ])
        @endcomponent
    </div>
</div>


<div class="">
    <div class="container max-w-4xl mx-auto py-20 px-6 md:py-16 lg:py-20 xlg:py-24 text-gray-200">
        <h3>Something...</h3>
    </div>
</div>
@stop