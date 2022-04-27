<?php 
        session_start();
     ?>
 
     <form method="POST" >
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="username" placeholder="username"></td>
                </tr>
                <tr>
                    <td width = "130"> Password</td>
                    <td><input type="password" name="password" placeholder="password">
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="masuk" value="login">
                    </td>
                </tr>
 
     </form>
 
    <?php 
        if(isset($_POST['masuk'])){
 
            $username = $_POST['username'];
            $password = $_POST['password'];
 
            if($username == 'rifki'){
 
                if($password == '123'){
 
                    $_SESSION['user'] = $username;
                    header('location: indexnya.php');
 
                }else{
                    echo "
                    <script>
                        alert(' Pasword salah ... !! ');
                    </script>
                ";
                }
 
            }else{
                echo "
                    <script>
                        alert(' Username tidak ada..!! ');
                    </script>
                ";
            }
        }
 
     ?>