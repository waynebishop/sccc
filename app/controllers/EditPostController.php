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

		// Did user submit edit form
		if( isset($_POST['edit-post']) ) {
			$this->processPostEdit();
		}

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

		$this->data['tempPostId'] = $postID;

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

			// Check -  what is user has submitted a post-edit form? Must keep changes.
			if( isset($_POST['edit-post']) ) {
				// Use form data
				$this->data['post'] = $_POST;

				$result = $result->fetch_assoc();
				$this->data['originalTitle'] = $result['title'];



			} else {
				// Use the DB data
				$result = $result->fetch_assoc();

				$this->data['post'] = $result;

				$this->data['originalTitle'] = $result['title'];


			}

			
		}


	}

	private function processPostEdit() {

		// Validation
		$totalErrors = 0;


		$report = trim($_POST['report_id']);
		$team = trim($_POST['team_id']);
		$location = trim($_POST['location']);
		$type = trim($_POST['type']);
		$title = trim($_POST['title']);
		$intro = trim($_POST['intro']);
		$article = trim($_POST['article']);


		// Validate title
		if( strlen( $title ) > 100 ) {
			$totalErrors++;
			$this->data['titleError'] = 'Must not exceed 100 characters. Thanks.';
		}

		// Validate intro
		if( strlen( $intro ) > 300 ) {
			$totalErrors++;
			$this->data['introError'] = 'Must not exceed 300 characters thanks.';
		}

		// Validate main article/content
		if( strlen( $article ) > 1000 ) {
			$totalErrors++;
			$this->data['articleError'] = 'Must not exceed 1000 characters thanks.';
		}



		// Report validation

		if( $report == 0 ) {
			$this->data['reportMessage'] = '<span class="politeWarning">Required - Please choose a report from the drop down list.</span>';
			$totalErrors++;

		}

		// Team validation

		if( $team == 0 ) {
			$this->data['teamMessage'] = '<span class="politeWarning">Required - Please choose a team from the drop down list.</span>';
			$totalErrors++;

		}

		// ** Validation required??? 

		// Location validation

		// if( $location == "Choose..." ) {
		// 	$this->data['locationMessage'] = '<span class="politeWarning">Required - Please choose a location Home OR Away from the drop down list.</span>';
		// 	$totalErrors++;

		// }

		// Type validation

		// if( $type == "Choose..." ) {
		// 	$this->data['typeMessage'] = '<span class="politeWarning">Required - Please choose game type from the drop down list.</span>';
		// 	$totalErrors++;

		// }


		// ** If there are no errors
		if( $totalErrors == 0 ) {

			// Filter the data
			$title = $this->dbc->real_escape_string($title);
			$intro = $this->dbc->real_escape_string($intro);
			$article = $this->dbc->real_escape_string($article);

			$report = $this->dbc->real_escape_string($report);
			$team = $this->dbc->real_escape_string($team);
			$location = $this->dbc->real_escape_string($location);
			$type = $this->dbc->real_escape_string($type);

			$postID = $this->dbc->real_escape_string($_GET['id']);
			$userID = $_SESSION['id'];


			// Prepare the SQL
			$sql = "UPDATE posts
					SET title = '$title',
						intro = '$intro',
						article = '$article',
						report_id = '$report',
						team_id = '$team',
						location= '$location',
						type = '$type'
					WHERE id = $postID
					AND user_id = $userID";

			$this->dbc->query($sql);

			// Redirect user back to blogPost
			header("Location: index.php?page=blogPost&postid=$postID");

		}


	}


}



