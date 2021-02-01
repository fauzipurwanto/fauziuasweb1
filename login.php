<?php 
    session_start();
    include 'koneksi.php'; 

    if(isset($_POST['login'])){

        //cek akun ada atau tidak

        $data_mhs = mysqli_query($conn, "SELECT * FROM admin_tb
           WHERE username = '".htmlspecialchars($_POST['user'])."' AND password =
            '".MD5(htmlspecialchars($_POST['pass']))."' ");

        if(mysqli_num_rows($data_mhs) > 0){
            $tampil = mysqli_fetch_object($data_mhs);

          $_SESSION['stat_login'] = true;
          $_SESSION['id'] = $tampil->id_admin;
          $_SESSION['nama'] = $tampil->nm_admin;
          echo '<script>window.location="data_mahasiswa.php"</script>';
        }else{
          echo '<script>alert("Gagal, username atau pasword salah")</script>';
        }
    } 
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Mahasiswa</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

     <script type="text/javascript" href="js/bootstrap.min.js"></script>

    
    <style>
    body{
      background-image:url(img/gambar6.jpg);
      background-size:cover;
      background-attachment: fixed;
    }
    
  </style>

   

</head>
<body>

   <!-- Bagian main login -->
   <section class="main-login">

        <div class="box-login">
            <h2 class="font-weight-bold text-white"> LOGIN ADMIN</h2>

            <!-- Bagian Form Login -->
            <form action="" method="post">

                 <div class="box">
                    <table>
                      <tr>
                        <td class="font-weight-bold"> Username</td>
                        <td>:</td>
                        <td>
                          <input type="text" name="user" class="input-control">
                        </td>
                      </tr>

                      <tr>
                        <td class="font-weight-bold"> Pasword</td>
                        <td>:</td>
                        <td>
                          <input type="password" name="pass" class="input-control ">
                        </td>
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <input type="submit" name="login" value="LOGIN" class="btn-login font-weight-bold">
                         
                        </td>
                      </tr>
                    </table>
                  </form>
                </div>
            </form>
        </div>
       
   </section>

    
</body>
</html>