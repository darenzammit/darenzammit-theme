<?php

add_filter( 'excerpt_more', function(){
	return sprintf('<a href="%s" class="more-link">→</a>', get_the_permalink());
});