<?php include "head.php" ?>

<?php
$friends = [
  "Sam",
  "Edward",
  "Bella"
];

foreach ($friends as $friend) {
  echo "<b>$friend</b> is my friend<br>";
}
 ?>

<hr>
<?php foreach ($friends as $friend) { ?>
  <article>
    <h2><?php echo $friend ?></h2>
    <p>A lot of words about my awesome friends</p>
  </article>
<?php } ?>
<hr>

<?php include "footer.php" ?>
