@extends('_layouts.master')

@section('extra-header')
<div class="relative w-full h-full">
    <div class="flex justify-around container mx-auto my-48">
        <div class="flex-1">
            <h1 class="text-center text-gray-100 font-normal">Hi, I’m Georgi. Nice to meet you!</h1>
            <p class="text-center text-gray-200">Since beginning my journey as a freelance designer nearly 8 years ago,
                I've done remote
                work for agencies, consulted for startups, and collaborated with talented people to create digital
                products
                for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on
                improving my chops one design problem at a time.</p>
        </div>
    </div>
    {{--  <div class="absolute bottom-0 inset-x-0 bg-cover bg-center h-56" style="background-image: url('/assets/img/hero-divider.svg')">&nbsp;</div> --}}
</div>
@endsection

@section('body')

<!-- Timeline -->
<div class="flex whiteGradient border-b-2 border-gray-400 py-16">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto px-6 md:py-16 text-gray-800 ">
        <h2 class="text-center mb-12">Experience</h2>
        @component('_components.timeline',[
        'experience' => $page->getjsondata('my_work_experience.json')
        ])
        @endcomponent
    </div>
</div>

<!-- Projects -->
<div class="flex whiteGradient border-b-2 border-gray-400 py-16">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto px-6 md:py-16 text-gray-800 ">
        <h2 class="text-center mb-12">Projects</h2>
        @foreach ($page->getjsondata('my_projects.json') as $project)
        @component('_components.project',[
        'project' => $project
        ])
        @endcomponent
        @endforeach
    </div>
</div>

<!-- Skill -->
<div class="flex whiteGradient border-b-2 border-gray-400 py-16">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto px-6 md:py-16 text-gray-800 ">
        <h2 class="text-center mb-12 w-full">Skills</h2>
        @foreach ($page->getjsondata('my_skills.json') as $key => $item)
        @component('_components.tech-stack',[
        'title' => $key,
        'skills' => $item
        ])
        @endcomponent
        @endforeach
    </div>
</div>

@stop