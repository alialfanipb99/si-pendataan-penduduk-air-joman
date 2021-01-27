<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_penduduk_tetap WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Warga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                             <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['NIK']?>"class="form-control" id="inputEmail3" placeholder="No Induk Kependudukan" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tempat" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat" value="<?=$data['tt_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat/Tanggal Lahir">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    
                                </select>
                            </div>
                        </div>

                           <div class="form-group">
                            <label for="desa" class="col-sm-3 control-label">Desa</label>
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
                            <label for="dusun" class="col-sm-3 control-label">Dusun</label>
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
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Desa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=desa&actions=tampil" class="btn btn-danger btn-sm">
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
   
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $a5=$_POST['a5'];
    $a6=$_POST['a6'];
    
    //buat sql
    $sql="UPDATE tb_penduduk_tetap SET NIK = '$nik', nama_lengkap='$nama', tt_lahir='$tempat', jenis_kelamin='$jenis_kelamin', desa='$a5', dusun='$a6' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_datawarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



