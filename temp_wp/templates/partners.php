<section class="partners container-fluid">
	<div class="container">
		<div class="title">
			<h2>Партнери</h2>
		</div>
		<div class="row justify-content-around">

	<?php 

	$the_query = new WP_Query( 'pagename=partners' );
	$id = $the_query->queried_object_id;

	$childrens = get_children( array( 
		'post_parent' => $id,
		'post_type'   => 'page', 
		'numberposts' => -1,
		'post_status' => 'any'
	) );
	wp_reset_postdata();
	if( $childrens ){
		foreach( $childrens as $children ){
				// var_dump($children);
				$args = 'page_id=' . $children->ID;
				$query = new WP_Query( $args );

					while ( $query->have_posts() ): 
						$query->the_post(); ?>
								
							<div class="col-md-3 col-sm-4 col-6">
								<div class="partners-item" data-partner="<?php echo CFS()->get('partner_link'); ?>">
									<div class="partners-image"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
									<h3 class="partners-title"><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</div>
							</div>

					<?php endwhile;
		}
	}
	?>
		</div>
	</div>
</section>