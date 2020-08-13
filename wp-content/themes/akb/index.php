<?php
$slug = basename(get_permalink());
?>

<?php echo get_header();?>

    <?/*
	<div id="featured">
		<?php
		if(function_exists('show_flexslider_rotator')) {
				if(is_front_page()) echo show_flexslider_rotator( 'homepage' );
		}
		?>
		<img src="/wp-content/uploads/2016/01/banner_new.png" alt="banner">
	</div>
    */?>

	<section class="callaction">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?//php echo the_breadcrumb(); ?>
					<div class="big-cta">
						<div class="cta-text">
							<h1 class="h1--<?=$slug?>">
								<?php
								if ($h1 = get_metadata('post', $post->ID, 'h1', true))
									echo $h1;
								else
									echo get_the_title();
								?>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="content"<?=is_front_page() ? ' class="index-content"' : ''?>>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php while ( have_posts() ) : the_post();
					// If comments are open or we have at least one comment, load up the comment template.
					the_content();
					// End the loop.
					endwhile;
					?>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="solidline">
					</div>
				</div>
			</div>

		</div>
	</section>
<?php echo get_footer();?>