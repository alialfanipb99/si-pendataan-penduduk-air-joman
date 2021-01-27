<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            
                        </div>
                         <div class="form-group">
                            <label for="a" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="a" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="b" class="col-sm-3 control-label">Kode Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="b" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="c" class="col-sm-3 control-label">Tanggal Surat</label>
                            <div class="col-sm-9">
                                <input type="date" name="c" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Surat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="d" class="col-sm-3 control-label">Tanggal Masuk / Keluar Surat</label>
                            <div class="col-sm-9">
                                <input type="date" name="d" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk / Keluar Surat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="e" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="e"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengirim" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="f" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-3">
                                <input type="text" name="f" class="form-control" id="inputEmail3" placeholder="Inputkan Perihal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="g" class="col-sm-3 control-label">Disposisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="g" class="form-control" id="inputPassword3" placeholder="Inputkan Disposisi" required>
                            </div>
                        </div>
                   

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Surat</button>
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
  $no_surat=$_POST['a'];
    $kode_surat=$_POST['b'];
    $tgl_surat=$_POST['c'];
    $tgl_masuk_keluar=$_POST['d'];
  $nama_pengirim=$_POST['e'];
    $perihal=$_POST['f'];
  $dispos=$_POST['g'];
 
    //buat sql
    $sql="INSERT INTO surat VALUES ('','$no_surat','$kode_surat','$tgl_surat','$tgl_masuk_keluar','$nama_pengirim','$perihal','$dispos')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
