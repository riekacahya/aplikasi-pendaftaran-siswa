<?php
    include "konek.php"; //koneksi ke database

    $id = $_GET['no_animo'];
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM tb_personal WHERE no_animo='$id'") or die(mysqli_connect_error());
    $tampil = mysqli_fetch_array($ambil_data);

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
    <style>   
      @media print
      {
        .noprint {display:none;}
      }
    </style>
    <body>
        <!-------------------------- HEADER --------------------------->
        <nav class="navbar navbar-expand bg-dark navbar-dark justify-content-center">
            <!--<div class="navbar-header">
                <a class="navbar-brand">WebSiteName || </a>
            </div>-->
            <ul class="navbar-nav">
                <li class="nav-link"><a class = "nav-link" href="index.php">Daftar Siswa</a></li>
                <li class="nav-link"><a class="nav-link" href="add.php">Tambah Data</a></li>
            </ul>
        </nav>
        <!------------------------ HEADER TUTUP------------------------>
    <!---------------------------- Perhitungan Nilai ------------------------------>
            <?php
              /*************************** Rata-rata per p&k *************************************/
                $rata_x_1_p = number_format((($tampil["x_1_bind_p"] + $tampil["x_1_mat_p"] + $tampil["x_1_bing_p"]
                + $tampil["x_1_bio_p"] + $tampil["x_1_fisika_p"] + $tampil["x_1_kimia_p"]) /6), 2, '.', '');
                $rata_x_1_k = number_format((($tampil["x_1_bind_k"] + $tampil["x_1_mat_k"] + $tampil["x_1_bing_k"]
                + $tampil["x_1_bio_k"] + $tampil["x_1_fisika_k"] + $tampil["x_1_kimia_k"]) /6), 2, '.', '');
                $rata_x_2_p = number_format((($tampil["x_2_bind_p"] + $tampil["x_2_mat_p"] + $tampil["x_2_bing_p"]
                + $tampil["x_2_bio_p"] + $tampil["x_2_fisika_p"] + $tampil["x_2_kimia_p"]) /6), 2, '.', '');
                $rata_x_2_k = number_format((($tampil["x_2_bind_k"] + $tampil["x_2_mat_k"] + $tampil["x_2_bing_k"]
                + $tampil["x_2_bio_k"] + $tampil["x_2_fisika_k"] + $tampil["x_2_kimia_k"]) /6), 2, '.', '');

                $rata_xi_1_p = number_format(($tampil["xi_1_bind_p"] + $tampil["xi_1_mat_p"] + $tampil["xi_1_bing_p"]
                + $tampil["xi_1_bio_p"] + $tampil["xi_1_fisika_p"] + $tampil["xi_1_kimia_p"]) /6, 2, '.', '');
                $rata_xi_1_k = number_format((($tampil["xi_1_bind_k"] + $tampil["xi_1_mat_k"] + $tampil["xi_1_bing_k"]
                + $tampil["xi_1_bio_k"] + $tampil["xi_1_fisika_k"] + $tampil["xi_1_kimia_k"]) /6), 2, '.', '');
                $rata_xi_2_p = number_format((($tampil["xi_2_bind_p"] + $tampil["xi_2_mat_p"] + $tampil["xi_2_bing_p"]
                + $tampil["xi_2_bio_p"] + $tampil["xi_2_fisika_p"] + $tampil["xi_2_kimia_p"]) /6), 2, '.', '');
                $rata_xi_2_k = number_format((($tampil["xi_2_bind_k"] + $tampil["xi_2_mat_k"] + $tampil["xi_2_bing_k"]
                + $tampil["xi_2_bio_k"] + $tampil["xi_2_fisika_k"] + $tampil["xi_2_kimia_k"]) /6), 2, '.', '');

                $rata_xii_1_p = number_format((($tampil["xii_1_bind_p"] + $tampil["xii_1_mat_p"] + $tampil["xii_1_bing_p"]
                + $tampil["xii_1_bio_p"] + $tampil["xii_1_fisika_p"] + $tampil["xii_1_kimia_p"]) /6), 2, '.', '');
                $rata_xii_1_k = number_format((($tampil["xii_1_bind_k"] + $tampil["xii_1_mat_k"] + $tampil["xii_1_bing_k"]
                + $tampil["xii_1_bio_k"] + $tampil["xii_1_fisika_k"] + $tampil["xii_1_kimia_k"]) /6), 2, '.', '');
                $rata_xii_2_p = number_format((($tampil["xii_2_bind_p"] + $tampil["xii_2_mat_p"] + $tampil["xii_2_bing_p"]
                + $tampil["xii_2_bio_p"] + $tampil["xii_2_fisika_p"] + $tampil["xii_2_kimia_p"]) /6), 2, '.', '');
                $rata_xii_2_k = number_format((($tampil["xii_2_bind_k"] + $tampil["xii_2_mat_k"] + $tampil["xii_2_bing_k"]
                + $tampil["xii_2_bio_k"] + $tampil["xii_2_fisika_k"] + $tampil["xii_2_kimia_k"]) /6), 2, '.', '');
            ?>
            <?php
              /*************************** Rata-rata per semester *************************************/
                $rata_x_1 = number_format((($rata_x_1_p + $rata_x_1_k) /2), 2, '.', '');
                $rata_x_2 = number_format((($rata_x_2_p + $rata_x_2_k) /2), 2, '.', '');
                $rata_xi_1 = number_format((($rata_xi_1_p + $rata_xi_1_k) /2), 2, '.', '');
                $rata_xi_2 = number_format((($rata_xi_2_p + $rata_xi_2_k) /2), 2, '.', '');
                $rata_xii_1 = number_format((($rata_xii_1_p + $rata_xii_1_k) /2), 2, '.', '');
                $rata_xii_2 = number_format((($rata_xii_2_p + $rata_xii_2_k) /2), 2, '.', '');
            ?>
            <?php
              /*************************** Rata-rata per kelas *************************************/
                $rata_x = number_format((($rata_x_1 + $rata_x_1) /2), 2, '.', '');
                $rata_xi = number_format((($rata_xi_1 + $rata_xi_1) /2), 2, '.', '');
                $rata_xii = number_format((($rata_xii_1 + $rata_xii_1) /2), 2, '.', '');
            ?>
            <?php
              /*************************** Rata-rata total *************************************/
                $rata_total = number_format((($rata_x + $rata_xi + $rata_xii) /3), 2, '.', '');
            ?>
    <!------------------------- Tutup Perhitungan Nilai---------------------------->
  <!-- Button -->
    <div class="container p-5 noprint">
      <div class="row">
        <div class="col">
          <a href="export.php?no_animo=<?php echo $tampil["no_animo"]; ?>" name="export" role="button" class="btn btn-outline-primary btn-block">Export ke Excel</a>
        </div>
        <div class="col">
          <button onclick="window.print()" class="btn btn-primary btn-block">Print</button>
        </div>
      </div>
    </div>
  <!-- Tutup Button -->
    <div class="container p-5 my-3 border">
        <h2 class="text-center"> DATA SISWA </h2>
        <p> </p>
        <form class="form" action="" method="">
            <div class="form-row">
                <label class="control-label col-sm-3" >Nomor Animo :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["no_animo"]; ?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nomor Daftar :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["no_daftar"]; ?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nama Lengkap :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["nama"]; ?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Tempat/Tanggal Lahir :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["tempat_lahir"];?>
                  <?php echo ", ";?>
                  <?php echo $tampil["tanggal_lahir"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Tinggi Badan :</label>
                <div class="col mb-2 col-sm-5">
                  <?php echo $tampil["tinggi"];?>
                  <label class="control-label col-sm-2"> cm </label>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Berat Badan :</label>
                <div class="col mb-2 col-sm-5">
                  <?php echo $tampil["berat_badan"];?>
                  <label class="control-label col-sm-2"> kg </label>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Agama :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["agama"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Suku :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["suku"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Pendidikan :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["pendidikan"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Jurusan :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["jurusan"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Asal Sekolah :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["asal_sekolah"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Tahun Kelulusan :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["tahun_lulus"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Alamat :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["alamat"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nama Orang Tua (Ayah) :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["nama_ortu"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Pekerjaan Orang Tua :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["pekerjaan"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Pangkat :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["pangkat"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Satuan :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["satuan"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Alamat Orang Tua :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["alamat_ortu"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nama Wali :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["nama_wali"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Prestasi :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["prestasi"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >NIK KTP Calon Siswa :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["no_KTP"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nomor HP Calon Siswa :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["no_hp"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Nomor HP Orang Tua :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["no_ortu"];?>
                </div>
            </div>
            <div class="form-row">
                <label class="control-label col-sm-3" >Asal Kabupaten/Kota :</label>
                <div class="col mb-2 col-sm-7">
                  <?php echo $tampil["asal"];?>
                </div>
            </div>
        
    <!------------------------------Tampilan Nilai ------------------------------------->
    
        <p></p>
        <h2 class="text-center"> NILAI SISWA </h2>
        <p> </p>
        <div class="table-responsive-sm">
          <table class="table table-bordered text-center">
            <thead class="thead-dark">
              <tr>
                  <th rowspan="3">No</th>
                  <th rowspan="3">Mapel</th>
                  <th colspan="4">Kelas X</th>
                  <th colspan="4">Kelas XI</th>
                  <th colspan="4">Kelas XII</th>
              </tr>
              <tr>
                  <th colspan="2">SMT 1</th>
                  <th colspan="2">SMT 2</th>
                  <th colspan="2">SMT 1</th>
                  <th colspan="2">SMT 2</th>
                  <th colspan="2">SMT 1</th>
                  <th colspan="2">SMT 2</th>
              </tr>
              <tr>
                  <th>P</th>
                  <th>K</th>
                  <th>P</th>
                  <th>K</th>
                  <th>P</th>
                  <th>K</th>
                  <th>P</th>
                  <th>K</th>
                  <th>P</th>
                  <th>K</th>
                  <th>P</th>
                  <th>K</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Bahasa Indonesia</td>
                <td><?php echo $tampil["x_1_bind_p"]; ?></td>
                <td><?php echo $tampil["x_1_bind_k"]; ?></td>
                <td><?php echo $tampil["x_2_bind_p"]; ?></td>
                <td><?php echo $tampil["x_2_bind_k"]; ?></td>
                <td><?php echo $tampil["xi_1_bind_p"]; ?></td>
                <td><?php echo $tampil["xi_1_bind_k"]; ?></td>
                <td><?php echo $tampil["xi_2_bind_p"]; ?></td>
                <td><?php echo $tampil["xi_2_bind_k"]; ?></td>
                <td><?php echo $tampil["xii_1_bind_p"]; ?></td>
                <td><?php echo $tampil["xii_1_bind_k"]; ?></td>
                <td><?php echo $tampil["xii_2_bind_p"]; ?></td>
                <td><?php echo $tampil["xii_2_bind_k"]; ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Matematika</td>
                <td><?php echo $tampil["x_1_mat_p"]; ?></td>
                <td><?php echo $tampil["x_1_mat_k"]; ?></td>
                <td><?php echo $tampil["x_2_mat_p"]; ?></td>
                <td><?php echo $tampil["x_2_mat_k"]; ?></td>
                <td><?php echo $tampil["xi_1_mat_p"]; ?></td>
                <td><?php echo $tampil["xi_1_mat_k"]; ?></td>
                <td><?php echo $tampil["xi_2_mat_p"]; ?></td>
                <td><?php echo $tampil["xi_2_mat_k"]; ?></td>
                <td><?php echo $tampil["xii_1_mat_p"]; ?></td>
                <td><?php echo $tampil["xii_1_mat_k"]; ?></td>
                <td><?php echo $tampil["xii_2_mat_p"]; ?></td>
                <td><?php echo $tampil["xii_2_mat_k"]; ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Bahasa Inggris</td>
                <td><?php echo $tampil["x_1_bing_p"]; ?></td>
                <td><?php echo $tampil["x_1_bing_k"]; ?></td>
                <td><?php echo $tampil["x_2_bing_p"]; ?></td>
                <td><?php echo $tampil["x_2_bing_k"]; ?></td>
                <td><?php echo $tampil["xi_1_bing_p"]; ?></td>
                <td><?php echo $tampil["xi_1_bing_k"]; ?></td>
                <td><?php echo $tampil["xi_2_bing_p"]; ?></td>
                <td><?php echo $tampil["xi_2_bing_k"]; ?></td>
                <td><?php echo $tampil["xii_1_bing_p"]; ?></td>
                <td><?php echo $tampil["xii_1_bing_k"]; ?></td>
                <td><?php echo $tampil["xii_2_bing_p"]; ?></td>
                <td><?php echo $tampil["xii_2_bing_k"]; ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Biologi</td>
                <td><?php echo $tampil["x_1_bio_p"]; ?></td>
                <td><?php echo $tampil["x_1_bio_k"]; ?></td>
                <td><?php echo $tampil["x_2_bio_p"]; ?></td>
                <td><?php echo $tampil["x_2_bio_k"]; ?></td>
                <td><?php echo $tampil["xi_1_bio_p"]; ?></td>
                <td><?php echo $tampil["xi_1_bio_k"]; ?></td>
                <td><?php echo $tampil["xi_2_bio_p"]; ?></td>
                <td><?php echo $tampil["xi_2_bio_k"]; ?></td>
                <td><?php echo $tampil["xii_1_bio_p"]; ?></td>
                <td><?php echo $tampil["xii_1_bio_k"]; ?></td>
                <td><?php echo $tampil["xii_2_bio_p"]; ?></td>
                <td><?php echo $tampil["xii_2_bio_k"]; ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Fisika</td>
                <td><?php echo $tampil["x_1_fisika_p"]; ?></td>
                <td><?php echo $tampil["x_1_fisika_k"]; ?></td>
                <td><?php echo $tampil["x_2_fisika_p"]; ?></td>
                <td><?php echo $tampil["x_2_fisika_k"]; ?></td>
                <td><?php echo $tampil["xi_1_fisika_p"]; ?></td>
                <td><?php echo $tampil["xi_1_fisika_k"]; ?></td>
                <td><?php echo $tampil["xi_2_fisika_p"]; ?></td>
                <td><?php echo $tampil["xi_2_fisika_k"]; ?></td>
                <td><?php echo $tampil["xii_1_fisika_p"]; ?></td>
                <td><?php echo $tampil["xii_1_fisika_k"]; ?></td>
                <td><?php echo $tampil["xii_2_fisika_p"]; ?></td>
                <td><?php echo $tampil["xii_2_fisika_k"]; ?></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Kimia</td>
                <td><?php echo $tampil["x_1_kimia_p"]; ?></td>
                <td><?php echo $tampil["x_1_kimia_k"]; ?></td>
                <td><?php echo $tampil["x_2_kimia_p"]; ?></td>
                <td><?php echo $tampil["x_2_kimia_k"]; ?></td>
                <td><?php echo $tampil["xi_1_kimia_p"]; ?></td>
                <td><?php echo $tampil["xi_1_kimia_k"]; ?></td>
                <td><?php echo $tampil["xi_2_kimia_p"]; ?></td>
                <td><?php echo $tampil["xi_2_kimia_k"]; ?></td>
                <td><?php echo $tampil["xii_1_kimia_p"]; ?></td>
                <td><?php echo $tampil["xii_1_kimia_k"]; ?></td>
                <td><?php echo $tampil["xii_2_kimia_p"]; ?></td>
                <td><?php echo $tampil["xii_2_kimia_k"]; ?></td>
              </tr>
              <tr>
                <td colspan="2" class="text-right">Rata-rata : </td>
                <td><?php echo $rata_x_1_p; ?></td>
                <td><?php echo $rata_x_1_k; ?></td>
                <td><?php echo $rata_x_2_p; ?></td>
                <td><?php echo $rata_x_2_k; ?></td>
                <td><?php echo $rata_xi_1_p; ?></td>
                <td><?php echo $rata_xi_1_k; ?></td>
                <td><?php echo $rata_xi_2_p; ?></td>
                <td><?php echo $rata_xi_2_k; ?></td>
                <td><?php echo $rata_xii_1_p; ?></td>
                <td><?php echo $rata_xii_1_k; ?></td>
                <td><?php echo $rata_xii_2_p; ?></td>
                <td><?php echo $rata_xii_2_k; ?></td>
              </tr>
              <tr class="text-right">
                <td colspan="2">Rata-rata per semester: </td>
                <td colspan="2"><?php echo $rata_x_1; ?></td>
                <td colspan="2"><?php echo $rata_x_2; ?></td>
                <td colspan="2"><?php echo $rata_xi_1; ?></td>
                <td colspan="2"><?php echo $rata_xi_2; ?></td>
                <td colspan="2"><?php echo $rata_xii_1; ?></td>
                <td colspan="2"><?php echo $rata_xii_2; ?></td>
              </tr>
              <tr class="text-right">
                <td colspan="2">Rata-rata per kelas: </td>
                <td colspan="4"><?php echo $rata_x; ?></td>
                <td colspan="4"><?php echo $rata_xi; ?></td>
                <td colspan="4"><?php echo $rata_xii; ?></td>
              </tr>
              <tr class="text-right">
                <td colspan="2">Rata-rata total: </td>
                <td colspan="12"><?php echo $rata_total; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    </body>
</html>



