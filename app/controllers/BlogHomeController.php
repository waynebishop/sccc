<?php

class BlogHomeController extends PageController {

	// Properties - specific to this page
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		$this->dbc = $dbc;


	}


	// Methods (functions)

	public function buildHTML() {

		// Get latest posts
		$allData = $this->getLatestPosts();

		$data = [];

		$data['allPosts'] = $allData;

		echo $this->plates->render('blogHome', $data);	
		
	}

	private function getLatestPosts() {

		// Prepare some SQL
		$sql = "SELECT posts.id, title, intro, article, image, location, type, created_at, updated_at, user_id, team_id, report_id, status, first_name, last_name, purpose, reportsJrSr, team_name, grade, teamsJrSr
				FROM posts

				JOIN users
				ON user_id = users.id

				JOIN reports
				ON report_id = reports.id

				JOIN teams
				ON team_id = teams.id";


		if( $_SESSION['privilege'] != 'admin' ) {

		$sql .= " WHERE status = 'Approved' ";
		
		}

		// Run the SQL and capture the result
		$result = $this->dbc->query($sql);

		// Extract the results
		$allData = $result->fetch_all(MYSQLI_ASSOC);


		// Return the results to the code that called this function 
		return $allData;

	}


}
