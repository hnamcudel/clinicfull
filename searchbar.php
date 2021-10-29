<DOCTYPE html>
    <html>
        <head>
            <title>Search bar</title>
        </head>

        <body>
            <form method = "post">
                <label>Search</label>
                <input type="text" name="search">
                <input type="submit" name="submit">
            </form>
            

        </body>
    </html>


<?php
//<?php include 'search.php'? -> nếu muốn cho cái file php ở dưới ra 1 file khác xong add vào 1 file search.html thì dùng code ở đầu cmt
$con =new PDO("mysql:host=localhost;dbname=patient_record", 'root','');

if (isset($_POST["submit"])){
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `disease` WHERE disease LIKE '%$str%' ORDER BY disease ");
    //disease LIKE '%$str'
    //ORDER BY disease

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth-> execute();

    if($row =$sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>disease</th>
                <th>symptom</th>
                <th>treatment</th>
            </tr>
            <tr>
                <td><?php echo $row->disease; ?></td>
                <td><?php echo $row->symptom; ?></td>
                <td><?php echo $row->treatment; ?></td>

            </tr>
        </table>
<?php        
    }
        
        else{
            echo "disease does not exist";
        }



}
?>