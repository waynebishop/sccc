<?php

abstract class PageController {

	protected $title;
	protected $metaDesc;
	protected $dbc;
	protected $plates;
	protected $data =[];
	protected $tempPostID;
	protected $tempUserID;

	Public function __construct () {

		// Instantiate Plates Library
		$this->plates = new League\Plates\Engine('app/templates');

	}

	// Force children classes to have the buildHTML function
	abstract public function buildHTML();


	public function mustBeLoggedIn() {

		// If you are not logged in
		if( !isset($_SESSION['id']) ) {
			// Redirect the user to the login page
			header ('Location: Index.php?page=blogLogin');
		}
	}

	public function mustBeLoggedOut() {

		// If you are logged in then reirect to blogHome page
		if( isset($_SESSION['id']) ) {
			// Redirect the user to the login page
			header ('Location: Index.php?page=blogHome');
		}



	}
}