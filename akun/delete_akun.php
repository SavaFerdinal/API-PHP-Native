<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Mendapatkan Nilai Variabel
    $IdAkun = $_POST['id_akun'];

    //Pembuatan Syntax SQL
    $sql = "DELETE FROM akun WHERE id_akun = '$IdAkun'";

    //Import File Koneksi Databse
    require_once('../koneksi.php');

    //Eksekusi Query Database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menghapus Akun';
    }else{
        echo 'Gagal Menghapus Akun';
    }
    mysqli_close($con);
}
?>