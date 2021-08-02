<form role="search" method="get" class="flex max-w-lg mb-8 search-form" action="{{ home_url('/') }}">
  <label for="search" class="sr-only">
    {{ _x('Search for:', 'label', 'sage') }}
  </label>
  <input id="search" type="search" class="flex-1 w-1/2 p-2 mr-1 border"
    placeholder="{!! esc_attr_x('Search articles&hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}"
    name="s">

  <button type="submit"
    class="inline-flex px-2 py-2 text-xl font-bold bg-white border-2 appearance-none text-violet-700 border-violet-600 focus:outline-none hover:border-violet-500">
    <x-icon.search />
  </button>
</form>