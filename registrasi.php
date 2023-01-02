<?php

   include 'functions.php';

    if(isset ($_POST["register"])) {

        if(register($_POST) > 0 ) {
            echo " <script>
            alert('Registrasi Anda Berhasil...!');
            document.location.href = 'login.php';
            </script>";
        }else {
            echo mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    
   <div id="card-regis">
       <div id="card-content">
           <div id="card-title">
               <h2>REGISTRATION</h2>
               <div class="underline-title">

               </div>
           </div>
           <form action="" method="POST" class="form">
                <label for="username"  style="padding-top: 13px;">&nbsp; Username</label>
                <input type="text" name="username" id="username" class="form-content"  required autocomplete="off">
                
                <div class="form-border"></div>
                
                <label for="password" style="padding-top: 22px;">&nbsp; Password </label>
                <input type="password" name="password" id="password" class="form-content" required>
                
                <div class="form-border"></div>
                
                <label for="password2" style="padding-top: 22px;">&nbsp; Re-Password </label>
                <input type="password" name="password2" id="password2" class="form-content" required>
                
                <div class="form-border"></div>
                <label style="padding-top: 22px; text-align: right;" >Have an account? 
                <a href="login.php">Login Here</a></label>

                <button type="submit" name="register" id="submit-btn">Register</button>
            </form>

       </div>
   </div>
</body>
</html>