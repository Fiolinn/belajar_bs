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
                        <label class="col-4" style="color: white;">ID Bagian</label>
                        <div class="col-3">
                            <input name="nik" class="form-control" type="text" placeholder="Masukan ID Bagian" required>
                        </div>
                    </div>
                    <!-- l-Nik -->

                        <!-- Nama -->
                        <div class="row mb-3">
                        <label class="col-4" style="color: white;">Nama Bagian</label>
                        <div class="col-8">
                            <input name="nama" class="form-control" type="text" placeholder="Masukan Nama Bagian" required>
                        </div>
                    </div>
                    <!-- l-Nama -->

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
