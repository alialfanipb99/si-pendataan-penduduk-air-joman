<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Surat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="a" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="a" value="<?=$data['no_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="b" class="col-sm-3 control-label">Kode Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="b" value="<?=$data['kode_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="c" class="col-sm-3 control-label">Tanggal Surat</label>
                            <div class="col-sm-9">
                                <input type="date" name="c" value="<?=$data['tgl_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="d" class="col-sm-3 control-label">Tanggal Masuk / Keluar Surat</label>
                            <div class="col-sm-9">
                                <input type="date" name="d" value="<?=$data['tgl_masuk_keluar']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk / Keluar Surat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="e" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="e" value="<?=$data['nama_pengirim']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengirim" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="f" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-3">
                                <input type="text" name="f" value="<?=$data['perihal']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Perihal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="g" class="col-sm-3 control-label">Disposisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="g" value="<?=$data['dispos']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Disposisi" required>
                            </div>
                        </div>
                   
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=p_surat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
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
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_POST['f'];
    $g=$_POST['g'];
    
    //buat sql
    $sql="UPDATE surat SET  no_surat= '$a', kode_surat='$b', tgl_surat='$c', tgl_masuk_keluar='$d', nama_pengirim='$e', perihal='$f', dispos='$g' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



