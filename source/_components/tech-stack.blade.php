<div class="w-full lg:w-1/3 flex">
    <div class="w-full rounded-lg px-8 py-6 m-4 bg-gray-800 border-gray-300 border h-100 overflow-hidden shadow-xl">
        <div class="flex bg-gray-800 text-center overflow-hidden text-white">
            <span class="my-auto uppercase font-medium">{{ $title }}</span>
        </div>
        <div class="pt-3 text-gray-300 h-full rounded-t-lg flex flex-col justify-between leading-normal">
            <div class="w-full pb-5">
                @foreach ($skills as $skill)
                    <div class="mb-2">
                        <div class="py-1 text-xs font-semibold">{{ $skill['name'] }}
                            @isset ($skill['frameworks'])
                            - {{ implode(', ',$skill['frameworks']) }}
                            @endisset
                        </div>
                        <div class="w-full bg-gray-700 h-1 rounded">
                            <div class="w-full bg-blue-500 h-1" style="width:{{ $skill['percentage'] }}"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>