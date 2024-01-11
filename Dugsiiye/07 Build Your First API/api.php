<?php

header("Content-type: application/json");

// function Read All
// function Insert
// function Delete
// function Update

// function Read All
function readAll($conn){
    $data = array();
    $message = array();

    // read All students in the database
    $query = "Select *from student";
     
    // excute the query
    $result = $conn->query($query);
    
    // success or error
    if($result){
        while($row =$result->fetch_assoc()){
            $data[] = $row;   
        }
        $message = array("student" => true, "data" => $data);
    }else{
        $message = array("student" => false, "data" => $conn->error);
    
    }
    echo json_encode($message);
}







?>