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

// Redirect to the list of contacts
	header('Location:../');
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