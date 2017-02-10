<?php
// utils.php

// A blueprint for an author
class Author
{
  // Properties of an Author
  // Public means other code can use it easily.
  public $firstName = "First Name";
  public $lastName = "Last Name";
  public $email = "some@one.com";

  // Sets the default properties/methods
  function __construct($first, $last, $email)
  {
    // $this really means the author I am "constructing"
    // "->propertyName" is how you access those properties
    // notice no second $ sign is used.
    $this->firstName = $first;
    $this->lastName = $last;
    $this->email = $email;
  }

  public function say($message) {
    echo "<b>$this->firstName $this->lastName : </b> $message";
  }

  public function sayHi() {
    $this->say("Hi!");
  }

  public function sayGoodBye() {
    $this->say("Good Bye!");
  }

} // class ends


 ?>
