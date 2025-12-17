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
		
		$food  -> add_field([
			'name'			=> 'Food Photo',
			'type'			=> 'file',
			'id'			=> 'fp'
		]);
		$food  -> add_field([
			'name'			=> 'Price From',
			'type'			=> 'text_money',
			'id'			=> 'pf'
		]);
		$food  -> add_field([
					'name'			=> 'Price To',
					'type'			=> 'text_money',
					'id'			=> 'pt'
				]);
	}
	add_action('cmb2_init','amader_extra_box');











?>