<?php

    include "koneksi.php";
    include "header.php";


    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Table Data Mahasiswa</title>
 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">
    
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

     <script type="text/javascript" href="js/bootstrap.min.js"></script>

</head>
<body class="bg-light">
    
        <br>
        <br>
        <br> 
        <br>
        <h2 class="text-center"> DATA MAHASISWA KELAS 3P </h2>
                  
              <div class="card-body">
                  <form action="" method="POST" class="input-group mb-3">
                      <button type="submit" class="btn btn-danger " name="submit"> CARI</button>
                      <input type="text" name="cari" placeholder="Cari Berdasarkan Nama" class="form-control">
                  </form>
 
                        
          <table class="table table-bordered table-striped">
          <br>
              <tr>
                  <th>No</th>
                    <th>Npm</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>Aksi</th>
               </tr>
                  <?php
                    include "koneksi.php";
                      $no=1;
                      if(isset($_POST['submit'])){
                          $cari=$_POST['cari'];
                          $data_mhs = mysqli_query($conn,"SELECT * FROM mahasiswa_tb WHERE nama LIKE '$cari%'");                            
                          }else{
                          $data_mhs= mysqli_query($conn,"SELECT * FROM mahasiswa_tb ORDER BY npm desc");
                          }
                          if(mysqli_num_rows($data_mhs)){

                          while($tampil= mysqli_fetch_assoc($data_mhs)){

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
                          <td>
                            <a class="btn btn-info" href="edit_mahasiswa.php?npm=<?php echo $tampil['npm']; ?>">UPDATE</a> ||
                            <a class="btn btn-success" href="hapus_mahasiswa.php?npm=<?php echo $tampil['npm']; ?>"
                              onclick="return confirm('Yakin Di Hapus ?')">DELETE</a>
  
                           </td>
                           
                    </tr>
                      <?php }}else{
                          echo '<tr><td colspan="9">Tidak Ada Data Yang Terdaftar</td><tr>';
                      } ?>
            </table>
       
                    <div>
                             <a class="btn btn-danger " href="index.php">TAMBAH DATA</a>
                             <a class="btn btn-warning text-white"  href="cetak_mahasiswa.php">CETAK DATA</a>
                    </div>
    
  
</body>
</html>

