<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Tampil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Data Tampil</h1>
    <table border=2 >
        <tr>
            <td>Nim</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Fakultas</td>
            <td>action</td>
        </tr>
    <?php
    require 'config.php';
    $rows = mysqli_query($conn,"SELECT * FROM tb_data");
    $im = 1;

    ?>
    <?php foreach ($rows as $row):?>
        <tr nim = <?php echo $row["nim"]; ?>>
            <td><?php echo $im++?></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["alamat"]?></td>
            <td><?php echo $row["fakultas"]?></td>
            <td>
                <a href="edit.php?nim=<?php echo $row['nim'];?>">
                Edit</a>
                <button type="button" onclick="submitData(<?php echo $row['nim']; ?>);">
                Delete</button>
            </td>
        </tr>
            
    <?php endforeach;?>
    </table>
    <br>
    <a href="add.php">Add</a>
    <?php
    require 'script.php';
    ?>

    </body>
</html>