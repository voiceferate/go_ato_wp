<?php get_header(); ?>
<?php $sligerImagePath = get_template_directory_uri() . "/assets/img/slider"; ?>

				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						
	<section class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-xl-8 content">

								<article class="post">
									<div class="post-descr">
										<p class="post-short-info"><?php the_content() ?></p>
										<?php wp_nav_menu([
											'theme_location' => 'help',
											'container' => false,
											'menu_class' => 'page-links help-links'
										]); ?>
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
