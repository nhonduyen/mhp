<!-- ##### Testimonials Area Start ##### -->
<section class="south-testimonials-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                    <h2>Khách hàng nhận xét</h2>
                    <p>Niềm tin từ khách hàng.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
                    <?php
                    $comment_cnt = 3;
                    while ($comment_cnt > 0) {
                        ?>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Căn nhà hoàn hảo <?php echo $comment_cnt; ?></h5>
                            <p>Rất tuyệt vời.</p>

                            <div class="testimonial-author-info">
                                <img src="<?php echo get_template_directory_uri() . "/img/blog-img/c-" . $comment_cnt . ".jpg"; ?>" alt="chu dau tu">
                                <p>Khách hàng <?php echo $comment_cnt; ?>, <span>Chủ đầu tư</span></p>
                            </div>
                        </div>
                        <?php $comment_cnt--;
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>
