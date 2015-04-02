<?php

class PointsController extends AppController {
	public $helpers = array('Html', 'Form', 'GoogleMap');
	public $components = array(
		'Geocoder.Geocoder'
	);

	public function index() {
	}

	public function random() {
		$this->set('points', $this->Point->find('all',array(
			'order' => 'rand()',
			'limit' => 3
			)
		));
	}
}