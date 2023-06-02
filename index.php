<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>

<!-- Contenu de la page -->
<section class="container d-flex align-items-center justify-content-center my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="bg-transparent p-3 transparent-bg">
                <h1 class="display-4 text-white title">Taste the authentic Saudi cuisine</h1>
                <p class="lead text-white">Among the best Saudi chefs in the world, serving you something beyond flavor.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/image/photo.png" alt="Image de droite" class="img-fluid">
        </div>
    </div>
</section>

<!-- Autres sections et contenu de la page -->

<section class="container-fluid full-screen-image position-relative">
    <img src="<?php echo get_template_directory_uri(); ?>/image/photo.png" alt="Full Screen Image" class="img-fluid w-100 mw-100">
    <div class="image-content position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="display-4 text-white">A unique menu that reflects the true essence of Saudi cuisine</h1>
        <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;">Our Menu</a>
    </div>
</section>

<?php
    // Boucle WordPress pour afficher le contenu
    while (have_posts()) {
        the_post();
        the_content();
    }
?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
