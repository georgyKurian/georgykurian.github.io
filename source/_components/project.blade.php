<div class="w-full m-2 bg-white flex shadow-lg rounded-lg border border-gray-300 overflow-hidden">
    <div class="w-3/12 h-100 bg-orange-700"></div>
    <div class="px-3 py-3 flex">
        <div class="">
            <div class="font-bold text-xl mb-2">{{ $project['title'] }}</div>
            <p class="text-gray-700 text-base">{{ $project['description']}}</p>
            <div>
                @if ($project['techs'])
                @foreach ($project['techs'] as $tech)
                <span
                    class="inline-block mx-px mb-px bg-gray-300 rounded-full px-3 py-px  text-sm font-semibold text-gray-700">#{{ $tech }}</span>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="flex flex-col px-6 py-4">
        <a href="" class="flex-1"><img class="my-auto mx-auto" src="assets/img/GitHub-Mark-32px.png" alt="GitHub"></a>
        <a href="" class="flex-1 text-center"><img class="my-auto mx-auto" src="assets/img/GitHub-Mark-32px.png" alt="GitHub"> </a>
    </div>
</div>