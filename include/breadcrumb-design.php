<!--*** Contact us Section-1 Start *** -->
<div class="container-fluid vig-bg-photo position-relative px-0 mb-md-5 mb-3">
    <div class="vig-bg-color position-absolute d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <p class="text-white display-4 font-weight-bold text-center mb-0 font-size-for-mobile">
                        <?php if (is_page() && !is_front_page()) {
                            echo get_the_title();
                        } ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*** Contact us Section-1 End *** -->