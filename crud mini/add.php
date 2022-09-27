<!DOCTYPE html>
<html lang="en">

<head>
    <title>add Mahasiswa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1>Add Mahasiswa</h1>
    <form autocomplete="off" action="" method="post">
        <label for="">Nama</label>
        <input type="text" id="nama" value=""> <br>
        <label for="">Alamat</label>
        <input type="text" id="alamat" value=""> <br>
        <label for="">Fakultas</label>
        <select class="" id="fakultas">
            <option value="Information Technology">Information Technology</option>
            <option value="System Information">System Information</option>
            <option value="Management">Management</option>
            <option value="Creative Visual Design">Creative Visual Design</option>
        </select><br>
        <button type="button" onclick="submitData('insert');">Submit</button>
        
    </form><br>
    <a href="index.php">To Index</a>
    <?php
     require 'script.php';
    ?>
</body>

</html>