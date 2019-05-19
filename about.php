<?php
require_once './model/_config.php';
$__PAGE_NAME__ = 'about';
require_once './model/content_model.php';
$contentModule = new ContentModel();
$data = $contentModule->getPageData();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<section class = 'about__banner__section'>
    <div class="row margin-0">
        <div class="col-md-12">
            <img src="./assets/backgrounds/about_team.png" class = 'about__banner__section--image' alt="">

            <img src="./assets/img/pamar_team.png" class = 'about__banner__section--title' alt="">
        </div>
    </div>
</section>

<div class="row m-t-30 m-b-30 m-l-0 m-r-0" data-aos="fade-up" data-aos-id="mosaic" >
		<div class="col-md-5">
			<p class="blue-header"><?= $contentModule->getTranslate('our_team') ?></p>
		</div>
	</div>

<div class="row margin-0" data-aos="fade-up" data-aos-id="mosaic_desc" >
    <div class="col-md-5 col-md-offset-1">
        <p class = 'desc'> <?= $contentModule->getTranslate('left') ?> </p>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <p  class = 'desc'> <?= $contentModule->getTranslate('right') ?> </p>
    </div>
    <div class ='col-md-offset-1'></div>
</div>

<div class="row margin-0">
    <div class="col-md-12 end-md">
        <img src="./assets/backgrounds/pattern.png" class = 'pattern' alt="">
    </div>
</div>

<!-- <div class="row" data-aos="fade-up" data-aos-id="mosaic" >
    <div class="col-md-10 col-md-offset-1 about__gallery"> -->
        <!-- <a href="./assets/backgrounds/mosaic_1.png" class="glightboxTest">
			<img src="./assets/backgrounds/mosaic_1.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a>
        <a href="./assets/backgrounds/mosaic_2.png" class="glightboxTest">
			<img src="./assets/backgrounds/mosaic_2.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a>
        <a href="./assets/backgrounds/mosaic_3.png" class="glightboxTest">
			<img src="./assets/backgrounds/mosaic_3.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a> -->

        <?php if( $data['gallery'] !== null ): ?>
            <?php $chunked = array_chunk( $data['gallery']['get_images'], 3 ); ?>
            <?php foreach( $chunked as $chunk ): ?>
                <div class="row" data-aos="fade-up" data-aos-id="mosaic" >
                    <div class="col-md-10 col-md-offset-1 about__gallery">
                        <?php foreach( $chunk as $photo ): ?>
                            <a href="<?=$photo['get_file']['path']?>" class="glightboxTest">
                                <img src="<?=$photo['get_file']['path']?>" class = 'gallery-image' alt="<?=$photo['get_file']['name']?>">
                                <div class="blue-layer"></div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-offset-1"></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>        
    </div>
    <!-- <div class="col-md-offset-1"></div>
</div> -->


<?php require_once './layout/_footer.php';?>