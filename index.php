<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<section class="container d-flex align-items-center justify-content-center my-5">
  <div class="row">
    <div class="col-md-12">
      <?php
        //   pour Afficher le contenu de la page
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            the_content();
          }
        }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
