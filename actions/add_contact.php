<?php
// Extract all POST data to their own variables
extract($_POST);

// Check to see that a candidate was chosen and that a valid SSN was entered
if(isset($vote) && isset($ssn) && is_valid_ssn($ssn) && !has_voted($ssn)) {
	// Open file
	$file = fopen('../data/contacts.txt', 'a+');

	// Write SSN & vote
	fwrite($file, "$firstname,$lastname,$email,$phone\n");

	// Close file
	fclose($file);

	header('Location:../');
} else {
	header('Location:../?p=form_vote');
}


/**
 * Checks to see if the provided Phone has 10 digits
 */
function is_valid_phone($phone) {
	if(strlen($phone) == 10 && is_numeric($phone)) {
		return true;
	} else {
		return false;
	}
}
?>