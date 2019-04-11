        
      
        <div class="grid__row">
			<div class="<?=$class_order[0] ?>">
				<a href="<?= $tile_data[0]['get_file']['path'] ?>" class="glightboxTest"
					data-glightbox="title: <?= $tile_data[0]['short_title'] ?>; description: <?= $tile_data[0]['description'] ?>">
					<img src="<?= $tile_data[0]['get_file']['path'] ?>" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"><?= $tile_data[0]['short_title'] ?></p>
						<div class="separator"></div>
						<p class="mosaic_place"><?= $tile_data[0]['city'] ?></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
            <?php if( count($tile_data) > 1 ): ?>
                <div class="<?=$class_order[1] ?>">
				<a href="<?= $tile_data[1]['get_file']['path'] ?>" class="glightboxTest"
					data-glightbox="title: <?= $tile_data[1]['short_title'] ?>; description: <?= $tile_data[1]['description'] ?>">
					<img src="<?= $tile_data[1]['get_file']['path'] ?>" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"><?= $tile_data[1]['short_title'] ?></p>
						<div class="separator"></div>
						<p class="mosaic_place"><?= $tile_data[1]['city'] ?></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
                </div>
            <?php endif; ?>
		</div>