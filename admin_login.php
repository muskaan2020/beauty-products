<?php
	include 'config/config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="css/admin_login.css">

    <title>Login</title>
	<style>
		a{
			color: black;
			font-weight: bold;
			transition: 0.4s ease-in-out;
		}
		a:hover{
			color: #ff7200;
		}
	</style>
  </head>
  <body>

    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">

      <div class="bg-img"></div>
      <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->

    <div class="container" id="login">
        <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="login">

            <h1>Login</h1>
            
            <!-- Loging form -->
                  <form action="#" method="POST">
                    <div class="form-group">
                      <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                      
                    </div>
                    <div class="form-group">
                      <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                      <div class="form-check">

                      
                      <label class="forgot-password"><a href="#">Forgot Password?<a></label>

                    </div>
                  
                    <br>
                    <button type="submit" name="login" class="btn btn-lg btn-block btn-success">Sign in</button>
					<label class="back-homepage"><a href="index.php" style="text-decoration: none;">Back to home page</a></label>
                  </form>
             <!-- End Loging form -->

          </div>
        </div>
        </div>
    </div>


  </body>
</html>

<?php
if(isset($_POST['login'])){
	if (empty($_POST['uname']) && empty($_POST['pwd'])) {
		echo '<script>alert("Email and Password required");</script>';
	} 
	else {
			if (strlen($_POST['pwd']) < 4){
			echo '<script>alert("Password should be equal or greater than 4 characters");</script>';
			}
			else{
				$uname=$_POST['uname'];
				$pwd=$_POST['pwd'];
				$sql = "SELECT * FROM admin WHERE username ='$uname' AND password = '$pwd'"; 
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
      
				//$count = mysqli_num_rows($result);
	  
		
				if($row > 0) {
					//$_SESSION['isloggedin'] = true;
					//$_SESSION['name']=$row['first name'];
         
					echo"<script>alert('You are logged in!!'); location='admin/admin_page.php';</script>";
				}
				else {
					echo '<script>alert("Invalid details!!");</script>';
				}
			}	
	}	
	
}
?>