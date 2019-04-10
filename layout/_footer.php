
	<section class="contact__modal">
		<div class="row modal relative">
			<div class="col-md-6 col-ms-12 col-xs-12 contact-data desktop-contact-data">
				<p>
					Leśna Street 44 a <br>
					43-200 Pszczyna, Poland
				</p>

				<p>
					Mobile +48 695 22 14 42 <br>
					Fax +48 32 448 44 75
				</p>

				<p>
					E-mail: <a class="normal-link" href="mailto:biuro@pamarpszczyna.pl">biuro@pamarpszczyna.pl</a> <br>
					NIP: 6381723364 <br>
					REGON: 240746890 <br>
				</p>

				<iframe
					src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d40772.52590817738!2d19.002457197201522!3d50.3053130617979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle+maps!5e0!3m2!1sen!2spl!4v1553806675494!5m2!1sen!2spl"
					width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 col-ms-12 col-xs-12 bg-gray">
				<div class="align-right">
					<span class="js-close-modal close-modal">&times;</span>
				</div>
				<p class="blue-header"><?= $contentModule->getTranslate('header.contact_us', true) ?></p>

				<div class="mobile-contact-data contact-data">
					<p>
						Leśna Street 44 a <br>
						43-200 Pszczyna, Poland
					</p>

					<p>
						Mobile +48 695 22 14 42 <br>
						Fax +48 32 448 44 75
					</p>

					<p>
						E-mail: <a class="normal-link" href="mailto:biuro@pamarpszczyna.pl">biuro@pamarpszczyna.pl</a>
						<br>
						NIP: 6381723364 <br>
						REGON: 240746890 <br>
					</p>
				</div>

				<div class="form-data">
					<div>
						<label for="name"><?= $contentModule->getTranslate('label.name', true) ?></label>
						<input type="text" id="name" name="name" value="">
					</div>
					<div>
						<label for="email"><?= $contentModule->getTranslate('label.email', true) ?></label>
						<input type="email" id="email" name="email" value="">
					</div>
					<div>
						<label for="message"><?= $contentModule->getTranslate('label.message', true) ?></label>
						<textarea name="message" id="message"></textarea>
					</div>

					<div class="align-right">
						<button class="big-button button-transparent submit-button"><?= $contentModule->getTranslate('label.send', true) ?></button>
					</div>
				</div>

				<div class="align-right mobile-data-hide">
					<img class='contact_pattern m-t-30' src="./assets/backgrounds/pattern.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<footer class="footer__section">
		<div class="row margin-0">
			<div class="col-md-3 col-sm-6 col-xs-12 mobile-align-center">
				<h5 class='footer_title'><?= $contentModule->getTranslate('nav.explore', true) ?></h5>
				<nav>
					<ul>
						<li><a class = '<?=$__PAGE_NAME__ == "index" ? "blue-header" : ""?>' href="./index.php"><?= $contentModule->getTranslate('nav.home', true) ?></a></li>
						<li><a class = '<?=$__PAGE_NAME__ == "experiance" ? "blue-header" : ""?>' href="./experiance.php"><?= $contentModule->getTranslate('nav.experience', true) ?></a></li>
						<li><a class = '<?=$__PAGE_NAME__ == "references" || $__PAGE_NAME__ == "references_details" ? "blue-header" : ""?>' href="./references.php"><?= $contentModule->getTranslate('nav.references', true) ?></a></li>
						<li><a class = '<?=$__PAGE_NAME__ == "about" ? "blue-header" : ""?>' href="./about.php"><?= $contentModule->getTranslate('nav.about', true) ?></a></li>
						<li><a class = '<?=$__PAGE_NAME__ == "news" ? "blue-header" : ""?>' href=""><?= $contentModule->getTranslate('nav.news', true) ?></a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mobile-align-center">
				<h5 class='footer_title'><?= $contentModule->getTranslate('nav.contact', true) ?></h5>
				<p class="footer_contact">
					PAMAR SP. Z O.O. <br>
					Leśna Street 44 a <br>
					43-200 Pszczyna, Poland
				</p>

				<p class="footer_contact m-t-30">
					Mobile +48 695 22 14 42 <br>
					Fax +48 32 448 44 75 <br>
					E-mail: biuro@pamarpszczyna.pl <br>
					NIP: 6381723364 <br>
					REGON: 240746890
				</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mobile-align-center">
				<h5 class='footer_title'><?= $contentModule->getTranslate('nav.certyficates', true) ?></h5>
				<a href="https://wizytowka.rzetelnafirma.pl/0XR0H28X" target="_blank">
					<img src="./assets/img/rzetelna_firma.png" alt="">
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mobile-align-center">
				<h5 class='footer_title'><?= $contentModule->getTranslate('nav.legal', true) ?></h5>
				<a class="footer_policy" href="#"> <?= $contentModule->getTranslate('nav.private_policy', true) ?> </a>
			</div>
		</div>
	</footer>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		<?='const PAGE_NAME = "' . $__PAGE_NAME__ . '";';?>
		<?=$__LOAD_AOS__ ? 'AOS.init();' : ''?>
	</script>

	<script src="./dist/main.js"></script>
	<script src="./assets/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
</body>

</html>
