<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__top">
                <div class="footer__brand">
                    <div class="footer__logo"><img src="<?php echo get_template_directory_uri();?> /assets/images/logo.svg" alt=""></div>
                    <p class="footer__desc">We’re a team of strategic creator and digital innovator, united focus in our pursuit of mastery and joyful.</p>
                </div>
                <div class="footer__nav">
                    <div class="nav__pages">
                        <h5 class="nav__title">Nav Pages</h5>
                        <div class="nav__links nav__links-pages">
                            <div class="nav__link nav__link-footer nav__links-pages"><a href="#">Home</a></div>
                            <div class="nav__link nav__link-footer nav__links-pages"><a href="#">About</a></div>
                            <div class="nav__link nav__link-footer nav__links-pages"><a href="#">Services</a></div>
                            <div class="nav__link nav__link-footer nav__links-pages"><a href="#">Contact us</a></div>
                        </div>
                    </div>
                    <div class="nav__utilites">
                        <h5 class="nav__title">Nav Utilites</h5>
                        <div class="nav__links nav__links-utilites">
                            <div class="nav__link nav__link-footer nav__links-utilites"><a href="#">Style Guide </a></div>
                            <div class="nav__link nav__link-footer nav__links-utilites"><a href="#">Instruction</a></div>
                            <div class="nav__link nav__link-footer nav__links-utilites"><a href="#">License</a></div>
                            <div class="nav__link nav__link-footer nav__links-utilites"><a href="#">Changelog</a></div>
                        </div>
                    </div>
                </div>
                <div class="footer__subscribe">
                    <h5 class="subscribe__title">Subscribe</h5>
                    <form class="subscribe__form" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn">Subscribe</button>
                    </form> 
                </div>
            </div>
            <hr/>
            <div class="footer__bottom">
                <div class="footer__copyright">
                    <h5 class="footer__title">Copyright by</h5>
                    <p>Designed by Iconstica.com</p>
                </div>
                <div class="footer__contact">
                    <h5 class="footer__title">Contact Us</h5>
                    <p>+0 12 457 4578</p>
                </div>
                <div class="footer__address">
                    <h5 class="footer__title">Address</h5>
                    <p>119 Tanglewood Lane Gulfport, MS 39503</p>
                </div>
                <div class="footer__social">
                    <div class="social__links">
                        <a href="#" class="social__link"><img src="<?php echo get_template_directory_uri();?> /assets/images/socials/facebook.svg" alt=""></a>
                        <a href="#" class="social__link"><img src="<?php echo get_template_directory_uri();?> /assets/images/socials/instagram.svg" alt=""></a>
                        <a href="#" class="social__link"><img src="<?php echo get_template_directory_uri();?> /assets/images/socials/linkedin.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>