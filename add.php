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
    <style type="text/css">
      #registration_form fieldset:not(:first-of-type) {
        display: none;
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
                <li class="nav-link active"><a class="nav-link" href="#">Tambah Data</a></li>
            </ul>
        </nav>
        <!------------------------ HEADER TUTUP------------------------>
            
<!------------------------------------- CONTENT ---------------------------------->
<div class="container p-5 my-5 border">
  <p> </p>
  <p> </p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
    <!------------------------------ FORM ISIAN -------------------------------->

<form id="registration_form" class="form" action="" method="post">
  <fieldset>
    <h2 class="text-center p-3"> FORM ISIAN DATA SISWA </h2>
      <p></p>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nomor Animo :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="no_animo">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nomor Daftar :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="no_daftar">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nama Lengkap :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="nama">
      </div>
    </div>
    <div class="form-row">
        <label class="control-label col-sm-2" >Tempat Lahir :</label>
        <div class="col mb-2 col-sm-3">
            <input type="text" class="form-control"  name="tempat_lahir">
        </div>
        <label class="control-label col-sm-2" >Tanggal Lahir :</label>
        <div class="col mb-2 col-sm-3">
            <input type="date" class="form-control" name="tanggal_lahir">
        </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Tinggi Badan :</label>
      <div class="col mb-2 col-sm-2">
        <input type="number" class="form-control"  name="tinggi">
      </div>
      <label class="control-label col-sm-2"> cm </label>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2"> Berat Badan :</label>
      <div class="col mb-2 col-sm-2">
        <input type="number" class="form-control"  name="berat_badan">
      </div>
      <label class="control-label col"> kg</label>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Agama :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="agama">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Suku :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="suku">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Pendidikan :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="pendidikan" placeholder="SMA/SMK/MA Sederajat">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Jurusan :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="jurusan" placeholder="Contoh: IPA/IPS/Akuntansi...">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Asal Sekolah :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="asal_sekolah">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Tahun Kelulusan :</label>
      <div class="col mb-2 col-sm-2">
        <input type="number" min="1980" max="2021" value="" class="form-control"  name="tahun_lulus">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Alamat :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="alamat">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nama Orang Tua (Ayah) :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="nama_ortu">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Pekerjaan Orang Tua :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="pekerjaan">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Pangkat :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="pangkat">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Satuan :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="satuan">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Alamat Orang Tua :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="alamat_ortu">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nama Wali :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="nama_wali">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Prestasi :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="prestasi">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >NIK KTP Calon Siswa :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="no_KTP">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nomor HP Calon Siswa :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="no_hp">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Nomor HP Orang Tua :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="no_ortu">
      </div>
    </div>
    <div class="form-row">
      <label class="control-label col-sm-2" >Asal Kabupaten/Kota :</label>
      <div class="col mb-2 col-sm-8">
        <input type="text" class="form-control"  name="asal">
      </div>
    </div>
      <input type="button" name="password" class="next btn btn-info" value="Next" />
  </fieldset>
    <!------------------------------ FORM TUTUP -------------------------------->
<!------------------------------ NILAI KELAS 1 -------------------------------->
  <fieldset>
    <div>
      <h2 class="text-center p-3"> Nilai Kelas 1 </h2>
      <p></p>
      <p></p>
      <!-- Semester 1 -->
      <h4><label class="control-label" >Nilai Semester 1 :</label></h4>
      <p></p>
      
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bind_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Matematika </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_1_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_1_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_1_kimia_k">
        </div>
      </div>
      <!-- Semester 2 -->
      <p></p>
      <h4><label class="control-label" >Nilai Semester 2 :</label></h4>
      <p></p>
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label  mb-2  col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_2_bind_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_2_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Matematika </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_2_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="x_2_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="x_2_kimia_k">
        </div>
      </div>
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
<!---------------------------------- TUTUP ------------------------------------>
<!------------------------------ NILAI KELAS 2 -------------------------------->
  <fieldset>
    <div>
      <p></p>
      <h2 class="text-center p-3"> Nilai Kelas 2 </h2>
      <p></p>
      <!--Semester 1--> 
      <h4><label class="control-label" >Nilai Semester 1 :</label></h4>
      <p></p>
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bind_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Matematika </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_1_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_1_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_1_kimia_k">
        </div>
      </div>

      <!--Semester 2 -->
      <p></p>
      <h4><label class="control-label" >Nilai Semester 2 :</label></h4>
      <p></p>
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col-sm-offset-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bind_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Matematika </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_2_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xi_2_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xi_2_kimia_k">
        </div>
      </div>
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
<!---------------------------------- TUTUP ------------------------------------>
<!------------------------------ NILAI KELAS 3 -------------------------------->
  <fieldset>
    <div>
      <p></p>
      <h2 class="text-center p-3"> Nilai Kelas 3 </h2>
      <p></p>
      <!-- Semester 1 -->
      <h4><label class="control-label" >Nilai Semester 1 :</label></h4>
      <p></p>
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bind_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label  mb-2 col-sm-2">Matematika </label>
        <div class="col  mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_1_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_1_kimia_k">
        </div>
      </div>

      <!-- Semester 2 -->
      <p></p>
      <h4><label class="control-label" >Nilai Semester 2 :</label></h4>
      <p></p>
      <div class="form-row bg-dark text-light col-sm-10">
        <div class="col mb-2 col-sm-2 text-center">
          <label class="control-label">Mapel </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai p </label>
        </div>
        <div class="col mb-2 col-sm-4 text-center">
          <label class="control-label">Nilai k </label>
        </div>
      </div>
      <p></p>
      <div class="form-row">
        <label class="control-label  mb-2 col-sm-2">Bahasa Indonesia </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bind_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bind_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2  col-sm-2">Matematika </label>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_2_mat_p">
        </div>
        <div class="col mb-2  col-sm-4">
          <input type="text" class="form-control"  name="xii_2_mat_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Bahasa Inggris </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bing_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bing_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Biologi </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bio_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_bio_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Fisika </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_fisika_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_fisika_k">
        </div>
      </div>
      <div class="form-row">
        <label class="control-label mb-2 col-sm-2">Kimia </label>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_kimia_p">
        </div>
        <div class="col mb-2 col-sm-4">
          <input type="text" class="form-control"  name="xii_2_kimia_k">
        </div>
      </div>
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <button type="submit" class="btn btn-primary" value="simpan" name="proses">SUBMIT</button>
    <!--<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />-->
  </fieldset>
<!---------------------------------- TUTUP ------------------------------------>
    <!--<div class="form-row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" value="simpan" name="proses">SUBMIT</button>
      </div>
    </div>-->
</form>

    <!------------------------------ FORM TUTUP -------------------------------->

<?php  
    if(isset($_POST['proses'])){
        $q = mysqli_query($koneksi, "INSERT INTO tb_personal SET 
        no_animo = '$_POST[no_animo]',
        no_daftar = '$_POST[no_daftar]',
        nama='$_POST[nama]',
        tempat_lahir='$_POST[tempat_lahir]',
        tanggal_lahir='$_POST[tanggal_lahir]',
        tinggi='$_POST[tinggi]',
        berat_badan='$_POST[berat_badan]',
        agama='$_POST[agama]',
        suku='$_POST[suku]',
        pendidikan='$_POST[pendidikan]',
        jurusan='$_POST[jurusan]',
        asal_sekolah='$_POST[asal_sekolah]',
        tahun_lulus='$_POST[tahun_lulus]',
        alamat='$_POST[alamat]',
        nama_ortu='$_POST[nama_ortu]',
        pekerjaan='$_POST[pekerjaan]',
        pangkat='$_POST[pangkat]',
        satuan='$_POST[satuan]',
        alamat_ortu='$_POST[alamat_ortu]',
        nama_wali='$_POST[nama_wali]',
        prestasi='$_POST[prestasi]',
        no_KTP='$_POST[no_KTP]',
        no_hp='$_POST[no_hp]',
        no_ortu='$_POST[no_ortu]',
        asal='$_POST[asal]',
        
        /* Nilai */

        x_1_bind_p='$_POST[x_1_bind_p]',
        x_1_bind_k='$_POST[x_1_bind_k]',
        x_2_bind_p='$_POST[x_2_bind_p]',
        x_2_bind_k='$_POST[x_2_bind_k]',
        xi_1_bind_p='$_POST[xi_1_bind_p]',
        xi_1_bind_k='$_POST[xi_1_bind_k]',
        xi_2_bind_p='$_POST[xi_2_bind_p]',
        xi_2_bind_k='$_POST[xi_2_bind_k]',
        xii_1_bind_p='$_POST[xii_1_bind_p]',
        xii_1_bind_k='$_POST[xii_1_bind_k]',
        xii_2_bind_p='$_POST[xii_2_bind_p]',
        xii_2_bind_k='$_POST[xii_2_bind_k]',

        x_1_mat_p='$_POST[x_1_mat_p]',
        x_1_mat_k='$_POST[x_1_mat_k]',
        x_2_mat_p='$_POST[x_2_mat_p]',
        x_2_mat_k='$_POST[x_2_mat_k]',
        xi_1_mat_p='$_POST[xi_1_mat_p]',
        xi_1_mat_k='$_POST[xi_1_mat_k]',
        xi_2_mat_p='$_POST[xi_2_mat_p]',
        xi_2_mat_k='$_POST[xi_2_mat_k]',
        xii_1_mat_p='$_POST[xii_1_mat_p]',
        xii_1_mat_k='$_POST[xii_1_mat_k]',
        xii_2_mat_p='$_POST[xii_2_mat_p]',
        xii_2_mat_k='$_POST[xii_2_mat_k]',

        x_1_bing_p='$_POST[x_1_bing_p]',
        x_1_bing_k='$_POST[x_1_bing_k]',
        x_2_bing_p='$_POST[x_2_bing_p]',
        x_2_bing_k='$_POST[x_2_bing_k]',
        xi_1_bing_p='$_POST[xi_1_bing_p]',
        xi_1_bing_k='$_POST[xi_1_bing_k]',
        xi_2_bing_p='$_POST[xi_2_bing_p]',
        xi_2_bing_k='$_POST[xi_2_bing_k]',
        xii_1_bing_p='$_POST[xii_1_bing_p]',
        xii_1_bing_k='$_POST[xii_1_bing_k]',
        xii_2_bing_p='$_POST[xii_2_bing_p]',
        xii_2_bing_k='$_POST[xii_2_bing_k]',

        x_1_bio_p='$_POST[x_1_bio_p]',
        x_1_bio_k='$_POST[x_1_bio_k]',
        x_2_bio_p='$_POST[x_2_bio_p]',
        x_2_bio_k='$_POST[x_2_bio_k]',
        xi_1_bio_p='$_POST[xi_1_bio_p]',
        xi_1_bio_k='$_POST[xi_1_bio_k]',
        xi_2_bio_p='$_POST[xi_2_bio_p]',
        xi_2_bio_k='$_POST[xi_2_bio_k]',
        xii_1_bio_p='$_POST[xii_1_bio_p]',
        xii_1_bio_k='$_POST[xii_1_bio_k]',
        xii_2_bio_p='$_POST[xii_2_bio_p]',
        xii_2_bio_k='$_POST[xii_2_bio_k]',

        x_1_fisika_p='$_POST[x_1_fisika_p]',
        x_1_fisika_k='$_POST[x_1_fisika_k]',
        x_2_fisika_p='$_POST[x_2_fisika_p]',
        x_2_fisika_k='$_POST[x_2_fisika_k]',
        xi_1_fisika_p='$_POST[xi_1_fisika_p]',
        xi_1_fisika_k='$_POST[xi_1_fisika_k]',
        xi_2_fisika_p='$_POST[xi_2_fisika_p]',
        xi_2_fisika_k='$_POST[xi_2_fisika_k]',
        xii_1_fisika_p='$_POST[xii_1_fisika_p]',
        xii_1_fisika_k='$_POST[xii_1_fisika_k]',
        xii_2_fisika_p='$_POST[xii_2_fisika_p]',
        xii_2_fisika_k='$_POST[xii_2_fisika_k]',

        x_1_kimia_p='$_POST[x_1_kimia_p]',
        x_1_kimia_k='$_POST[x_1_kimia_k]',
        x_2_kimia_p='$_POST[x_2_kimia_p]',
        x_2_kimia_k='$_POST[x_2_kimia_k]',
        xi_1_kimia_p='$_POST[xi_1_kimia_p]',
        xi_1_kimia_k='$_POST[xi_1_kimia_k]',
        xi_2_kimia_p='$_POST[xi_2_kimia_p]',
        xi_2_kimia_k='$_POST[xi_2_kimia_k]',
        xii_1_kimia_p='$_POST[xii_1_kimia_p]',
        xii_1_kimia_k='$_POST[xii_1_kimia_k]',
        xii_2_kimia_p='$_POST[xii_2_kimia_p]',
        xii_2_kimia_k='$_POST[xii_2_kimia_k]'");
        
        if($q){
            echo "<script>window.alert('Berhasil Disimpan'); window.location=('')</script>";
        } else{
            echo "<script>window.alert('Gagal Disimpan');)</script>";
        }
    }
?>
</div>
<!------------------------------------- CONTENT TUTUP ---------------------------------->
    <script>
      $(document).ready(function(){
        var current = 1,current_step,next_step,steps;
        steps = $("fieldset").length;
        $(".next").click(function(){
          current_step = $(this).parent();
          next_step = $(this).parent().next();
          next_step.show();
          current_step.hide();
          setProgressBar(++current);
        });
        $(".previous").click(function(){
          current_step = $(this).parent();
          next_step = $(this).parent().prev();
          next_step.show();
          current_step.hide();
          setProgressBar(--current);
        });
        setProgressBar(current);
        // Change progress bar action
        function setProgressBar(curStep){
          var percent = parseFloat(100 / steps) * curStep;
          percent = percent.toFixed();
          $(".progress-bar")
            .css("width",percent+"%")
            .html(percent+"%");   
        }
    
      });
    </script>
    </body>
</html>

