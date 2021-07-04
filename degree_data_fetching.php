
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


public function displayDetails(){
    try{
      
        $sql = "SELECT * FROM robot_arm WHERE id=(SELECT max(id) FROM robot_arm)";
        $query = $this->dbConn->prepare($sql);
        $query->execute();
      
        foreach ($query as $row){
            $status=($row['status']==1)?$status='On' : $status='Off';
            echo "
              motor1: ".$row['motor1']."<br>
              motor2: ".$row['motor2']."<br>
              motor3: ".$row['motor3']."<br>
              motor4: ".$row['motor4']."<br>
              motor5: ".$row['motor5']."<br>
              motor6: ".$row['motor6']."<br>
              <b>Robot Status:</b> <b>".$status."</b> <br>
            ";
        }
        
        return true;
     
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}



}

$display = new Details();
$display->displayDetails();

?>