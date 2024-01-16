<?php
header("Content-type: application/json");
include 'conn.php';

// Check if 'action' is set in the $_POST array
$action = isset($_POST['action']) ? $_POST['action'] : '';

function readAll($conn) {
    $data = array();
    $message = array();

    // read All students in the database
    $query = "SELECT * FROM student";

    // execute the query
    $result = $conn->query($query);

    // success or error
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $message = array("status" => true, "data" => $data);
    } else {
        $message = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($message);
}

function registerStudent($conn){
    
    $studentId = $_POST['id'];
    $studentName = $_POST['name'];
    $studentClass = $_POST['class'];
    $data = array();
    $query = "INSERT INTO student(id,name,class)VALUES('$studentId','$studentName'
    ,'$studentClass')";
    $result = $conn->query($query);
    if($result){
        $data = array("status" => true, "data" => "Registered Successfull");
    }else{
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}



if ($action !== '') {
    // Use the action if it's set
    $action($conn);
} else {
    echo "Action is Required....";
}
?>