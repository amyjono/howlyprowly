<?php
/* Template Name: For Sale */

get_header(); ?>

   <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">     
                    
            <?php
                // Start the loop
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                    endwhile;
                endif;
            ?>
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
                    
                    <div class="entry-content">
                        <?php
                            the_content();
                        ?>
                        <?php 
                        if( is_active_sidebar( 'widget-below-for-sale-content' ) ) : ?>
                            <div class="for-sale-sidebar">
		                      <?php dynamic_sidebar( 'widget-below-for-sale-content' ); ?>
                            </div>
                        
                        <?php endif; ?>
                        
                    </div><!-- .entry-content -->

<?php get_footer(); ?>

                </article><!-- #post-## -->