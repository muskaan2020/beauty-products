<?php include 'config/config.php'; ?>
<?php 
session_start();
?>
<html>
<head><link rel=stylesheet type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/header.css"></head>		
<body>
<div class="container">
			<div class="main">
        	<div class="navbar">
            <div class="icon">
                <h2 class="logo">BeautYou</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>  
					<li><a href="products.php" target="_parent" name="products">Products</a></li> 
					<li><a href="admin_login.php" target="_parent">Admin</a></li>
                </ul>
            </div>
			
        </div>
		
		<div class="content">
            <h1>30% off on<br><span>Skin & Hair Care</span> <br>Products</h1>

                <button class="cn"><a href="Skin care.php" target="_parent">BUY NOW</a></button>

                <div class="form">
                    <h2>Login Here</h2>
					<form name=f1 method=POST action="#">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="pwd" placeholder="Enter Password Here">
                    <button type="submit" class="btnn" name="login">Login</button>
                    
					<p class="link">Don't have an account<br>
                    <a href="registration.php" target="_parent">Sign up </a> here</p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
					</form>
                </div>
        </div>
    </div>
</div>	
</body>	
<?php 

if(isset($_POST['login'])){
	if (empty($_POST['email']) && empty($_POST['pwd'])) {
		echo '<script>alert("Email and Password required");</script>';
	} 
	else {
			if (strlen($_POST['pwd']) < 4){
			echo '<script>alert("Password should be equal or greater than 4 characters");</script>';
			}
			else{
				$email=$_POST['email'];
				$pwd=$_POST['pwd'];
				$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pwd'"; 
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
      
				//$count = mysqli_num_rows($result);
	  
		
				if($row > 0) {
					$_SESSION['isloggedin'] = true;
					$_SESSION['name']=$row['first name'];
					$name = $row['first name'];
					echo "<script type='text/javascript'>alert('You are logged in!!! Welcome $name !!');location='index.php';</script>";
				}
				else {
					echo '<script>alert("Invalid details!!");</script>';
				}
			}	
	}	
	
}
?>
</html>