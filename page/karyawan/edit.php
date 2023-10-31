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
<?php
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();



?>
<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Karyawan</h2>
    
    

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">

                        <!-- Nik -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">NIK</label>
                        <div class="col-3">
                            <input name="nik" class="form-control" type="text" placeholder="Masukan NIK" value="<?= $data['nik']?>" readonly>
                        </div>
                    </div>
                    <!-- l-Nik -->

                        <!-- Nama -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">NAMA</label>
                        <div class="col-8">
                            <input name="nama" class="form-control" type="text" placeholder="Masukan NAMA" value="<?= $data['nama']?>">
                        </div>
                    </div>
                    <!-- l-Nama -->

                        <!-- Tanggal Mulai -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">TANGGAL MULAI</label>
                        <div class="col-2">
                            <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan TANGGAL MULAI" value="<?= $data['tanggal_mulai']?>">
                        </div>
                    </div>
                    <!-- l-Tanggal Mulai -->

                        <!-- Gaji pokok -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">GAJI POKOK</label>
                        <div class="col-5">
                            <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan GAJI POKOK" value="<?= $data['gaji_pokok']?>">
                        </div>
                    </div>
                    <!-- l-Gaji pokok -->

                        <!-- Status -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">STATUS</label>
                        <div class="col-4">
                            <select class="form-control" name="status_karyawan" id="">
                                <option value="TETAP" <?= $data['status_karyawan'] == 'TETAP' ? "selected" : "" ?>>TETAP</option>
                                <option value="KONTRAK" <?= $data['status_karyawan'] == 'KONTRAK' ? "selected" : "" ?>>KONTRAK</option>
                                <option value="MAGANG" <?= $data['status_karyawan'] == 'MAGANG' ? "selected" : "" ?>>MAGANG</option>
                            </select>
                        </div>
                    </div>
                    <!-- l-Status -->

                        <!-- Status -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">BAGIAN</label>
                        <div class="col-4">
                            <select class="form-control" name="bagian_id" id="">
                            
                            <?php
                                $bagian = $koneksi ->query("SELECT * FROM bagian");
                                foreach ($bagian as $row) {
                            ?>
                            <option value="<?= $row['id']?>"
                            <?php if ($row['id'] == $data['bagian_id']){
                                echo'selected';
                            }?> ><?= $row['nama'] ?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <!-- l-Status -->
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit" class="btn bg-primary" style="margin-left 10px; color:white;">Edit</button>
                    <button type="reset" name="ulang" class="btn bg-danger" style="margin-left 10px; color:white;">Ulang</button>
                </div>
            </div>
        </form>
    </section>
</body>
<?php
include '../../templates/script.php';
?>

</html>

<script>
    	
new DataTable('#example');
</script>
