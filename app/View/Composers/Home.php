<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // 'partials.page-header',
        // 'partials.content',
        'template-home',
    ];

    public function with() {
        return [
           "hero_image" => wp_get_attachment_image(get_theme_mod('home_hero_image'), 'square', false, [
               'class' => 'md:absolute inset-0 object-cover object-center md:h-full md:w-1/2 md:left-1/2',
               'sizes' => '(orientation: portrait) 100vw, 50vw'
           ]),
            "case_study_image" => wp_get_attachment_image(get_theme_mod('home_case_study_image'), 'square', false, [
               'class' => 'absolute right-0 w-3/4 md:w-1/2 clip-hexagon md:-bottom-32 max-w-[900px]',
               'sizes' => '(orientation: portrait) 80vw, 50vw'
           ]),
           "projects" => get_posts([
                'post_type' => 'project',
                'orderby' => 'post__in',
                'include' => array_reduce(
                                get_option('home_projects')['projects'],
                                    function( $result, $item ) {
                                        $result[] = $item['page'];
                                        return $result;
                                    }
                                ),
                'numberposts' => 4
    
           ]),
           "posts" => get_posts([
                'post_type' => 'post',
                'numberposts' => 3
            ])
        ];
    }

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            //    "foo" => 'bar',
        ];
    }
}