<?php
/**
 * The template for displaying all single posts
 * @subpackage coming-soon-lite
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

<div class="container">
	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
		    $coming_soon_lite_layout_option = get_theme_mod( 'coming_soon_lite_theme_options',__( 'Right Sidebar','coming-soon-lite' ) );
		    if($coming_soon_lite_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
			        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div id="" class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>			
			<?php }else if($coming_soon_lite_layout_option == 'Right Sidebar'){ ?>
				<div class="row">
					<div id="" class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php }else if($coming_soon_lite_layout_option == 'One Column'){ ?>
					<div id="" class="content_area">
						<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>			
			<?php }else if($coming_soon_lite_layout_option == 'Three Columns'){ ?>	
				<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>	
					<div id="" class="content_area col-lg-6 col-md-6">
						<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($coming_soon_lite_layout_option == 'Four Columns'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
					<div id="" class="content_area col-lg-3 col-md-3">
						<section id="post_section">
								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content-single' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

									the_post_navigation( array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
									) );

								endwhile; // End of the loop.
								?>
						</section>
					</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
		        </div>
	    	<?php }else if($coming_soon_lite_layout_option == 'Grid Layout'){ ?>
		    	<div class="row">
			    	<div id="" class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) :

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/post/content-single' );

									endwhile;					
								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif;
								?>
								<div class="navigation">
					                <?php
					                    the_post_navigation( array(
											'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
											'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
										) );
					                ?>
					                <div class="clearfix"></div>
					            </div>
							</div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>	
				</div>		
			<?php } else { ?>
				<div class="row">
					<div id="" class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'coming-soon-lite' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'coming-soon-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'coming-soon-lite' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();