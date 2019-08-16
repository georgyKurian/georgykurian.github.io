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
<div class="flex whiteGradient">
    <div class="container flex max-w-4xl mx-auto py-20 px-6 md:py-16 text-gray-800">
        <div class="relative w-full my-0 mx-auto">
            <div class="absolute inset-y-0  w-3 h-full bg-gray-800 z-0" style="left:50%;">&nbsp;</div>

            <div class="flex p-3 flex-row-reverse">
                <div class="w-1/2">
                    <div class="rounded-lg p-4 ml-7 bg-gray-800 text-gray-100">
                        <a href="https://www.lambtoncollege.ca/Applied-Research/" target="_blank">
                            <h4 class="text-gray-100">Worksitesafety Compliance Center</h4>
                        </a>
                        <p>Full Stack developer</p>
                    </div>
                </div>
                <div class="-mr-6">
                    <div
                        class="my-auto relative z-10 rounded-full h-8 w-8 flex items-center justify-center bg-gray-100 border-0 bg-gray-800 ">
                        &nbsp;</div>
                </div>
            </div>

            <div class="flex p-3 flex-row">
                <div class="w-1/2">
                    <div class="rounded-lg p-4 mr-7 bg-gray-800 text-gray-100">
                        <a href="https://www.lambtoncollege.ca/Applied-Research/" target="_blank">
                            <h4 class="text-gray-100">Lambton Applied Research</h4>
                        </a>
                        <p>Full Stack developer</p>
                    </div>
                </div>
                <div class="-ml-6">
                    <div
                        class="my-auto relative z-10 rounded-full h-8 w-8 flex items-center justify-center bg-gray-100 border-0 bg-gray-800 ">
                        &nbsp;</div>
                </div>
            </div>

            <div class="flex p-3 flex-row-reverse">
                <div class="w-1/2">
                    <div class="rounded-lg p-4 ml-7 bg-gray-800 text-gray-100">
                        <a href="https://www.hcltech.com/" target="_blank">
                            <h4 class="text-gray-100">HCL Tech</h4>
                        </a>
                        <p>Full Stack Developer</p>
                    </div>
                </div>
                <div class="-mr-6">
                    <div
                        class="my-auto relative z-10 rounded-full h-8 w-8 flex items-center justify-center bg-gray-100 border-0 bg-gray-800 ">
                        &nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex whiteGradient">
    <div class="container flex flex-wrap max-w-5xl mx-auto py-20 px-6 md:py-16 text-gray-800">
        <div class="w-1/3 bg-gray-100 m-2 rounded overflow-hidden shadow-lg">
            <div class="w-full h-1 bg-green-500"></div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
                <div>
                    <span
                        class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
                    <span
                        class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#vue.js</span>
                    <span
                        class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#postgres</span>
                </div>
            </div>
            <div class="flex px-6 py-4">
                <a href="" class="flex-1"><img class="mx-auto" src="assets/img/GitHub-Mark-32px.png" alt="GitHub"></a>
                <a href="" class="flex-1 text-center">DEMO</a>
            </div>
        </div>
        <div class="w-1/3 bg-gray-100 m-2 rounded overflow-hidden shadow-lg">
            <div class="w-full h-1 bg-green-500"></div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#vue.js</span>
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#postgres</span>
            </div>
        </div>
        <div class="w-1/3 bg-gray-100 m-2 rounded overflow-hidden shadow-lg">
            <div class="w-full h-1 bg-green-500"></div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#vue.js</span>
                <span
                    class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#postgres</span>
            </div>
        </div>
    </div>
</div>

<!-- Skill -->
<div class="flex whiteGradient">
    <div class="container flex flex-wrap max-w-5xl mx-auto py-20 px-6 md:py-16 text-gray-800">
        <div class="max-w-sm w-full lg:max-w-full lg:flex rounded-l-full overflow-hidden shadow-lg">
            <div class="h-48 lg:h-auto lg:w-48 bg-blue-500 text-center overflow-hidden shadow-lg">
                <img class="m-auto my-auto" src="assets/img/GitHub-Mark-32px.png" />
            </div>
            <div
                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8 flex flex-wrap">

                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="">
    <div class="container max-w-4xl mx-auto py-20 px-6 md:py-16 lg:py-20 xlg:py-24 text-gray-200">
        <h3>Something...</h3>
    </div>
</div>
@stop