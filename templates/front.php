<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-gallery' ); ?>

	<header id="front-hero" role="banner" >
		<div class="marketing">
			<div class="tagline">
				<h1><small>A community </small><br><strong>talent showcase</strong></h1>
				<p class="subheader">Celebrating and benefiting the performing arts in Bellingham and Whatcom County.</p>
				<p class="subheader"><span itemprop="startDate" content="2017-01-21T018:30">Saturday, <strong>January 21st</strong></span> @ <strong itemprop="location"> The Mount Baker Theatre</strong> </p>
				<p class="cta"><a role="button" class="large button" href="http://www.beintheshow.com/about-the-show">See Show Details!</a> or <a role="button" class="large button" href="http://www.mountbakertheatre.com/shows/be-in-the-show-2/" target="_blank">Buy tickets here!</a></p>
			</div>
		</div>
	</header>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div> <!-- entry-content -->
 <?php endwhile;?>

<?php get_footer(); ?>
