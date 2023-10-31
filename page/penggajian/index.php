<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Penggajian</h2>
    
    

    <!--card-->
    <section class="container">
    <div class="card">
        <div class="card-header">
        <a href="tambah.php" class="btn bg-primary" style="margin-left 10px; color:white;">Tambah</a>
        </div>
        <div class="card-body">
        <table  id="example" class="table table-striped" style="width:100%" >
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nik Karyawan</th>
      <th scope="col">Tahun</th>
      <th scope="col">Bulan</th>
      <th scope="col">Gaji</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
     $penggajian = $koneksi -> query("SELECT * FROM penggajian ORDER BY id DESC");
     while($data = $penggajian->fetch_array()){;
    ?>
    <tr>
        <td><?= $data['id'] ?></td>
        <td><?= $data['nik_karyawan'] ?></td>
        <td><?= $data['tahun'] ?></td>
        <td><?= $data['bulan'] ?></td>
        <td><?= $data['gaji_bayar'] ?></td>
        <td>
        <a href="edit?id=<?= $data['id']?>" class="btn bg-primary" style=" color:white;">Edit</a>
        <a href="proses?id=<?= $data['id']?>" class="btn bg-danger" style=" color:white;">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
        </table>
        </div>
        </div>
        
    </section>

    <!--End card-->

</body>
<?php
include '../../templates/script.php';
?>

</html>

<script>
    	
new DataTable('#example');
</script>
