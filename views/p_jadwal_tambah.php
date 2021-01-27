<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Jadwal Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="hri" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="text" name="hri"class="form-control" id="inputEmail3" placeholder="Inputkan Hari Kegiatan" required>
                            </div>
 
                        </div>
                         <div class="form-group">
                            <label for="tgl" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
 
                        </div>
                         <div class="form-group">
                            <label for="tmp" class="col-sm-3 control-label">Tempat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmp"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kt" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kt"class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
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
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Jadwal
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
     $hri                 = $_POST['hri'];
      $tgl                 = $_POST['tgl'];
       $tmp                 = $_POST['tmp'];
        $kt                 = $_POST['kt'];
        
    $sql="INSERT INTO tb_jadwal VALUES ('','$hri','$tgl','$tmp','$kt')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
