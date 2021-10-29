<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(isset($_POST['submit'])){

        if(!empty($_POST['disease']) && !empty($_POST['symptom']) && !empty($_POST['treatment'])){

            $disease = $_POST['disease'];
            $symptom = $_POST['symptom'];
            $treatment = $_POST['treatment'];

            $query = "insert into disease(disease,symptom,treatment) values('$disease','$symptom','$treatment')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if($run){
                header("location: dashboard.php");
                

            }
            else {

                echo  "Form not submitted !";
            }
            }
        else {
            echo "All fields required";
        }

    }
?>