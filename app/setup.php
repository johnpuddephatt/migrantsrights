<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

add_action( 'wp_head', function() {
    $description = get_the_excerpt() ? get_the_excerpt() : get_bloginfo('description');
    ?>
        <meta name="description" content="<?php echo $description ?>" />
    <?php
});




/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), [], null, true);
    wp_enqueue_script('sage/app.js', asset('scripts/app.js')->uri(), ['sage/vendor.js'], null, true);

    wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');

    if ( !is_admin() && !is_customize_preview() ) {
        wp_deregister_script('jquery');
        wp_deregister_script('wp-embed');
    }

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('sage/app.css', asset('styles/app.css')->uri(), false, null);
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    if ($manifest = asset('scripts/manifest.asset.php')->load()) {
        wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), ...array_values($manifest));
        wp_enqueue_script('sage/editor.js', asset('scripts/editor.js')->uri(), ['sage/vendor.js'], null, true);

        wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');
    }

    wp_enqueue_style('sage/editor.css', asset('styles/editor.css')->uri(), false, null);
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {

    function wpdocs_custom_post_status(){
        register_post_status( 'archive', array(
            'label'                     => _x( 'Archive', 'post' ),
            'public'                    => false,
            'exclude_from_search'       => true,
            'show_in_admin_all_list'    => false,
            'show_in_admin_status_list' => true,
            'label_count'               => _n_noop( 'Archive <span class="count">(%s)</span>', 'Archive <span class="count">(%s)</span>' ),
        ) );
    }
    add_action( 'init', 'App\wpdocs_custom_post_status' );

    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'disable-rest-api',
        'disable-asset-versioning',
        'disable-trackbacks',
        'google-analytics' => [
            'should_load' => true,
            'google_analytics_id' => 'UA-12833905-1',
            'optimize_id' => null,
            'anonymize_ip',
        ],
        'js-to-footer',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'secondary_navigation' => __('Secondary Navigation', 'sage'),
        'tertiary_navigation' => __('Tertiary Navigation', 'sage')
    ]);

    /**
     * Register the editor color palette.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support('editor-color-palette', [
        [
            'name' => esc_attr__( 'Orange', 'themeLangDomain' ),
            'slug' => 'orange',
            'color' => '#E78C38'
        ],
        [
            'name' => esc_attr__( 'Light orange', 'themeLangDomain' ),
            'slug' => 'light-orange',
            'color' => '#eac399'
        ],
        [
            'name' => esc_attr__( 'Purple', 'themeLangDomain' ),
            'slug' => 'purple',
            'color' => '#2d1458'
        ],
        [
            'name' => esc_attr__( 'Light purple', 'themeLangDomain' ),
            'slug' => 'light-purple',
            'color' => '#e5dbf6'
        ]
    ]);

    /**
     * Register the editor color gradient presets.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
     */
    add_theme_support('editor-gradient-presets', []);

    /**
     * Register the editor font sizes.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
     */
    add_theme_support('editor-font-sizes', []);

    /**
     * Register relative length units in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
     */
    add_theme_support('custom-units');

    /**
     * Enable support for custom line heights in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
     */
    // add_theme_support('custom-line-height');

    /**
     * Enable support for custom block spacing control in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#spacing-control
     */
    add_theme_support('custom-spacing');

    /**
     * Disable custom colors in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
     */
    add_theme_support('disable-custom-colors');

    /**
     * Disable custom color gradients in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
     */
    add_theme_support('disable-custom-gradients');

    /**
     * Disable custom font sizes in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
     */
    add_theme_support('disable-custom-font-sizes');

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable wide alignment support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('wp-block-styles');
}, 20);


add_post_type_support( 'page', 'excerpt' );

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});

define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance

function project_resources( $attachments )
{
  $args = array(
    'label'         => 'Resources',
    'priority'      => 'high',
    'position'  => 'side',
    'post_type'     => array( 'project'),
    'filetype'      => null,  // no filetype limit
    // 'note'          => 'Attach files here!',
    'button_text'   => __( 'Attach Files', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'fields'        => array(
    //   array(
    //     'name'  => 'title',
    //     'type'  => 'text',
    //     'label' => __( 'Title', 'attachments' ),
    //   ),
    //   array(
    //     'name'  => 'caption',                
    //     'type'  => 'textarea',               
    //     'label' => __( 'Caption', 'attachments' ),
    //   ),
    //   array(
    //     'name'  => 'copyright',
    //     'type'  => 'text',
    //     'label' => __( 'Copyright', 'attachments' )
    //   ),
    ),
  );

  $attachments->register( 'project_resources', $args ); // unique instance name
}

add_action( 'attachments_register', 'App\project_resources' );

function create_project_post_type() {
    register_post_type('project',
       array(
          'labels' => array(
             'name' => __('Projects'),
             'singular_name' => __('Project')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array(
              'slug' => 'projects',
              'with_front' => false
          ),
          'menu_icon' => 'dashicons-image-filter',
          'menu_position' => 4,
          'show_in_rest' => true,
          'supports' => array('title','thumbnail','excerpt','page-attributes','editor', 'revisions'),
       )
    );
}

add_action('init', 'App\create_project_post_type');


if( function_exists('acf_add_local_field_group') ):


acf_add_local_field_group(array(
	'key' => 'group_60b02c8ebbd0c',
	'title' => 'Project',
	'fields' => array(
		array(
			'key' => 'field_60b02c95a8a33',
			'label' => '',
			'name' => 'project',
			'type' => 'select',
			'instructions' => 'Press the control or command key to select multiple projects',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => wp_list_pluck(
                get_posts([
                    'numberposts' => -1,
                    'post_type'        => 'project',
                    'suppress_filters' => true
                ]),
                'post_title', 'ID'),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 1,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'key',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => -5,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

function add_project_box() {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Related posts',                // Box title
            'App\add_project_box_html',     // Content callback, must be of type callable
            'project',                      // Post type
            'side'                          // Position
        );
}
add_action( 'add_meta_boxes', 'App\add_project_box' );

function add_project_box_html( $post ) {
    $related_posts = get_posts([
                    'numberposts' => 21,
                    'post_type'        => 'post',
                    'meta_query' => array(
								array(
									'key' => 'project', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
                    
    ]);

    foreach($related_posts as $related_post) {
    ?>
    <p><a target="_blank" href="<?php echo get_edit_post_link($related_post->ID) ?>" title="<?php echo $related_post->post_title ?>"><?php echo substr($related_post->post_title,0,30) ?>...</a></p>
    <?php }
}

add_image_size( '16by9-xl', 1600, 900, true );
add_image_size( '16by9-l', 1200, 675, true );
add_image_size( '16by9', 800, 450, true );
add_image_size( '16by9-s', 400, 225, true );
add_image_size( '16by9-xs', 240, 135, true );

add_image_size( 'square-xl', 1200, 1200, true );
add_image_size( 'square-l', 960, 960, true );
add_image_size( 'square', 800, 800, true );
add_image_size( 'square-s', 640, 640, true );
add_image_size( 'square-xs', 320, 320, true );

add_action( 'init', function() {
$post_type_object = get_post_type_object( 'project' );
$post_type_object->template = array(
    array( 'core/paragraph', array(
        'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ) ),
    array( 'core/separator', array(
        'className' => 'is-style-wide'
    ) ),
    array( 'core/heading', array(
        'content' => 'About this project',
        'level' => '2'
    ) ),
    array( 'core/paragraph', array(
        'placeholder' => ' Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ) )
    );

});


function my_pre_get_posts( $query ) {
	
	// do not modify queries in the admin
	if( is_admin() ) {
		return $query;
	}
	
	// only modify queries for 'event' post type

    if(is_home()) {
        dump('home');
        die();

    }

	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'post' ) {
		// allow the url to alter the query
		if( isset($_GET['projects']) ) {
            // $postID =site_url($_GET['projects']);
            dump();
            $post = get_posts( [
                'posts_per_page' => 1,
                'post_name__in'  => [$_GET['projects']]
            ] );
            dump($post);
            die();
            // if($postID) {
            //     $query->set('meta_key', 'project');
            //     $query->set('meta_value', $postID);
            // }
		
    	} 
		
	}
	
	
	// return
	return $query;

}

// add_action('pre_get_posts', 'App\my_pre_get_posts');


function exclude_single_posts_home($query) {
    
  if (isset($_GET['projects']) && $query->is_home() && $query->is_main_query() && !is_admin()) {
            $my_project = get_posts( [
                'post_type'=> 'project',
                'posts_per_page' => 1,
                'post_name__in'  => [$_GET['projects']]
            ] );

            if($my_project) {
                $query->set('meta_key', 'project');
                $query->set('meta_compare', 'LIKE');
                $query->set('meta_value', '"' . $my_project[0]->ID . '"');
            }
                
  }
}

add_action('pre_get_posts', 'App\exclude_single_posts_home');