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
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah Karyawan</h2>
    
    

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
                            <input name="nik" class="form-control" type="text" placeholder="Masukan NIK" required>
                        </div>
                    </div>
                    <!-- l-Nik -->

                        <!-- Nama -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">NAMA</label>
                        <div class="col-8">
                            <input name="nama" class="form-control" type="text" placeholder="Masukan NAMA" required>
                        </div>
                    </div>
                    <!-- l-Nama -->

                        <!-- Tanggal Mulai -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">TANGGAL MULAI</label>
                        <div class="col-2">
                            <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan TANGGAL MULAI" required>
                        </div>
                    </div>
                    <!-- l-Tanggal Mulai -->

                        <!-- Gaji pokok -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">GAJI POKOK</label>
                        <div class="col-5">
                            <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan GAJI POKOK" required>
                        </div>
                    </div>
                    <!-- l-Gaji pokok -->

                        <!-- Status -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">STATUS</label>
                        <div class="col-4">
                            <select class="form-control" name="status_karyawan" id="">
                            <option value="">===PILIH WOI===</option>
                                <option value="TETAP">TETAP</option>
                                <option value="KONTRAK">KONTRAK</option>
                                <option value="MAGANG">MAGANG</option>
                            </select>
                        </div>
                    </div>
                    <!-- l-Status -->

                        <!-- Status -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">BAGIAN</label>
                        <div class="col-4">
                            <select class="form-control" name="bagian_id" id="">
                                <option value="">===INI JUGA DIPILIH===</option>
                            <?php
                                $bagian = $koneksi ->query("SELECT * FROM bagian");
                                foreach ($bagian as $row) {
                            ?>
                            <option value="<?= $row['id']?>"><?= $row['nama'] ?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <!-- l-Status -->
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="simpan" class="btn bg-primary" style="margin-left 10px; color:white;">Simpan</button>
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
