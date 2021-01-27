<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <strong>Selamat Datang di Aplikasi Pendataan Penduduk Air Joman</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Penduduk Air Joman</h3>
                </div>
                <div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th width="20%">NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Desa</th>
                                <th>Dusun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_penduduk_tetap";
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
                                    <td><?= $data['NIK'] ?></td>
                                    <td><?= $data['nama_lengkap'] ?></td>
                                    <td><?= $data['tt_lahir'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['desa'] ?></td>
                                    <td><?= $data['dusun'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Masuk Untuk Login Ketua</center></h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login 
                                </button>
                            </div>
                    </form>
                    <br><br><br>
                           
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
