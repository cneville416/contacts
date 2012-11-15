<?php 
//Read all lines from the data file
	$lines = file('data/contacts.txt' , FILE_IGNORE_NEW_LINES);
if(count($lines)> 0){
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
	$first3 = substr($contact_info[3],0,3);
	$next3 = substr($contact_info[3],3,3);
	$last4 = substr($contact_info[3],6,4);
	$profile_pic = $contact_info['5']
?>	 
	<div class="contact">
		<img src="data/pictures/<?php echo $profile_pic ?>" alt="avatar" />
		<h3><?php echo"$name"?></h3>
		<p class="email"><a class="btn btn-primary" href="mailto:<?php echo"$email"?>"><i class="icon-envelope icon-white"></i> <?php echo"$email"?></a></p>
		<p class="phone"><i class="icon-th"></i> <?php echo "($first3) $next3-$last4"?></p>
		<a class="btn btn-danger remove" href="./actions/delete_contact.php?email=<?php echo $email ?>"><i class="icon-trash icon-white"></i> Delete</a>
	</div>
	
<?php }} 
 else {
	echo '<div class="alert">You have no contacts. Add one <a href="./?p=form_add_contact">here</a></div>';
 }

?>