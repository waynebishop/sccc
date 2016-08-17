<?php

class BlogPostController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		// Does user want to delete this post??
		if( isset($_GET['delete']) ) {
			$this->deletePost();
		}

		// Did the user add a comment
		if( isset($_POST['new-comment']) ) {
			$this->processNewComment();
		}

		$this->getPostData();

		

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('blogPost', $this->data);	

		
	}

	private function getPostData() {

		// Filter the ID
		$postID = $this->dbc->real_escape_string( $_GET['postid'] );

		$this->data['tempPostID'] = $postID;

		// Get info about this post ( ** BUT not yet team, report etc that use foreign keys ** )
		$sql = "SELECT title, intro, article, image, location, type, created_at, updated_at, first_name, last_name, user_id, team_id, report_id
				FROM posts
				
				JOIN users
				ON user_id = users.id
				 
				WHERE posts.id = $postID";


		// Run the SQL
		$result = $this->dbc->query($sql);		

		// If the query failed ie NO result or 0 rows returned
		if( !$result || $result->num_rows == 0 ) {
			// Redirect to 404 page
			header('Location: index.php?page=error404');
		} else {
			// Good to go
			$this->data['post'] = $result->fetch_assoc();

			// If the user doesn't have a name
			$fName = $this->data['post']['first_name'];
			$lName = $this->data['post']['last_name'];	

			if( !$fName  && !$lName ) {
				// Anon
				$this->data['post']['first_name'] = 'Anon';
			}

		}


		// Get all the comments and CONCAT first_name and last_name into author
		$sql = "SELECT comments.id, user_id, comment, CONCAT(first_name, ' ',last_name) AS author, created_at, updated_at
				FROM comments
				JOIN users
				ON comments.user_id = users.id
				WHERE post_id = $postID
				ORDER BY created_at DESC
				";

		$result = $this->dbc->query($sql);
		
		// extract the data as an associative array ( allComments is then referred ot as $allComments on blogPost.php)
		$this->data['allComments'] = $result->fetch_all(MYSQLI_ASSOC);




	}

	private function processNewComment() {

		// Validate comment
		$totalErrors = 0;

		// Minimum length 1

		// Maximum length 1000

		// If passed, add to the DB
		if( $totalErrors == 0 ) {

			// Filter the comment
			$comment = $this->dbc->real_escape_string( $_POST['comment'] );
			$userID = $_SESSION['id'];
			$postID = $this->dbc->real_escape_string( $_GET['postid'] );

			// Prepare SQL
			$sql = "INSERT INTO comments (comment, user_id, Post_id)
					VALUES ('$comment', $userID, $postID)
					";

			// Run the SQL
			$this->dbc->query($sql);

			// Make sure query worked ** TO DO ** as for newpost



			



		} 





	}

	private function deletePost() {

		// Is user NOT logged in
		if( !isset($_SESSION['id']) ) {
			return;
		}

		// Make sure user owns post
		
		$postID = $this->dbc->real_escape_string($_GET['postid']);
		$userID = $_SESSION['id'];
		$privilege = $_SESSION['privilege'];

		// Delete the image first - need to get image name form DB via sql query
		$sql = "SELECT image
				FROM posts
				WHERE id = $postID";

		// if the user is not an admin
		if( $privilege != 'admin' ) {
			$sql .= " AND user_id = $userID";
		}		
				
		//  Run this image read query
		$result = $this->dbc->query($sql);

		// If the query failed - post doesn't exist OR user doesn't own it
		// Return will stop Delete function & let rest of page code run
		if ( !$result || $result->num_rows == 0 ) {
			return;
		}		

		$result = $result->fetch_assoc();

		$filename = $result['image'];

		die($filename);

		// Prepare the sql
		$sql = "DELETE FROM posts
				WHERE id = $postID";

		// If user is not Admin they must own the post
		if( $privilege != 'admin' ) {
			$sql .= " AND user_id = $userID";
		}

		// Run the query




	} 



}










