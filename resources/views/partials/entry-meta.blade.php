<div class="p-4 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
  <div class="flex py-2">
    <img
      src="https://d33wubrfki0l68.cloudfront.net/6d60ae66b2a50b1842d08156aeb53663fa328837/d7f97/assets/badges/mike.jpg"
      class="object-cover w-10 h-10 mr-2 rounded-full">
    <div>
      <p class="text-sm font-semibold tracking-tight text-black">
        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
          {{ get_the_author() }}
        </a>
      </p>
      <p class="text-sm font-normal tracking-tight text-coolGray-400"> Role. </p>
    </div>
  </div>
  <time class="block mb-4 text-sm font-semibold tracking-tight text-black" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
  <button
    class="w-full px-8 py-2 mxt-4 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800">
    Follow on Twitter </button>
</div>