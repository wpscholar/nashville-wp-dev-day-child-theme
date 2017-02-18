<?php // Template Name: Welcome to Our Blog

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <h1><?php the_title(); ?></h1>

				<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ): ?>
						<?php the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

                <hr/>

                <p>Check out these awesome posts:</p>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'evergreen-content',
					'menu_class'     => 'evergreen-content',
				) );
				?>

                <hr/>

				<?php
				$query = new WP_Query( array(
					'post_type'      => 'post',
					'posts_per_page' => 5,
				) );
				?>
				<?php if ( $query->have_posts() ): ?>
                    <p>Check out our latest posts:</p>
                    <ul>
						<?php while ( $query->have_posts() ): ?>
							<?php $query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
                                </a>
                            </li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
                    </ul>
				<?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

        <?php get_sidebar('footer'); ?>

    </div><!-- .wrap -->

<?php get_footer(); ?>