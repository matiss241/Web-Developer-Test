<?php
include('../Models/DB.php');
//class ads record from form to database
class ControllerAddRecord {
  //vareable for input data
  private $email; 

  //ALL functionality is inside constructor because they are called once, each time different values
  function __construct(){
    $db = new DB();
    if (isset($_POST['email'])) {
      echo "isset";
      $this->email = trim($_POST['email']);
      $db->addRecord($this->email);
      $db->queryRecords();
    } else {
      die("Not isset Post");
    }
  }
}


$a = new controllerAddRecord();
//After the creation of an object and record's submition to the db, user is sent to successful subscribtion page
header("Location: ../Views/subscribed.php");
?>
