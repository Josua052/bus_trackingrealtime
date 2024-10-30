<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Page</title>
</head>
<body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Maps</td>
        </tr>

        <?php
        require 'connection.php';
        $rows = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id DESC");
        $i = 1;

        foreach($rows as $row) :
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td style = "width: 450px; height:450px"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed' width="100%" height="100%"></iframe> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">BACK</a>
</body>
</html>