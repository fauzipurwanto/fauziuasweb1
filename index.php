<?php   
  include "header.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Table Biodata</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style2.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

     <script type="text/javascript" href="js/bootstrap.min.js"></script>

       
    
</head>
<body class="bg-light">


    <br>
    <br>
    <br>
    <br>
    <br>
    <H2 class="text-center">TAMBAH DATA MAHASISWA KELAS 3P</H2>

    <form action="" method="post">
		<div class="box-formulir">

            <div class="box bg-warning">
            <table border="0" class="table-form">

                 <tr>
                    <td>Npm</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="npm" class="form-control bg-secondary text-white">
                    </td>
                </tr>
                
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" class="form-control bg-secondary text-white">
                    </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                           <input type="text" name= "tempat_lahir" class="form-control bg-secondary text-white">  
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" class="form-control bg-secondary text-white">
                    </td>
                </tr>

                 <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki ">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuani ">Perempuan
                      
                    </td>
                </tr>

                 <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name= "alamat" class="form-control bg-secondary text-white"> 
                    </td>
                </tr>

                  <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>
                       <input type="text" name= "kode_pos"class="form-control bg-secondary text-white"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    
                </tr>
   
            </table>

                 <td>
                          <input type="submit"class="btn btn-primary" name="simpan" value="Daftar Sekarang">
                    

                </td>

        </div>

    </form>


    </section>

    
</body>
</html>

<?php 
    include "koneksi.php";

    if(isset($_POST['simpan']))
    {
        $npm           = $_POST['npm'];
        $nama          = $_POST['nama'];
        $tempat_lahir  = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat        = $_POST['alamat'];
        $kode_pos      = $_POST['kode_pos'];

        mysqli_query($conn, "INSERT INTO mahasiswa_tb VALUES(
            '$npm','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kode_pos' 
        )") or die(mysqli_error($conn));

        echo "<div align='center'><h5> Silahkan Tunggu,Data Sedang disimpan </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_mahasiswa.php'>";

    }
     
?>