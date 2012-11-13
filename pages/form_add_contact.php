<form class="form-horizontal" action="actions/add_contact.php" method="post">
	
	<div class="control-group">
		<label class="control-label" for="firstname">Name</label>
		<div class="controls inline">
			<input type="text" name="firstname" placeholder="First Name" class="span2"/>
			<input type="text" name="lastname" placeholder="Last Name" class="span2"/>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="email">Email</label>
		<div class="controls inline">
			<label><input class="span4" type="text" name="email" placeholder="Email Address" /></label>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="phone">Phone</label>
		<div class="controls inline">
			<label><input class="span4" type="text" name="phone" placeholder="Phone Number" class="span2"/></label>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>