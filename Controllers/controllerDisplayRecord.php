<?php

include('../Models/DB.php');
//class dynamicly displays all records from database to the screen
class ControllerDisplayRecord{
  //In constructor displayRecord method is called to echo db data
  function __construct() {
    $this->displayRecords();
  }

  public function displayRecords() {
    //At first, filter is disabled
    $filter = "";
    //Makes connection with db and gets all records in the form of an array
    $db = new DB();
    $resultSet = $db->queryRecords();
    $emailProviders = array();

    //If any button is pressed, filter value changes to buttons value
    if(isset($_POST['submitBtn'])){
      $filter = $_POST['submitBtn'];
    }
        
    //Loops through all rows in DB and prints them
    for ($i = 0; $i < count($resultSet); $i++) {
      //Gets the email provider value
      $parts = explode("@",$resultSet[$i]["email"]);
      $domain = array_pop($parts);
      //Stores email provider values in the array if it is not present
      if(!in_array($domain, $emailProviders)){
        array_push($emailProviders, $domain);
      }
      if(stripos($resultSet[$i]["email"], $filter) !== false || $filter == ""){
        echo "<div>
                <tr>
                  <td>".$resultSet[$i]["email"]."</td>
                </tr>
              </div>";
      }
    }
    echo '<br>filter emails<br>';
    //Places nececery email provider buttons for filtering
    foreach($emailProviders as $providers){
      echo '<form method="POST">
            <button name="submitBtn" type="submit" value="'.$providers.'">'.$providers.'</button>
            </form>';
    }        
  }
}
?>

