<?php
require_once './model/_config.php';
$__PAGE_NAME__ = 'references_details';
require_once './model/content_model.php';
$content = new ContentModel();
?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<section class = 'about__banner__section'>
    <div class="row margin-0">
        <div class="col-md-12">
            <img src="./assets/backgrounds/references_0.png" class = 'about__banner__section--image' alt="">

            <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1 relative refrences-tiltle-holder">
                <h2 class = 'about__banner__section--title reference--title'>RED LINE NORTH UNDERGROUND</h2>
            </div>
        </div>
    </div>
</section>

<div class = 'm-t-50'></div>

<div class="row margin-0">
    <div class="col-md-5 col-md-offset-1">
        <p class="blue-header">PROJECT DESCRIPTION</p>
        <p class = 'desc'>
        The Doha Metro serve both the capital and the suburbs with all major locations within easy and convenient reach. Most of the Doha Metro lines will be underground, so tunnelling plays a major role in construction.<br>
        <br>
        The Red Line, also known as the Coast Line, runs for about 40 kilometres from Al Wakra in the south to Lusail in the north. The line also connects Hamad International Airport at Terminal 1 to the centre of the city. It has 18 stations with the Legtaifiya Station allowing passengers to transfer over to the Lusail Tram.
        </p>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <p class="blue-header">CONTRACT DETAILS</p>
        <p  class = 'desc'>
        Contract Value - 12 000 000,00 PLN <br>
        Contact - ISG SALINI IMPREGILO RED LINE NORD <br>
        Execution/ Completion - 06.2017 <br>
        Scope of works - Ower Track Exost
        </p>
    </div>
    <div class ='col-md-offset-1'></div>
</div>

<div class="row margin-0">
    <div class="col-md-12 end-md">
        <img src="./assets/backgrounds/pattern.png" class = 'pattern' alt="">
    </div>
</div>

<div class="row" data-aos="fade-up" data-aos-id="mosaic" >
    <div class="col-md-10 col-md-offset-1 about__gallery">
        <a href="./assets/backgrounds/reference_1.png" class="glightboxTest">
			<img src="./assets/backgrounds/reference_1.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a>
        <a href="./assets/backgrounds/reference_2.png" class="glightboxTest">
			<img src="./assets/backgrounds/reference_2.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a>
        <a href="./assets/backgrounds/reference_3.png" class="glightboxTest">
			<img src="./assets/backgrounds/reference_3.png" class = 'gallery-image' alt="">
            <div class="blue-layer">
					</div>
        </a>
    </div>
    <div class="col-md-offset-1"></div>
</div>

<div class="row">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1 ">
        <a href="./references.php">
            <button class="button-transparent big-button m-t-30 m-b-30">
                Back
            </button>
        </a>
    </div>
</div>

<?php require_once './layout/_footer.php';?>