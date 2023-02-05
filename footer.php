
	<?php if( is_page(9) ) { ?>
		</div>
	</div>
	<?php }?>
	<?php if( is_page(18) ) { ?>
		</div>
	</section>
	<?php }?>
	<?php wp_footer(); ?>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			const formSlider = new Swiper('.form__slider', {
			  slidesPerView: 1,
			  spaceBetween: 40,
			  allowTouchMove: false,
			  effect: 'fade',
			  speed: 500,
			  fadeEffect: {
			    crossFade: true
			  },
			  navigation: {
			    nextEl: '.form__next',
			  },
			  pagination: {
			    el: '.form__dots',
			    type: 'bullets',
			    clickable: true
			  }
			});
		});
	</script>
	<?php if( is_page(18) ) : get_template_part('parts/slider', 'script'); endif;?>
</body>
</html>