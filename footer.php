<div class="container-fluid bg-light">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 col-12">

                <div class="mb-md-4 mb-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/main-logo.png" alt="<?php bloginfo('name'); ?>" style=width:200px>
                    </a>
                </div>

                <div class="mt-3 address-link-hover-text-decoration-underline">
                    <a href="https://maps.app.goo.gl/d5iYeJ1SG3cPWbxD8" target="_blank" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt pr-2"></i>
                            <p> 89/A (3rd floor), Anarkoli Super Market (behind the Mouchak market), 77/1 Shiddheswari Ln, Dhaka 1217 </p>
                        </div>
                    </a>
                    <a href="tel:+8801915344418" class="text-decoration-none d-block text-dark">
                        <div class="d-flex">
                            <i class="bi bi-phone-vibrate pr-2"></i>
                            <p> 01915344418 </p>
                        </div>

                    </a>
                    <a href="mailto:faroque.computer@gmail.com" class="text-decoration-none d-block text-dark">
                        <div class="d-flex">
                            <i class="bi bi-envelope-at pr-2"></i>
                            <p> faroque.computer@gmail.com </p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-md-2 col-12 mt-md-0 mt-4">
                <h5 class="mb-md-3 mb-2 font-weight-bold">Useful Links</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location'    =>  'useful-link-menu',
                    'menu_class'        =>  'navbar-nav navbar-hover-text-decoration-underline',
                    'container'         =>  false,
                    'fallback_cb'       =>  false
                ));
                ?>
            </div>

            <!-- Legal Information start -->
            <div class="col-md-2 col-12 footer-company mt-md-0 mt-4">
                <h5 class="mb-md-3 mb-2 font-weight-bold">Legal Information</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'legal-menu',
                    'menu_class'     => 'navbar-nav navbar-hover-text-decoration-underline',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
            <!-- Legal Information end -->

            <!-- Get In Touch start -->
            <div class="col-md-2 col-12 mt-md-0 mt-4">
                <h5 class="mb-md-3 mb-2 font-weight-bold">Get In Touch</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location'    =>  'get-in-touch',
                    'menu_class'        =>  'navbar-nav navbar-hover-text-decoration-underline',
                    'container'         =>  false,
                    'fallback_cb'       =>  false,
                ));
                ?>
            </div>
            <!-- Get In Touch end -->
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>