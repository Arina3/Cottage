<?php
/**
 * Cottage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cottage
 */

if ( ! function_exists( 'cottage_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cottage_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cottage, use a find and replace
		 * to change 'cottage' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cottage', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cottage_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 36,
			'width'       => 134,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cottage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cottage_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cottage_content_width', 640 );
}
add_action( 'after_setup_theme', 'cottage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cottage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cottage' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cottage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/*Add my widgets*/
    register_sidebar( array(
        'name' => __('Phone number in footer'),
        'id' => 'footer-sidebar-phone',
        'description' => __('Appears in the footer area'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title-phone">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Address in footer',
        'id' => 'footer-sidebar-address',
        'description' => 'Appears in the footer area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title-address">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Copyright in footer',
        'id' => 'footer-sidebar-copyright',
        'description' => 'Appears in the footer area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title-copy">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Tags sidebar on the Post page',
        'id' => 'tags-post-sidebar',
        'description' => 'Appears in right sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widget-title-tags">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => 'Archives sidebar on the Post page',
        'id' => 'archives-post-sidebar',
        'description' => 'Appears in right sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widget-title-archives">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => 'Recent posts sidebar',
        'id' => 'recent-post-sidebar',
        'description' => 'Appears in right sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widget-title-recent">',
        'after_title' => '</h4>',
    ) );
}

add_action( 'widgets_init', 'cottage_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cottage_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('jquery');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('slickslider-css', get_template_directory_uri() . '/slick-1.8.0/slick/slick.css');
    wp_enqueue_script('slickslider-min-js', get_template_directory_uri() . '/slick-1.8.0/slick/slick.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script( 'cottage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'cottage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'cottage_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wbp_custom_new_menu()
{
    register_nav_menus(array(
            'header-nav-menu' => _('Header nav menu'),
            'footer-socials-menu' => _('Footer social links'),
            'footer-nav-menu' => _('Footer nav menu'),
        )
    );
}

add_action('init', 'wbp_custom_new_menu');

function mycottage_customize_register($wp_customize)
{
    /*main background/H1*/

    $wp_customize->add_section('header_image_section', array(
        'title' => __('Header image settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('header_heading', array(
        'default' => __('Main heading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_subheading', array(
        'default' => __('Subheading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_button', array(
        'default' => __('Button', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_url', array(
        'default' => __('Button url', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_heading', array(
        'label' => __('Main heading in header', 'cottage'),
        'section' => 'header_image_section',
        'settings' => 'header_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_subheading', array(
        'label' => __('Subheading in header', 'cottage'),
        'section' => 'header_image_section',
        'settings' => 'header_subheading',
        'type' => 'textarea',
    ));
    $wp_customize->add_control('header_button', array(
        'label' => __('Button name', 'cottage'),
        'section' => 'header_image_section',
        'settings' => 'header_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_url', array(
        'label' => __('Url', 'cottage'),
        'section' => 'header_image_section',
        'settings' => 'header_url',
        'type' => 'text',
    ));

    /*About us section*/
    $wp_customize->add_section('about_company', array(
        'title' => __('About company section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('about_desc', array(
        'default' => __('About description', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('about_desc', array(
        'label' => __('About company description', 'cottage'),
        'section' => 'about_company',
        'settings' => 'about_desc',
        'type' => 'textarea',
    ));

    /*Footer section*/
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('footer_desc', array(
        'default' => __('Footer description', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_logo', array(
        'default' => __('Footer logo', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_contact_button', array(
        'default' => __('Button title', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_address_title', array(
        'default' => __('Adress', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_address_desc', array(
        'default' => __('Address description', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_contact_url', array(
        'default' => __('Button url', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_desc', array(
        'label' => __('About company in footer', 'cottage'),
        'section' => 'footer_section',
        'settings' => 'footer_desc',
        'type' => 'textarea',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_footer',
            array(
                'label'      => __( 'Upload a logo', 'cottage' ),
                'section'    => 'footer_section',
                'settings'   => 'footer_logo',
            )
        )
    );
    $wp_customize->add_control('footer_contact_button', array(
        'label' => __('Contact us link in footer', 'cottage'),
        'section' => 'footer_section',
        'settings' => 'footer_contact_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_contact_url', array(
        'label' => __('Link url in footer', 'cottage'),
        'section' => 'footer_section',
        'settings' => 'footer_contact_url',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_address_title', array(
        'label' => __('Address heading', 'cottage'),
        'section' => 'footer_section',
        'settings' => 'footer_address_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_address_desc', array(
        'label' => __('Company address', 'cottage'),
        'section' => 'footer_section',
        'settings' => 'footer_address_desc',
        'type' => 'textarea',
    ));

    /* Our Works section*/
    $wp_customize->add_section('works_section', array(
        'title' => __('Our Works section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('works_heading', array(
        'default' => __('Section heading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('works_subheading', array(
        'default' => __('Section description', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('works_heading', array(
        'label' => __('Contact us link in footer', 'cottage'),
        'section' => 'works_section',
        'settings' => 'works_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('works_subheading', array(
        'label' => __('Link url in footer', 'cottage'),
        'section' => 'works_section',
        'settings' => 'works_subheading',
        'type' => 'text',
    ));

    /* Reviews section*/
    $wp_customize->add_section('reviews_section', array(
        'title' => __('Reviews section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('reviews_heading', array(
        'default' => __('Section heading', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('reviews_heading', array(
        'label' => __('Title', 'cottage'),
        'section' => 'reviews_section',
        'settings' => 'reviews_heading',
        'type' => 'text',
    ));

    /* Prices section*/
    $wp_customize->add_section('prices_section', array(
        'title' => __('Prices section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('prices_heading', array(
        'default' => __('Section heading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('prices_subheading', array(
        'default' => __('Section description', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('prices_heading', array(
        'label' => __('Contact us link in footer', 'cottage'),
        'section' => 'prices_section',
        'settings' => 'prices_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('prices_subheading', array(
        'label' => __('Link url in footer', 'cottage'),
        'section' => 'prices_section',
        'settings' => 'prices_subheading',
        'type' => 'text',
    ));

    /* FAQ section*/
    $wp_customize->add_section('faq_section', array(
        'title' => __('FAQ section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('faq_heading', array(
        'default' => __('Section heading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('faq_subheading', array(
        'default' => __('Section description', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('faq_heading', array(
        'label' => __('FAQ title', 'cottage'),
        'section' => 'faq_section',
        'settings' => 'faq_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('faq_subheading', array(
        'label' => __('FAQ subtitle', 'cottage'),
        'section' => 'faq_section',
        'settings' => 'faq_subheading',
        'type' => 'textarea',
    ));

    /* Blog section*/
    $wp_customize->add_section('blog_section', array(
        'title' => __('Blog section settings', 'cottage'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('blog_heading', array(
        'default' => __('Section heading', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('blog_subheading', array(
        'default' => __('Section description', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('blog_button_title', array(
        'default' => __('Button title', 'cottage'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('blog_button_url', array(
        'default' => __('Button url', 'cottage'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('blog_heading', array(
        'label' => __('Blog title', 'cottage'),
        'section' => 'blog_section',
        'settings' => 'blog_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('blog_subheading', array(
        'label' => __('Blog subtitle', 'cottage'),
        'section' => 'blog_section',
        'settings' => 'blog_subheading',
        'type' => 'textarea',
    ));
    $wp_customize->add_control('blog_button_title', array(
        'label' => __('Blog button title', 'cottage'),
        'section' => 'blog_section',
        'settings' => 'blog_button_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('blog_button_url', array(
        'label' => __('Blog  button url', 'cottage'),
        'section' => 'blog_section',
        'settings' => 'blog_button_url',
        'type' => 'text',
    ));
}

add_action( 'customize_register', 'mycottage_customize_register');

function modify_read_more_link() {
    return '<span class="more-link">...</span>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/* Ajax connecting*/

function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :

        // запускаем цикл
        while( have_posts() ): the_post();

            get_template_part('template-parts/content', 'blog');

        endwhile;

    endif;
    die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

/* Post viewing connecting*/

function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count . '';
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//limited archives months displaying
function change_number_archives($archives) {
    $archives['limit'] = 6;
    return $archives;
}
add_filter('widget_archives_args', 'change_number_archives', 10, 1);
add_filter('widget_archives_dropdown_args', 'change_number_archives', 10, 1);


class trueTopPostsWidget extends WP_Widget {

    /*
     * создание виджета
     */
    function __construct() {
        parent::__construct(
            'true_recents_widget',
            'Recent posts', // заголовок виджета
            array( 'description' => 'Allow to display recent posts' ) // описание
        );
    }

    /*
     * фронтэнд виджета
     */
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] ); // к заголовку применяем фильтр (необязательно)
        $posts_per_page = $instance['posts_per_page'];

        echo $args['before_widget'];

        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

        $q = new WP_Query("posts_per_page=$posts_per_page&orderby=date&posts_per_page=4");
        if( $q->have_posts() ):
            ?><ul class="recent-posts-list"><?php
            while( $q->have_posts() ): $q->the_post();
                ?>
                <li>
                    <div class="recent-post-thumbnail">
                        <?php the_post_thumbnail('thumbnail') ?>
                    </div>
                    <div class="recent-post-details">
                        <div class="entry-meta-post">
                            <span class="entry-meta"><?php the_time('j F, Y'); ?></span>
                            <span class="entry-meta"><i class="fa fa-comments"></i><?php comments_number('0', '1', '%'); ?></span>
                        </div>
                        <div class="recent-post-title">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </div>
                    </div>
                </li><?php
            endwhile;
            ?></ul><?php
        endif;
        wp_reset_postdata();

        echo $args['after_widget'];
    }

    /*
     * бэкэнд виджета
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        if ( isset( $instance[ 'posts_per_page' ] ) ) {
            $posts_per_page = $instance[ 'posts_per_page' ];
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>">Posts per page:</label>
            <input id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text" value="<?php echo ($posts_per_page) ? esc_attr( $posts_per_page ) : '4'; ?>" size="3" />
        </p>
        <?php
    }

    /*
     * сохранение настроек виджета
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['posts_per_page'] = ( is_numeric( $new_instance['posts_per_page'] ) ) ? $new_instance['posts_per_page'] : '5'; // по умолчанию выводятся 5 постов
        return $instance;
    }
}

/*
 * регистрация виджета
 */
function true_top_posts_widget_load() {
    register_widget( 'trueTopPostsWidget' );
}
add_action( 'widgets_init', 'true_top_posts_widget_load' );

