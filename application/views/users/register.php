<div class="form-container" style="margin:0 auto; width:50%">
<?php echo form_open('users/register'); ?>
			<h1 class="text-center mt-4 mb-4"><?= $title; ?></h1>
			<div class="form-group mt-4">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group mt-4">
				<label>Zipcode</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
			</div>
			<div class="form-group mt-4">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group mt-4">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group mt-4">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group mt-4">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
<?php echo form_close(); ?>


<style>
span {
    color: red;
}
</style>

<?php
if(validation_errors()) {
    echo '<span>' . validation_errors() . '</span>';
}
?>




</div>
