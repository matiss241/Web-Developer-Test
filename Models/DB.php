<?php 

class DB {
  const user = 'root';
  const password = 'root';
  const host = 'localhost';
  const port = 3306;
  const dbname = "record";
  private $conn; //variable which maintains connection with db
  function __construct() {
    try {
        $this->conn = new PDO("mysql:host=" . self::host, self::user, self::password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //creating a db if not exists
        $dbname = "record";
        $this->createDB($dbname, $this->conn);
        //connect once more to db, this time to a particcular table
        $this->conn = new PDO("mysql:host=" . self::host . ";dbname=$dbname", self::user, self::password);
        $this->createTable("emails", $this->conn);
    } catch (PDOException $e) {
        echo "Connection or creating db failed: " . $e->getMessage();
        // die();
    }
  }
  function __destruct() {
    $conn = null;
  }

    //Creates statement and executes it after that, uses databese name that is passed to the method
  public function createDB($name) {
    $createDB = "CREATE DATABASE IF NOT EXISTS  $name";
    $this->conn->exec($createDB);
  }

    //creates table if one doesn't exist with given name
    //1 fields - email
    public function createTable($name){
      try {
        $createTB = "CREATE TABLE IF NOT EXISTS $name (
        ID INT NOT NULL AUTO_INCREMENT,
        email TEXT NOT NULL,
        PRIMARY KEY (ID)
        )";
        $this->conn->exec($createTB);
        } catch (Exception $e) {
            echo "Adding record was not succesful: " . $e->getMessage();
        }
      }

    //Adds record to the table, by default task is in progress, not completed
    public function addRecord($email){
      try {
        //creates statement with prepare statement method
        //statement is prepared end then executed
        $com = "INSERT INTO emails (email) VALUES (?)";
        $stm = $this->conn->prepare($com);
        $stm->execute([$email]);
      } catch (Exception $e) {
        echo "Adding record was not succesful: " . $e->getMessage();
      }
    }

    //return all the data from table "emails" as an array
    public function queryRecords() {
      try {
        //sorts emails alphabetically
        $sql = "SELECT * FROM emails ORDER BY email";
        //query is saved in variable to fetch all data and return the result of all rows
        $result = $this->conn->query($sql);
        $rows = $result->fetchAll();
        return $rows;
      } catch (Exception $e) {
        echo "Adding record was not succesful: " . $e->getMessage();
      }
    }
}
?>