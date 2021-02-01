<?php 
    include "header.php";
	include "koneksi.php";
	$npm = $_GET['npm'];
	$ambilData = mysqli_query($conn, "SELECT * FROM mahasiswa_tb WHERE npm ='$npm'");
	$tampil = mysqli_fetch_array($ambilData);
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

     <script type="text/javascript" href="js/bootstrap.min.js"></script>
  
</head>
<body class="bg-light">
    <form action="" method="post">
        <div class="box-formulir">
        <br>
        <br>
        <br>
        <H2>EDIT DATA MAHASISWA</H2>

    	
		<div class="box bg-warning">
            <table border="0" class="table-form">

                
                 <tr>
                    <td>Npm</td>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?php echo $tampil['npm'] ?>" name="npm" class="input-control bg-secondary text-white">
                    </td>
                </tr>
                
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?php echo $tampil['nama'] ?>" name="nama" class="input-control bg-secondary text-white">
                    </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                           <input type="text" value="<?php echo $tampil['tempat_lahir'] ?>" name= "tempat_lahir" class="input-control bg-secondary text-white">  
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" value="<?php echo $tampil['tanggal_lahir'] ?>" name="tanggal_lahir" class="input-control
                        bg-secondary text-white">
                    </td>
                </tr>

                 <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" value="Laki-Laki"<?php echo $tampil['jenis_kelamin'] ?> name="jenis_kelamin">Laki-Laki
                        <input type="radio" value="Perempuan"<?php echo $tampil['jenis_kelamin'] ?> name="jenis_kelamin">Perempuan
                    </td>
                </tr>

                 <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?php echo $tampil['alamat'] ?>" name= "alamat" class="input-control 
                        bg-secondary text-white"> 
                    </td>
                </tr>

                  <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>
                       <input type="text" value="<?php echo $tampil['kode_pos'] ?>" name= "kode_pos" class="input-control
                       bg-secondary text-white"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    
                </tr>
   
            </table>
                    <td>
                      <input type="submit" class="btn btn-primary" name="simpan" value="UPDATE">
                    

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

        mysqli_query($conn, "UPDATE mahasiswa_tb 
        	SET npm ='$npm', nama = '$nama', tempat_lahir ='$tempat_lahir', 
        	tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
        	kode_pos ='$kode_pos'
        	WHERE npm = '$npm'") or die(mysqli_error($conn));

        echo "<div align='center'><h5> Silahkan Tunggu,Data Sedang disimpan </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_mahasiswa.php'>";

    }
     
?>