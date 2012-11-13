<?php 
//Read all lines from the data file
	$lines = file('data/contacts.txt' , FILE_IGNORE_NEW_LINES);

//Loop over the lines
	foreach($lines as $line) {
// At this point $line contains an entire line,
//With info seperated by commas
//Split the line's data into pieces that are,
//seperated by commas
	$contact_info = explode(',',$line);
	
	$firstname = $contact_info[0];
	$lastname = $contact_info[1];
	$name = "$firstname $lastname";

	$email = $contact_info[2];
	$phone = $contact_info[3];
?>
	<div class="contact">
		<img src="http://placehold.it/100x100" alt="avatar" />
		<h3><?php echo"$name"?></h3>
		<p class="email"><?php echo"$email"?></p>
		<p class="phone"><?php echo"$phone"?></p>
	</div>
<?php  }?>