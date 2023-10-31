<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])){
    $id =$_POST['id'];
    $nik_karyawan =$_POST['nik_karyawan'];
    $tahun =$_POST['tahun'];
    $bulan =$_POST['bulan'];
    $gaji_bayar =$_POST['gaji_bayar'];

    $submit = $koneksi->query("INSERT INTO penggajian VALUES(
        '$id',
        '$nik_karyawan',
        '$tahun',
        '$bulan',
        '$gaji_bayar'
    )");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Disimpan")</script>';
        header("location:../penggajian");
    }else{
        echo '<script>alert("Data GAGAL Disimpan")</script>';
        header("location:../penggajian");
    }
}else if(isset($_POST['edit'])){
    $id =$_POST['id'];
    $nik_karyawan =$_POST['nik_karyawan'];
    $tahun =$_POST['tahun'];
    $bulan =$_POST['bulan'];
    $gaji_bayar =$_POST['gaji_bayar'];

    $submit = $koneksi->query("UPDATE penggajian SET
        id = '$id',
        nik_karyawan = '$nik_karyawan',
        tahun='$tahun',
        bulan='$bulan',
        gaji_bayar='$gaji_bayar'
        WHERE
        id = '$id';
    ");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Diubah")</script>';
        header("location:../penggajian");
    }else{
        echo '<script>alert("Data GAGAL Diubah")</script>';
        header("location:../penggajian");
    }
}else if(isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM penggajian WHERE id = '$_GET[id]'");
    if($delete)  {
        echo '<script>alert("Data Berhasil Dihapus")</script>';
        header("location:../penggajian");
    }else{
        echo '<script>alert("Data GAGAL Dihapus")</script>';
        header("location:../penggajian");
    }
}
?>