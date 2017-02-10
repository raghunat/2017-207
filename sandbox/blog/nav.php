<style>
  /* CSS LANGUAGE HERE */
  li.active {
    background-color: purple;
  }
</style>

<?php
function activePage($pageName = '', $currentPage = '') {
  if($pageName == $currentPage) {
    echo 'active';
  }
}
 ?>

<nav>
  <ul>
    <li class="<?php activePage('home', $page) ?>"><a href="index.php">Home</a></li>
    <li class="<?php echo isset($page) && $page == 'about' ? 'active' : '' ?>"><a href="about.php">About</a></li>
    <li class="<?php echo isset($page) && $page == 'gallery' ? 'active' : '' ?>">Gallery</li>
  </ul>
</nav>
