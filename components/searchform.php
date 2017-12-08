<?php
/**
* Template for displaying search forms in Twenty Seventeen
*
* @package hex
*/
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-form-input">
		<label for="<?php echo $unique_id; ?>" class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'hex' ); ?></label>
		<input type="search" id="<?php echo $unique_id; ?>" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</div>
	<div class="search-form-btn"><button type="submit" class="btn btn-primary">Search</button></div>
</form>