<?php 
    include 'koneksi.php';  

   
    
?>   
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Peserta</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        
        window.print();
    </script>

</head>
<body>

    <h2>Laporan Data Mahasiswa</h2><br>
       <table class="table" border="1">
                    <thread>
                        <tr>
                          <th>No</th>
                          <th>Npm</th>
                          <th>Nama Lengkap</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Kode Pos</th>
                         
                        </tr>
                    </thread>
                        <tbody>
                            <?php
                                $no = 1;
                                $data_mhs = mysqli_query($conn, "SELECT * FROM mahasiswa_tb");
                                while($tampil = mysqli_fetch_array($data_mhs)){
                            ?>
                            <tr>
                                    <td><?php echo $no++; ?></td>                                
                                    <td><?php echo $tampil['npm']; ?></td>
                                    <td><?php echo $tampil['nama']; ?></td>
                                    <td><?php echo $tampil['tempat_lahir']; ?></td>
                                    <td><?php echo $tampil['tanggal_lahir']; ?></td>
                                    <td><?php echo $tampil['jenis_kelamin']; ?></td>
                                    <td><?php echo $tampil['alamat']; ?></td>
                                    <td><?php echo $tampil['kode_pos']; ?></td>
                                
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                    <table width="80%">
                             <tr>
                                <td></td>
                                <td width="200px">
                                    <p>Banjarmasin , <?= date('d/m/y') ?> <br/>
                                        Operator,
                                    <br/>
                                    <br/>
                                    <br/>
                                <p>__________________________</p>
                                </td>
                            </tr>
    
</body>
</html>