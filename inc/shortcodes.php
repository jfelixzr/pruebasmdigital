<?php

function cinemax_shortcode(){
    
if(!wp_is_mobile()):
    ?>
<section class="banner-principal">
				<div class="swiper-container swiper">
					<div class="swiper-wrapper">
						
											
						<div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image2.jpg" alt="">
								</a>
							</figure>
						</div>
                        <div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image3.jpg" alt="">
								</a>
							</figure>
						</div>
                        <div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image2.jpg" alt="">
								</a>
							</figure>
						</div>
                        <div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image3.jpg" alt="">
								</a>
							</figure>
						</div>
					</div>
					<div class="pagination"></div>
				</div>
			</section>
<?php else:?>
			<!-- Banner Novedades Mobile -->
			<section class="banner-principal-mobile">
				<div class="swiper-container swiper">
					<div class="swiper-wrapper">
										<div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image1.jpg" alt="">
								</a>
							</figure>
						</div>
                        <div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image3.jpg" alt="">
								</a>
							</figure>
						</div>
                        <div class="swiper-slide">
							<figure>
								<a href="<?php echo site_url('/'); ?>">
									<img src="<?php echo get_stylesheet_directory_uri() . '/' ?>images/image2.jpg" alt="">
								</a>
							</figure>
						</div>
					</div>
					<div class="pagination"></div>
				</div>
			</section>
		</div>
	</section>

    <?php
    endif;
}
add_shortcode( 'cinemax', 'cinemax_shortcode' );

