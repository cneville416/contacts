<pre><?php print_r($_POST);?></pre>
<pre><?php print_r($_FILES);?></pre>
<?php
// Put all POST data into their own variables
extract($_POST);

if($firstname != '' && $lastname != '' && $email != '' && $phone != '' && is_valid_phone($phone)) {
// Open data file for appending
	$file = fopen('../data/contacts.txt','a+');

// Create a Timestamp
	$timestamp = time();
	
// Append entered info to the file
	fwrite($file,"$firstname,$lastname,$email,$phone,$timestamp,\n");

//close the data file
	fclose($file);
	
// check to see if an image was uploaded
if(count($_FILES) > 0){

// name the image
	$type = $_FILES['picture']['name'];
	$type_parts = explode('.',$type);
	$ext = $type_parts[1];
	$file_name = $firstname.'_'.$lastname.'.'.$ext ;
	echo "NEW FILE NAME $file_name";
	$dest = "../data/pictures/$file_name";
	move_uploaded_file($_FILES['picture']['tmp_name'], $dest);
//or you could use this $file_name = {$firstname}_{$lastname}.{$ext} ;
}
// Redirect to the list of contacts
//	header('Location:../');
}
/**
 * validates that a phone number is numeric and has 10 digits
 * @param unknown_type $phone
 * @return boolean
 */
function is_valid_phone($phone) {
	if(strlen($phone) == 10 && is_numeric($phone)) {
		return true;
	} else {
		return false;
	}
}
?>