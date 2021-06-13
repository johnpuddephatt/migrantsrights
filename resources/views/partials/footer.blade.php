<footer class="text-gray-100 bg-black body-font">
  <div class="container pt-24 pb-12 ">
    <div class="flex flex-wrap order-first gap-8 text-center md:text-left">
      <div class="flex-shrink w-full mt-3 mr-auto xl:w-1/4 lg:w-1/4 md:w-1/2">

        @if(get_theme_mod('contact_address'))
        <p class="mb-3 site-footer--address contact-address">{{ get_theme_mod('contact_address') }}</p>
        @endif
        @if(get_theme_mod('contact_email'))
        <p class="mb-1"><a class="site-footer--email contact-email"
            href="mailto:{{ get_theme_mod('contact_email') }}">{{ get_theme_mod('contact_email') }}</a></p>
        @endif
        @if(get_theme_mod('contact_phone') || get_theme_mod('contact_phone_human'))
        <p><a class="site-footer--phone contact-phone"
            href="tel:{{ get_theme_mod('contact_phone') ?? get_theme_mod('contact_phone_human') }}">{{ get_theme_mod('contact_phone_human') ?? get_theme_mod('contact_phone') }}</a>
        </p>
        @endif

        @if(get_theme_mod('company_info'))
        <p class="mt-6 text-xs text-gray-300 company-info">{{ get_theme_mod('company_info') }}</p>
        @endif


      </div>
      @if(!empty($primaryNavigationFooter))
      <div class="flex-shrink w-full xl:w-1/6 lg:w-1/4 md:w-1/2">
        {!! $primaryNavigationFooter !!}
      </div>
      @endif
      @if(!empty($secondaryNavigationFooter))
      <div class="w-full lg:w-1/4 xl:w-1/6 md:w-1/2">
        {!! $secondaryNavigationFooter !!}
      </div>
      @endif
      @if(!empty($tertiaryNavigation))
      <div class="w-full lg:w-1/4 xl:w-1/6 md:w-1/2">
        {!! $tertiaryNavigation !!}
      </div>
      @endif
      {{-- <form action="https://migrantsrights.us2.list-manage.com/subscribe/post?u=d9e512af0e78ae1205ef2bef5&id=a6e14e9a98"
        method="POST" class="w-full px-4 ml-auto lg:w-1/4 md:w-1/2">
        <label for="footer-field" class="block mt-1 mb-2 text-lg font-extrabold leading-7 text-gray-100">Sign up to our
          newsletter</label>
        <div
          class="flex flex-wrap items-end justify-center xl:flex-nowrap md:flex-nowrap lg:flex-wrap md:justify-start">

          <div class="relative w-40 mr-2 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4">

            <input type="text" name="MERGE0" id="footer-field" name="footer-field"
              class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:bg-white focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500">
          </div>
          <button
            class="inline-flex flex-shrink-0 px-6 py-2 text-white border-0 rounded bg-violet-500 lg:mt-2 xl:mt-0 focus:outline-none hover:bg-violet-600">Subscribe</button>
        </div>
        <p class="mt-3 text-xs text-center text-gray-300 md:text-left">by subscribing to our newsletter you confirm your
          agreement to our
          <a class="underline" href="/privacy">privacy policy</a>
        </p>
      </form> --}}
    </div>
  </div>
  <div class="text-white bg-black border-t border-gray-500">
    <div class="container flex flex-col items-center py-6 sm:flex-row">
      <a class="flex items-center justify-center font-medium title-font md:justify-start">
        <img class="w-10 h-10" src="{{ $siteLogo }}" />
        <span class="ml-1 text-xl">{{ $siteName }}</span>
      </a>
      <p class="mt-4 text-sm text-gray-400 sm:ml-6 sm:mt-1">{{ $siteStrapline }} © 2020</p>
      <span class="inline-flex items-center justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
        <a target="_blank"
          href="https://migrantsrights.us2.list-manage.com/subscribe/post?u=d9e512af0e78ae1205ef2bef5&id=a6e14e9a98"
          class="inline-flex px-3 py-1 font-bold text-gray-300 border-2 border-gray-200 text-md hover:text-white focus:outline-none hover:border-white">Join
          our newsletter</a>

        @if(get_theme_mod('facebook'))
        <a class="ml-3 text-gray-300 hover:text-white" aria-label="Facebook link" href="{{ get_theme_mod('facebook') }}"
          target="_blank">
          <x-icon.facebook />
        </a>
        @endif

        @if(get_theme_mod('twitter'))
        <a aria-label="Twitter link" class="ml-3 text-gray-300 hover:text-white" href="{{ get_theme_mod('twitter') }}"
          target="_blank">
          <x-icon.twitter />
        </a>
        @endif

        @if(get_theme_mod('instagram'))
        <a aria-label="Instagram link" class="ml-3 text-gray-300 hover:text-white"
          href="{{ get_theme_mod('instagram') }}" target="_blank">
          <x-icon.instagram />
        </a>
        @endif

        @if(get_theme_mod('linkedin'))
        <a aria-label="LinkedIn link" class="ml-3 text-gray-300 hover:text-white" href="{{ get_theme_mod('linkedin') }}"
          target="_blank">
          <x-icon.linkedin />
        </a>
        @endif
      </span>
    </div>
  </div>
</footer>