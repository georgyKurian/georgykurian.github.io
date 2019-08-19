<div class="w-full lg:w-1/3 flex">
    <div class="w-full rounded-lg overflow-hidden shadow-lg">
        <div class="flex bg-gray-800 px-3 py-2 text-center overflow-hidden shadow-lg text-white">
            {{ $svg_icon }}
        </div>
        <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">

            <table class="w-full">
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>
                        <div class="w-full h-5  bg-gray-300">
                            <div class="float-left h-full bg-blue-400 pr-1 font-semibold text-xs text-right"
                                style="width:80%;">80%</div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>