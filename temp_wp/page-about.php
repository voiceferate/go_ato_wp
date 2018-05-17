<?php get_header(); ?>
	<div class="slider-container container-fluid no-gutters">
		<div class="owl-carousel owl-theme owl-loaded">
			<div class="owl-stage-outer">
					<div class="owl-stage">

	<?php 
	wp_reset_postdata();

	$childrens = get_children( array( 
		'post_parent' => 129,
		'post_type'   => 'page', 
		'numberposts' => -1,
		'post_status' => 'any'
	) );
	wp_reset_postdata();
	if( $childrens ){
		foreach( $childrens as $children ){
				$args = 'page_id=' . $children->ID;
				$query = new WP_Query( $args );

					while ( $query->have_posts() ): 
						$query->the_post(); ?>
								
							<div class="owl-item">
								<div class="slider">
									<div class="slider-img">
										<div class="bgd"></div>
										<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
									</div>
									<h2 class="slider-title"><?php the_title() ?></h2>
									<p class="slider-caption"><?php echo get_the_content() ?></p>
								</div>
							</div>

					<?php endwhile;
		}
	}
	wp_reset_postdata();
	?>
<?php  ?>
							
					</div>
			</div>
		</div>
	</div>

				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						
	<section class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-xl-8 content">

								<article class="post">
									<div class="post-descr">
										<p class="post-short-info"><?php the_content() ?></p>
									</div>
								</article>

							<?php endwhile; ?>
				<?php else: ?>
					<p>Записи відсутні</p>
				<?php endif; ?>
								
				<?php the_posts_pagination( ) ?>
				
			</div>

			<?php get_sidebar() ?>

		</div>
	</section>


<?php get_template_part( 'templates/partners' ); ?>

<?php get_template_part( 'templates/popups' ); ?>
	

<?php get_footer(); ?>
