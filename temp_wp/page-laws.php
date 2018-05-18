<?php get_header(); ?>
<?php $sligerImagePath = get_template_directory_uri() . "/assets/img/slider"; ?>

				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						
	<section class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-xl-8 content">
							<h2 class="content-header content-header__smaller">Посилання на різні закони і документи, які регулюють діяльність і можуть бути корисними для членів спілки</h2>
								<article class="post">
									<div class="post-descr">
										<?php wp_nav_menu([
											'theme_location' => 'laws',
											'container' => false,
											'menu_class' => 'page-links laws-links'
										]); ?>
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
