<?php

add_shortcode('email', function ($atts) {
	extract(
		shortcode_atts([
			'address' => '',
			'label' => '',
			'title' => 'Click to email'],
			$atts)
	);
	if (!is_email($address)) {
		return;
	}
	if (empty($label)) {
		$label =  antispambot($address);
	}
	return sprintf('<a href="mailto:%s" title="%s">%s</a>', antispambot($address), $title, $label);
});