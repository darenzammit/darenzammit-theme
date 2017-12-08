<?php

add_filter( 'excerpt_more', function(){
	return sprintf('<a href="%s" class="more-link">→</a>', get_the_permalink());
});


/**
 * Replace searchform
 */
add_filter('get_search_form', function(){
	$search_form_template = locate_template('components/searchform.php');
	if ('' != $search_form_template) {
		ob_start();
		require $search_form_template;
		$form = ob_get_clean();
	}
	return $form;
});