@extends('_layouts.master')

@section('extra-header')
<div class="flex items-center w-full">
    <div class="flex flex-col items-center justify-around container mx-auto mt-40 mb-16">
        <div>
            <h1 class="text-center text-gray-100 font-normal">Hi, I’m Georgi. Nice to meet you!</h1>
            <p class="text-center text-gray-200">I am a developer who is enthusiastic about finding solutions and performance optimization.</p>
        </div>
        <div id="contact" class="flex flex-wrap w-full justify-center md:flex-row py-16">
            <a href="https://github.com/georgyKurian" title="GitHub profile link" class="w-1/5 md:w-16 p-2 hover:p-1 opacity-75 hover:opacity-100 m-1"><img src="assets/img/logos/github.svg" alt="GitHub" class="w-full"></a>
            <a href="https://linkedin.com/in/georgi-kurian/" title="Linkedin profile link" class="w-1/5 md:w-16 p-2 hover:p-1 opacity-75 hover:opacity-100 m-1"><img src="assets/img/logos/linkedin.svg" alt="Linkedin" class="w-full"></a>
            <a href="mailto:georgyvk@gmail.com" title="Email to georgyvk@gmail.com" class="w-1/5 md:w-16 p-2 hover:p-1 opacity-75 hover:opacity-100 m-1"><img src="assets/img/logos/email.svg" alt="Email" class="w-full"></a>
            <a href="https://stackoverflow.com/users/10349395/georgy-varghese-kurian" title="Stackoverflow profile link" class="w-1/5 md:w-16 p-2 hover:p-1 opacity-75 hover:opacity-100 m-1"><img src="assets/img/logos/stackoverflow.svg" alt="Stackoverflow" class="w-full"></a>
        </div>
    </div>
    {{--  <div class="absolute bottom-0 inset-x-0 bg-cover bg-center h-56" style="background-image: url('/assets/img/hero-divider.svg')">&nbsp;</div> --}}
</div>
@endsection

@section('body')

<!-- Timeline -->
<section class="flex whiteGradient border-b-2 border-gray-400 py-16">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto px-6 md:py-16 text-gray-800 ">
        <h2 class="text-center mb-12">Experience</h2>
        @component('_components.timeline',[
        'experience' => $page->getjsondata('my_work_experience.json')
        ])
        @endcomponent
    </div>
</section>

<!-- Projects -->
<section class="flex whiteGradient border-b-2 border-gray-400 py-16">
    <div class="container flex flex-wrap justify-center max-w-5xl mx-auto px-6 md:py-16 text-gray-800 ">
        <h2 class="text-center mb-12">Projects</h2>
        @foreach ($page->getjsondata('my_projects.json') as $project)
        @component('_components.project',[
        'project' => $project
        ])
        @endcomponent
        @endforeach
    </div>
</section>

<!-- Skill -->
<section class="flex whiteGradient border-b-2 border-gray-400 py-16">
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
</section>

@stop