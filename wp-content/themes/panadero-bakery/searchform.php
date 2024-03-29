<?php
/**
 * Template for displaying search forms in panadero-bakery
 *
 * @package WordPress
 * @subpackage panadero-bakery
 * @since 1.0
 * @version 0.1
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label >
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'panadero-bakery' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'panadero-bakery' ); ?>" value="<?php echo esc_attr(get_search_query() ); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button', 'panadero-bakery' ); ?></button>
</form>