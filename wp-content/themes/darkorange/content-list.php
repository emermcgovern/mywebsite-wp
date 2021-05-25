<?php
/*
 * The content used by files archive, index and search.
 */
?>

<?php if( is_home() ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-home'); ?>>
<?php } else { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-not-home'); ?>>
<?php } ?>
	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<p class="sticky-title"><?php _e( 'Featured post', 'darkorange' ); ?></p>
	<?php endif; ?>

	<h2 class="post-title entry-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permalink to %s', 'darkorange'), the_title_attribute('echo=0')); ?>"> <?php the_title(); ?></a>
	</h2>

	<?php get_template_part( 'content-postmeta' ); ?>

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('post-thumbnail', array('class' => 'list-image'));
		} ?>
		<?php if ( get_theme_mod( 'darkorange_content_type' ) == "no" ) { ?>
			<?php the_content(); ?>
		<?php } else { ?>
			<?php the_excerpt(); ?>
		<?php } ?>
	</div>

	<?php if ( get_theme_mod( 'darkorange_read_more' ) != "no" ) { ?>
		<div class="more">
			<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark"><?php _e( 'Read More &raquo;', 'darkorange' ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a>
		</div>
	<?php } ?>
</article>
