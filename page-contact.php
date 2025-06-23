<?php
/* Template Name: Contact Page */
get_header(); ?>

<main class="contact-page">
  <div class="container">

    <section class="contact-info">
      <h1><?= esc_html(get_field('contact_title')) ?></h1>
      <p><?= esc_html(get_field('contact_description')) ?></p>
      <ul>
        <li>Email: <?= esc_html(get_field('email')) ?></li>
        <li>Phone: <?= esc_html(get_field('phone')) ?></li>
        <li>Address: <?= esc_html(get_field('address')) ?></li>
      </ul>
    </section>

    <section class="contact-form">
      <h2>Send us a message</h2>
      <form method="post">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <textarea name="message" placeholder="Your message" required></textarea>
        <button type="submit">Send</button>
      </form>

      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $to = get_field('email');
          $subject = 'Message from Contact Form';
          $body = "Name: " . sanitize_text_field($_POST['name']) . "\n";
          $body .= "Email: " . sanitize_email($_POST['email']) . "\n";
          $body .= "Message:\n" . sanitize_textarea_field($_POST['message']);
          $headers = ['Content-Type: text/plain; charset=UTF-8'];

          wp_mail($to, $subject, $body, $headers);
          echo '<p class="success">Message sent successfully!</p>';
      }
      ?>
    </section>

    <section class="contact-map">
      <?= get_field('map_iframe'); ?>
    </section>

  </div>
</main>

<?php get_footer(); ?>
