<?php 
$args = [
	'pagename1' => 'about',
	'pagename2' => 'activities',
	'pagename3' => 'about'
];

foreach ($args as $arg_k => $arg_v) {

	$the_query = new WP_Query( substr($arg_k, 0, -1) . '=' . $arg_v ); 

	// Цикл
	while ( $the_query->have_posts() ): 
		$the_query->the_post(); ?>

			<div id="<?php echo $arg_v ?>" class="white-popup mfp-hide">
				<div class="white-popup-wrap">	
					<div class="white-popup-img">
						<img class="img-responsive" src=" <?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="white-popup-content">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>


	<?php endwhile; ?>
<?php wp_reset_postdata(); };	?>





<!-- <div id="work" class="white-popup mfp-hide">
	<div class="white-popup-wrap">	
		<div class="white-popup-img">
		</div>
		<div class="white-popup-content">
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quisquam neque ut, sunt consequuntur atque aliquam dolore consectetur, ipsum ad, laboriosam fuga. Laboriosam at, iste culpa voluptatem amet vel ipsum.</p>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quisquam neque ut, sunt consequuntur atque aliquam dolore consectetur, ipsum ad, laboriosam fuga. Laboriosam at, iste culpa voluptatem amet vel ipsum.</p>			
		</div>
	</div>
</div>
<div id="additional" class="white-popup mfp-hide">
	<div class="white-popup-wrap">	
		<div class="white-popup-img">
		</div>
		<div class="white-popup-content">
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quisquam neque ut, sunt consequuntur atque aliquam dolore consectetur, ipsum ad, laboriosam fuga. Laboriosam at, iste culpa voluptatem amet vel ipsum.</p>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quisquam neque ut, sunt consequuntur atque aliquam dolore consectetur, ipsum ad, laboriosam fuga. Laboriosam at, iste culpa voluptatem amet vel ipsum.</p>			
		</div>
	</div>
</div> -->