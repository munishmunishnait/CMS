<h2 style="text-align:center; margin:2rem 0; font-size:2.5rem; color:#dca530;">Latest Blog Posts</h2>
<style>
	.card-img-top {
    height: 400px;
    object-fit: cover;
	}


</style>
<div class="row">
    <?php foreach($posts as $post) : ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="<?php echo $post['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <p class="card-text"><?php echo word_limiter($post['body'], 80); ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small>
                    <br><a class="btn btn-primary btn-sm float-right mt-4 mb-2" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
</div>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>

