<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_desa WHERE desa_id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Desa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="a" class="col-sm-3 control-label">Desa ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="a" value="<?=$data['desa_id']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="b" class="col-sm-3 control-label">Desa Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="b" value="<?=$data['desa_nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Surat" required>
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
                    <a href="?page=p_desa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Desa
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
    $sql="UPDATE tb_desa SET  desa_id= '$a', desa_nama='$b' WHERE desa_id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_desa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



