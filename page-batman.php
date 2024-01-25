<?php
  /* Template Name: batman*/ 
?>

<?php get_header(); ?>

<div class="card">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/batman.jpg" alt="spider-man" height="200" />

        
				<div class="card-text">
          <h1> <?php the_title(); ?> </h1>
					<?php the_content(); ?>
					<a href="/wordpress/index/"> Go back </a>
				</div>
			</div>

<?php get_footer(); ?>