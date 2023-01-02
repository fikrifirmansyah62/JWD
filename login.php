<?php 
    session_start();

    include 'functions.php';

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

       $result =  mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");

        //cek username
        if (mysqli_num_rows($result) === 1) {

            //cek password
            $row = mysqli_fetch_assoc($result);

           if( password_verify($password, $row["password"]) ) {

			//set session
			$_SESSION['login'] = true;

			echo " <script>
					alert('Login Berhasil!');
					document.location.href = 'index.php';
				</script>";
			exit;
		}
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Halaman Login</title>
</head>
<body>
    <?php if( isset($error) ){
		echo " <script>
					alert('Silahkan Masukan Username Dan Password dengan Benar!');
				</script>";
		}
	?>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title">

                </div>
            </div>

            <form action="" method="POST" class="form">
                <label for="username" style="padding-top: 13px;">&nbsp; Username</label>
                <input type="text" name="username" id="username" class="form-content" required autocomplete="off">
                
                <div class="form-border"></div>

                <label for="password" style="padding-top: 22px;">&nbsp; Password</label>
                <input type="password" name="password" id="password" required class="form-content">
                
                <div class="form-border"></div>
                
                <label style="padding-top: 22px; text-align: right; color: #3498db;" >Don't have an account? 
                <a href="registrasi.php">Registration Here</a></label>

                <button type="submit" name="login" id="submit-btn">Login</button>
             </form>
        </div>
    </div>
</body>
</html>