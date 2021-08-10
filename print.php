<?php
    include "konek.php";
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
        <?php if(isset($_POST["print"])){ 
            $query = "SELECT * FROM tb_personal";
            $result = mysqli_query($koneksi, $query);
            if(mysqli_num_rows($result) > 0){ ?>
            <div class="container">
                <div class="row">
                    <table class="table" bordered="1">
                        <thead>
                            <tr> 
                                <th> No Animo </th>
                                <th> No Daftar </th>
                                <th> Nama lengkap </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row["no_animo"]; ?></td>
                                    <td><?php echo $row["no_daftar"]; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button onclick="window.print()" class="btn btn-primary">Print</button>
                    </div>
                </div>
            </div>
            <?php } ?>
                            <?php } ?>
        
    </body>
</html>