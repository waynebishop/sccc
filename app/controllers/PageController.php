<?php

abstract class PageController {

	protected $title;
	protected $metaDesc;
	protected $dbc;
	protected $plates;

	Public function __construct () {

		// Instantiate Plates Library
		$this->plates = new League\Plates\Engine('app/templates');

	}




	// Force children classes to have the buildHTML function
	abstract public function buildHTML();

}