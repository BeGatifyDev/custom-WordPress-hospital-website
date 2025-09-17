<?php
/**
 * Main index template for Saint Nicholas Hospital theme
 *
 * @package snh-hospital
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

if ( is_front_page() && file_exists( get_template_directory() . '/front-page.php' ) ) {
    include get_template_directory() . '/front-page.php';
} else {
    echo '<main class="container">';
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();
            echo '<article id="post-'. get_the_ID() .'">';
            the_title( '<h1>', '</h1>' );
            the_content();
            echo '</article>';
        }
    } else {
        echo '<h1>' . esc_html__( 'Nothing Found', 'snh-hospital' ) . '</h1>';
    }
    echo '</main>';
}

get_footer();
