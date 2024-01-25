<?php get_header(); ?>

		
			<?php
							
				// параметры по умолчанию
				$my_posts = get_posts( array(
					'numberposts' => -1,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				global $post;

				foreach( $my_posts as $post ){
					setup_postdata( $post );

					?>

						<div class="card">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="spider-man" height="200" />
							<div class="card-text">
								<h1> <?php the_title(); ?> </h1>
								<?php the_content(); ?>
							</div>
						</div>


					<?php

					// формат вывода the_title() ...
				}

				wp_reset_postdata(); // сброс


?>

			
		

<?php get_footer(); ?>

		