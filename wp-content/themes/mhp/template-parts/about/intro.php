<!-- ##### About Content Wrapper Start ##### -->
<section class="about-content-wrapper section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>Chúng tôi yêu những ngôi nhà hoàn hảo</h2>
                    <p>Xây dựng bằng cả con tim</p>
                </div>
                <div class="about-content">
                    <img class="wow fadeInUp" data-wow-delay="350ms" src="<?php echo get_template_directory_uri(); ?>/img/bg-img/about.jpg" alt="">
                    <p class="wow fadeInUp" data-wow-delay="450ms">
                        Mô tả về chúng tôi.
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>Công trình</h2>
                    <p>Công trình đã hoàn thành</p>
                </div>

                <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                    <!-- Single Slide -->
                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="<?php echo get_template_directory_uri() . "/img/bg-img/feature" . $i . ".jpg"; ?>" alt="">

                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa <?php echo $i; ?></h5>
                                <p class="location"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/location.png" alt=""><?php echo "Địa chỉ " . $i; ?></p>
                                <p><?php echo "Miêu tả " . $i; ?></p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Content Wrapper End ##### -->