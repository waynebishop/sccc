<?php

class EditPostController extends PageController {

	// Properties



	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		// Get post info
		$this->getPostInfo();

	}


	// Methods (functions)

	public function buildHTML() {
		
	echo $this->plates->render('editPost', $this->data);	
		
	}

	private function getPostInfo() {

		// Get POST ID from GET array ie address bar
		$postID = $this->dbc->real_escape_string($_GET['id']);

		// Get User ID
		$userID = $_SESSION['id'];

		// Prepare the query
		$sql = "SELECT title, intro, article, image, location, type, user_id, team_id, report_id, status
				FROM posts
				WHERE id = $postID
				AND user_id = $userID";

		// Run the query
		$result = $this->dbc->query($sql);

		// If the query failed
		if( !$result || $result->num_rows == 0 ) {
			// Send the user back to the blogPost page - Don't own post or No post there or Query just failed
			header("Location: index.php?page=blogPost&postid=$postID");
		} else {
			$this->data['post'] = $result->fetch_assoc();
		}


	}


}



