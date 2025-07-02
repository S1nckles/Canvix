<?php wp_head(); ?>

<?php
$is_home = is_front_page();
?>

<header class="header <?= $is_home ? 'header-home' : 'header-main'; ?>">
    <div class="container">
        <div class="header__inner">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
            </div>
            <nav class="nav">
                <div class="nav__links">
                    <div class="nav__link"><a href="#">Home</a></div>
                    <div class="nav__link"><a href="#">About</a></div>
                    <div class="nav__link"><a href="#">Contact us</a></div>
                </div>
            </nav>
            <button class="btn">Get in touch</button>
        </div>
    </div>
</header>