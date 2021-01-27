<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_dusun WHERE dusun_id='$id'") or die ("SQL Edit error");
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
                            <label for="a" class="col-sm-3 control-label">Dusun ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="a" value="<?=$data['dusun_id']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="b" class="col-sm-3 control-label">Dusun Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="b" value="<?=$data['dusun_nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Surat" required>
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
                    <a href="?page=p_dusun&actions=tampil" class="btn btn-danger btn-sm">
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
   
    $a=$_POST['a'];
    $b=$_POST['b'];
   
    
    //buat sql
    $sql="UPDATE tb_dusun SET  dusun_id= '$a', dusun_nama='$b' WHERE dusun_id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_dusun&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



