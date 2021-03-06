<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => $this->title(),
            'siteName' => $this->siteName(),
            'siteStrapline' => $this->siteStrapline(),
            'siteLogo' => $this->siteLogo(),
            'post'     => get_queried_object()
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo()
    {
        return get_site_icon_url();
    }

    public function siteStrapline()
    {
        return get_bloginfo('description', 'display');
    }

    public function title()
    {

        if ( is_category() ) {
            return single_cat_title('', false);
        }

        if(is_tax()) {
            return get_the_archive_title();
        }
        

        if ($this->view->name() == 'index') {
            $post = get_queried_object(); 
            return get_the_title(isset($post->ID) ? $post->ID : null);
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }
    
        if (is_archive()) {
            return post_type_archive_title('', false);
        }


        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Sorry, that page could not be found', 'sage');
        }

        return get_the_title();
    }
}
