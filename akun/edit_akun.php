<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Mendapatkan Nilai Variabel
    $IdAkun = $_POST['id_akun'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    //Pembuatan Syntax SQL
    $sql = "UPDATE akun SET
                name = '$Name',
                email = '$Email',
                password = '$Password'
            WHERE id_akun = '$IdAkun'";

    //Import File Koneksi Databse
    require_once('../koneksi.php');

    //Eksekusi Query Database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Mengubah Akun';
    }else{
        echo 'Gagal Mengubah Akun';
    }
    mysqli_close($con);
}
?>