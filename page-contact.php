<?php
/* Template Name: Contact Page */
get_header(); ?>
<?php 
  $email = get_field('email'); 
  $phone = get_field('phone'); 
  $address = get_field('address'); 
?>

<main class="contact-page">
  <div class="container">
    <div class="contact-page__inner">
      <section class="contact__form-wrapper">
        <div class="contact__info">
          <h1><?= esc_html(get_field('contact_title')) ?></h1>
          <p><?= esc_html(get_field('contact_description')) ?></p>
          <span></span>
          <ul class="contact__details">
            <li>
              <div class="contact-details__img"><img src="<?php echo get_template_directory_uri();?>/assets/images/contact/email.svg" alt="E-mail"></div>
              <?php if ($email): ?>
                <div class="contact-details__content">
                  <p>Our Email: </p>
                  <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                </div>
              <?php endif; ?>
            </li>
            <li>
              <div class="contact-details__img"><img src="<?php echo get_template_directory_uri();?>/assets/images/contact/phone.svg" alt="Phone"></div>
              <?php if ($phone): ?>
                <div class="contact-details__content">
                  <p>Call us: </p>
                  <a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                </div>
              <?php endif; ?>
            </li>
            <li>
              <div class="contact-details__img"><img src="<?php echo get_template_directory_uri();?>/assets/images/contact/pin.svg" alt="Pin"></div>
              <?php if ($address): ?>
                <div class="contact-details__content">
                  <p>Find us: </p>
                  <a href='#'><?php echo esc_html($address); ?></a>
                </div>
              <?php endif; ?>
            </li>
          </ul>
          <span></span>
          <ul class="contact__socials">
            <li class="contact__social">
              <a href="#"> <img src="<?php echo get_template_directory_uri();?> /assets/images/socials/instagram.svg" alt="instagram"></a>
            </li>
            <li class="contact__social">
              <a href="#"> <img src="<?php echo get_template_directory_uri();?> /assets/images/socials/facebook.svg" alt="facebook"></a>
            </li>
            <li class="contact__social">
              <a href="#"> <img src="<?php echo get_template_directory_uri();?> /assets/images/socials/linkedin.svg" alt="linkedin"></a>
            </li>
          </ul>
        </div>

        <div class="contact__form">
          <form class="form__contact" method="post">
            
            <div class="contact-form__firstName">
              <label for="firstName" class="contact__form__label">First Name</label>
              <input type="text" name="firstName" required>
            </div>
            <div class="contact-form__lastName">
              <label for="lastName" class="contact__form__label">Last Name</label>
              <input type="text" name="lastName" required>
            </div>
            <div class="contact-form__email">
              <label for="email" class="contact__form__label">Email</label>
              <input type="email" name="email" required>
            </div>
            <div class="contact-form__phone">
              <label for="phone" class="contact__form__label">Phone</label>
              <input type="tel" name="phone" >
            </div>
            <div class="contact-form__message">
              <label for="message" class="contact__form__label">Message</label>
              <input type="text" name="message" required></input>
            </div>
            <button class="contact-form__btn" type="submit">Submit Now</button>
          </form>

          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $to = get_field('email');
              $subject = 'Message from Contact Form';
              $body = "FirstName: " . sanitize_text_field($_POST['firstName']) . "\n";
              $body = "LastName: " . sanitize_text_field($_POST['lastName']) . "\n";
              $body .= "Email: " . sanitize_email($_POST['email']) . "\n";
              $body .= "Message:\n" . sanitize_textarea_field($_POST['message']);
              $headers = ['Content-Type: text/plain; charset=UTF-8'];

              wp_mail($to, $subject, $body, $headers);
              echo '<p class="success">Message sent successfully!</p>';
          }
          ?>
        </div>
      </section>

      <section class="contact__map">
        <?= get_field('map_iframe'); ?>
      </section>
    </div> 
  </div>
</main>

<?php get_footer(); ?>
