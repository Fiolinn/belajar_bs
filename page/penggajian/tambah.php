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

                        <!-- ID -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">ID</label>
                        <div class="col-3">
                            <input name="id" class="form-control" type="text" placeholder="Masukan ID" required>
                        </div>
                    </div>
                    <!-- l-Nik -->

                        <!-- Nama -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Nik Karyawan</label>
                        <div class="col-8">
                            <input name="nik_karyawan" class="form-control" type="text" placeholder="Masukan Nik" required>
                        </div>
                    </div>
                    <!-- l-Nama -->

                        <!-- Tanggal Mulai -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Tahun</label>
                        <div class="col-2">
                            <input name="tahun" class="form-control" type="number" placeholder="Masukan Tahun" required>
                        </div>
                    </div>
                    <!-- l-Tanggal Mulai -->

                        <!-- Gaji pokok -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Bulan</label>
                        <div class="col-5">
                            <input name="bulan" class="form-control" type="number" placeholder="Masukan Bulan" required>
                        </div>
                    </div>
                    <!-- l-Gaji pokok -->

                        <!-- Gaji pokok -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">GAJI</label>
                        <div class="col-5">
                            <input name="gaji_bayar" class="form-control" type="number" placeholder="Masukan Gaji" required>
                        </div>
                    </div>
                    <!-- l-Gaji pokok -->

                        
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
