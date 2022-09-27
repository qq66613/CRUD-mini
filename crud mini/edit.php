<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Mahasiswa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1>Edit Mahasiswa</h1>
    <form autocomplete="off" action="" method="post">
        <?php
        require 'config.php';
        $nim = $_GET["nim"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tb_data WHERE nim = $nim "));
        ?>
        
        <input type="hidden" id="nim" value="<?php echo $rows['nim']?>"> <br>
        <label for="">Nama</label>
        <input type="text" id="nama" value="<?php echo $rows['nama']?>"> <br>
        <label for="">Alamat</label>
        <input type="text" id="alamat" value="<?php echo $rows['alamat']?>"> <br>
        <label for="">Fakultas</label>
        <select class="" id="fakultas">
            <option value="Information Technology"<?php if($rows['fakultas']=="Information Technology") echo "selected";?>>Information Technology</option>
            <option value="System Information"<?php if($rows['fakultas']=="System Information") echo "selected";?>>System Information</option>
            <option value="Management"<?php if($rows['fakultas']=="Management") echo "selected";?>>Management</option>
            <option value="Creative Visual Design"<?php if($rows['fakultas']=="Creative Visual Design") echo "selected";?>>Creative Visual Design</option>
        </select><br>
        <button type="button" onclick="submitData('edit');">Edit</button>
        
    </form><br>
    <a href="index.php">To Index</a>
    <?php
     require 'script.php';
    ?>
</body>

</html>