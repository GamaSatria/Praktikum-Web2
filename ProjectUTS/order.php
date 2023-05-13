<?php
require_once 'header.php'
?>

<div class="kontener">
    <form>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <input id="email" name="email" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="hp" class="col-4 col-form-label">No HP</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <input id="hp" name="hp" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Text Field</label>
            <div class="col-8">
                <input id="text" name="text" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="catatan" class="col-4 col-form-label">Catatan</label>
            <div class="col-8">
                <input id="catatan" name="catatan" placeholder="*Optional" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="produk" class="col-4 col-form-label">Produk</label>
            <div class="col-8">
                <select id="produk" name="produk" required="required" class="custom-select">
                    <option value="">-- Pilih Produk --</option>
                    <option value="jeruk">Jeruk Navel</option>
                    <option value="anggur">Anggur Hitam</option>
                    <option value="jambu">Jambu Merah</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
                <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button onclick="location.href='terimakasih.php'" name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once 'footer.php'
?>