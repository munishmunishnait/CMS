<div class="login-container" style="margin:0 auto; width:50%">
<?php echo form_open('users/login'); ?>
			<h1 class="text-center mt-4 mb-4"><?php echo $title; ?></h1>
			<div class="form-group mt-4">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group mt-4">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
<?php echo form_close(); ?>


</div>