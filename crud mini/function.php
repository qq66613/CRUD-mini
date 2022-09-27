<?php
require 'config.php';

if (isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();   
    }
    else if ($_POST["action"] == "edit"){
        edit();
    }
    else {
        delete();
    }
}

function insert(){
    global $conn;

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $fakultas = $_POST["fakultas"];
    

    $query = "INSERT INTO tb_data VALUES('','$nama','$alamat','$fakultas')";
    mysqli_query($conn,$query);
    echo "Submit Success";
}

function edit(){
    global $conn;

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $fakultas = $_POST["fakultas"];
    

    $query = "UPDATE tb_data SET nama='$nama',alamat='$alamat',fakultas='$fakultas' WHERE nim=$nim ";
    mysqli_query($conn,$query);
    echo "Update Success";
}

function delete(){
    global $conn;

    $nim = $_POST["action"];
    
    $query = "DELETE FROM tb_data WHERE nim = $nim ";
    mysqli_query($conn,$query);
    echo "Deleted Success";
}
?>