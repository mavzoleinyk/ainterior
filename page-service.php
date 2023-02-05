<?php
/*
Template Name: Шаблон Услуги
*/
get_header();
?>
	<section class="services">
		<div class="container">
			<div class="services__items flex">
				<div class="service">
					<div class="service__price">
						150 zł / m2
					</div>
					<div class="service__title">
						PROJEKT
					</div>
					<div class="service__name">
						KOMPLEKSOWY
					</div>
					<ul class="service__list">
						<li>
							Układ funkcjonalny
						</li>
						<li>
							Design-concept
						</li>
						<li>
							Wizualizacje 3D
						</li>
						<li>
							Dobór materiałów
						</li>
						<li>
							Rysunki budowlane
						</li>
					</ul>
					<div class="service__btn flex">
						<a href="/zamowienie/">ZAMÓWICZ</a>
					</div>
				</div>
				<div class="service">
					<div class="service__price">
						250 zł / m2
					</div>
					<div class="service__title">
						PROJEKT
					</div>
					<div class="service__name">
						NADZÓR AUTORSKI
					</div>
					<ul class="service__list">
						<li>
							Układ funkcjonalny
						</li>
						<li>
							Design-concept
						</li>
						<li>
							Wizualizacje 3D
						</li>
						<li>
							Dobór materiałów
						</li>
						<li>
							Rysunki budowlane
						</li>
						<li class="orange">
							Nadzór autorski 
						</li>
					</ul>
					<div class="service__btn flex">
						<a href="/zamowienie/">ZAMÓWICZ</a>
					</div>
				</div>
				<div class="service">
					<div class="service__price">
						400 zł / m2
					</div>
					<div class="service__title">
						PROJEKT
					</div>
					<div class="service__name">
						PREMIUM
					</div>
					<ul class="service__list">
						<li>
							Układ funkcjonalny
						</li>
						<li>
							Design-concept
						</li>
						<li>
							Wizualizacje 3D
						</li>
						<li>
							Dobór materiałów
						</li>
						<li>
							Rysunki budowlane
						</li>
						<li class="orange">
							Nadzór autorski 
						</li>
						<li class="orange">
							Zarządzanie budową 
						</li>
						<li class="orange">
							Organizacja dostaw mebli i materiałów
						</li>
						<li class="orange">
							Dekoracja końcowa 
						</li>
					</ul>
					<div class="service__btn flex">
						<a href="/zamowienie/">ZAMÓWICZ</a>
					</div>
				</div>
			</div>

			<div class="services-compound">
				<?php the_content(); ?>
				<ul>
					<li>
						pomiarowy rysunek obiektu
					</li>
					<li>
						plan demontażu ścian
					</li>
					<li>
						plan montażu ścian
					</li>
					<li>
						plan podłóg
					</li>
					<li>
						plan sufitu ze wskazaniem rodzaju użytego materiału
					</li>
					<li>
						plan usytuowanie oświetleniowych przyrządów
					</li>
					<li>
						plan przywiązywania wyłączników
					</li>
					<li>
						zestawienie wykończenia pomieszczeń
					</li>
					<li>
						plan elektrycy i elektrowyprowadzeń z przywiązywaniami
					</li>
					<li>
						plan rozmieszczania mebli i sprzętu
					</li>
					<li>
						plan rozmieszczenia technicznego sanitarnego sprzętu
					</li>
					<li>
						3d wizualizacji pomieszczeni
					</li>
					<li>
						widoki i przekroje ścian z kompletnym wyposażeniem
					</li>
					<li>
						rysunki wykonawcze mebli na wymiar, z wymiarami
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="steps">
		<div class="container">
			<h2 class="steps__title">
				Algorytm współpracy i opłat
			</h2>
			<div class="steps__items flex">
				<div class="step">
					<div class="step__number">1</div>
					<p class="step__description">
						Podpisanie umowy. Płatność w wysokości 30%. 
					</p>
				</div>
				<div class="step">
					<div class="step__number">2</div>
					<p class="step__description">
						Projektowanie układów mieszkania. Maksymalna ilość. 
					</p>
				</div>
				<div class="step">
					<div class="step__number">3</div>
					<p class="step__description">
						Opracowanie wizualizacji 3D Płatność w wysokości 40%. 
					</p>
				</div>
				<div class="step">
					<div class="step__number">4</div>
					<p class="step__description">
						Przygotowanie dokumentacji roboczej.
					</p>
				</div>
				<div class="step">
					<div class="step__number">5</div>
					<p class="step__description">
						Wydawanie klientowi dokumentacji roboczej. Płatność w wysokości 30%.  
					</p>
				</div>
			</div>

			<div class="steps__signature">
				Jest możliwość wziąć na raty wszystkie rodzaje usług RRSO 0%
			</div>
		</div>
	</section>
<?php

    get_footer();

?>