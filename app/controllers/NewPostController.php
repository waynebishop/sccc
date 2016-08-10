<?php

class NewPostController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();


		// Did the user submit the new post form?
		if( isset($_POST['new-post'])  ) {

			$this->processNewPost();

		}


		

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('newPost', $this->data);	
		
	}

	private function processNewPost() {

		// Count errors
		$totalErrors = 0;

		$report = trim($_POST['report']);
		$team = trim($_POST['team']);
		$location = trim($_POST['location']);
		$type = trim($_POST['type']);
		$title = trim($_POST['title']);
		$intro = trim($_POST['intro']);
		$article = trim($_POST['article']);



		
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

		// Location validation

		if( $location == "Choose..." ) {
			$this->data['locationMessage'] = '<span class="politeWarning">Required - Please choose a location Home OR Away from the drop down list.</span>';
			$totalErrors++;

		}

		// Location validation

		if( $type == "Choose..." ) {
			$this->data['typeMessage'] = '<span class="politeWarning">Required - Please choose game type from the drop down list.</span>';
			$totalErrors++;

		}


		// Title validation

		if( strlen ( $title ) == 0 ) {
			$this->data['titleMessage'] = '<span class="politeWarning">Required</span>';
			$totalErrors++;

			

		} elseif( strlen( $title ) > 100 ) {
			$this->data['titleMessage'] = '<span class="politeWarning">Must be less than 100 characters</span>';	
			$totalErrors++;
			
		}


		// Intro validation

		if( strlen ( $intro ) == 0 ) {
			$this->data['introMessage'] = '<span class="politeWarning">Required</span>';
			$totalErrors++;

			// die('title too short');

		} elseif( strlen( $intro ) > 300 ) {
			$this->data['introMessage'] = '<span class="politeWarning">Must be less than 300 characters</span>';	
			$totalErrors++;
			
		}

		// Article (main content) validation

		if( strlen ( $article ) == 0 ) {
			$this->data['articleMessage'] = '<span class="politeWarning">Required</span>';
			$totalErrors++;

			// die('title too short');

		} elseif( strlen( $article ) > 10000 ) {
			$this->data['articleMessage'] = '<span class="politeWarning">Must be less than 10000 characters</span>';	
			$totalErrors++;
			
		}

		// If there are no errors
		if( $totalErrors == 0 ) {

			// Filter the data

			$report = $this->dbc->real_escape_string($report);
			$team = $this->dbc->real_escape_string($team);
			$location = $this->dbc->real_escape_string($location);
			$type = $this->dbc->real_escape_string($type);

			$title = $this->dbc->real_escape_string($title);
			$intro = $this->dbc->real_escape_string($intro);
			$article = $this->dbc->real_escape_string($article);

			// Get the ID of the logged in user

			$userID = $_SESSION['id'];

			// SQL (INSERT)
			$sql = "INSERT INTO posts (title, intro, article, location, type, user_id, team_id, report_id)
					VALUES ('$title', '$intro', '$article', '$location', '$type', $userID, $team, $report) ";

			$this->dbc->query( $sql );		

			// Make sure it worked & send Success or Fail message
			if( $this->dbc->affected_rows ) {
				$this->data['postMessage'] = '<span>Your post was successfully uploaded!</span>';
			} else {
				$this->data['postMessage'] = '<span class="politeWarning">Your post failed to upload. Please resubmit your post.</span>';
			}

			



		}


	}


}












