<form class="form-horizontal" action="actions/add_contact" method="post">
	
	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls inline">
			<label><input type="text" name="firstname" placeholder="First Name" class="span2"/>
			<input type="text" name="lastname" placeholder="Last Name" class="span2"/></label>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls inline">
			<label><input type="text" name="email" placeholder="Email Address" /></label>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls inline">
			<label><input type="text" name="phone" placeholder="Phone Number" class="span2"/></label>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>