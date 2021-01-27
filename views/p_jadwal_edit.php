<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_jadwal WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Dusun</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="hri" class="col-sm-3 control-label">Hari</label>
                             <div class="col-sm-9">
								<input type="text" name="hri" value="<?=$data['hari']?>"class="form-control" id="inputEmail3" placeholder="Input Hari" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3" placeholder="Input Tanggal">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tmp" class="col-sm-3 control-label">Tempat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmp" value="<?=$data['Tempat']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tempat">
                            </div>
                        </div>
						

                        <div class="form-group">
                            <label for="kt" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kt" value="<?=$data['ket']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                        

                        
                        
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Jadwal Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $hri=$_POST['hri'];
	$tgl=$_POST['tgl'];
    $tmp=$_POST['tmp'];
    $kt=$_POST['kt'];
	
    //buat sql
    $sql="UPDATE tb_jadwal SET hari ='$hri', tanggal = '$tgl',  Tempat= '$tmp', ket= '$kt' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



