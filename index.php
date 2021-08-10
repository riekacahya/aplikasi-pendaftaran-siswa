<?php
    include "konek.php"; //koneksi ke database
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aplikasi Siswa</title>
        <!-- BOOTSTRAP v4 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-------------------------- HEADER --------------------------->
        <nav class="navbar navbar-expand bg-dark navbar-dark justify-content-center">
            <!--<div class="navbar-header">
                <a class="navbar-brand">WebSiteName || </a>
            </div>-->
            <ul class="navbar-nav center">
                <li class="nav-link  active"><a class = "nav-link" href="#">Daftar Siswa</a></li>
                <li class="nav-link"><a class="nav-link" href="add.php">Tambah Data</a></li>
            </ul>
        </nav>
        <!------------------------ HEADER TUTUP------------------------>

        
        <!-------------------------- CONTENT -------------------------->
        <div class="container p-5 my-3">
            <!---------------------SEARCH BAR ------------------------->
            <form method="get" action="">
                <div class="row">
                    <label class="control-label col-sm-2" for="cari"> Cari Data : </label>
                    <div class="col mb-2 col-sm-8">
                        <input type="text" name="cari" placeholder="Masukkan Nomor Animo Siswa" class="form-control">
                    </div>
                    <div class="col mb-2 col-sm-2">
                        <input type="submit"  value="Cari Data" name="tombolcari">
                    </div>
                </div>
            </form>
            <!---------------------SEARCH BAR ------------------------->
            <p></p>
            <!------------------ TAMPILAN DATA ------------------------>
            <form action="" class="form">
                <div class="table-responsive-sm">
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>No Animo</th>
                                <th>No Daftar</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <?php
                            $no=0;
                            $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_personal");

                            $batas = 5;
                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
            
                            $previous = $halaman - 1;
                            $next = $halaman + 1;
                            
                            $jumlah_data = mysqli_num_rows($ambildata);
                            $total_halaman = ceil($jumlah_data / $batas);
            
                            $data_siswa = mysqli_query($koneksi,"SELECT * FROM tb_personal LIMIT $halaman_awal, $batas");
                            $nomor = $halaman_awal+1;

                            if(isset($_GET['tombolcari'])){
                                $cari = $_GET['cari'];
                                $data_siswa = mysqli_query($koneksi, "SELECT * FROM tb_personal WHERE no_animo LIKE '%".$_GET['cari']."%' LIMIT $halaman_awal, $batas");
                            } else{
                                
                            } 
                            while($tampil = mysqli_fetch_array($data_siswa)){
					    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $tampil["no_animo"]; ?></td>
                                <td><?php echo $tampil["no_daftar"]; ?></td>
                                <td><?php echo $tampil["nama"]; ?></td>
                                <td><a href="detail.php?no_animo=<?php echo $tampil["no_animo"]; ?>" role="button" class="btn btn-primary">Lihat</a></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                            </li>
                            <?php 
                            for($x=1;$x<=$total_halaman;$x++){
                                ?> 
                                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                <?php
                            }
                            ?>				
                            <li class="page-item">
                                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </form>
        </div>
    </body>
</html>