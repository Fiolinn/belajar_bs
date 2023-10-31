<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])){
    $nik =$_POST['nik'];
    $nama =$_POST['nama'];
    $tanggal_mulai =$_POST['tanggal_mulai'];
    $gaji_pokok =$_POST['gaji_pokok'];
    $status_karyawan =$_POST['status_karyawan'];
    $bagian_id =$_POST['bagian_id'];

    $submit = $koneksi->query("INSERT INTO karyawan VALUES(
        '$nik',
        '$nama',
        '$tanggal_mulai',
        '$gaji_pokok',
        '$status_karyawan',
        '$bagian_id'
    )");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Disimpan")</script>';
        header("location:../karyawan");
    }else{
        echo '<script>alert("Data GAGAL Disimpan")</script>';
        header("location:../karyawan");
    }
}else if(isset($_POST['edit'])){
    $nik =$_POST['nik'];
    $nama =$_POST['nama'];
    $tanggal_mulai =$_POST['tanggal_mulai'];
    $gaji_pokok =$_POST['gaji_pokok'];
    $status_karyawan =$_POST['status_karyawan'];
    $bagian_id =$_POST['bagian_id'];

    $submit = $koneksi->query("UPDATE karyawan SET
        nik = '$nik',
        nama = '$nama',
        tanggal_mulai='$tanggal_mulai',
        gaji_pokok='$gaji_pokok',
        status_karyawan='$status_karyawan',
        bagian_id='$bagian_id'
        WHERE
        nik = '$nik';
    ");
    // var_dump($submit, $koneksi->error);

    if($submit) {
        echo '<script>alert("Data Berhasil Diubah")</script>';
        header("location:../karyawan");
    }else{
        echo '<script>alert("Data GAGAL Diubah")</script>';
        header("location:../karyawan");
    }
}else if(isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM karyawan WHERE nik = '$_GET[id]'");
    if($delete)  {
        echo '<script>alert("Data Berhasil Dihapus")</script>';
        header("location:../karyawan");
    }else{
        echo '<script>alert("Data GAGAL Dihapus")</script>';
        header("location:../karyawan");
    }
}
?>