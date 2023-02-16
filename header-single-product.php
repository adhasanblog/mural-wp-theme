<!DOCTYPE html>
<html <?php
language_attributes();
global $product;

?>>
<head>
	<?php
	$product_image_id = get_post_thumbnail_id();
	$product_image_url = wp_get_attachment_url( $product_image_id );
	$product_title = get_the_title();
	$product_description = "hay";
	$product_url = get_permalink();

	?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="/favicon.ico">

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="theme-color" content="#000000">
    <meta name="description"
          content="<?php echo esc_attr( $product_description ) ?>">

    <meta name="keywords" content="<?php echo esc_attr( $product_title ) ?>"/>

    <meta name="robots" content="index,follow"/>

    <meta property="og:locale" content="id_ID"/>

    <meta property="og:type" content="website"/>

    <meta property="og:title" content="<?php echo esc_attr( $product_title ) ?>"/>

    <meta property="og:description"
          content="<?php echo esc_attr( $product_description ) ?>"/>

    <meta property="og:url" content="<?php echo esc_attr( $product_url ) ?>"/>

    <meta property="og:image" content="<?php echo esc_url( $product_image_url ) ?>"/>

    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>"/>

    <title><?php echo esc_attr( $product_title ) ?> | <?php bloginfo( 'name' ) ?></title>

	<?php wp_head() ?>

</head>


<body class="stretched">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="wrapper" class="clearfix">
    <div id="top-bar">
        <div class="container clearfix">
            <div class="col_half nobottommargin clearfix">
                <div id="top-social">
                    <ul>
                        <li>
                            <a href="#" class="si-facebook"
                            ><span class="ts-icon"><i class="icon-facebook"></i></span
                                ><span class="ts-text">Facebook</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="si-twitter"
                            ><span class="ts-icon"><i class="icon-twitter"></i></span
                                ><span class="ts-text">Twitter</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="si-dribbble"
                            ><span class="ts-icon"><i class="icon-dribbble"></i></span
                                ><span class="ts-text">Dribbble</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="si-github"
                            ><span class="ts-icon"
                                ><i class="icon-github-circled"></i></span
                                ><span class="ts-text">Github</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="si-pinterest"
                            ><span class="ts-icon"><i class="icon-pinterest"></i></span
                                ><span class="ts-text">Pinterest</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="si-instagram"
                            ><span class="ts-icon"><i class="icon-instagram2"></i></span
                                ><span class="ts-text">Instagram</span></a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col_half fright col_last clearfix nobottommargin">
                <div class="top-links">
                    <ul>
                        <li>
                            <a href="index.html">Locations</a>
                            <ul>
                                <li><a href="#">San Francisco</a></li>
                                <li><a href="#">London</a></li>
                                <li><a href="#">Amsterdam</a></li>
                            </ul>
                        </li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="sticky-style-2">
        <div class="container clearfix">
            <div id="logo">
                <a href="index.html" class="standard-logo"
                ><img src="<?php echo esc_url( get_theme_mod( 'logo_mural' ) ) ?>" alt="Canvas Logo"
                    /></a>
                <a href="index.html" class="retina-logo"><img
                            src="<?php echo get_theme_file_uri( 'images/logo%402x.png' ) ?>" alt="Canvas Logo"></a>

            </div>
            <ul class="header-extras">
                <li>
                    <i class="i-plain icon-call nomargin"></i>
                    <div class="he-text">
                        Call Us
                        <span><?php echo esc_html( get_theme_mod( 'telp_mural' ) ) ?></span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line2-envelope nomargin"></i>
                    <div class="he-text">
                        Email Us
                        <span><?php echo esc_html( get_theme_mod( 'email_mural' ) ) ?></span>
                        <!--                        <span><a href="ijpbase16@gmail.com" class="__cf_email__" data-cfemail="345d5a525b7457555a4255471a575b59">[email&#160;protected]</a></span>-->
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line-clock nomargin"></i>
                    <div class="he-text">
                        We'are Open
                        <span>Mon - Sat, 10AM to 6PM</span>
                    </div>
                </li>
            </ul>
        </div>
        <div id="header-wrap">
            <nav id="primary-menu" class="with-arrows style-2 center">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<?php
					wp_nav_menu( array(
						'menu'      => 'primary-menu',
						'container' => 'ul',
						'depth'     => 2
					) )
					?>

                    <div id="top-search">
                        <a href="#" id="top-search-trigger"
                        ><i class="icon-search3"></i><i class="icon-line-cross"></i
                            ></a>
                        <form
                                action="https://themes.semicolonweb.com/html/canvas/v5/search.html"
                                method="get">
                            <input
                                    type="text"
                                    name="q"
                                    class="form-control"
                                    value=""
                                    placeholder="Type &amp; Hit Enter.."/>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

