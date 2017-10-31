<?php

add_action('admin_init', function () {
	add_editor_style(get_template_directory_uri(). '/dist/css/admin.css?v='.time());
});