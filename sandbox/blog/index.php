<?php $page = 'home'; ?>
<?php include 'head.php'; ?>

<header>
  <h1>My Blog</h1>
</header>
<hr>
<?php
// fn's reusable pieces of code
function getPostsFromDB($count = 1) {
  $posts = [];
  for ($i=0; $i < $count; $i++) {
    $posts[] = [
      "title" => "Some Title $i",
      "img" => "pic-$i.png",
      "content" => "Some paragraph-$i"
    ];
  }
  return $posts;
}



$blogPosts = getPostsFromDB(10);
 ?>

<?php foreach ($blogPosts as $post) { ?>

  <article class="blog-post">
    <h2><?php echo $post['title'] ?></h2>
    <img src="<?php echo $post['img'] ?>" alt="">
    <p><?php echo $post['content'] ?></p>
  </article>

<?php } ?>


















<?php include 'footer.php'; ?>
