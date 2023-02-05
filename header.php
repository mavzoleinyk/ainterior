<!DOCTYPE html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
		<?php if( is_page(9) ) { ?>
			<div class="main">
			<div class="container flex">
		<?php } elseif( is_page(18) ) {?>
			<section class="main main_portfolio">
			<div class="container flex">
		<?php } ?>
		<?php
			if( is_page(9) || is_page(18) ){
				get_template_part('parts/header', 'home');
			}else{
				get_template_part('parts/header', 'all');
			}
		?>
			<?php //if( is_page(9) || is_page(18) ) : get_template_part('parts/header', 'home'); endif;?>
			<?php //if( !is_page(9) || !is_page(18) ) : get_template_part('parts/header', 'all'); endif;?>