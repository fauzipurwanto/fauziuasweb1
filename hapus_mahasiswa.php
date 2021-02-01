 <?php 
 	include 'koneksi.php';

 	$npm = $_GET['npm'];
 	$ambilData = mysqli_query($conn, "DELETE FROM mahasiswa_tb WHERE npm ='$npm'");
 	echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_mahasiswa.php'>";

 ?>