<?php
get_header('single-product');
global $product;
?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Kontak Kami</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="display: flex; flex-direction: column; gap: 24px; ">
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 1.2rem"">
                    <span style="display: flex; gap: 12px;"><i class="icon-whatsapp"></i>0888 5544 1234 | Admin Sisi</span>
                    <span style="display: flex; gap: 12px;"><i class="icon-whatsapp"></i>0888 5544 1234 | Admin Sasa</span>
                    <span style="display: flex; gap: 12px;"><i class="icon-whatsapp"></i>0888 5544 1234 | Admin Susi</span>
                    </div>
                    <p>Jl. Taman Mini Indonesia Indah (TMII) Pintu II atas No. 43. Cipayung, Jakarta Timur – Jakarta, Indonesia</p>
                </div>

            </div>
        </div>
    </div>
    <section id="content" style="margin-top: 52px">

        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-6">
                    <div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false"
                         data-thumbs="true">
                        <div class="flexslider">
                            <div class="slider-wrap">
								<?php
								$product_image_id  = get_post_thumbnail_id();
								$product_image_url = wp_get_attachment_url( $product_image_id );
								$product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
								?>
                                <div class="slide" data-thumb="<?php echo esc_url( $product_image_url ) ?>">
                                    <img src="<?php echo esc_url( $product_image_url ) ?>"
                                         alt="<?php echo esc_attr( $product_image_alt ) ?>">

                                </div>

								<?php

								$attachment_ids = $product->get_gallery_image_ids();

								foreach ( $attachment_ids as $attachment_id ) {
									$product_image_gallery_url = wp_get_attachment_url( $attachment_id );
									$product_image_gallery_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

									?>
                                    <div class="slide"
                                         data-thumb="<?php echo esc_url( $product_image_gallery_url ) ?>">
                                        <img src="<?php echo esc_url( $product_image_gallery_url ) ?>"
                                             alt="<?php echo esc_attr( $product_image_gallery_alt ) ?>">

                                    </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading-block nobottomborder bottommargin-sm">
                        <h3> <?php echo esc_html( get_the_title() ) ?></h3>
                    </div>
                    <p><?php echo esc_html($product->get_short_description()); ?></p>
                    <a href="#" class="button button-3d noleftmargin bottommargin-sm">Learn More</a>
                    <button type="button" class="button button-3d noleftmargin bottommargin-sm" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                    </button>

                </div>
            </div>
        </div>
        <div class="clear"></div>

    </section>

    <section id="content">
        <div class="container topmargin-lg cleafix">
            <div
                    class="tabs tabs-justify nobottommargin clearfix"
                    id="construction-tabs">
                <ul class="tab-nav clearfix">
                    <li><a href="#construction-tab-1">Deskripsi</a></li>
                    <li><a href="#construction-tab-2">Spesifikasi</a></li>
                    <li><a href="#construction-tab-3">Team</a></li>
                </ul>

                <div class="tab-container" style="border: 1px solid #ddd; border-top: none; padding: 24px; height: auto; min-height: 550px;">
                    <div class="tab-content clearfix" id="construction-tab-1">
	                    <?php echo wpautop(get_the_content()); ?>
                    </div>
                    <div class="tab-content clearfix" id="construction-tab-2">
                        <img
                                src="assets/images/projects/3.jpg"
                                width="260"
                                alt="Image"
                                class="img-thumbnail alignleft"/>
                        <p>
                            Morbi tincidunt, dui sit amet facilisis feugiat, odio
                            metus gravida ante, ut pharetra massa metus id nunc. Duis
                            scelerisque molestie turpis. Sed fringilla, massa eget
                            luctus malesuada, metus eros molestie lectus, ut tempus
                            eros massa ut dolor. Aenean aliquet fringilla sem.
                            Suspendisse sed ligula in ligula suscipit aliquam.
                            Praesent in eros vestibulum mi adipiscing adipiscing.
                            Morbi facilisis. Curabitur ornare consequat nunc. Aenean
                            vel metus. Ut posuere viverra nulla. Aliquam erat
                            volutpat. Pellentesque convallis. Maecenas feugiat, tellus
                            pellentesque pretium posuere, felis lorem euismod felis,
                            eu ornare leo nisi vel felis. Mauris consectetur tortor et
                            purus.
                        </p>
                    </div>
                    <div class="tab-content clearfix" id="construction-tab-3">
                        <p>
                            Mauris eleifend est et turpis. Duis id erat. Suspendisse
                            potenti. Aliquam vulputate, pede vel vehicula accumsan, mi
                            neque rutrum erat, eu congue orci lorem eget lorem.
                            Vestibulum non ante. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos
                            himenaeos. Fusce sodales. Quisque eu urna vel enim commodo
                            pellentesque. Praesent eu risus hendrerit ligula tempus
                            pretium. Curabitur lorem enim, pretium nec, feugiat nec,
                            luctus a, lacus.
                        </p>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <ul class="iconlist nobottommargin">
                                    <li><i class="icon-ok"></i> 100% Assurance</li>
                                    <li><i class="icon-ok"></i> Hard Working</li>
                                    <li><i class="icon-ok"></i> Trustworthy</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist nobottommargin">
                                    <li><i class="icon-ok"></i> Intelligent</li>
                                    <li><i class="icon-ok"></i> Always Curious</li>
                                    <li><i class="icon-ok"></i> Perfectionists</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist nobottommargin">
                                    <li>
                                        <i class="icon-ok"></i> Friendly &amp; Helpful
                                    </li>
                                    <li><i class="icon-ok"></i> Accomodating Nature</li>
                                    <li><i class="icon-ok"></i> Available 24x7</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix" style="margin-top: 52px">
            <div id="portfolio" class="portfolio row grid-container gutter-10 has-init-isotope" data-layout="fitRows" style="position: relative; height: 682.75px;">

	            <?php

	            $terms = get_the_terms( get_the_ID(), 'product_cat' );
	            $selected = '';
	            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		            echo '<ul class="product-categories">';
		            foreach ( $terms as $term ) {
			            $selected = $term->slug;
		            }
		            echo '</ul>';
	            }
	            $args     = array(
		            'post_type'      => 'product',
		            'posts_per_page' => 6,
                    'category' => $selected
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
                             style="height: 400px;">
                        <div class="portfolio-image">
                            <img src="<?php echo esc_url( $image_url ); ?>"
                                 alt="<?php echo esc_attr( $product_name ); ?>">
                            <div class="portfolio-overlay">
                                <a href="<?php echo esc_url( $product_permalink ); ?>" class="center-icon"><i
                                            class="icon-line-ellipsis"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $product_name ); ?></a></h3>
                            <span><?php echo esc_attr( $cat_name ); ?></span>
                        </div>
                    </article>

	            <?php } ?>


            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php
get_footer()
?>