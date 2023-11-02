<div class="form-container" style="margin:0 auto; width:50%">
<h2 class="text-center mt-4 mb-4"><?= $title; ?></h2>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group mt-4">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
</form>

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