<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>VIEW PATIENT</title>
    </head>
    <body>
        <?php require_once 'connectv.php' ?>
        <?php 
            $result = $conn -> query("SELECT * FROM diseases");
        ?>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Disease</th>
                        <th scope="col">Symptom</th>
                        <th scope="col">Prescription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th><?php echo $row['disease']; ?></th>
                        <td><?php echo $row['symptom']; ?></td>
                        <td><?php echo $row['prescription']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>