<?php
/*
Template Name: Index Template
*/
?>
<?php get_header(); ?>

<section class="container">
  <div class="row">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5 // Adjust the number of posts to display here
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        // Display post content here
        ?>
        <div class="col-md-4">
          <h2><?php the_title(); ?></h2>
          <div class="post-content">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <?php
      }
      wp_reset_postdata();
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>
