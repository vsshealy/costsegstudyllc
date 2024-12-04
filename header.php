<?php 
    /**
     * header.php
     * @package costsegstudyllc
     * @author Scott Shealy
     * @version 1.0.0 (2024.12.04)
     * @copyright 2024 (2024.12.04)
    **/
?>

<!-- COST SEGREGATION STUDY LLC | WEBSITE DESIGN BY SCOTT SHEALY | SCOTTSHEALY.COM -->

<html id="costsegstudyllc" class="h-100" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        
        <!-- TITLE -->
        <title><?php single_post_title(); ?> | <?php bloginfo('name'); ?></title>

        <!-- META -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/meta.php'); ?>

        <!-- HEADER-SCRIPTS -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/header-scripts.php'); ?>

    </head>

    <!-- BODY -->
    <?php 
        do_action('bricks_body');

        do_action('bricks_before_site_wrapper');

        do_action('bricks_before_header');

        do_action('render_header');

        do_action('bricks_after_header');
    ?>