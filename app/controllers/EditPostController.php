<?php

// import the ** INTERVENTION IMAGE ** Manager Class
use Intervention\Image\ImageManager;

class EditPostController extends PageController {

	// Properties
	private $acceptableImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff'];



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
		$sql = "SELECT posts.id, title, intro, article, image, location, type, user_id, team_id, report_id, status, purpose, reportsJrSr, team_name, grade, teamsJrSr
				FROM posts

				JOIN reports
				ON report_id = reports.id

				JOIN teams
				ON team_id = teams.id

				WHERE posts.id = $postID";

		if( $_SESSION['privilege'] != 'admin' ) {

			$sql .= " AND user_id = $userID";	

		} 		


		// Run the query
		$result = $this->dbc->query($sql);


		// If the query failed
		if( !$result || $result->num_rows == 0 ) {
			// Send the user back to the blogPost page - Don't own post or No post there or Query just failed
				
			header("Location: index.php?page=blogPost&postid=$postID");

		} else {

			// Check -  what if user has submitted a post-edit form? Must keep changes.
			if( isset($_POST['edit-post']) ) {
				// Use form data
				$this->data['post'] = $_POST;

				$result = $result->fetch_assoc();
				$this->data['originalTitle'] = $result['title'];

				// Make sure we use the current saved image from the DB if need to redisplay due to error msgs 
				// as we can'thold the new image submitted if there was one.
				$this->data['post']['image'] = $result['image'];



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
		$status = ($_POST['status']);


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


		// IMAGE Validation
		// Image validation - must have image - inarray compares this image error message with array of error codes
		// Error codes 0 AOK, 1 exceeds max size, 3 only partially uploaded, 4 No file uploaded  
		if( $_FILES['image']['name'] != '' ) {
			
			if( in_array( $_FILES['image']['error'], [1,3] ) ) {
				// Show error message
				// Use a switch to generate appropriate error message OR insert a default image per siteImages postDefaultImage 
				$this->data['imageMessage'] = 'Image failed to upload';
				$totalErrors++;			

			} elseif( !in_array( $_FILES['image']['type'], $this->acceptableImageTypes )  ) {
				// Show error message
				$this->data['imageMessage'] = 'Must be an image ie. .jpeg, .png etc.';
				$totalErrors++;

			}

		}

		
		// ** If there are no errors
		if( $totalErrors == 0 ) {

			$postID = $this->dbc->real_escape_string($_GET['id']);

				// Get the name of the original image file 
				$sql = "SELECT image FROM posts WHERE id =$postID";

				// Run the query
				$result = $this->dbc->query($sql);


				// Extract the data
				$result = $result->fetch_assoc();

				// Get the image name
				$imageName = $result['image'];

			// If the user uploaded an image
			if( $_FILES['image']['name'] != '' ) {

				// *** INTERVENTION IMAGE ***
				// create an image manager instance with favored driver
				$manager = new ImageManager();

				// Get the file that was just uploaded from temp files and save as $image
				$image  = $manager->make( $_FILES['image']['tmp_name'] );

				// Run $fileExtension function to get mime/file type ie jpeg, png etc.
				$fileExtension = $this->getFileExtension( $image->mime() );

				// Create random file name
				$fileName = uniqid();

				// Save the original to img/uploads/original folder
				$image->save("img/uploads/original/{$fileName}{$fileExtension}");

				// Resize for blogPost.php
				// Resize the image to a width of 750 for blogHome page and constrain aspect ratio (auto height)
				$image->resize(750, null, function ($constraint) {
	   				 $constraint->aspectRatio();
				});

				// Save resized medium image for blogPost page NB {} in {$fileName}{$fileExtension} is optional to aid code appearance 
				$image->save("img/uploads/blogPost/{$fileName}{$fileExtension}");

				// Resize for blogHome.php
				// Resize the image to a width of 500 for blogHome page and constrain aspect ratio (auto height)
				$image->resize(500, null, function ($constraint) {
	   				 $constraint->aspectRatio();
				});

				// Save resized smaller image for blogHome page NB {} in {$fileName}{$fileExtension} is optional to aid code appearance 
				$image->save("img/uploads/blogHome/{$fileName}{$fileExtension}");

				// Delete the old image to free up space / save storage costs
				// Destroy the old image file in the img folders
				unlink("img/uploads/original/$imageName");
				unlink("img/uploads/blogHome/$imageName");
				unlink("img/uploads/blogPost/$imageName");

				// Change the $imageName to be the new filename
				$imageName = $fileName.$fileExtension;

			}

			// *** Upload part

			// Filter the data
			$title = $this->dbc->real_escape_string($title);
			$intro = $this->dbc->real_escape_string($intro);
			$article = $this->dbc->real_escape_string($article);

			$report = $this->dbc->real_escape_string($report);
			$team = $this->dbc->real_escape_string($team);
			$location = $this->dbc->real_escape_string($location);
			$type = $this->dbc->real_escape_string($type);
			$status = $this->dbc->real_escape_string($status);

			$userID = $_SESSION['id'];

			// ADMIN We need to cover off edit by Admin as the AND user_id = $userID in the SQL below will fail if admin wasn't author.
			// Needd an if statement which makes $userID equal actual post author so it works. maybe run SQL query to get author ID??			

			// Did the user upload an image

			// Prepare the SQL
			$sql = "UPDATE posts
					SET title = '$title',
						intro = '$intro',
						article = '$article',
						report_id = '$report',
						team_id = '$team',
						location= '$location',
						type = '$type',
						image = '$imageName',
						status = '$status'
					WHERE id = $postID";

			if( $_SESSION['privilege'] != 'admin' ) {

				$sql .= " AND user_id = $userID";

			}		

			$this->dbc->query($sql);

			// Validation to make sure query ran
			if( $this->dbc->affected_rows == 0 ) {
				$this->data['updateMessage'] = 'Nothing changed. Update failed OR no changes submitted.';
			} else {

			// Redirect user back to blogPost
			header("Location: index.php?page=blogPost&postid=$postID");

			}

		}


	}

	// This function part of image handling above

	private function getFileExtension( $mimeType ) {

		switch($mimeType) {

			case 'image/png':
				return '.png';
			break;

			case 'image/gif':
				return '.gif';
			break;

			case 'image/jpeg':
				return '.jpg';
			break;

			case 'image/bmp':
				return '.bmp';
			break;

			case 'image/tiff':
				return '.tiff';
			break;

		}

	}


}



