<?php get_header(); ?>

	<section class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-xl-8 content">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<h2 class="content-header"><?php echo get_the_title() ?></h2>

								<article class="post">
									<div class="post-img">
										
										<?php if (has_post_thumbnail()): ?>
										<img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="">
										<div class="post-img-title">
											<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
										</div>
										
										<?php endif; ?>
									</div>
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

<!-- 	<section class="info container">
		<div class="title">
			<h2 class="info-header">Допомогти</h2>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4"><a class="connect-btn support"><span>Допомогти</span></a></div>
			<div class="col-12 col-sm-12 col-md-4"><a class="connect-btn support"><span>Нам</span></a></div>
			<div class="col-12 col-sm-12 col-md-4"><a class="connect-btn support"><span>Вам</span></a></div>
		</div>
	</section> -->

<?php get_template_part( 'templates/partners' ); ?>

<?php get_template_part( 'templates/popups' ); ?>
	

<?php get_footer(); ?>
