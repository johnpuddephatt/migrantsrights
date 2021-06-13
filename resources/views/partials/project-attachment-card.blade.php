<a class="flex items-center mt-4 mb-2 bg-white border-4 border-violet-300" target="_blank"
    href="{{ $attachments->url() }}">
    <div class="p-4">
        <h3 class="mb-1 text-xl font-bold leading-tight">{!! $attachments->title() !!}
            <small class="ml-2 font-normal text-gray-600">{{ $attachments->caption() }}
                ({{ strtoupper($attachments->subtype()) }}
                @if($attachments->filesize() != '0 bytes'), ({{$attachments->filesize()}} @endif)</small>
        </h3>
        {{ $attachments->description() }}
    </div>
    <div
        class="flex items-center self-stretch px-4 pl-6 ml-auto text-xl font-extrabold lowercase border-l-4 hover:text-white text-violet-900 border-violet-300 hover:bg-violet-300">
        View
        <x-icon.arrow-right class="w-12 h-12" />
    </div>
</a>