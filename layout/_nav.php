
<div class="header-container"  id = 'section-1'>
	<header class="wrapper clearfix">
		<nav class="flex end-md">
			<ul class = 'logo_menu'>
				<li class = 'logo-li'>
					<a href="./index.php" class = 'no-animation'>
						<img src="./assets/img/pamar_logo.png" alt="">
					</a>
				</li>
			</ul>
			<div class="hamburger">
				<input type="checkbox" class="hamburger_input" />
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class = 'main_menu'>
				<li><a class = '<?=$__PAGE_NAME__ == "index" ? "active" : ""?>' href="./index.php"><?= $contentModule->getTranslate('nav.home', true) ?></a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "experiance" ? "active" : ""?>' href="./experiance.php"><?= $contentModule->getTranslate('nav.experience', true) ?></a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "references" || $__PAGE_NAME__ == "references_details" ? "active" : ""?>' href="./references.php"><?= $contentModule->getTranslate('nav.references', true) ?></a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "news" || $__PAGE_NAME__ == "news_details" ? "active" : ""?>' href="./news.php"><?= $contentModule->getTranslate('nav.news', true) ?></a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "about" ? "active" : ""?>' href="./about.php"><?= $contentModule->getTranslate('nav.about', true) ?></a></li>
				<li><a class="js-contact-modal"><?= $contentModule->getTranslate('nav.contact', true) ?></a></li>
			</ul>
			<ul class = 'social-menu'>
				<li><a class='no-animation padding-0' href="#"> <img src="./assets/img/facebook_icon.png" alt="">
					</a></li>
				<li><a class='no-animation padding-0' href="#"> <img src="./assets/img/linkedin_icon.png" alt="">
					</a></li>

				<?php 
					  $URL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					  $URL = explode('?', $URL);
					  
					  if( !isset( $URL[1] ) ){
						  $URL[1] = 'check=ok';
					  }

					$fragments = $URL[1];
					$fragments = str_replace( 'lang=en', '', $fragments );
					$fragments = str_replace( 'lang=pl', '', $fragments );

					$URL = $URL[0];
				?>
				<?php if( $contentModule->getLanguage() == 'pl' ): ?>
					<li><a class='no-animation' href="<?=$URL?>?lang=en&<?=$fragments?>">ENG</a></li>
				<?php else: ?>
					<li><a class='no-animation' href="<?=$URL?>?lang=pl&<?=$fragments?>">PL</a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</header>
</div>
