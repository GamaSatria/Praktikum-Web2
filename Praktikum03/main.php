<?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $hobi = $_POST["hobi"];
    $ipk = $_POST["ipk"];

// Buat fungsi status
function cekStatus($ipk) {
    if ($ipk >= 3 && $ipk <= 4) {
        return "Lolos";
     }else {
        return " Tidak Lolos";
    }

    }
    $status = cekStatus($ipk);
}

require_once  "hpala.php";
?>
<div class="container">
    <h1> Form Pendaftaran</h1>
    <form method="POST" action="main.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki laki">
                    <label for="jk_0" class="custom-control-label">Laki laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                    <label for="jk_1" class="custom-control-label">Perempun</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Hobi</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" value="Membaca">
                    <label for="hobi[]_0" class="custom-control-label">Membaca</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" value="Menyanyi">
                    <label for="hobi[]_1" class="custom-control-label">Menyanyi</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" value="Menonton">
                    <label for="hobi[]_2" class="custom-control-label">Menonton</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_3" type="checkbox" class="custom-control-input" value="Sepak Bola">
                    <label for="hobi[]_3" class="custom-control-label">Sepak Bola</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label>
            <div class="col-8">
                <input id="ipk" name="ipk" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
   <?php
        if (isset($nama)) {
            echo "Nama: $nama<br>";
        }
        if (isset($jk)) {
            echo "Jenis Kelamin: $jk<br>";
        }
        if (isset($hobi)) {
            echo "Hobi: ";
            foreach ($hobi as $h) {
                echo $h . ", ";
            }
            echo "<br>";
        }
        if (isset($ipk)) {
            echo "IPK: $ipk<br>";
        }
        if (isset($status)) {
            echo "Status: $status";
        }
    ?>
</div>

<?php
require_once "footer.php";
?>,
