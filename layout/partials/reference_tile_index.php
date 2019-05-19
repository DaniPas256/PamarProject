        
<?php 
	$read_more = $contentModule->getTranslate("button.read_more", true);
	$button = '
		<div style = "text-align: right">
			<a href="reference_details.php?article='.$tile_data[0]["slug"].'">
				<button class="button-transparent"> '.$read_more.' </button>
			</a>
		</div> 	
	';

	$button2 = '
		<div style = "text-align: right">
			<a href="reference_details.php?article='.$tile_data[1]["slug"].'">
				<button class="button-transparent"> '.$read_more.' </button>
			</a>
		</div> 
	';	
?>

        <div class="grid__row">
			<div class="<?=$class_order[0] ?>">
				<a href="<?= $tile_data[0]['get_file']['path'] ?>" class="glightboxTest"
				data-title="<?= $tile_data[0]['short_title'] ?>"
				data-description='<?= strip_tags( $tile_data[0]["description"] ) ?> <br><br> <?=$button?>'
				data-type="image"
				>
					<img src="<?= $tile_data[0]['get_file']['path'] ?>" alt="">
					<div class="mosaic__content" style = "text-align:center">
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
					data-title="<?= $tile_data[1]['short_title'] ?>"
					data-description='<?= strip_tags( $tile_data[1]["description"] ) ?> <br><br> <?=$button2?>' 
					data-type="image"
					>
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

