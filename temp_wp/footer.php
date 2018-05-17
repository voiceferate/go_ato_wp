<footer class="container-fluid">
		<div class="row">
			<div class="footer-container-left col-lg-8 col-12 col-sm-12">
				<div class="row justify-content-around">

				<?php get_sidebar() ?>
					<div class="col-sm-12 col-md-5 col-12">
						<h3>Навігація</h3>
						<?php wp_nav_menu([
								'theme_location' => 'bottom1',
								'container' => false,
								'menu_class' => 'footer-list'
							]); ?>
					</div>
					<div class="col-sm-12 col-md-5 col-12">
					<h3>Реабілітація учасників АТО</h3>
						<?php wp_nav_menu([
								'theme_location' => 'bottom2',
								'container' => false,
								'menu_class' => 'footer-list'
							]); ?>
					</div>
				
				</div>
			</div>
			<div class="col-12 col-sm-12 col-lg-4">
				<div class="footer-info">

					<?php $args = 'pagename=footer-info';
						$the_query = new WP_Query( $args ); 

						while ( $the_query->have_posts() ): 
							$the_query->the_post(); ?>
								
								<div class="footer-img-block">
									<img class="img-width footer-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
									<?php the_content(); ?>
								</div>

						<?php endwhile; ?>
					<?php wp_reset_postdata();	?>

				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
