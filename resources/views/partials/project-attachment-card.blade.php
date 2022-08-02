<a
  class="border-violet-300 mt-4 mb-2 flex items-center border-4 bg-white"
  target="_blank"
  href="{{ $attachments->url() }}"
>
  <div class="p-2 md:p-4">
    <h3 class="mb-1 text-lg font-bold leading-tight md:text-xl">
      {!! $attachments->title() !!}
      <p
        class="text-gray-600 mt-2 block text-xs font-normal md:ml-2 md:inline md:text-sm"
      >
        {{ $attachments->caption() }} ({{ strtoupper($attachments->subtype()) }})
      </p>
    </h3>

    <p class="md:text-md text-sm">{{ $attachments->description() }}</p>
  </div>
  <div
    class="text-violet-900 border-violet-300 hover:bg-violet-300 ml-auto flex items-center self-stretch border-l-4 px-2 pl-4 text-xl font-extrabold lowercase hover:text-white md:px-4 md:pl-6"
  >
    View
    <x-icon.arrow-right class="h-12 w-12" />
  </div>
</a>
