<?php

	function pony_cmb(){

		$job = new_cmb2_box(array(
				'title'=>'Job Description',
				'id'=>'df',
				'object_types'  => array('team')
		));


		$job -> add_field(array(
				'name'  => 'Job Title',
				'id'    => 'jb-title',
				'type'  => 'text'
		));

		$social = new_cmb2_box(array(
				'title'=>'Social Box',
				'id'=>'dkf',
				'object_types'  => array('team')
		));

		$social -> add_field(array(
				'name'  => 'Facebook',
				'id'    => 'fb-link',
				'type'  => 'text'
		));

		$social -> add_field(array(
				'name'  => 'Twitter',
				'id'    => 'twitter-link',
				'type'  => 'text'
		));

		$social -> add_field(array(
				'name'  => 'LinkedIn',
				'id'    => 'link-din',
				'type'  => 'text'
		));

	}
	add_action('cmb2_init','pony_cmb');


?>