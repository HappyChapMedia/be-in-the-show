<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		?>
	<div id="small-hero-image" class="show-for-small-only" style="background-image: url('<?php echo $image ?>')">
		
	</div>

	<header id="front-hero" role="banner" style="background-image: url('<?php echo $image ?>')">
		<div class="marketing">
			<div class="tagline">
				<h1><small>A community <br></small><strong>talent show</strong> <br><small class="salt">&amp;</small> <strong class="dance-showcase">dance showcase</strong></h1>
				<p class="subheader">Friday, <strong>Jan. 29th</strong> @ <strong>The Mount Baker Theatre</strong> </p>
				<p class="cta"><a role="button" class="large button" href="<?php echo esc_url( home_url( '/about-the-show' ) ); ?>">See Show Details!</a></p>
			</div>
		</div>
	</header>
	
	<?php endif; ?>


	<section class="intro" role="main">
		<header class="section-intro">
			<div class="mbt-image large-6 medium-12 large-push-6 columns">
				<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/MBT-main-stage-vert-text.jpg" alt="Mount Baker Theatre Stage">
				</p>
			</div>
			<div class="large-6 medium-12 large-pull-6 columns">
				<h2>One stage, one community, one opportunity to see great Bellingham talent all in one place!</h2>
				<p><strong>BE in the Show</strong> is a celebration of the performing arts in Bellingham. Local <em>dancers</em>, <em>singers</em>, <em>musicians</em>, <em>actors</em> and more will grace the beautiful <strong>Mount Baker Theatre</strong> main stage for a night of entertainment featuring a variety of talent from amateurs to professionals. <strong>BE</strong> a part of a new and fun tradition for Bellingham during our greyer months and add a bit of brightness with <strong>BE in the Show</strong>!</p>
				<p class="cta"><a href="<?php echo esc_url( home_url( '/about-the-show' ) ); ?>" class="button large">Learn More</a> or <a href="http://www.mountbakertheatre.com/shows/be-in-the-show/" class="button large">Get Tickets!</a></p>
			</div>
		</header>
	</section>


	<section class="perform">
		<header class="perform-intro">
			<h2>Perform in the Show!</h2>
			<p>Now is your chance to shine! Perform under the lights on the big stage at the Mount Baker Theatre! Singers, dancers, magicians, actors, contortionists, acrobats, and performers of all types are encouraged to take part in this exciting production and <strong>BE in the Show</strong></p>
			<p class="cta"><a href="<?php echo esc_url( home_url( '/perform' ) ); ?>" class="button large">Learn more about performing</a></p>
		</header>

	</section>

	<section class="share">
		<header class="share-intro">
			<h2>Thanks for sharing some love!</h2>
			<p>Thanks to the following folks for helping spread the word on Facebook! <a href="https://www.facebook.com/events/512174485622431/" target="_blank">Share our event </a>on your group/business/etc FB page and we'll toss your logo below! Hooray Bellingham!</p>
			<ul class="share-logos">
				<li class="share-logo logo-bellingham-dental">
					<p><a href="http://bellinghamdentalgroup.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bellingham-dental-group.png" alt="Bellingham Dental Group"></a></p>
				</li>
				<li class="share-logo logo-whats-up">
					<p><a href="http://www.whatsup-magazine.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/whats-up-logo.png" alt="What's Up! Magazine"></a></p>
				</li>
				<li class="share-logo logo-makeshift">
					<p><a href="http://makeshiftproject.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/make-shift-logo.png" alt="Makeshift Art Space"></a></p>
				</li>
				<li class="share-logo logo-casa-que-pasa">
					<p><a href="http://www.casaquepasarocks.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/casa-que-pasa-logo.png" alt="Casa Que Pasa"></a></p>
				</li>
				<li class="share-logo logo-the-racket">
					<p><a href="https://www.facebook.com/theracketbham/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/the-racket-logo.png" alt="The Racket Bar and Pinball Lounge"></a></p>							
				</li>
				<li class="share-logo logo-the-shakedown">
					<p><a href="http://www.shakedownbellingham.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shakedown-logo.png" alt="The Shakedown"></a></p>
				</li>
				<li class="share-logo logo-back-east-bbq">
					<p><a href="http://www.bellinghambbq.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/back-east-bbq-logo.png" alt="Back East BBQ Bellingham"></a></p>
				</li>
				<li class="share-logo logo-wwu-cfpa">
					<p><a href="https://www.facebook.com/wwucfpa/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/WWUCFPAlogo.png" alt="WWU College of Fine and Performing Arts"></a></p>
				</li>
				<li class="share-logo logo-dh-home-inspection">
					<p><a href="http://www.dhhomeinspection.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dh-home-inspection-logo.png" alt="Dan Hicks Home Inspection Bellingham"></a></p>
				</li>
				<li class="share-logo logo-boundary-bay">
					<p><a href="http://www.bbaybrewery.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boundary-bay-brewing-logo.png" alt="Boundary Bay Brewing"></a></p>
				</li>
				<li class="share-logo logo-streat-food">
					<p><a href="http://www.streatfood.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/streat-food-logo.png" alt="Streat Food"></a></p>
				</li>
				<li class="share-logo logo-aslan">
					<p><a href="http://www.aslanbrewing.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aslan-brewing-logo.png" alt="Aslan Brewing"></a></p>
				</li>
				<li class="share-logo logo-comics-place">
					<p><a href="http://www.thecomicsplace.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics-place-logo.png" alt="The Comics Place"></a></p>
				</li>
				<li class="share-logo logo-sterling">
					<p><a href="http://www.sterlingrealestate.biz/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sterling-real-estate-logo.png" alt="Sterling Real Estate"></a></p>
				</li>
				<li class="share-logo logo-carne">
					<p><a href="http://carnebellingham.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carne-logo.png" alt="Carne Butchery"></a></p>
				</li>
				<li class="share-logo logo-workspace">
					<p><a href="http://www.theworkspace.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/workspace-logo.png" alt="The Workspace Coworking Bellingham"></a></p>
				</li>
				<li class="share-logo logo-avenue-bread">
					<p><a href="http://www.avenuebread.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avenue-bread-logo.png" alt="Avenue Bread"></a></p>
				</li>
			</ul>
		</header>

	</section>



<?php get_footer(); ?>
