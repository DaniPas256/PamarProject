
<div class="header-container">
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
				<li><a class = '<?=$__PAGE_NAME__ == "index" ? "active" : ""?>' href="./index.php">Home</a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "experiance" ? "active" : ""?>' href="./experiance.php">Experience</a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "references" || $__PAGE_NAME__ == "references_details" ? "active" : ""?>' href="./references.php">References</a></li>
				<li><a class = '<?=$__PAGE_NAME__ == "about" ? "active" : ""?>' href="./about.php">About</a></li>
				<li><a class="js-contact-modal">Contact</a></li>
			</ul>
			<ul class = 'social-menu'>
				<li><a class='no-animation padding-0' href="#"> <img src="./assets/img/facebook_icon.png" alt="">
					</a></li>
				<li><a class='no-animation padding-0' href="#"> <img src="./assets/img/linkedin_icon.png" alt="">
					</a></li>
				<li><a class='no-animation' href="#">ENG</a></li>
			</ul>
		</nav>
	</header>
</div>
