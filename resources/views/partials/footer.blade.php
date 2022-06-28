<footer>
  <div class="bg-violet-200">
    <div class="container flex flex-col items-center py-6 sm:flex-row">
      <h3
        class="mb-3 hidden flex-grow border-b-2 border-violet-700 py-3 text-xl font-extrabold text-violet-800 md:block lg:mb-0 lg:mr-12 lg:text-xl xl:text-2xl"
      >
        Stay up to date with our work
      </h3>
      <span
        class="inline-flex items-center justify-center sm:ml-auto sm:mt-0 sm:justify-start md:mt-4"
      >
        <a
          rel="noopener"
          target="_blank"
          href="https://migrantsrights.us2.list-manage.com/subscribe/post?u=d9e512af0e78ae1205ef2bef5&id=a6e14e9a98"
          class="focus:outline-none mr-1 inline-flex border-2 border-violet-700 px-2 py-2 text-sm font-bold text-violet-800 hover:border-violet-900 hover:text-violet-900 md:px-6 lg:mr-2 lg:text-xl xl:text-2xl"
          >Join our newsletter</a
        >

        <a
          rel="noopener"
          href="/category/newsletters/"
          class="focus:outline-none mr-1 inline-flex py-2 text-center text-xs font-normal leading-tight text-violet-800 hover:text-violet-900 md:px-3 lg:mr-2"
          >View all past<br />
          newsletters</a
        >

        @if(get_theme_mod('facebook'))


        <a
          rel="noopener"
          class="text-violet-700 hover:text-violet-900"
          aria-label="Facebook link"
          href="{{ get_theme_mod('facebook') }}"
          target="_blank"
        >
          <x-icon.facebook />
        </a>


@endif @if(get_theme_mod('twitter'))


        <a
          rel="noopener"
          aria-label="Twitter link"
          class="ml-1 text-violet-700 hover:text-violet-900 md:ml-4"
          href="{{ get_theme_mod('twitter') }}"
          target="_blank"
        >
          <x-icon.twitter />
        </a>


@endif @if(get_theme_mod('youtube'))


        <a
          rel="noopener"
          aria-label="Youtube link"
          class="ml-1 text-violet-700 hover:text-violet-900 md:ml-4"
          href="{{ get_theme_mod('youtube') }}"
          target="_blank"
        >
          <x-icon.youtube />
        </a>


@endif @if(get_theme_mod('instagram'))


        <a
          rel="noopener"
          aria-label="Instagram link"
          class="ml-1 text-violet-700 hover:text-violet-900 md:ml-4"
          href="{{ get_theme_mod('instagram') }}"
          target="_blank"
        >
          <x-icon.instagram />
        </a>


@endif @if(get_theme_mod('linkedin'))


        <a
          rel="noopener"
          aria-label="LinkedIn link"
          class="ml-1 text-violet-700 hover:text-violet-900 md:ml-4"
          href="{{ get_theme_mod('linkedin') }}"
          target="_blank"
        >
          <x-icon.linkedin />
        </a>


@endif
      </span>
    </div>
  </div>
  <div class="bg-black text-gray-100 antialiased">
    <div class="container pt-32 pb-20">
      <div class="order-first flex flex-wrap gap-8 text-center md:text-left">
        <div class="mt-3 w-full flex-shrink md:w-1/2 lg:w-1/6">
          <img
            width="240"
            height="221"
            alt="Migrants’ Rights Network Logo"
            class="mx-auto h-auto w-1/2 lg:w-full"
            src="{{ $siteLogo }}"
          />
        </div>
        <div class="mr-auto w-full flex-shrink lg:mt-0 lg:w-1/4 xl:w-1/3">
          <p class="mb-3 text-2xl sm:mt-1">{{ $siteStrapline }}</p>
          @if(get_theme_mod('contact_address'))


          <p class="site-footer--address contact-address mb-4 text-sm">
            {!! nl2br(strip_tags(get_theme_mod('contact_address'))) !!}
          </p>


@endif
          <p class="mb-4 text-sm">
            @if(get_theme_mod('contact_email'))


            <a
              class="site-footer--email contact-email mb-4 block"
              href="mailto:{{ get_theme_mod('contact_email') }}"
              >{{ get_theme_mod('contact_email') }}</a
            >


@endif @if(get_theme_mod('contact_phone') ||
            get_theme_mod('contact_phone_human'))


            <a
              class="site-footer--phone contact-phone block"
              href="tel:{{ get_theme_mod('contact_phone') ?? get_theme_mod('contact_phone_human') }}"
              >{{ get_theme_mod('contact_phone_human') ??
              get_theme_mod('contact_phone') }}</a
            >


@endif
          </p>

          @if(get_theme_mod('company_info'))


          <p class="company-info mt-3 text-xs text-gray-300">
            {{ get_theme_mod('company_info') }}
          </p>


@endif
        </div>
        @if(!empty($primaryNavigationFooter))


        <div
          class="w-full flex-shrink md:-ml-6 md:w-1/2 lg:ml-0 lg:w-1/5 xl:w-1/6"
        >
          {!! $primaryNavigationFooter !!}
        </div>


@endif @if(!empty($tertiaryNavigation))


        <div class="w-full md:-ml-6 md:w-1/2 lg:ml-0 lg:w-1/5 xl:w-1/6">
          {!! $tertiaryNavigation !!}
        </div>


@endif
      </div>
    </div>
  </div>
</footer>
