<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-gallery' ); ?>

	<header id="front-hero" role="banner" >
		<div class="marketing">
			<div class="tagline">
				<h1><small>A community </small><br><strong>variety show</strong></h1>
				<p class="subheader">Celebrating and benefiting the performing arts in Bellingham and Whatcom County.</p>
				<p class="subheader"><span itemprop="startDate" content="2018-01-27T018:30">Saturday, <strong>January 27th</strong></span> @ <strong itemprop="location"> The Mount Baker Theatre</strong> </p>
				<p class="cta"><a role="button" class="large button" href="<?php echo esc_url( home_url( '/' ) ); ?>about-the-show">See Show Details!</a> or <a role="button" class="large button" href="<?php echo esc_url( home_url( '/' ) ); ?>perform">Be a Performer!</a></p>
			</div>
		</div>
	</header>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div> <!-- entry-content -->
 <?php endwhile;?>

<?php get_footer(); ?>
