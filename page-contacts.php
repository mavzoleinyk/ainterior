<?php
/*
Template Name: Шаблон Контакты
*/
get_header();
?>
	<section class="content">
		<div class="container">
			<div class="block contacts flex">
				<div class="block__left">
					<h1 class="block__title">
						Cześć
					</h1>
					<form action="#" class="form">
						<div class="form__slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide form__slide flex">
									<textarea placeholder="Wpisz swoją wiadomosć tutaj..." class="form__textarea"></textarea>
									<button class="form__next">dalej</button>
								</div>
								<div class="swiper-slide form__slide flex">
									<input type="text" placeholder="Wpisz swój e-mail tutaj..." class="form__input">
									<button type="submit" class="form__btn">wysłać</button>
								</div>
							</div>
						</div>
						<div class="form__dots flex"></div>
					</form>
				</div>
				<div class="block__right">
					<div class="contacts__title">
						Nazwa firmy i adres do korespondencji
					</div>
					<div class="contacts__info">
						Volantes Sp z o.o.
						<br>
						NIP: 725 230 67 13
						<br>
						Aleja Tadeusza Kościuszki 80/82 lok.301
						<br>
						Łódż 90-437
					</div>
					<div class="contacts__title">
						Kontakty
					</div>
					<div class="contacts__info">
						+48 536 089 652
						<br>
						admiralinterior.info@gmail.com
					</div>
				</div>
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