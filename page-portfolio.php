<?php
/*
Template Name: Шаблон Портфолио
*/
get_header();
?>
			<div class="portfolio">
				<div class="portfolio__link flex">
					<a href="#">+ Zobacz wszyskie</a>
				</div>
				<div class="portfolio__slider">
					<div class="swiper-wrapper">
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
						<a href="#" class="swiper-slide portfolio__slide">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item.png" class="portfolio__slide-img" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio-item-click.jpg" class="portfolio__slide-img_click" alt="">
							<span class="portfolio__slide-title">Budynek w Łodżi</span>
							<span class="portfolio__slide-description">Budynek w Łodżi</span>
						</a>
					</div>
				</div>
				<div class="portfolio__arrows flex">
					<div class="portfolio__arrow portfolio__arrow_prev"></div>
					<div class="portfolio__arrow portfolio__arrow_next"></div>
				</div>
				<div class="portfolio__scrollbar"></div>
			</div>
			<?php if( is_page(18) ) : get_template_part('parts/section', 'soc'); endif;?>
<?php

get_footer();

?>