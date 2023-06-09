<?php
/*
Template Name: About Template
*/
?>

<?php
function get_stylesheet_uri() {
    return get_template_directory_uri() . '/css/bootstrap.min.css';
}

function get_logo_image_uri() {
    return get_template_directory_uri() . '/image/maiz2.png';
}

function get_home_link() {
    return get_permalink(get_page_by_path('index'));
}

function get_about_link() {
    return get_permalink(get_page_by_path('about'));
}

function get_menu_link() {
    return get_permalink(get_page_by_path('menu'));
}

function get_footer() {
    // Include your footer code here
}
?>

<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>design-restaurant</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aboutStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #CC9D2F;">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
        <div class="container">
            <img src="<?php echo get_logo_image_uri(); ?>" alt="Logo Maiz" width="100" height="100">
            
            <div class="text-center">
                <nav class="nav justify-content-center">
                    <a href="<?php echo get_home_link(); ?>" class="nav-link" style="color: #5B0017 ;">Home</a>
                    <a href="<?php echo get_about_link(); ?>" class="nav-link" style="color: #5B0017 ;">About</a>
                    <a href="<?php echo get_menu_link(); ?>" class="nav-link" style="color: #5B0017 ;">Menu</a>
                </nav>
            </div>

            <div class="text-right">
                <div class="p-2 border" style="background-color: #5B0017;">
                    <span class="font-weight-bold" style="color: #CC9D2F;">Book Now</span>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 style="color: #5B0017;">Our Story</h1>
                    <p style="color: #5B0017;">We’re an absolute leader in the Saudi cuisine-themed restaurants.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.png" alt="Image 1" width="200" height="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/picture2.png" alt="Image 2" width="200" height="200">
                </div>
                <div class="col-lg-6">
                    <h2 style="color: #FFFFFF;">One of the best restaurants in Saudi Arabia</h2>
                    <p style="color: #5B0017;">
                        Your one direction to high-quality Saudi feasts,
                        since 1998 we served in Saudi Arabia.
                    </p>
                    <p style="color: #5B0017;">
                        Locals who are proud of the country and want to
                        introduce it to visitors from around the world.
                    </p>
                    <p style="color: #5B0017;">
                        We are perfectly positioned to provide our guests
                        with an extraordinary health experience unlike any
                        they’ve ever tasted. We can confidently claim that
                        our menu is unlike anything else offered in the industry.
                    </p>
                    <p style="color: #5B0017;">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vestibulum finibus mauris nec
                        tincidunt varius. Ut sagittis, lorem at bibendum
                        ornare, mauris neque venenatis justo, ut gravidami neque eu lorem.
                    </p>
                    <p style="color: #5B0017;">
                        Vestibulum auctor leo sit amet vulputate mollis. Curabitur ac lorem felis. Morbiullamcorper maximus lorem.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-color-block">
            <div class="container py-4">
                <h3 style="color: #FFFFFF;"></h3>
                <p style="color: #CC9D2F;"></p>
            </div>
        </div>

        <section class="container my-5 bg-color-block" style="background-color: #5B0017;">
            <div class="row d-flex align-items-stretch h-100">
                <div class="col-lg-6">
                    <div class="border p-3 h-50 border-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <h4>Date 1</h4>
                                        <p>Description de l'événement 1</p>
                                    </div>
                                    <div class="text-center">
                                        <h4>Date 2</h4>
                                        <p>Description de l'événement 2</p>
                                    </div>
                                    <div class="text-center">
                                        <h4>Date 3</h4>
                                        <p>Description de l'événement 3</p>
                                    </div>
                                    <div class="text-center">
                                        <h4>Date 4</h4>
                                        <p>Description de l'événement 4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-block d-flex align-items-center justify-content-center py-5" style="background-color: #243054">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center py-5" style="background-color: #5B0017; margin: 50px;">
                            <div class="border-0 p-3">
                                <h1 class="text-cc9d2f">Working hours</h1>
                                <p class="text-white">
                                    <br>
                                    Sunday to Saturday 09:00 AM to 11:00 PM<br>
                                    Friday<br>
                                    02:00 PM to 1:00 AM<br>
                                </p>
                                <h2 class="text-cc9d2f">Localisation</h2>
                                <p class="text-white">
                                    Street 127, Jeddah, Saudi Arabia<br>
                                    546544<br>
                                </p>
                                <h3 class="text-cc9d2f">Contact us</h3>
                                <p class="text-white">+123456789<br>service@maizresturant.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center py-5" style="margin: 10px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/carte.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>
    </section>
</body>
</html>
