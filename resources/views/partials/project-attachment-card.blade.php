<a class="flex items-center mt-4 mb-2 bg-white border-4 border-violet-300" target="_blank"
    href="{{ $attachments->url() }}">
    <div class="p-2 md:p-4">
        <h3 class="mb-1 text-lg font-bold leading-tight md:text-xl">{!! $attachments->title() !!}
            <p class="block mt-2 text-xs font-normal text-gray-600 md:text-sm md:inline md:ml-2">
                {{ $attachments->caption() }}
                ({{ strtoupper($attachments->subtype()) }}
                @if($attachments->filesize() != '0 bytes'), ({{$attachments->filesize()}} @endif)</p>
        </h3>
        <p class="text-sm md:text-md">
            {{ $attachments->description() }}
        </p>
    </div>
    <div
        class="flex items-center self-stretch px-2 pl-4 ml-auto text-xl font-extrabold lowercase border-l-4 md:pl-6 md:px-4 hover:text-white text-violet-900 border-violet-300 hover:bg-violet-300">
        View
        <x-icon.arrow-right class="w-12 h-12" />
    </div>
</a>