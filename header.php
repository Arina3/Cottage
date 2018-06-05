<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cottage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="container-main header clearfix">
            <div class="site-branding header">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>

                <div class="site-navigation">
                    <span class="menu-trigger"><i class="fa fa-bars"></i></span>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-nav-menu',
                        'container_class' => 'custom-menu-class',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </div>

            </div><!-- .site-branding -->

            <div class="container-search-lang">
                <div class="lang">
                    <select>
                        <option>ENG</option>
                        <option>RUS</option>
                    </select>
                </div>
                <div class="search">
                    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"
                               title="Search for:">
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
