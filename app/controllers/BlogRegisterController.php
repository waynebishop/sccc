<?php

class BlogRegisterController {

	// Properties


	// Constructor



	// Methods (functions)
	
	public function registerAccount() {

		// Validate the users data


		// Check the database to see if email in use


		// Check the strength of the password


		// Register the account or show error messages



		// If successful log user in and redirect to Blog Home



	}

	public function buildHTML() {

		// Instantiate Plates Library
		$plates = new League\Plates\Engine('app/templates');

		echo $plates->render('blogRegister');



	}



}