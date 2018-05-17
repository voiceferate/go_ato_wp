<?php get_header(); ?>

	<section class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-xl-8 content">
				<?php if(have_posts()): ?>
						<h2 class="content-header">Новини</h2>
							<?php while(have_posts()): the_post(); ?>

								<article class="post">
									<div class="post-img">
										<img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="">
										
										<div class="post-img-title">
											<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
										</div>
									</div>
									<div class="post-descr">
										<ul class="post-descr-info">
											<?php echo the_category() ?>
											<li class="post-date"><?php echo get_the_date() ?></li>
										</ul>
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
