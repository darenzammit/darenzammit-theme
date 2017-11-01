<?php

add_shortcode('email', function ($atts) {
	extract(
		shortcode_atts([
			'address' => '',
			'label'   => '',
			'title'   => 'Click to email'],
			$atts)
	);
	if (!is_email($address)) {
		return;
	}
	if (empty($label)) {
		$label = antispambot($address);
	}
	return sprintf('<a href="mailto:%s" title="%s">%s</a>', antispambot($address), $title, $label);
});

add_shortcode('newsletter-form', function ($atts, $content) {
	$file = locate_template('components/newsletter-form.php');

	extract(shortcode_atts(array(
		'name' => '',
	), $atts));

	ob_start();
	include $file;
	$template = ob_get_contents();
	ob_end_clean();
	return $template;
});
