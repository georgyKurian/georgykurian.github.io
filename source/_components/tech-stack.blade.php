<div class="w-full lg:w-auto flex">
    <div class="w-full rounded-lg m-4 bg-gray-800 border-gray-300 border h-100 overflow-hidden shadow-lg">
        <div class="flex bg-gray-800 px-5 py-3 text-center overflow-hidden shadow-lg text-white">
            <span class="my-auto font-medium">{{ $title }}</span>
        </div>
        <div class="bg-white px-5 py-3 text-gray-800 h-full rounded-t-lg flex flex-col justify-between leading-normal">
            <div class="w-full">
                @foreach ($skills as $skill)
                <div class="py-1 text-sm font-semibold">{{ $skill['name'] }}
                    @if ($skill['frameworks'])
                    - {{ implode($skill['frameworks'],', ') }}
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>