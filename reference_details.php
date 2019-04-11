<?php
require_once './model/_config.php';
$__PAGE_NAME__ = 'references_details';

$slug = '';
if( isset($_GET['article']) ){
    $slug = $_GET['article'];
}else{
    header('Location: references.php');
}

require_once './model/content_model.php';
$contentModule = new ContentModel( $slug );
$data = $contentModule->getPageData();

?>

<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<section class = 'about__banner__section'>
    <div class="row margin-0">
        <div class="col-md-12">
            <img src="<?=$data['content']['get_file']['path']?>" class = 'about__banner__section--image' alt="">

            <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1 relative refrences-tiltle-holder">
                <h2 class = 'about__banner__section--title reference--title'><?=$data['content']['full_name']?></h2>
            </div>
        </div>
    </div>
</section>

<div class = 'm-t-50'></div>

<div class="row margin-0">
    <div class="col-md-5 col-md-offset-1">
        <p class="blue-header"><?= $contentModule->getTranslate('project_description') ?></p>
        <p class = 'desc'><?=$data['content']['description']?></p>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <p class="blue-header"><?= $contentModule->getTranslate('contract_details') ?></p>
        <p  class = 'desc'><?=$data['content']['project_details']?></p>
    </div>
    <div class ='col-md-offset-1'></div>
</div>

<div class="row margin-0">
    <div class="col-md-12 end-md">
        <img src="./assets/backgrounds/pattern.png" class = 'pattern' alt="">
    </div>
</div>

<?php if( $data['content']['has_gallery'] == 1 && $data['content']['get_gallery'] !== null ): ?>
    <?php $chunked = array_chunk( $data['content']['get_gallery']['get_images'], 3 ); ?>
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

<div class="row">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1 ">
        <a href="./references.php">
            <button class="button-transparent big-button m-t-30 m-b-30">
                <?= $contentModule->getTranslate('back') ?>
            </button>
        </a>
    </div>
</div>

<?php require_once './layout/_footer.php';?>