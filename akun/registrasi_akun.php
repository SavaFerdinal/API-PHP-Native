<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Mendapatkan Nilai Variabel
    $IdAkun = $_POST['id_akun'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    //Pembuatan Syntax SQL
    $sql = "INSERT INTO akun (id_akun,name,email,password) VALUES ('$IdAkun', '$Name', '$Email', '$Password')";

    //Import File Koneksi Databse
    require_once('../koneksi.php');

    //Eksekusi Query Database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menmbahkan Akun';
    }else{
        echo 'Gagal Menambahkan Akun';
    }
    mysqli_close($con);
}
?>