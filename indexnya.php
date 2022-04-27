<?php 
        session_start();
        if(!$_SESSION['user']){
            header('location:login.php');
        }
     ?>
 
     <h4>Selamat Datang, Berikut biodata anda </h4>
     <h4>Nama    : Moh Rifqi ZamZami</h4>
     <h4>Email   : rifkiinstag@gmail.com</h4>
     <h4>Detail Login :<?php echo date ("m-F-Y, g:i:s a"); ?> </h4><br>
     <form method="POST">
 
         <input type="submit" name="logout" value="logout">
 
     </form>
 
     <?php 
        
       if (isset($_POST['logout'])) {
 
           session_unset($_SESSION['user']);
           header("location: login.php");
            
       }
 
      ?>