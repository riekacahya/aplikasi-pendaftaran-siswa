<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
</head>
<body>
    <?php
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Siswa.xls');
    ?>
    <?php
        include "konek.php";
        $id = $_GET['no_animo'];
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM tb_personal WHERE no_animo='$id'") or die(mysqli_connect_error());
        while ($tampil = mysqli_fetch_array($ambil_data)) {
    ?>
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
<!------------------------------Tampilan Data ------------------------------------->
    <div class="container p-5 my-5 border">
        <h2 class="text-center"> DATA SISWA </h2>
        <p> </p>
        <table>
            <tr>
                <td>Nomor Animo :</td>
                <td><?php echo $tampil["no_animo"]; ?></td>
            </tr>
            <tr>
                <td>Nomor Daftar :</td>
                <td><?php echo $tampil["no_daftar"]; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td><?php echo $tampil["nama"]; ?></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir :</td>
                <td><?php echo $tampil["tempat_lahir"]; ?></td>
                <td><?php echo $tampil["tanggal_lahir"]; ?></td>
            </tr>
            <tr>
                <td>Tinggi Badan :</td>
                <td><?php echo $tampil["tinggi"]; ?></td>
                <td>cm</td>
            </tr>
            <tr>
                <td>Berat Badan :</td>
                <td><?php echo $tampil["berat_badan"]; ?></td>
                <td>kg</td>
            </tr>
            <tr>
                <td>Agama :</td>
                <td><?php echo $tampil["agama"]; ?></td>
            </tr>
            <tr>
                <td>Suku :</td>
                <td><?php echo $tampil["suku"]; ?></td>
            </tr>
            <tr>
                <td>Pendidikan :</td>
                <td><?php echo $tampil["pendidikan"]; ?></td>
            </tr>
            <tr>
                <td>Jurusan :</td>
                <td><?php echo $tampil["jurusan"]; ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah :</td>
                <td><?php echo $tampil["asal_sekolah"]; ?></td>
            </tr>
            <tr>
                <td>Tahun Kelulusan :</td>
                <td><?php echo $tampil["tahun_lulus"]; ?></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><?php echo $tampil["alamat"]; ?></td>
            </tr>
            <tr>
                <td>Nama Orang Tua (Ayah) :</td>
                <td><?php echo $tampil["nama_ortu"]; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Orang Tua :</td>
                <td><?php echo $tampil["pekerjaan"]; ?></td>
            </tr>
            <tr>
                <td>Pangkat :</td>
                <td><?php echo $tampil["pangkat"]; ?></td>
            </tr>
            <tr>
                <td>Satuan :</td>
                <td><?php echo $tampil["satuan"]; ?></td>
            </tr>
            <tr>
                <td>Alamat Orang Tua :</td>
                <td><?php echo $tampil["alamat_ortu"]; ?></td>
            </tr>
            <tr>
                <td>Nama Wali :</td>
                <td><?php echo $tampil["nama_wali"]; ?></td>
            </tr>
            <tr>
                <td>Prestasi :</td>
                <td><?php echo $tampil["prestasi"]; ?></td>
            </tr>
            <tr>
                <td>NIK KTP Calon Siswa :</td>
                <td><?php echo $tampil["no_KTP"]; ?></td>
            </tr>
            <tr>
                <td>Nomor HP Calon Siswa :</td>
                <td><?php echo $tampil["no_hp"]; ?></td>
            </tr>
            <tr>
                <td>Nomor HP Orang Tua :</td>
                <td><?php echo $tampil["no_ortu"]; ?></td>
            </tr>
            </tr>
            <tr>
                <td>Asal Kabupaten/Kota :</td>
                <td><?php echo $tampil["asal"]; ?></td>
            </tr>
        </table>
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
    <?php
        }
    ?>
</body>
</html>