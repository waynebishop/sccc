<?php

class BlogPostController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->getPostData();

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('blogPost', $this->data);	

		
	}

	private function getPostdata() {

		// Filter the ID
		$postID = $this->dbc->real_escape_string( $_GET['postid'] );

		// Get info about this post ( ** BUT not yet team, report etc that use foreign keys ** )
		$sql = "SELECT id, title, intro, article, image, location, type, created_at, updated_at
				FROM posts 
				WHERE id = $postID";

		// Run the SQL
		$result = $this->dbc->query($sql);		

		// If the query failed ie NO result or 0 rows returned
		if( !$result || $result->num_rows == 0 ) {
			// Redirect to 404 page
			header('Location: index.php?page=error404');
		} else {
			// Good to go
			$this->data['post'] = $result->fetch_assoc();
		
		}



	}


}