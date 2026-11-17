<?php get_header(); ?>
<div class="mx-auto max-w-6xl px-4 py-10">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'mb-10' ); ?>>
			<h2 class="text-2xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="mt-2 text-slate-700"><?php the_excerpt(); ?></div>
		</article>
	<?php endwhile; the_posts_pagination(); else : ?>
		<p><?php esc_html_e( 'Nothing found.', 'eqmax' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
