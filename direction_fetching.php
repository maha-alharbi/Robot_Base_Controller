
<head>
<title>Robot Arm Data</title>
</head>

<?php
include "Model/DB.php";

class Details{
var $db;
var $dbConn;
var $test;

public function __construct() {
    $this->db=new DB();
    $this->dbConn=$this->db->getDB();
}


public function displayDirection(){
    try{
      
        $sql = "SELECT * FROM robot_arm WHERE id=(SELECT max(id) FROM robot_arm)";
        $query = $this->dbConn->prepare($sql);
        $query->execute();
      
        foreach ($query as $row){
            echo "
              Robot Direction: ".$row['direction']."<br>
            ";
        }
        
        return true;
     
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}



}

$display = new Details();
$display->displayDirection();

?>