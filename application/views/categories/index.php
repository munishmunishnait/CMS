<h2 style="text-align:center; margin:2rem 0; font-size:2.5rem; color:#dca530;"><?= $title; ?></h2>
<ul class="list-group my-category-list" style="font-size: 1.4em;">
  <?php foreach($categories as $category) : ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
      <?php if($this->session->userdata('user_id') == $category['user_id']): ?>
        <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
          <input type="submit" class="btn-link text-danger" value="[X]">
        </form>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<style>
	.my-category-list {
  margin: 0;
  padding: 0;
  list-style: none;
}

.my-category-list li {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  margin-bottom: 5px;
  background-color: #f9f9f9;
}

.my-category-list li a {
  color: #333;
  text-decoration: none;
}

.my-category-list li a:hover {
  text-decoration: underline;
}

.my-category-list li .cat-delete {
  display: inline-block;
}

</style>