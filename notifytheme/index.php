<?php 
	$url_t="http://notify/wp-content/themes/notifttheme";
	get_header();
?>

			<section class="skills">
				<div class="container">
					<div class="row">
				<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
			
		
				<div class="col-md-4">
					<div class="skills__content icon-box--part">
						<div class="skills__title">
							<h2><?php  the_title();?></h2></div>
						<div class="skills__text">
							<p><?php  the_content();?></p>
						</div>
					</div>
				</div>
			
		<?php endwhile; ?>
		<?php endif;?>
			
					</div>
				</div>
			</section>
			<section class="updates">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<form action="" class="updates__form">
								<div class="updates__title">Get Notified Of Any Updates!</div>
								<div class="updates__text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla nisl congue congue. Maecenas nec condimentum libero, at elementum mauris. Phasellus eget nisi dapibus, ultricies nisl at, hendrerit risusuis ornare
										luctus id sollicitudin ante lobortis at.</p>
								</div>
								<label class="updates__label">
									<input type="text" placeholder="Email Address" class="updates__input">
									<input type="submit" value="Notify" class="updates__btn">
								</label>
							</form>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="updates__video">
								<p style="background-image: url('<?php echo $url_t ?>/images/bg/header.png')"></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="face">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<blockquote class="face__blockquote">
								<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum velit vitae nulla molestie eu commodo nulla dapib us. Donec id sollicitudin urna. Integer at dui ac leo fermentum varius eleifend ut.”<cite class="face__cite">Jane Hunt</cite></p>
							</blockquote>
							<ul class="face__list">
								<li class="face__item">
									<p></p>
								</li>
								<li class="face__item">
									<p></p>
								</li>
								<li class="face__item">
									<p></p>
								</li>
								<li class="face__item">
									<p></p>
								</li>
								<li class="face__item">
									<p></p>
								</li>
							</ul>
						</div>
						<div class="col-xs-12">
							<div class="social">
								<div class="social__title">Say Hi & Get in Touch</div>
								<div class="social__text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse.</p>
								</div>
								<ul class="social__list">
									<li class="social__item"><a href="#" class="social__link social__link_twitter"><span class="social__span">twitter</span></a></li>
									<li class="social__item"><a href="#" class="social__link social__link_facebook"><span class="social__span">facebook</span></a></li>
									<li class="social__item"><a href="#" class="social__link social__link_p"><span class="social__span">p</span></a></li>
									<li class="social__item"><a href="#" class="social__link social__link_google"><span class="social__span">google</span></a></li>
									<li class="social__item"><a href="#" class="social__link social__link_linkedin"><span class="social__span">linkedin</span></a></li>
									<li class="social__item"><a href="#" class="social__link social__link_youtube"><span class="social__span">youtube</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="page-footer">
			<div class="container">
				<nav class="footer-nav">
					<ul class="footer-nav__list">
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Contact</a></li>
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Download</a></li>
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Press</a></li>
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Email</a></li>
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Support</a></li>
						<li class="footer-nav__item"><a href="#" class="footer-nav__link">Privacy Policy</a></li>
					</ul>
				</nav>
			</div>
		</footer>
		<!-- build:js js/vendor.js -->
		<!--bower:js-->
		<script src="<?php echo $url_t ?>/bower/jquery/dist/jquery.js"></script>
		<!--endbower-->
		<!-- endbuild -->
		<!-- build:js js/main.js -->
		<script src="<?php echo $url_t ?>/js/main.js"></script>
		<!-- endbuild -->
	</body>

</html>