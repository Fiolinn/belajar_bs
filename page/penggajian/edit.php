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
$data = $koneksi->query("SELECT * FROM penggajian WHERE id = '$id'")->fetch_array();



?>
<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Penggajian</h2>
    
    

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">

                        <!-- ID -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">ID</label>
                        <div class="col-3">
                            <input name="id" class="form-control" type="text" placeholder="Masukan ID" value="<?= $data['id']?>" readonly>
                        </div>
                    </div>
                    <!-- l-ID -->

                        <!-- Nik -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Nik Karyawan</label>
                        <div class="col-8">
                            <input name="nik_karyawan" class="form-control" type="text" placeholder="Masukan Nik Karyawan" value="<?= $data['nik_karyawan']?>">
                        </div>
                    </div>
                    <!-- l-Nik -->

                        <!-- Tahun -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Tahun</label>
                        <div class="col-2">
                            <input name="tahun" class="form-control" type="number" placeholder="Masukan Tahun" value="<?= $data['tahun']?>">
                        </div>
                    </div>
                    <!-- l-Tahun -->

                        <!-- Bulan -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Bulan</label>
                        <div class="col-5">
                            <input name="bulan" class="form-control" type="number" placeholder="Masukan Bulan" value="<?= $data['bulan']?>">
                        </div>
                    </div>
                    <!-- l-Bulan -->

                        <!-- Gaji -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">GAJI</label>
                        <div class="col-5">
                            <input name="gaji_bayar" class="form-control" type="number" placeholder="Masukan GAJI" value="<?= $data['gaji_bayar']?>">
                        </div>
                    </div>
                    <!-- l-Gaji -->
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
