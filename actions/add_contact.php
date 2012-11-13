<?php 
// Put all POST data into their own variables
	extract($_POST);
	
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
?>