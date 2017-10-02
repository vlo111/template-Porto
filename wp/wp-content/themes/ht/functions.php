<?php
//<editor-fold<desc="Menu">

register_nav_menu('HeadMenu', 'HeadPrimary');

/**
 * class create dynammic Home menu
 */
class mainMenuWalker3 extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
//         назначаем классы li-элементу и выводим его
        $class_names = '';  // join(' ', $item->classes);
        $class_names = ''; // ' class="' . esc_attr($class_names) . '';
//        if ($item->title == 'Technology')
//            $output .= '<li class="active"><a href="#"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a>';
//        if ($item->type_label == "Category")
//            $output .= '<li class="dropdown">';
//        else
        $output .= '<li>';
        // назначаем атрибуты a-элементу
        $attributes = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $item_output = $args->before;

        // проверяем, на какой странице мы находимся
        $current_url = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $item_url = esc_attr($item->url);
//        if ( $item_url != $current_url )
        $item_output .= '<a ' . $attributes . '>' . $item->title . '</a>';
//        else $item_output.= $item->title;

        // заканчиваем вывод элемента
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

//    public function start_lvl(&$output, $depth = 0, $args = array())
//    {
//        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
//            $t = '';
//            $n = '';
//        } else {
//            $t = "\t";
//            $n = "\n";
//        }
//        $indent = str_repeat($t, $depth);
//        $output .= "{$n}{$indent}<ul class=\"dropdown-menu\" role=\"menu\">{$n}";
//    }
}

//</editor-fold>
//<editor-fold<desc="Add script and style">
add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method()
{
    wp_enqueue_script('jquery');
}

//</editor-fold>
//<editor-fold<desc="Img thumbnail">

function add_custom_sizes()
{
    add_image_size('portfolio-thumb', 261, 200, true);
}

add_action('after_setup_theme', 'add_custom_sizes');
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200, 200, true); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size('category-thumb', 300, 211); //300 pixels wide (and unlimited height)
}
//</editor-fold>
//<editor-fold<desc="Sidebar">
register_sidebar(array(
    'name' => 'Sidebar in Home page',
    'id' => 'sidebar_index',
    'description' => esc_html__('Add widgets here.', 'theme'),
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Sidebar in soc buttons head',
    'id' => 'sidebar_soc',
    'description' => esc_html__('Add widgets here.', 'theme'),
    'before_widget' => '',
    'after_widget' => '',
));


//</editor-fold>
//<editor-fold<desc="Logo">
/**
 * Custom Logo
 */
function tech_custom_logo_setup()
{
    $defaults = array(
        'height' => 54,
        'width' => 111,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'tech_custom_logo_setup');
/**
 * Custom Logo class and attributes
 */
//add_filter( 'get_custom_logo', 'change_logo_class' );
//function change_logo_class( $html ) {
//
//    $html = str_replace( 'custom-logo', 'alt="Porto"', $html );
//    $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );
//
//    return $html;
//}
add_filter('wp_get_attachment_image_attributes', function ($attr) {
    $attr['alt'] = 'Porto';
    $attr['data-sticky-top'] = '33';
    return $attr;
});
//</editor-fold>
//<editor-fold<desc="Setup">
if (!function_exists('tech_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tech_setup()
    {
        load_theme_textdomain('tech', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'tech'),
        ));
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-background', apply_filters('tech_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

    }
endif;
add_action('after_setup_theme', 'tech_setup');


function my_more_options()
{
    //create option
    add_settings_field(
        'phone',
        'Phone',
        'display_phone',
        'general'
    );
    //callback func save in db
    register_setting(
        'general',
        'my_phone'
    );
    //create option
    add_settings_field(
        'address',
        'Address',
        'display_address',
        'general'
    );
    //callback func save in db
    register_setting(
        'general',
        'my_address'
    );
}

add_action('admin_init', 'my_more_options');
function display_phone()
{
    echo "<input type='text' class='regular-text' name='my_phone' value='" . esc_attr(get_option('my_phone')) . "'>";
}

function display_address()
{
    echo "<input type='text' class='regular-text' name='my_address' value='" . esc_attr(get_option('my_address')) . "'>";
}

//</editor-fold>
//<editor-fold<desc="Pagination">
//function wp_corenavi()
//{
//    global $wp_query, $wp_rewrite;
//    $pages = '';
//    $max = $wp_query->max_num_pages;
//    if (!$current = get_query_var('paged')) $current = 1;
//    $a['base'] = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
//    $a['total'] = $max;
//    $a['current'] = $current;
//
//    $total = 0;
//    $a['mid_size'] = 2;
//    $a['end_size'] = 1;
//    $a['prev_text'] = '&laquo';
//    $a['next_text'] = '&raquo';
//
//    if ($max > 1) echo '<ul class="pagination pagination-lg pull-right">';
//    if ($total == 1 && $max > 1) $pages = '<span class="pages"> page ' . $current . ' in ' . $max . '</span>' . "\r\n";
//    echo $pages . paginate_links($a);
//    if ($max > 1) echo '</ul>';
//}
function custom_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type'  => 'array',
        'prev_next'   => TRUE,
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination pagination-lg pull-right">';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}
//</editor-fold>