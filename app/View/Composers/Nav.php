<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Nav extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        if($this->view->name() == 'partials.header') {
            return [
                'primaryNavigation' => $this->navigation('primary_navigation', [], [
                    'level-0-link' => 'inline-flex hover:border-orange'
                ]),
                'secondaryNavigation' => $this->navigation('secondary_navigation'),
            ];
        }
        else if($this->view->name() == 'partials.footer') {
            return [
                'primaryNavigationFooter' => $this->navigation('primary_navigation', [
                    'depth' => 1,
                    'menu_class' => 'flex flex-col'
                ], [
                    'level-0-link' => 'inline-flex hover:border-orange'
                ]),
                'secondaryNavigationFooter' => $this->navigation('secondary_navigation', [
                    'depth' => 1,
                    'menu_class' => 'flex flex-col'
                ], [
                    'level-0-link' => 'inline-flex hover:border-orange'
                ]),
                'tertiaryNavigation' => $this->navigation('tertiary_navigation', [
                    'depth' => 1,
                    'menu_class' => 'flex flex-col'
                ], [
                    'level-0-link' => 'inline-flex hover:border-orange'
                ])
            ];
        }
    }

    public function navigation($name, $args = [], $styles = []) {
        if (has_nav_menu($name)) {
            return wp_nav_menu(array_merge([
                'theme_location' => $name,
                'walker' => new \App\Navwalker($styles),
                'menu_class' => 'nav flex',
                'echo' => false
            ], $args));
        }
    }
}
