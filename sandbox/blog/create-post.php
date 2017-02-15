<?php
// create-post.php
 ?>


<form method="post" action="save-post.php">
  <label>Title</label>
  <input type="text" name="title">
  <hr>
  <label>Image URL</label>
  <input type="text" name="img">
  <hr>
  <label>Content</label>
  <br>
  <textarea name="content" rows="8" cols="80"></textarea>
  <br>
  <button>Submit</button>
</form>
