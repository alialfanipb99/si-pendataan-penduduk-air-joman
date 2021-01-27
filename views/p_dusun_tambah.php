<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Dusun</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="dusun_id" class="col-sm-3 control-label">ID Dusun</label>
                            <div class="col-sm-9">
                                <input type="text" name="dusun_id" class="form-control" id="inputEmail3" placeholder="Inputkan ID" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="dusun_nama" class="col-sm-3 control-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input type="text" name="dusun_nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama dusun" required>
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
                    <a href="?page=p_desa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Dusun
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id                = $_POST['dusun_id'];
    $nm                 = $_POST['dusun_nama'];
   
    
    //buat sql
    $sql="INSERT INTO tb_dusun VALUES ('$id','$nm')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_dusun&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
