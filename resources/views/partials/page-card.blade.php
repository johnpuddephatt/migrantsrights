<a href="{{ get_permalink($page->ID) }}" @php(post_class('flex items-center text-gray-100 border-violet-400 mb-6
    md:mb-12 body-font border-b-2 px-2 py-4'))>
    <x-heading level="2" size="2" class="mb-0 md:text-5xl">
        {!! get_the_title($page->ID) !!}
    </x-heading>

    <x-icon.arrow-right class="w-16 h-16 ml-auto md:w-32 md:h-32 text-violet-300" />
</a>