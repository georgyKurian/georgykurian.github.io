<div class="w-full lg:w-1/3 flex">
    <div class="w-full rounded-lg m-4 bg-gray-800 h-100 overflow-hidden shadow-lg">
        <div class="flex bg-gray-800 px-3 py-2 text-center overflow-hidden shadow-lg text-white">
            {{ $svg_icon }}
        </div>
        <div
            class="bg-gray-800 text-white p-5 rounded-b flex flex-col justify-between leading-normal">

            <table class="w-full">
                @foreach ($skills as $skill)
                <tr>
                    <td class="w-1/2 py-1 font-semibold text-sm">{{ $skill['name'] }}</td>
                    <td>
                        <div class="w-full h-full rounded-sm bg-gray-700 overflow-hidden">
                            <div class="float-left rounded-sm text-white h-full bg-blue-500 pr-1 font-semibold text-xs text-right"
                        style="width:{{ $skill['percentage'] }};">{{ $skill['percentage'] }}</div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>