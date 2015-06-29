<!-- Half Page Image Background Carousel Header -->

<header id="myCarousel" class="carousel slide">
    <?php
    $dir_slide_background_image = './medias/images/photos';
    $slide_background_image_s = $dir_slide_background_image . '/*.{JPG,jpg}';
    $slide_background_image = glob($slide_background_image_s, GLOB_BRACE);
    ?>
    <!-- Indicators -->
    <ol class="carousel-indicators">

        <?php
        foreach ($slide_background_image as $key => $backgound_image) {
            if ($key === 0) {
                $class_slide_image = "class='active'";
            }
            ?>
<!--            <li data-target="#myCarousel" data-slide-to="<?= $key ?>" <?= $class_slide_image ?>></li>            -->
            <?php }
        ?>
    </ol>
    <!--/.Indicators -->
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">

        <?php
        foreach ($slide_background_image as $key => $backgound_image) {
            if ($key === 0) {
                $class_slide_image = 'item active';
            } else {
                $class_slide_image = 'item';
            }
            ?>
            <div class="<?= $class_slide_image ?>">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $backgound_image ?>');"></div>
                <div class="carousel-caption">
                </div>
            </div>    
            <?php
        }
        ?>
    </div>
    <!--/.Wrapper for Slides -->
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</header>
<!--/.Controls -->
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
</script>