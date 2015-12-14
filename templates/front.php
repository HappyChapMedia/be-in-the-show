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
			<h2>One stage, one community, one opportunity to see great Bellingham talent all in one place!</h2>
			<p><strong>BE in the Show</strong> is a celebration of the performing arts in Bellingham. Local <em>dancers</em>, <em>singers</em>, <em>musicians</em>, <em>actors</em> and more will grace the beautiful <strong>Mount Baker Theatre</strong> main stage for a night of entertainment featuring a variety of talent from amateurs to professionals. <strong>BE</strong> a part of a new and fun tradition for Bellingham during our greyer months and add a bit of brightness with <strong>BE in the Show</strong>!</p>
			<p class="cta"><a href="<?php echo esc_url( home_url( '/about-the-show' ) ); ?>" class="button large">Learn More</a> or <a href="http://www.mountbakertheatre.com/shows/be-in-the-show/" class="button large">Get Tickets!</a></p>
		</header>
	</section>


	<section class="perform">
		<header class="section-intro">
			<h2>Perform in the Show!</h2>
			<p>Now is your chance to shine! Perform under the lights on the big stage at the Mount Baker Theatre! Singers, dancers, magicians, actors, contortionists, acrobats, and performers of all types are encouraged to take part in this exciting production and <strong>BE in the Show</strong></p>
			<p class="cta"><a href="<?php echo esc_url( home_url( '/perform' ) ); ?>" class="button large">Learn more about performing</a></p>
		</header>

	</section>



<?php get_footer(); ?>
