<div class="form-container" style="margin:0 auto; width:50%">
<h2 class="text-center mt-4 mb-4"><?= $title; ?></h2>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group mt-4">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group mt-4">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group mt-4">
	  <label>Category</label>
	  <select name="category_id" class="form-control">
		  <?php foreach($categories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group mt-4">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
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