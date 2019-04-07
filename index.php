<?php
require_once './model/_config.php';
require_once './model/content_model.php';
$__PAGE_NAME__ = 'index';
$content = new ContentModel();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<section class="banner-section relative" data-aos="fade-up" id='section-01'>
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
				<a href="#">
					<button class="button-transparent big-button">Our experiance</button>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="parallax-section relative" data-aos="fade-up" data-aos-id="parallax" id='section-02'>
	<div class="parallax__bg">
		<div class="row middle-md">
			<div class="col-md-8 col-sm-12 col-xs-12 col-sm-offset-0 col-md-offset-2 mobile-parallax-holder">
				<ul class="parallax__number--container">
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="first_number">43</span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'>Years of experiance</span>
						</div>
					</li>
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="second_number">54</span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'>Qualified Workers</span>
						</div>
					</li>
					<li class="flex flex-column middle-md">
						<div>
							<span class="parallax__number--title js-count-up" id="third_number">35</span>
						</div>
						<div class="m-t-20">
							<span class='parallax__number--subtitle'>Completed contracts</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="blue-layer"></div> -->
</section>

<section class="slide-show" data-aos="fade-up" data-aos-id="slide-show" id='section-03'>

	<div class="row margin-0">
		<div class="col-md-5 col-sm-4 col-xs-12">
			<p class="blue-header m-b-30">WHAT'S NEW</p>
		</div>
		<div class="col-md-6 col-sm-8 col-xs-12 end-md end-sm end-xs xs-set-space m-t-10">
			<button class="button-black">
				All
			</button>

			<button class="button-black">
				NEWS
			</button>

			<button class="button-black mobile-margin-right">
				Projects
			</button>
		</div>
	</div>

	<div class="row slider__row">
		<div class="col-lg-offset-1 col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="slider-container js-main-slider">
				<div class="slider-window">
					<div class="slider-area js-slider-area">
						<div class="slider-image active">
							<img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="">
						</div>
						<div class="slider-image">
							<img src="https://png.pngtree.com/element_our/md/20180402/md_5ac1ec7ec581b.png" alt="">
						</div>
						<div class="slider-image">
							<img src="https://cdn.pixabay.com/photo/2017/04/05/11/56/image-in-the-image-2204798_960_720.jpg"
								alt="">
						</div>
						<div class="slider-image">
							<img src="https://png.pngtree.com/element_our/md/20180402/md_5ac1ec7ec581b.png" alt="">
						</div>
						<div class="slider-image">
							<img src="https://cdn.pixabay.com/photo/2017/04/05/11/56/image-in-the-image-2204798_960_720.jpg"
								alt="">
						</div>
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
				</ul>

				<div class="slider-progress-bar-tube">
					<div class="slider-progress-bar js-progress-bar">
					</div>
				</div>

				<div class="slider-text-content m-t-50 p-t-30">
					<p class="bold uppercase">PODIUM’ SPORTS AND ENTERTAINMENT ARENA </p>
					<p class="uppercase">GLIWICE, POLAND</p>

					<p class="m-t-50 bold uppercase">TASK RANGE:</p>
					<p>OTE system , fire walls and ceilings,</p>
				</div>

				<div class="align-right m-t-50  p-r-3">
					<button class="big-button button-transparent">READ MORE</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about_us__section" data-aos="fade-up" data-aos-id="about-us" id='section-04'>
	<div class="about__header__wrapper">
		<h3 class="about__header_title decoration--bar"> ABOUT </h3>
		<h3 class="about__header_title"> US </h3>
		<img src="./assets/backgrounds/pattern.png" class="about__pattern" alt="">
	</div>
	<div class="about__photo__wrapp relative">
		<img src="./assets/backgrounds/about.png" class="about__about__image" alt="">

		<div class="about__photo_desc">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, possimus.
				Dicta voluptatum quibusdam error veniam delectus natus sunt quam hic assumenda. </p>

			<div class="button__holder">
				<button class="button-white big-button">
					MORE ABOUT US
				</button>
			</div>
		</div>
	</div>
</section>

<section class="tiles__section" data-aos="fade-up" data-aos-id="tiles" id='section-05'>
	<div class="row margin-0">
		<div class="col-md-5">
			<p class="blue-header">What we do</p>
		</div>
	</div>

	<h2 class="tiles__slogan">Our company is one of the biggest in Poland providing fire protection services such
		as:</h2>

	<div class="slide__wrapper">
		<div class="slide_viewer">

			<div class="slide__tile prevLeftSecond">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

			<div class="slide__tile prev">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES #1
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

			<div class="slide__tile active selected">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES #2
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

			<div class="slide__tile next">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES #3
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

			<div class="slide__tile nextRightSecond">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES #4
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

			<div class="slide__tile hideRight">
				<p class="slide_title">
					FIRE PROTECTION SYSTEMS
					ON STEEL STRUCTURES #5
				</p>
				<div class="separator"></div>
				<div class="slide_image">
					<a>
						<img class='slide_pattern' src="./assets/backgrounds/pattern.png" alt="">
						<img class=" slide_bg" src="./assets/backgrounds/2.png" alt="">
						<div class="overlay"></div>
						<button class="slide_readmore">readmore</button>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>


<div class="row margin-0" data-aos="fade-up" data-aos-id="logo-slier-title" id='section-06'>
	<div class="col-md-5">
		<p class="blue-header">Our clients</p>
	</div>
</div>
<section class="logo__slider" data-aos="fade-up" data-aos-id="logo-slider">
	<div class="logo__slider--area">
		<div class="logo__slider--viewer">
			<img class='first loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='loaded' src="./assets/img/logo2.png" alt="">
			<img class='loaded' src="./assets/img/logo1.png" alt="">
			<img class='unloaded' data-src="./assets/img/logo2.png" alt="">
			<img class='unloaded' data-src="./assets/img/logo1.png" alt="">
			<img class='unloaded' data-src="./assets/img/logo2.png" alt="">
			<div class="last"></div>
		</div>
	</div>
</section>


<section class="mosaic" data-aos="fade-up" data-aos-id="mosaic" id='section-07'>
	<div class="row margin-0">
		<div class="col-md-5">
			<p class="blue-header m-b-30">References</p>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid__row">
			<div class="higher">
				<a href="./assets/backgrounds/mosaic_1.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_1.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name">Shopping Mail</p>
						<div class="separator"></div>
						<p class="mosaic_place">Katowice, Poland</p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
			<div class="smaller">
				<a href="./assets/backgrounds/mosaic_2.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_2.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
		</div>

		<div class="grid__row iphone-display-none">
			<div class="smaller">

				<a href="./assets/backgrounds/mosaic_3.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_3.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
			<div class="higher">
				<a href="./assets/backgrounds/mosaic_4.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_4.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
		</div>

		<div class="grid__row xs-mobile-display-none">
			<div class="higher">
				<a href="./assets/backgrounds/mosaic_5.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_5.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
			<div class="smaller">
				<a href="./assets/backgrounds/mosaic_6.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_6.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
		</div>

		<div class="grid__row mobile-display-none">
			<div class="smaller">
				<a href="./assets/backgrounds/mosaic_7.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_7.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
			<div class="higher">
				<a href="./assets/backgrounds/mosaic_8.png" class="glightboxTest"
					data-glightbox="title: Lightbox title; description: This is the description of the slide">
					<img src="./assets/backgrounds/mosaic_8.png" alt="">
					<div class="mosaic__content">
						<p class="mosaic_name"></p>
						<div class="separator"></div>
						<p class="mosaic_place"></p>
					</div>
					<div class="blue-layer">
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<?php require_once './layout/_footer.php';?>