
<html lang ="en" dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="textfield">
                <input type="text" id="txt_uname" name="txt_uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="textfield">
                <input type="password" id="txt_uname" name="txt_pwd" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">
            <?php
            include "config.php";

            if(isset($_POST['but_submit'])){

                $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
                $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

            if ($uname != "" && $password != ""){

                $sql_query = "select count(*) as cntUser from Users where username='".$uname."' and password='".$password."'";
                $result = mysqli_query($con,$sql_query);
                $row = mysqli_fetch_array($result);

                $count = $row['cntUser'];

                if($count > 0){
                    $_SESSION['uname'] = $uname;
                    header('Location: dashboard.php');
                }else{
                    echo "Incorrect password !";
                }

            }

        }
    ?>
            </div>
            <input type="submit" value="Login" name="but_submit" id="but_submit">
        </form>
    </div>
    </body>
</html>