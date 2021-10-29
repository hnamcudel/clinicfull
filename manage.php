<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style4.css">
    <title>ADD DISEASES</title>
</head>
<body>
    <?php
        error_reporting(0);
        require_once 'cn.php';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM disease WHERE id=$id";
            $result = mysqli_query($conn,$query);
            if(count($result)==1) {
                $row = $result->fetch_array();
                $id = $row['id'];
                $disease = $row['disease'];
                $symptom = $row['symptom'];
                $treatment = $row['treatment'];
            }
        }

        if(isset($_POST['manage'])) {
            $idup = $_POST['id'];
            $diseaseup = $_POST['disease'];
            $symptomup = $_POST['symptom'];
            $treatmentup = $_POST['treatment'];

            $sql = "UPDATE disease SET id='$idup',disease='$diseaseup',symptom='$symptomup',symptom='$symptomup',treatment='$treatmentup' WHERE id=$id";
            if(mysqli_query($conn,$sql)){
                echo "Update success !";
                header("location:dashboard.php");
            }else {
                echo "Update failed !";
            }

        }
    ?>
    <div class="container1">
        <form method="POST" action="">
            <div class="form-group">
                <label for="id">id</label>
                <input type="id" class="form-control" name="id" placeholder="..." value ="<?php echo $id; ?>"> 
            </div>
            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="disease" class="form-control" name="disease" placeholder="..." value ="<?php echo $disease; ?>"> 
            </div>
            <div class="form-group">
                <label for="symptom">Symptom</label>
                <input type="symptom" class="form-control" name="symptom" placeholder="..." value ="<?php echo $symptom; ?>">
            </div>
            <div class="form-group">
                <label for="treatment">Treatment</label>
                <input type="treatment" class="form-control" name="treatment" placeholder="..." value ="<?php echo $treatment; ?>">
            <button type="submit" class="btn btn-primary" name="manage">Manage</button>
        </form>
    </div>
</body>
</html>