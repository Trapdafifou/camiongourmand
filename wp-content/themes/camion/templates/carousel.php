<?php
/**
 * Carousel
 **/
$images = get_field('images_carousel');
if ($images && count($images) > 0):
    $indexCarousel = 0; ?>
    <section class="section section-carousel">
        <div class="carousel">
            <div class="carousel__container">
                <?php foreach ($images as $image) :
                    $classImg = '';
                    if ($indexCarousel == 0) {
                        $classImg = " carousel__containerImg-active";
                    } else if (count($images) > 1 && $indexCarousel == 1) {
                        $classImg = " carousel__containerImg-next";
                    }
                    ?>
                    <div class="carousel__containerImg<?php echo $classImg; ?>">
                        <img <?php if($image['width']<=$image['height']) echo 'class="vert"'?> src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>">
                    </div>
                    <?php
                    $indexCarousel++;
                endforeach; ?>
            </div>
            <div class="carousel__nav">
                <div class="carousel__navContainer">
                    <a class="carousel__navArrow carousel__navArrow-left icon-arrow" href="#"></a>
                    <a class="carousel__navArrow carousel__navArrow-right icon-arrow" href="#"></a>
                </div>
            </div>
        </div>
    </section>
<?php endif;