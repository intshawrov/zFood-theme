<?php  

	

	function amader_extra_box(){

		$food = new_cmb2_box([
			'title'			=> 'Food Box',
			'id'			=> 'food-box',
			'object_types'	=> ['latest_food']
		]);

		$food -> add_field([
			'name'	=> 'Food Name',
			'type'	=> 'text',
			'id'	=> 'food_name'
		]);

		$food -> add_field([
			'name'	=> 'Food Image',
			'type'	=> 'file',
			'id'	=> 'food_image'
		]);
	}
	add_action('cmb2_init','amader_extra_box');











?>