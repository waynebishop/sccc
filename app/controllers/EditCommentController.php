<?php

class EditCommentController {

	// Properties


	// Constructor


	// Methods (functions)

	public function buildHTML() {

	// Instantiate Plates Library
	$plates = new League\Plates\Engine('app/templates');	
		
	echo $plates->render('editComment');	

		
	}


}