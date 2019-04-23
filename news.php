<?php
    require_once './model/_config.php';
    $__PAGE_NAME__ = 'news';
    $__LOAD_AOS__ = false;
    require_once './model/content_model.php';
    $contentModule = new ContentModel();
    $data = $contentModule->getPageData();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<div class="row">
    <div class="col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-md-10 col-sm-10 col-xs-10">
        <?php foreach( $data['content'] as $key => $news ): ?>
            <div class="row m-b-50">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <a href = './news_details.php?news=<?= $news['slug'] ?>'>
                        <img src="<?=$news['get_file']['path']?>" class = 'news__image' alt="<?=$news['get_file']['name']?>">
                    </a>    
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12">
                    <a href = './news_details.php?news=<?= $news['slug'] ?>' class = 'news__description'>
                        <h3 class = 'blue-header'> <?= $news['title'] ?> </h3>
                        <div class = 'align-right m-b-50 f-s-14'>
                            <span><?= date( 'd/m/Y H:i', strtotime( $news['created_at'] ) ); ?></span>
                        </div>
                        <p>
                            <?= $news['description'] ?>
                        </p>

                        <div class = 'align-right read__more'>
                            <button class = 'button-transparent big-button'>
                                <?= $contentModule->getTranslate('button.read_more', true) ?>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>    
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1"></div>
</div>

<?php require_once './layout/_footer.php';?>