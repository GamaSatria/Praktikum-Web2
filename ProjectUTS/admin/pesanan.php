<?php
    require_once 'header.php'
?>

<?php
    require_once 'sidebar.php'
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesanan Pelanggan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">No.HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teuku Muhammad Rafli Rashadifa</td>
                                <td>Depok</td>
                                <td>2023-03-23</td>
                                <td>Anggur Hitam</td>
                                <td>15 Kg</td>
                                <td>0881388954929</td>
                                <td>rrsahadifa@gmail.com</td>
                                <td>packingan nya yang bagus ya min</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jidan Muhammad</td>
                                <td>Bogor</td>
                                <td>2023-06-32</td>
                                <td>Jambu Merah</td>
                                <td>12 Kg</td>
                                <td>0881388954929</td>
                                <td>akusukalaki@gmail.com</td>
                                <td>pilihin yang asem asem kaya ketek saya</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Muhammad Fauzi</td>
                                <td>Depok</td>
                                <td>2023-07-16</td>
                                <td>Jeruk Navel</td>
                                <td>3 Kg</td>
                                <td>0881123954929</td>
                                <td>fauzingangkang@gmail.com</td>
                                <td>SAYA GAMAU TAU POKOKNYA YANG MANIS !</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php
    require_once 'footer.php'
?>