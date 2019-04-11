<?php
    require_once './model/_config.php';
    $__PAGE_NAME__ = 'references';
    $__LOAD_AOS__ = false;
    require_once './model/content_model.php';
    $contentModule = new ContentModel();
    $data = $contentModule->getPageData();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<div class="grid masonry">
    <?php foreach( $data['references'] as $key => $references ): ?>
        <a href = './reference_details.php?article=<?= $references['slug'] ?>'>
            <img src="<?=$references['get_file']['path']?>" alt="<?=$references['full_name']?>">
            <div class="blue-layer"></div>
            <div class="grid__desc">
                <h3 class = 'grid__name'><?=$references['short_title']?></h3>
                <div class="separator"></div>
                <h3 class = 'grid__city'> <?=$references['city']?> </h3>
            </div>
        </a>
	<?php endforeach; ?>
</div>

<section class="logo__slider m-t-50 m-b-50">
	<div class="logo__slider--area">
		<div class="logo__slider--viewer">
			<?php foreach( $data['logos']['get_images'] as $key => $image ): ?>
				<?php if( $key < 10 ): ?>
					<img class='first <?= $key == 0 ? "loaded" : "" ?>' src="<?= $image['get_file']['path'] ?>" alt="<?= $image['get_file']['name'] ?>">
				<?php else: ?>
					<img class='unloaded' data-src="<?= $image['get_file']['path'] ?>" alt="<?= $image['get_file']['name'] ?>">
				<?php endif; ?>
			<?php endforeach;?>		
			<div class="last"></div>	
		</div>
	</div>
</section>

<?php require_once './layout/_footer.php';?>