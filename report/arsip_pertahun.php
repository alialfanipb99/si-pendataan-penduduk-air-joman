<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                   <div class="text-center">
                       <h2>Sistem Informasi Pendataan Penduduk Kantor Camat Air Joman </h2>
                        <h4>Jalan Kebun Sayur No. 08, Air Joman <br>  Kabupaten Asahan, Sumatera Utara, 212.11</h4>
                        <hr>
                        <h3>DATA SURAT TAHUN   <? echo "$ambilthn"; ?></h3>
                       <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                                     <th>No.</th><th width="10%"><center>No Surat</center></th><th><center>Kode Surat</center></th><th width="10%"><center>Tanggal Surat</center></th><th width="17%"><center>Tanggal Surat Masuk/Keluar Surat</center></th><th width="15%"><center>Nama Pengirim</center></th><th width="20%"><center>Perihal</center></th><th width="10%"><center>Disposisi</center></th>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM surat";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['kode_surat'] ?></td>
                                    <td><?= $data['tgl_surat'] ?></td>
                                    <td><?= $data['tgl_masuk_keluar'] ?></td>
                                    <td><?= $data['nama_pengirim'] ?></td>
                                    <td><?= $data['perihal'] ?></td>
                                    <td><?= $data['dispos'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Air Joman  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Camat AirJoman<strong></u><br>
                                        NIP.17220410
                                    </td>
                                </tr>
                            </tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>