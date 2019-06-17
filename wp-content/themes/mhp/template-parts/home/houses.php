<!-- ##### Featured Properties Area Start ##### -->
<section class="featured-properties-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>Công trình</h2>
                    <p>Các công trình tiêu biểu.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            for ($i = 1; $i <= 6; $i++) {
                ?>
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="<?php echo get_template_directory_uri() . "/img/bg-img/feature" . $i . ".jpg"; ?>" alt="">


                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Villa ở quận <?php echo $i; ?></h5>
                            <p class="location"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/location.png" alt=""><?php echo $i; ?> Cống Quỳnh Q<?php echo $i; ?>, HCM</p>
                            <p><?php echo "Khách hàng " . $i; ?> Biệt thự bác ba xây dựng 1 trệt 3 lầu.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>

                                <i class="fa fa-bed custom-icon"></i>
                                <span>2</span>

                                <div class="space">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/space.png" alt="">
                                    <span>120 m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- ##### Featured Properties Area End ##### -->