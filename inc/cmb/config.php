<?php  

	

	function amader_extra_box(){

		$food = new_cmb2_box([
			'title'			=> 'Food Box',
			'id'			=> 'food-box',
			'object_types'	=> ['latest_food']
		]);

		$food  -> add_field([
			'name'			=> 'Food Name',
			'type'			=> 'text',
			'id'			=> 'fn'
		]);
	}
	add_action('cmb2_init','amader_extra_box');











?>