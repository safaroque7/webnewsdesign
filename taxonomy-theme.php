<?php get_header(); ?>

<div class="container">
	<div class="row mb-5">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('part/themeQuery'); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="col-12">
				<p class="text-center text-muted"><?php esc_html_e('No posts found.', 'your-text-domain'); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>