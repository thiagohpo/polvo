<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lora|Playfair+Display" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <?php //include_once( get_template_directory() . "/inc/integracao/facebook.php");?>
    <?php //require_once( get_template_directory() . '/inc/walkers/wp_bootstrap_navwalker.php' );?>

    <?php get_template_part('template/nav', 'mobile');?>

    <section id="wrapper">
        <header class="container-fluid" id="header-principal">

            <div class="container"><div class="row">

                <section class="col-sm-2">
                    <h1 id="header-logo">
                        <?php the_custom_logo(); ?>
                    </h1>
                </section>
                <section class="col-sm-3">
                    <?php get_search_form();?>
                </section>
                <nav class="col-sm-7" id="nav-principal">
                    <?php if ( has_nav_menu( 'principal' ) ) : ?>
                    <?php wp_nav_menu( array(
                                'menu'              => 'principal',
                                'theme_location'    => 'principal',
                                'depth'             => 0,
                                'container'       => '', 
                                'menu_class'     => 'nav nav-justified', 
                                'menu_id'         => 'menu-principal'
                            ) );?>
                    <?php endif; ?>
                    <div class="clear"></div>
                </nav>

            </div></div>

        </header>

        <?php get_banner();?>

        <main id="container" class="container-fluid">