<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'coming_soon_lite_above_slider' ); ?>
<?php
	$container_type = get_theme_mod('coming_soon_lite_boxfull_width', ''); // Get the selected container type
	// Define the default container class
	$container_class = '';

	// If container or container-fluid is selected, update the container class
	if ($container_type === 'container' || $container_type === 'container-fluid') {
		$container_class = $container_type;
	}
	?>
	<div class="<?php echo esc_attr($container_class); ?>">
<section id="slider">
	<div class="p-0">
		<div class="row m-0">
			<div class="col-lg-1 col-md-2 col-3 social-bg">
				<div class="social-icons">
					<?php if( get_theme_mod( 'coming_soon_lite_facebook_url') != '') { ?>
				  		<p><a href="<?php echo esc_url( get_theme_mod( 'coming_soon_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></p>
				    <?php } ?>
				    <?php if( get_theme_mod( 'coming_soon_lite_twitter_url') != '') { ?>
				      	<p><a href="<?php echo esc_url( get_theme_mod( 'coming_soon_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a></p>
				    <?php } ?>
				    <?php if( get_theme_mod( 'coming_soon_lite_insta_url') != '') { ?>
				      	<p><a href="<?php echo esc_url( get_theme_mod( 'coming_soon_lite_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a></p>
				    <?php } ?>
				    <?php if( get_theme_mod( 'coming_soon_lite_linkedin_url') != '') { ?>
				 		<p><a href="<?php echo esc_url( get_theme_mod( 'coming_soon_lite_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a></p>
				    <?php } ?>	 
				    <?php if( get_theme_mod( 'coming_soon_lite_pinterest_url') != '') { ?>
				      	<p><a href="<?php echo esc_url( get_theme_mod( 'coming_soon_lite_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a></p>
				    <?php } ?>
				</div>
			</div>
			<div class="col-lg-11 col-md-10 col-9 p-0">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				    <?php $coming_soon_lite_slider_pages = array();
				      	for ( $count = 1; $count <= 1; $count++ ) {
					        $mod = intval( get_theme_mod( 'coming_soon_lite_banner' . $count ));
					        if ( 'page-none-selected' != $mod ) {
					          $coming_soon_lite_slider_pages[] = $mod;
					        }
				      	}
				      	if( !empty($coming_soon_lite_slider_pages) ) :
				        $args = array(
				          	'post_type' => 'page',
				          	'post__in' => $coming_soon_lite_slider_pages,
				          	'orderby' => 'post__in'
				        );
				        $query = new WP_Query( $args );
				        if ( $query->have_posts() ) :
				          $i = 1;
				    ?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
				        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
				          	<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
				          	<?php
							$coming_soon_lite_slider_effect = get_theme_mod('coming_soon_lite_slider_effect', '') 
						?>
			          	<div class="carousel-caption <?php echo ($coming_soon_lite_slider_effect); ?>">
					            <div class="inner_carousel">
					              	<h1><?php the_title(); ?></h1>
					              	<h2><?php echo esc_html( get_theme_mod( 'coming_soon_lite_opening_date_heading','' ) ); ?></h2>
					              	<div class="open-date">
						              	<span><?php echo esc_html( get_theme_mod( 'coming_soon_lite_opening_date','' ) ); ?></span>
						              	<span><?php echo esc_html( get_theme_mod( 'coming_soon_lite_opening_month','' ) ); ?></span>
						              	<span><?php echo esc_html( get_theme_mod( 'coming_soon_lite_opening_year','' ) ); ?></span>
						            </div>
						        </div>
					        </div>
				        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
				    <?php else : ?>
				    <div class="no-postfound"></div>
				      <?php endif;
				    endif;?>
				</div>
			</div>
		</div>
</section>

<?php do_action('coming_soon_lite_below_slider'); ?>

<?php get_footer(); ?>