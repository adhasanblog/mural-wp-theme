<?php
get_header()
?>

<section
        id="slider"
        class="slider-element slider-parallax swiper_wrapper clearfix"
        style="height: 550px"
        data-loop="true">
    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
			<?php $slider = new WP_Query( array(
				'post_type'      => 'slider',
				'posts_per_page' => - 1
			) );

			if ( $slider->have_posts() ) :
				while ( $slider->have_posts() ) : $slider->the_post();

//
					?>


                    <div class="swiper-slide"
                         style="background-image: url('<?php echo the_field( 'image_slider' ); ?>'); background-position: center top;">
                       <?php
                       $title_description = get_field( 'title_description' );
                       $description       = get_field( 'description' );

                       if($title_description || $description) :
                       ?>
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2><?php echo esc_html($title_description); ?></h2>
                                <p class="d-none d-sm-block">
									<?php echo esc_html($description); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
				<?php

				endwhile;

			endif;

			wp_reset_postdata();


			?>
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <h2 class="center ls1 bottommargin">Mural Products</h2>
            <div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">

				<?php
				$args     = array(
					'post_type'      => 'product',
					'posts_per_page' => 6,
				);
				$products = new WC_Product_Query( $args );
				$products = $products->get_products();

				foreach ( $products as $product ) {
					$product_id = $product->get_id();
					$image      = $product->get_image();
					preg_match( '@src="([^"]+)"@', $image, $match );
					$image_url                 = array_pop( $match );
					$product_name              = $product->get_name();
					$product_short_description = $product->get_short_description();
					$product_description       = $product->get_description();
					$product_permalink         = $product->get_permalink();
					$terms                     = wp_get_object_terms( $product_id, 'product_cat' );

					$cat_slug = '';
					$cat_name = '';
					foreach ( $terms as $term ) {
						$cat_slug = $term->slug;
						$cat_name = $term->name;

					}

					?>
                    <article class="portfolio-item pf-media pf-<?php echo esc_attr( $cat_slug ); ?>"
                             style="height: 500px;">
                        <div class="portfolio-image">
                            <img src="<?php echo esc_url( $image_url ); ?>"
                                 alt="<?php echo esc_attr( $product_name ); ?>">
                            <div class="portfolio-overlay">
                                <a href="<?php echo esc_url( $product_permalink ); ?>" class="center-icon"><i
                                            class="icon-line-ellipsis"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3>
                                <a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $product_name ); ?></a>
                            </h3>
                            <span><?php echo esc_attr( $cat_name ); ?></span>
                            <p style="margin-top:12px;"><?php echo esc_html( $product_short_description ); ?></p>
                        </div>
                    </article>

				<?php } ?>


            </div>
        </div>
        <a href="projects.html"
           class="button button-3d nobottomborder button-full center tright t300 font-primary topmargin footer-stick"
           style="font-size: 26px;">
            <div class="container clearfix">
                Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i
                        class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div
                class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
            <div class="container clearfix">
                <h3 style="letter-spacing: 2px">
                    Start Planning your New Dream Home with us
                </h3>
                <span
                >We strive to provide Our Customers with Top Notch Support to
                make their Theme</span
                >
                <a
                        href="#"
                        class="button button-large button-border button-rounded"
                >Start Now</a
                >
            </div>
        </div>
        <div class="container clearfix">


        </div>

    </div>
</section>


<?php
get_footer()
?>
