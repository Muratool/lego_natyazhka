<?php
  /* Template Name: black-panther*/ 
?>
<?php get_header(); ?>

<div class="card">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="black-panther" height="200" />
				<div class="card-text">
          <h1> <?php the_title(); ?> </h1>
					<?php the_content(); ?>
					<a href="/wordpress/index/"> Go back </a>
          
				</div>
			</div>

<?php get_footer(); ?>