<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage panadero-bakery
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php esc_html(the_title( '<h1 class="entry-title">', '</h1>' )); ?>
		<?php panadero_bakery_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<p><?php the_content();?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'panadero-bakery' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>