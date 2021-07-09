<a href="{{ get_permalink($page->ID) }}" @php(post_class('flex items-center border-violet-400 body-font border-b-2
    py-2'))>
    <x-heading level="2" size="2" class="mb-0 md:text-3xl">
        {!! get_the_title($page->ID) !!}
    </x-heading>

    <x-icon.arrow-right class="w-16 h-16 ml-auto md:w-32 md:h-32 text-violet-300" />
</a>