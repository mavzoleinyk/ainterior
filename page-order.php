<?php
/*
Template Name: Шаблон заказ
*/
get_header();
?>
	<section class="content">
		<div class="container">
			<div class="block">
				<?php echo do_shortcode( '[contact-form-7 id="29" title="Контактная форма 1"]' ); ?>
			</div>
		</div>
	</section>

	<section class="socials">
		<div class="container">
			<ul class="socials__links flex">
				<li>
					<a href="https://www.behance.net/admiralinterior" target="_blank">behance</a>
				</li>
				<li>
					<a href="https://www.instagram.com/admiralinterior/" target="_blank">instagram</a>
				</li>
				<li>
					<a href="https://www.facebook.com/profile.php?id=100088867871793&is_tour_dismissed=true" target="_blank">facebook</a>
				</li>
			</ul>
		</div>
	</section>
<?php

    get_footer();

?>