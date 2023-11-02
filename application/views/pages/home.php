<div class="banner" style="margin-bottom:-6rem;" >
    <img src="<?php echo base_url('assets/img/new-2.jpg'); ?>" style="width:100%;height:100%" alt="Banner Image">
    <div class="banner-text" style="position: relative;
    top: -34rem;
    left: 9rem;">
        <h2 style="color:white; font-size:5rem;">Fresh Bakers</h2>
        <p style="color:white; font-size:3rem;">Fresh is what we do.</p>
        <a style="color:#684551;" href="<?php echo site_url('about'); ?>" class="btn btn-light">Learn More</a>
    </div>
</div>

<h2 style="text-align: center;
    font-size: 3rem;
    padding-bottom: 5rem; color: #dca530;">Latest Blog Posts</h2>
<style>
    .card-img-top {
        height: 300px; /* Adjust the height to your desired value */
        object-fit: cover; /* Ensures the image covers the entire card */
    }
</style>

<div class="row">
    <?php foreach($posts as $post) : ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post->post_image; ?>" alt="<?php echo $post->title; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->title; ?></h5>
                    <p class="card-text"><?php echo word_limiter($post->body, 50); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="<?php echo site_url('posts/' . $post->slug); ?>" class="btn btn-sm btn-outline-secondary">Read More</a>
                        </div>
                        <small class="text-muted"><?php echo date('F j, Y', strtotime($post->created_at)); ?></small>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<h2 style="text-align: center;
    font-size: 3rem;
    padding: 3rem 0; color: #dca530;">Latest Categories</h2>

<style>

.list-group-item a {
  color: #684551;
  text-decoration:none;
}
</style>

<ul class="list-group" >
    <?php foreach($categories as $category) : ?>
        <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></li>
    <?php endforeach; ?>
</ul>










