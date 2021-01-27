<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Warga Air Joman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">N I K</label>
                            <div class="col-sm-9">
                                <input type="text" name="a1" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Kependudukan ( NIK )" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="a2" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tempat" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="a3" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat dan Tanggal Lahir" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="a4" class="form-control">
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="a5" class="col-sm-3 control-label">Desa</label>
                            <div class="col-sm-2 col-xs-9">
                            <select name="a5" class="form-control" required="required">
                                <option value=""> - Pilih - </option>
                                <?php
                                $desa = mysqli_query($koneksi,"SELECT * FROM tb_desa");
                                while($d = mysqli_fetch_array($desa)){
                                    ?>
                                    <option value="<?php echo $d['desa_id']; ?>"><?php echo $d['desa_nama']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="a6" class="col-sm-3 control-label">Dusun</label>
                            <div class="col-sm-2 col-xs-9">
                            <select name="a6" class="form-control" required="required">
                                <option value=""> - Pilih - </option>
                                <?php
                                $desa = mysqli_query($koneksi,"SELECT * FROM tb_dusun");
                                while($d = mysqli_fetch_array($desa)){
                                    ?>
                                    <option value="<?php echo $d['dusun_id']; ?>"><?php echo $d['dusun_nama']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=p_datawarga&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Warga
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $NIK              = $_POST['a1'];
	$nama_lengkap     = $_POST['a2'];
	$tt_lahir         = $_POST['a3'];
	$jenis_kelamin    = $_POST['a4'];
    $desa           = $_POST['a5'];
    $dusun           = $_POST['a6'];

	
    //buat sql
    $sql="INSERT INTO tb_penduduk_tetap VALUES ('','$NIK','$nama_lengkap','$tt_lahir','$jenis_kelamin','$desa', $dusun')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_datawarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
