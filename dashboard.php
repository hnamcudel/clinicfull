<?php
include "config.php";
$result = mysqli_query($con,"SELECT * FROM disease");
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard </title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <script>
            $(document).ready(function() {
            $('#example').DataTable();
         } );
        </script>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2> <span class="las la-accusoft"></span>HEOTHI Life</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active "><span class="las la-igloo"></span>
                            <span>Manage Disease</span></a>
                    </li>
                    <li>
                        <a href="diaseases.php"><span class="las la-users"></span>
                            <span>Add Disease</span></a>
                    </li>
                    <li>
                        <a href="loginpage.php"><span class="las la-clipboard-list"></span>
                            <span>Log out</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <a href="searchbar.php" id="btn">Search</a>
                </div>
                <div class="user-wrapper">
                    <img src="download.png" width="30px" height="30px" alt="">
                    <div>
                        <h4>Longsup</h4>
                        <small>Admin</small>
                    </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>Users</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1><?php echo mysqli_num_rows($result)?></h1>
                            <span>Disease</span>
                        </div>
                        <div>
                            <span class="las la-clipboard"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>124</h1>
                            <span>Examination</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>124</h1>
                            <span>Treatment</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>
                </div>
                <?php require_once 'cn.php'?>
                <?php 
                ?>
                <?php
                    if (mysqli_num_rows($result) > 0) {

                    ?>

                <table class="table table-hover table-dark" style="margin-top: 40px ; position: sticky; color: #a7a7a7; ">
                    
                      <tr style=" color: #2691d9;">
                        <th scope="col">ID</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Symptoms</th>
                        <th scope="col">Treatments</th>
                        <th scope="col">Management</th>
                      </tr>
                    
                    
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                      <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["disease"]; ?></td>
                        <td><?php echo $row["symptom"]; ?></td>
                        <td><?php echo $row["treatment"]; ?></td>
                        <td> <a href="cn.php?delete=<?php echo $row['id']?>">Delete</a>/<a href="manage.php?id=<?php echo $row['id'] ?>">Manage</a> </td>
                      </tr>
                        <?php
                            $i++;
                            }
                        }
                        ?>
                    
                  </table>
            </main>
        </div>
    </body>
</html> 