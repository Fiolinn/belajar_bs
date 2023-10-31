<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])){
    $id =$_POST['id'];
    $nama =$_POST['nama'];

    $submit = $koneksi->query("INSERT INTO bagian VALUES(
        '$id',
        '$nama'
    )");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Disimpan")</script>';
        header("location:../bagian");
    }else{
        echo '<script>alert("Data GAGAL Disimpan")</script>';
        header("location:../bagian");
    }
}else if(isset($_POST['edit'])){
    $id =$_POST['id'];
    $nama =$_POST['nama'];

    $submit = $koneksi->query("UPDATE bagian SET
        id = '$id',
        nama = '$nama'
        WHERE
        id = '$id';
    ");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Diubah")</script>';
        header("location:../bagian");
    }else{
        echo '<script>alert("Data GAGAL Diubah")</script>';
        header("location:../bagian");
    }
}else if(isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM bagian WHERE id = '$_GET[id]'");
    if($delete)  {
        echo '<script>alert("Data Berhasil Dihapus")</script>';
        header("location:../bagian");
    }else{
        echo '<script>alert("Data GAGAL Dihapus")</script>';
        header("location:../bagian");
    }
}
?>