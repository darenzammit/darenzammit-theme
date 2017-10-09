<?php
/**
 * Custom template tags for this theme
 *
 * @package darenzammit
 */

function dz_brand() {
	if (function_exists('get_custom_logo') && ($logo = get_custom_logo())) {
		echo $logo;
	} else {
		echo sprintf('<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
			esc_url(home_url('/')),
			get_bloginfo('name', 'display')
		);
	}
}