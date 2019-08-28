@foreach ($experience as $index => $each_experience)
<div class="flex justify-center w-full">
    <div class="md:w-1/3"></div>
    <div class="flex flex-col items-center">
        <div class="h-3 w-1 {{ !$loop->first?'bg-blue-500':'' }}">&nbsp;</div>
        <div class="rounded-full h-4 w-4 border-4 border-blue-500 {{ $loop->first ? 'bg-blue-500':'' }}"></div>
        <div class="flex-1 w-1 {{ !$loop->last ? 'bg-blue-500':'' }}">&nbsp;</div>
    </div>
    <div class="flex pl-3 pb-10 w-1/2">
        <div>
            <div class="text-gray-700">
                <a href="https://www.lambtoncollege.ca/Applied-Research/" target="_blank">
                    <h4 class="text-base m-0">{{ $each_experience['company_name']}}</h4>
                </a>
            <span class="text-xs">{{ $each_experience['timeline'] }}</span>
                <p class="m-0 text-xs">{{ $each_experience['position'] }}</p>
            </div>
        </div>
    </div>

</div>
@endforeach