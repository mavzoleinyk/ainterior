<header>
    <div class="header__content flex">
        <a href="/" class="header__logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="">
        </a>
        <div class="header__block flex">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => 'ul',
                        'menu_class'=> 'header__menu flex'
                    )
                );
            ?>
            <a href="tel:+48536089652" class="header__tel">+48 536 089 652</a>
            <ul class="header__languages flex">
                <li>
                    <a href="#" class="active">pl</a>
                </li>
                <li>
                    <a href="#">ru</a>
                </li>
            </ul>
            <ul class="header__socials flex">
                <li>
                    <a href="#">behance</a>
                </li>
                <li>
                    <a href="#">instagram</a>
                </li>
                <li>
                    <a href="#">facebook</a>
                </li>
            </ul>
            <div class="header__close"></div>
        </div>
        <div class="navbar-tog">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</header>