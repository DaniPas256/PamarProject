<?php
	require_once './model/_config.php';
	$__PAGE_NAME__ = 'index';
	require_once './model/content_model.php';
	$contentModule = new ContentModel();
	$data = $contentModule->getPageData();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<section class="banner-section relative" data-aos="fade-up">
	<div class="row p-l-20">
		<div class="col-md-7 col-sm-12 col-xs-12 relative">
			<img src="./assets/backgrounds/main_photo.jpg" class="main-banner" alt="Main Photo">
			<div class="blue-layer"></div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12 flex flex-column content-center mobile-banner-content">
			<div class="slogan-holder m-t-a">
				<img src="./assets/img/main_slogan.png" alt="">
				<!-- <h1 class="slogan-part-1">be aware</h1> -->
				<!-- <h2 class="slogan-part-2"> <span></span> be safe</h2> -->
			</div>
			<div class="banner-more-button m-t-a">
				<a href="./experiance.php">
					<button class="button-transparent big-button"><?= $contentModule->getTranslate('our_experiance') ?></button>
				</a>
			</div>
		</div>
	</div>
</section>

<div id = 'section-2' ></div>

<section class="parallax-section relative" data-aos="fade-up" data-aos-id="parallax">
	<div class="parallax__bg" style = 'background: url("./assets/backgrounds/counters_bg_photo.jpg") no-repeat 100% 100%/cover fixed'>
		<div class="row middle-md">
			<div class="col-md-8 col-sm-12 col-xs-12 col-sm-offset-0 col-md-offset-2 mobile-parallax-holder">
				<ul class="parallax__number--container">
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="first_number"><?= $contentModule->getTranslate('years_of_experiance_value') ?></span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'><?= $contentModule->getTranslate('years_of_experiance') ?></span>
						</div>
					</li>
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="second_number"><?= $contentModule->getTranslate('qualified_workers_value') ?></span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'><?= $contentModule->getTranslate('qualified_workers') ?></span>
						</div>
					</li>
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="third_number"><?= $contentModule->getTranslate('completed_contracts_value') ?></span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'><?= $contentModule->getTranslate('completed_contracts') ?></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="blue-layer"></div> -->
</section>

<div  id = 'section-3'></div>

<section class="slide-show" data-aos="fade-up" data-aos-id="slide-show">

	<div class="row margin-0">
		<div class="col-md-5 col-sm-4 col-xs-12">
			<p class="blue-header m-b-30"><?= $contentModule->getTranslate('whats_new') ?></p>
		</div>
		<div class="col-md-6 col-sm-8 col-xs-12 end-md end-sm end-xs xs-set-space m-t-10">
			<!-- <button class="button-black">
				All
			</button> -->

			<!-- <button class="button-black">
				<?= $contentModule->getTranslate('slider.news') ?>
			</button>

			<button class="button-black mobile-margin-right">
				<?= $contentModule->getTranslate('slider.projects') ?>
			</button> -->
		</div>
	</div>

	<div class="row slider__row">
		<div class="col-lg-offset-1 col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="slider-container js-main-slider">
				<div class="slider-window">
					<div class="slider-area js-slider-area">
					
					<?php foreach( $data['news'] as $key => $image ): ?>
						<div class="slider-image <?=$key == 0 ? 'active' : '' ?>">
							<img src="<?=$image['get_file']['path']?>" alt="<?=$image['title']?>">
						</div>
					<?php endforeach; ?>

					<?php foreach( $data['references_slider'] as $key => $image ): ?>
						<div class="slider-image <?=$key == 0 ? 'active' : '' ?>">
							<img src="<?=$image['get_file']['path']?>" alt="<?=$image['full_name']?>">
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-lg-offset-1 col-md-6 col-sm-6 mobile-set-padding important-padding col-xs-12">
			<div class="slider-navigation">
				<ul class="slider-navigation-list">
					<li class="slider-item">01</li>
					<li class="slider-item">02</li>
					<li class="slider-item">03</li>
					<li class="slider-item">04</li>
					<li class="slider-item">05</li>
					<li class="slider-item">06</li>
				</ul>

				<div class="slider-progress-bar-tube">
					<div class="slider-progress-bar js-progress-bar">
					</div>
				</div>

					<?php foreach( $data['news'] as $key => $news ): ?>
					<div class = 'slider-description <?= $key == 0 ? 'active' : '' ?> '  data-num = '<?=$key+1?>'>
						<div class="slider-text-content m-t-50 p-t-30">
							<p class="bold uppercase"><?=$news['title'] ?></p>
							<p><?=$news['description'] ?></p>
						</div>

						<div class="align-right m-t-50  p-r-3">
						<a href="news_details.php?news=<?=$news['slug']?>">
							<button class="big-button button-transparent"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
						</div>
					</div>
					<?php endforeach; ?>

					<?php foreach( $data['references_slider'] as $key => $ref ): ?>
					<div class = 'slider-description'  data-num = '<?=$key+4?>'>
						<div class="slider-text-content m-t-50 p-t-30">
							<p class="bold uppercase"> <?= $ref['full_name'] ?> </p>
							<p class="uppercase"> <?= $ref['city'] ?> </p>

							<p class="m-t-50 bold uppercase"><?= $contentModule->getTranslate('contract_details') ?></p>
							<p><?= $ref['project_details'] ?></p>
						</div>

						<div class="align-right m-t-50  p-r-3">
							<a href="reference_details.php?article=<?=$ref['slug']?>">
								<button class="big-button button-transparent"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
							</a>
						</div>
					</div>
					<?php endforeach; ?>				
			</div>
		</div>
	</div>
</section>

<div id = 'section-4'></div>

<section class="about_us__section" data-aos="fade-up" data-aos-id="about-us">
	<div class="about__header__wrapper">
		<h3 class="about__header_title decoration--bar"> ABOUT </h3>
		<h3 class="about__header_title"> US </h3>
		<img src="./assets/backgrounds/pattern.png" class="about__pattern" alt="">
	</div>
	<div class="about__photo__wrapp relative">
		<img src="./assets/backgrounds/about.png" class="about__about__image" alt="">

		<div class="about__photo_desc">
			<p><?= $contentModule->getTranslate('about_us_content') ?></p>

			<div class="button__holder">
				<a href="./about.php">
					<button class="button-white big-button">
					<?= $contentModule->getTranslate('button.more_about_us', true) ?>
					</button>
				</a>
			</div>
		</div>
	</div>
</section>

<div  id = 'section-5'></div>

<section class="tiles__section" data-aos="fade-up" data-aos-id="tiles">
	<div class="row margin-0">
		<div class="col-md-5">
			<p class="blue-header"><?= $contentModule->getTranslate('what_we_do') ?></p>
		</div>
	</div>

	<h2 class="tiles__slogan"><?= $contentModule->getTranslate('tile.slogan') ?></h2>

	<div class="slide__wrapper">
		<div class="slide_viewer">
			<div class="slide__tile prevLeftSecond">
				<p class="slide_title">
					<?= $contentModule->getTranslate('experience.category_1') ?>
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<a href="./experiance.php">
							<button class="slide_readmore"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
					</a>
				</div>
			</div>

			<div class="slide__tile prev">
				<p class="slide_title">
				<?= $contentModule->getTranslate('experience.category_2') ?>
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<a href="./experiance.php?tab=2">
							<button class="slide_readmore"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
					</a>
				</div>
			</div>

			<div class="slide__tile active selected">
				<p class="slide_title">
				<?= $contentModule->getTranslate('experience.category_3') ?>
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<a href="./experiance.php?tab=3">
						<button class="slide_readmore"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
					</a>
				</div>
			</div>

			<div class="slide__tile next">
				<p class="slide_title">
				<?= $contentModule->getTranslate('experience.category_4') ?>
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<a href="./experiance.php?tab=4">
						<button class="slide_readmore"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
					</a>
				</div>
			</div>

			<div class="slide__tile nextRightSecond">
				<p class="slide_title">
				<?= $contentModule->getTranslate('experience.category_1') ?>
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<a href="./experiance.php?tab=5">
						<button class="slide_readmore"><?= $contentModule->getTranslate('button.read_more', true) ?></button>
						</a>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div  id = 'section-6'></div>

<div class="row margin-0" data-aos="fade-up" data-aos-id="logo-slier-title">
	<div class="col-md-5">
		<p class="blue-header"><?= $contentModule->getTranslate('our_clients') ?></p>
	</div>
</div>
<section class="logo__slider" data-aos="fade-up" data-aos-id="logo-slider">
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


<section class="mosaic" data-aos="fade-up" data-aos-id="mosaic">
	<div class="row margin-0" id = 'section-7'>
		<div class="col-md-5">
			<p class="blue-header m-b-30"><?= $contentModule->getTranslate('nav.references', true) ?></p>
		</div>
	</div>

	<div class="grid-container">
		<?php 
			$tile_data = [];
			$class_order = ['higher', 'smaller'];
			foreach( $data['references_tiles'] as $key => $value ) {
				if( count( $tile_data ) == 0 ){
					$tile_data[] = $value;
				}else{
					$tile_data[] = $value;
					$class_order = array_reverse( $class_order );
					include('./layout/partials/reference_tile_index.php');
					$tile_data = [];
				}
			}

			if( count( $tile_data ) != 0 ){
				include('./layout/partials/reference_tile_index.php');
				$tile_data = [];
			}
		?>
	</div>
</section>

<?php require_once './layout/_footer.php';?>