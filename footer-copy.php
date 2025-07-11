<!--footer start-->
<div class="container-fluid footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-dark border-bottom border-dark"> লিগ্যাল </h5>
                <div class="productMenu">
                    <ul class="sub-menu mb-0">
                        <?php wp_nav_menu(array(
                            'theme_location'    =>  'bottomMenu',
                            'menu_class'        => 'nav navbar-nav',
                            'menu_id'           => 'faroqueIdForBottom',
                            'container'         =>  '',
                            'add_li_class'      =>  'nav-item mb-0 text-white mb-0',
                        )); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-dark border-bottom border-dark"> Contact </h5>


                <h6> Cell: <a class="text-dark" href="tel:01915-344418"> 01915-344418 </a> </h6>
                <h6> E-mail: <a class="text-dark" href="mailto:faroque.computer@gmail.com">faroque.computer@gmail.com</a> | <a class="text-dark" href="mailto:info@webnewsdesign.com"> info@webnewsdesign.com </a></h6>
                <h6> Address : 89/A (3rd floor), Anarkoli Super Market (behind the Mouchak market), 77/1 Shiddheswari Ln, Dhaka 1217 </h6>



            </div>
            <div class="col-md-4">
                <!--facebook like box code-->
                <div class="fb-page" data-href="https://www.facebook.com/webnewsdesign" data-width="350px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/webnewsdesign"><a href="https://www.facebook.com/webnewsdesign">webnewsdesign.com</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end footer-->


<?php wp_footer(); ?>

</body>

</html>