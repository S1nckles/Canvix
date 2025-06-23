<?php
/* Template Name: About Page */
get_header(); ?>

<main class="about-page">
  <div class="container">

    <?php
    $about = get_field('about_page', get_the_ID());
    if ($about):
    ?>

      <section class="about-intro">
        <h1><?= esc_html($about['title']) ?></h1>
        <p><?= esc_html($about['description']) ?></p>
      </section>

      <section class="about-facts">
        <ul>
          <li><strong><?= esc_html($about['years_experience']) ?></strong> years of experience</li>
          <li><strong><?= esc_html($about['happy_clients']) ?></strong> happy clients</li>
          <li><strong><?= esc_html($about['projects_completed']) ?></strong> completed projects</li>
        </ul>
      </section>

      <section class="about-team">
        <h2><?= esc_html($about['team_title']) ?></h2>
        <div class="team-members">
          <?php for ($i = 1; $i <= 3; $i++): 
            $member = $about["member_$i"];
            if ($member): ?>
              <div class="team-member">
                <img src="<?= esc_url($member['photo']['url']) ?>" alt="<?= esc_attr($member['name']) ?>">
                <h3><?= esc_html($member['name']) ?></h3>
                <p><?= esc_html($member['role']) ?></p>
              </div>
          <?php endif; endfor; ?>
        </div>
      </section>

    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
