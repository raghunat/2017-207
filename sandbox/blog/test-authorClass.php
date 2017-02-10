<?php
// test-authorClass.php
include 'utils.php';

// TODO
// 1. Make an author
$poe = new Author("Edgar", "Poe", "had_me@the_font.com");
// 2. Have him say hi!
// echo "<b>$poe->firstName $poe->lastName : </b> Hi!";
$poe->sayHi();
// 3. Have him say goodbye!
//echo "<b>$poe->firstName $poe->lastName : </b> Good Bye!";
$poe->sayGoodBye();

 ?>
