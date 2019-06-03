<?php

function get_last_post($post_type, $limit = 3)
{
	$query = new WP_Query(array(
			'post_type'	=>	array($post_type),
			'post_status'	=>	'publish',
			'posts_per_page'	=>	$limit,
			'orderby' => 'date',
			'order' => 'DESC'
		));
	
	return $query;
}