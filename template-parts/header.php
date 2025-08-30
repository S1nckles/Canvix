<?php wp_head(); ?>

<body <?php body_class(); ?>>

<?php
$is_home = is_front_page();
?>

<header class="header <?= $is_home ? 'header-home' : 'header-main'; ?>">
    <div class="container">
        <div class="header__inner">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img class="logo--white" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
                <img class="logo--black" src="<?php echo get_template_directory_uri(); ?>/assets/images/black-logo.svg" alt="logo">
            </a>

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