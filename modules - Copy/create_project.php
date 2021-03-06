<?php
require_once 'db.php';
require_once 'session.php';


if(isset($_POST)){

					

// Check connection
		
	
			
		$title = clean($_POST['pTitle']); 						//title of project
		$description =  clean($_POST['description']); 			//project description
		$budget1 =  clean($_POST['customBudget']); 				//a user defined budget
		$budget2 =  clean($_POST['budget']);					//a fixed budget range
		$category =  clean($_POST['category']);					//category of current project
		//$skills =  "skills"; //clean($_POST['skills']);			//skills needed for project				
		$payStatus =  "sure"; //clean($_POST['payStatus']);				//whether user has made deposit for project
		$file_url = getFileUrl();								//url of attached files if any 
		$files = $_FILES['rFiles']; 						//if files were attached or not
		$date = date("Y-m-d h:i:sa");
		$owner_id = clean($active_session_id);;//clean($_POST['currentUser']);

		$skills = "";
foreach ($_POST['taggone'] as $selectedOption){
	
    $skills = $skills.",".$selectedOption; 
	}
	$skills = ltrim($skills, ',');
		
		
		
		
		$files_presence_check  = strlen($_FILES['rFiles']['name']);
		if($files_presence_check > 0){$files_status = 'true';}else{$files_status = 'false';}
		
if ($title && $description &&  $category && $skills && $files && $payStatus) { //($budget1 || $budget2) &&

if(isset($budget1) && "" !== trim($budget1)){$budget = $budget1;}else{ $budget = $budget2;} 
echo $budget;
    if (strlen($title) > 12) {

			if ($title !== $description) {

							//Safe db operations starts
						$test = mysql_query("INSERT INTO projects(title,description,skills,budget,category,files_status,date,owner_id,pay_status)
						VALUES('$title', '$description', '$skills', '$budget', '$category',  '$files_status', '$date', '$owner_id', '$payStatus')");
						
						$current_id = mysql_insert_id();
						$file_name = getFileName();
						$_file_type = getFileType();
						
						$test2 = mysql_query("INSERT INTO files(name,project_id,file_url,type) VALUES('$file_name','$current_id','$file_url','$_file_type')");
							//Safe db operations ends
							if($test && $test2){ echo "successful";}else{echo "Something went wrong when posting data!";};
						

            
        } else {
            echo "Your description can not be the same as your title!";
        }
    } else {

        echo "Your project Title is Too Short!";
    }

} else {
    echo "You have to complete the form!";
}
}else{echo "NO data sent";}


//fuction definitions for this script file
		
					function clean($input_str){		//temporary string cleaner
					$cleaned = mysql_real_escape_string($input_str); 
					$cleaned = htmlentities(stripslashes($cleaned));
					return $cleaned;
					
		}
		
			function getFileUrl(){
		$myfile = $_FILES['rFiles']['name'];
		$temp = $_FILES['rFiles']['tmp_name'];
		$type = $_FILES['rFiles']['type'];
						$dir = "23se45ft67ygh86f/files/";
						if (!file_exists($dir)) {
								
						mkdir($dir, 0777, true);  }
						$FileTypeExtension = pathinfo($myfile,PATHINFO_EXTENSION);
						//$targetFile = "23se45ft67ygh86f/files/".getFileName()."_(".getFileType().").".$FileTypeExtension;
						$targetFile = "23se45ft67ygh86f/files/".getFileName();
						move_uploaded_file($temp, $targetFile);
						return "23se45ft67ygh86f/files/".$myfile;
			}
			
			function getFileName(){
			
				return $_FILES['rFiles']['name'];
			
			}
			
			function getFileType(){
										switch($_FILES['rFiles']['type']){
	case 'image/jpeg':
	case 'image/gif':
	case 'image/pjpeg':	
	case 'image/png': 
	case 'image/svg+xml':
	case 'image/tiff': $type = 'image'; break;
	case 'video/mpeg':
	case 'video/mp4': 
	case 'video/webm':
	case 'video/ogg':
	case 'video/x-msvideo':
	case 'video/3gpp':
	case 'video/3gpp2':
	case 'video/quicktime': $type = 'video'; break;
	case 'audio/x-wav':
	case 'audio/webm':
	case 'audio/ogg':
	case 'audio/aac':
	case 'audio/3gpp':
	case 'audio/mpeg': $type = 'audio'; break;
	case 'application/zip': 
	case 'application/octet-stream': $type = 'zip'; break;
	case 'application/x-7z-compressed': $type = '7-zip'; break;
	case 'text/plain': $type = 'text'; break;
	case 'application/pdf': $type = 'pdf'; break;
	case 'application/vnd.ms-powerpoint':  
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation': $type = 'powerpoint'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': 
	case 'application/msword': $type = 'ms_word_document'; break;
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': $type='spreadsheet'; break;
	case 'application/rtf': $type = 'rich_text_file'; break;
	default: $type = 'file'; break;
	
	
                                   }
					return $type;								   
			
			}

?>