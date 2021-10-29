<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $conn->query("DELETE FROM disease WHERE id=$id");
        header("location: dashboard.php");
    }



?>