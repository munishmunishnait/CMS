<style>
	.post-title {
		font-size: 2.5rem;
		margin-bottom: 1rem;
	}

	.post-date {
		color: #999;
		font-size: 0.9rem;
	}

	.post-image {
		max-width: 100%;
		margin-bottom: 1rem;
	}

	.post-body {
		font-size: 1.2rem;
		line-height: 1.5;
	}

	.post-actions {
		margin-top: 1rem;
	}

	.post-actions a {
		margin-right: 0.5rem;
	}

	.post-actions input[type="submit"] {
		margin-right: 0.5rem;
	}
</style>

<h2 style="text-align:center; margin:2rem 0; font-size:2.5rem; color:#dca530;"><?php echo $post['title']; ?></h2>
<!-- <small class="post-date">Posted on: <?php //echo $post['created_at']; ?></small><br> -->
<img class="post-image" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
	<style>
		.post-actions .btn {
			height: 40px;
			width: 100px;
		}
	</style>
	<div class="post-actions d-flex">
		<hr>
		<a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
		<?php echo form_open('/posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>
	</div>
<?php endif; ?>

<hr>
<h3>Comments</h3>
<?php if(isset($comments) && $comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>

<hr>
<div class="form-container" style="margin:0 auto; width:50%">
<h3 class="text-center mt-4 mb-4">Add Comment</h3>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group mt-4">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group mt-4">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group mt-4">
		<label>Comment</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary mt-4" type="submit">Submit</button>
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
