<?php


// import the ** INTERVENTION IMAGE ** Manager Class
use Intervention\Image\ImageManager;


class NewPostController extends PageController {

	// Properties

	private $acceptableImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff'];


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

		// Image validation - must have image - inarray comapres this image error message with array of error codes
		if( in_array( $_FILES['image']['error'], [1,3,4] ) ) {
			// Show error message
			// Use a switch to generate appropriate error message OR insert a default image per siteImages postDefaultImage 
			$this->data['imageMessage'] = 'Image failed to upload';
			$totalErrors++;			

		} elseif( !in_array( $_FILES['image']['type'], $this->acceptableImageTypes )  ) {
			// Show error message
			$this->data['imageMessage'] = 'Must be an image ie. .jpeg, .png etc.';
			$totalErrors++;

		} 





		// If there are no errors
		if( $totalErrors == 0 ) {

			
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

			// Save resized smaller image for blogHome page NB {} in {$fileName}{$fileExtension} is optional to aid code appearance 
			$image->save("img/uploads/blogPost/{$fileName}{$fileExtension}");

			// Resize for blogHome.php
			// Resize the image to a width of 500 for blogHome page and constrain aspect ratio (auto height)
			$image->resize(500, null, function ($constraint) {
   				 $constraint->aspectRatio();
			});

			// Save resized smaller image for blogHome page NB {} in {$fileName}{$fileExtension} is optional to aid code appearance 
			$image->save("img/uploads/blogHome/{$fileName}{$fileExtension}");






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
			$sql = "INSERT INTO posts (title, intro, article, location, type, user_id, team_id, report_id, image)
					VALUES ('$title', '$intro', '$article', '$location', '$type', $userID, $team, $report, '$fileName$fileExtension') ";

			$this->dbc->query( $sql );		

			// Make sure it worked & send Success or Fail message
			if( $this->dbc->affected_rows ) {
				$this->data['postMessage'] = '<span>Your post was successfully uploaded!</span>';
			} else {
				$this->data['postMessage'] = '<span class="politeWarning">Your post failed to upload. Please resubmit your post.</span>';
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












