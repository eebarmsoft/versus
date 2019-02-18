<!DOCTYPE html>
<html lang="en">
<head>
	<title>VERSUS</title>
	<meta charset="UTF-8">
    <style>
        .wrong_passowrd{
            position:absolute;
            top: 370px;
            left: 815px;
            z-index: 2;
            color: whitesmoke;
            
        }
        #footer{
            
            width:100%;
            height: 5%;
            position: absolute;
            background-color: whitesmoke;
            color: black;
            bottom: 0px;
            z-index: 3;
            text-align: center;
            padding: 12px;
            font-family:sans-serif;
            
        }
    
    </style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="POST" action="">
					<div class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<input type="submit" value="Login" name="submit" class="login100-form-btn"/>
							
						
                        
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

    
    <?php
 include ("connection.php");
  session_start();


if(isset($_POST['submit']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
    $query = "SELECT * FROM login WHERE username='$username' && password = '$password'";
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    if($total == 1)
    {
        $_SESSION['username']=$username;
        $_SESSION['password'] =$password;
        header('location:logincheck.php');
        
        
      
        
        
    
    }else 
         {
          echo "<h6 class='wrong_passowrd'>Username or Password is Incorrect</h6>";
         }
}
?>
    
   
    
    
    
    
   <div id="footer">Developed by <font color =blue >EebaramSoft</font></div> 
    
    
    

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>