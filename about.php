<?php
require_once './model/_config.php';
$__PAGE_NAME__ = 'about';
require_once './model/content_model.php';
$content = new ContentModel();
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
			<p class="blue-header">Our Team</p>
		</div>
	</div>

<div class="row margin-0">
    <div class="col-md-5 col-md-offset-1">
        <p class = 'desc'>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At quos error accusamus alias, corporis quod ex quasi numquam amet nobis esse eum. Suscipit odit soluta culpa at praesentium accusantium, incidunt similique eveniet numquam! Veniam, ut voluptates. Molestias, eos autem possimus ea excepturi, consequuntur quam suscipit a nemo cumque minus, commodi aliquam fuga magnam quas culpa perspiciatis sapiente in itaque temporibus magni cupiditate alias exercitationem tenetur? Esse tenetur ipsam minima voluptate, sequi animi molestias tempora? Debitis officiis quos labore repellendus maiores distinctio iure! Quidem odit architecto reprehenderit neque, eligendi, odio suscipit modi laudantium explicabo sint nostrum? Deleniti, eos ut? Dolore, eum hic. Similique dolorem provident culpa ea officiis odit earum ut, ipsum consequuntur amet ipsa illo suscipit dicta natus placeat doloribus atque nisi eius ducimus quibusdam rem? Voluptatem amet voluptates dolor nisi deleniti quas provident sed, nostrum dolorum. Dolor repudiandae sint tempore sit sequi cumque voluptate, ut tempora deserunt fugiat sapiente, harum deleniti soluta blanditiis fuga quasi inventore pariatur consequatur molestias vero rem. Dignissimos tempora nam molestiae explicabo in illo eius tempore quibusdam, saepe, iusto suscipit fugiat maxime, aut consectetur delectus error perspiciatis quo perferendis asperiores rem? Unde atque nobis sed nisi, earum tempore amet aperiam exercitationem omnis, harum reprehenderit. Ab.
        </p>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <p  class = 'desc'>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus, reiciendis rerum sunt vitae voluptas modi pariatur dicta error deserunt nemo accusantium autem recusandae quidem itaque ullam eius perspiciatis illum molestiae corrupti provident! Repellendus similique consectetur dolorum libero quo voluptatum. Atque, illo. Eum quasi numquam alias veniam nesciunt pariatur vitae reiciendis vero quam quia quidem exercitationem, ab obcaecati esse. Quas fuga cumque ipsum praesentium facilis, maiores eos error iusto pariatur molestias dolore, dolor doloribus, quae autem corrupti. Iusto esse dignissimos delectus odio eveniet nesciunt fugiat voluptatum deserunt tenetur ad adipisci impedit hic consectetur aliquam, maiores exercitationem! Laudantium, fuga! Fugiat, alias.
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
        <a href="./assets/backgrounds/mosaic_1.png" class="glightboxTest">
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
        </a>
    </div>
    <div class="col-md-offset-1"></div>
</div>

<?php require_once './layout/_footer.php';?>