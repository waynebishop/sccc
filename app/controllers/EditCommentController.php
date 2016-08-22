<?php

class EditCommentController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor in the PageController as the public function above overode it.
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->mustBeloggedIn();

		$this->mustOwnComment();

		// Did the user submit the form
		if( isset($_POST['edit-comment'])) {
			$this->processComment();
		}

	}


	// Methods (functions)

	public function buildHTML() {	
		
		echo $this->plates->render('editComment', $this->data);	

	}

	private function mustOwnComment() {

		// Get the ID for logged in user
		$userID = $_SESSION['id'];

		// Get the comment ID
		$commentID = $this->dbc->real_escape_string($_GET['id']);

		// Get the commentdetails from the DB
		$sql = "SELECT comment, post_id 
				FROM comments

				


				 
				WHERE id = $commentID ";

		// If the user is not an admin ** ADMIN SPECIAL **
		if($_SESSION['privilege'] != 'admin') {
			$sql .= " AND user_id  = $userID"; 
		}		
				 
		// Run the query to get the comment		
		$result = $this->dbc->query( $sql );		

		// If no result - broken OR 0 rows returned
		if( !$result || $result->num_rows == 0 ) {
			// Redirect the user
			header('Location: index.php?page=blogHome');
		} else {
			// Get the comment from DB
			$theComment = $result->fetch_assoc();

			$this->data['comment'] = $theComment['comment'];
			$this->data['post_id'] = $theComment['post_id'];

		}


	}

	private function processComment() {
		
		$totalErrors = 0;

		// Check the length does not exceed max
		if ( strlen($_POST['comment']) > 1000 ) {
			$totalErrors++;
			$this->data['commentError'] = 'Must not exceed 1000 characters';
		}

		// If AOK then update  DB
		if ( $totalErrors == 0 ) {

			//Get commentID
			$commentID = $_GET['id'];

			// Get comment
			$comment = $this->dbc->real_escape_string($_POST['comment']);

			// Prepare SQL
			$sql = "UPDATE comments
					SET comment = '$comment',
						updated_at = CURRENT_TIMESTAMP 
					WHERE id = $commentID";

			// Run the query
			$this->dbc->query($sql);		

			// Redirect back to post where comment resides
			header('Location: index.php?page=blogPost&postid='.$this->data['post_id']);

		}


	}	


}





