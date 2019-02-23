<?php
    header('Content-Type: application/json');
$servername = "192.168.0.2";

$dbname = "playground";
$conn = new MySQLi($servername, "webuser", "password", $dbname);

 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $record = $_POST['record'];
       
        
        $get_result = $conn->query("INSERT INTO records(record) VALUES ('$record')"); 
 
        if($get_result === true){
        echo "Successfully Registered";
        }else{
        echo $username."Not Registered";
        }
    }else{
        echo 'error';
    }
?>