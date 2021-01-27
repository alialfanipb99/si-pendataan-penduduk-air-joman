<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Warga</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_penduduk_tetap WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">N I K</td> <td><?= $data['NIK'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td> <td><?= $data['tt_lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Desa</td> <td><?= $data['desa'] ?></td>
                        </tr>
                        <tr>
                            <td>Dusun</td> <td><?= $data['dusun'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=p_datawarga&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Warga </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

