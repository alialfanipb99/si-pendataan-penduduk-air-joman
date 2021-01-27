<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">S.I Pendataan Penduduk Air Joman</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>


                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                    <li><a href="?page=p_datawarga&actions=tampil">Data Warga</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="?page=p_desa&actions=tampil">Data Desa</a></li>
                        <li><a href="?page=p_dusun&actions=tampil">Data Dusun</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=report">Laporan Data Warga</a></li>
						            <li><a href="?page=desa&actions=report">Laporan Data Desa dan Dusun</a></li>
                                    
                    </ul>
                </li>
                
                <li><a href="?page=user&actions=tampil">User</a></li>
                 <li><a href="?page=kontak&actions=tampil">Contact</a></li>
            


                <?php } ?>

                 <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                     <li><a href="?page=p_datawarga&actions=tampil">Data Warga</a></li>
                    
                          <li><a href="?page=jadwal&actions=tampil">Jadwal Kegiatan Camat</a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="?page=arsip&actions=report">Laporan Data Warga</a></li>
                        <li><a href="?page=desa&actions=report">Laporan Data Desa dan Dusun</a></li>
                         <li><a href="?page=surat&actions=report">Laporan Surat Masuk dan Keluar</a></li>
                                   
                    </ul>
                </li>
                 <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                <?php } ?>

                 <?php if(isset($_SESSION['level']) && $_SESSION['level']==3) { ?>
                     <li><a href="?page=p_datawarga&actions=tampil">Data Warga</a></li>
                    
                     <li><a href="?page=jadwal&actions=tampil">Jadwal Kegiatan Camat</a></li>
                     <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Surat-Surat <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=p_surat&actions=tampil">Data Surat Masuk dan Surat Keluar</a></li>
                                             
                    </ul>
                </li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=report">Laporan Data Warga</a></li>
                        <li><a href="?page=desa&actions=report">Laporan Data Desa dan Dusun</a></li>
                         <li><a href="?page=surat&actions=report">Laporan Surat Masuk dan Keluar</a></li>
                                     
                    </ul>
                </li>

                <?php } ?>

                <li><a href="?page=about&actions=tampil">Struktur Organisasi</a></li>
               

                    <?php if (isset($_SESSION['username'])) { ?>
                       
                    <li><a href="logout.php">Logout</a></li>
                     
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
