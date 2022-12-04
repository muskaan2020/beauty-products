<?php include 'config/config.php'; ?>
<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">     
      <link rel="stylesheet" type="text/css" href="css/registration.css">    
      <title>Registration Form</title>  
   </head>  
   <body>  
<section class="h-100 bg-dark">  
  <div class="container py-5 h-100">  
    <div class="row d-flex justify-content-center align-items-center h-100">  
      <div class="col">  
        <div class="card card-registration my-4">  
          <div class="row g-0">  
            <div class="col-xl-6 d-none d-xl-block">  
              <img  
                src="images/aboutus.jpg"  
                alt="Sample photo"  
                class="img-fluid"  
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"  
              />  
            </div>  

            <div class="col-xl-6">  
              <div class="card-body p-md-5 text-black">  
                <h3 class="mb-5 text-uppercase" style="text-align: center; font-weight: bold;">Registration form </h3>  

                <form name= f1 action="#" method="POST">
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m" class="form-control form-control-lg"
                      name="fname" />  
                      <label class="form-label" for="form3Example1m"> First name </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lname" />  
                      <label class="form-label" for="form3Example1n"> Last name </label>  
                    </div>  
                  </div>  
                </div>  
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="email" id="form3Example1m1" class="form-control form-control-lg" name="email"/>  
                      <label class="form-label" for="form3Example1m1"> E-mail </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="number" id="form3Example1n1" class="form-control form-control-lg" name="number" />  
                      <label class="form-label" for="form3Example1n1"> Mobile Number </label>  
                    </div>  
                  </div>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="Password" id="form3Example8" class="form-control form-control-lg" name="pwd" />  
                  <label class="form-label" for="form3Example8"> Password </label>  
                </div>  
                  <div class="form-outline mb-4">  
                  <input type="Password" id="form3Example8" class="form-control form-control-lg" name="pwd2" />  
                  <label class="form-label" for="form3Example8"> Confirm Password </label>  
                </div>  
                
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example9" class="form-control form-control-lg" name="address" />  
                  <label class="form-label" for="form3Example9"> Address </label>  
                </div>  

                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="state" />  
                      <label class="form-label" for="form3Example1m"> State </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="city" />  
                      <label class="form-label" for="form3Example1n"> City </label>  
                    </div>  
                  </div>  
                </div>  

                <div class="form-outline mb-4">  
                  <input type="number" id="form3Example90" class="form-control form-control-lg" name="pincode" />  
                  <label class="form-label" for="form3Example90"> Pincode </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="country" />  
                  <label class="form-label" for="form3Example99"> Country </label>  
                </div>  
                <div class="d-flex justify-content-end pt-3">  
                  <button type="reset" class="btn btn-light btn-lg" style="background: #ff7200; font-family: serif; color: black;"> Reset all </button>  
                  <button type="submit" class="btn btn-warning btn-lg ms-2" style="background: #ff7200; font: times; font-family: serif; color: black;" name="b1"> Submit form </button>  
                </div> 
                </form> 
              </div>  
            </div>  
          </div>  
        </div>  
      </div>  
    </div>  
  </div>  
</section>  
</body>  
</html>  
<?php
if(isset($_POST['b1'])){
	if(empty($_POST['fname']) || 
		empty($_POST['lname']) || 
		empty($_POST['email']) ||
		empty($_POST['number']) || 
		empty($_POST['pwd']) || 
		empty($_POST['pwd2']) ||
		empty($_POST['address']) ||
		empty($_POST['state']) ||
		empty($_POST['city']) ||
		empty($_POST['pincode']) ||
		empty($_POST['country']) 
	){
		echo'<script>alert("Please fill all the required fields!!");</script>';
	}
	else{
		if(!strlen($_POST['number']) == 10){
			echo'<script>alert("Mobile number should be of 10 digits only");</script>';
		}
		else{
			if(!strlen($_POST['pincode'])==6){
				echo'<script>alert("Pincode should be of 6 digits only");</script>';
			}
			else{
				if(!strlen($_POST['pwd']) > 4){
					echo'<script>alert("Password should be greater than 4 characters");</script>';
				}
				else{
					if($_POST['pwd'] !== $_POST['pwd2']){
						echo'<script>alert("Password and Confirm password should match!");</script>';
					}
					else{
						$pwd=$_POST['pwd'];
						$pincode=$_POST['pincode'];
						$number=$_POST['number'];
						$fname=$_POST['fname'];
						$lname=$_POST['lname'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$state=$_POST['state'];
						$city=$_POST['city'];
						$country=$_POST['country'];
	
						$s="select email from users where email='$email' || contactno='$number'";
						$ret=mysqli_query($conn,$s);
						$result=mysqli_fetch_array($ret);
						if($result>0){
							echo'<script>alert("Email or contact already in use!!");</script>';
						}
						else{
							$sql="INSERT INTO users VALUES(0,'$fname','$lname','$email', '$number', '$pwd', '$address', '$state', '$city', '$pincode', '$country')";
							$query=mysqli_query($conn,$sql);
							if($query){
								echo"<script>alert('Data Inserted!! Please login to proceed!!'); location='index.php';</script>";
							}
							else{
								echo"<script>alert('Invalid Insertion!!');</script>";
							}
						}
					}
				}
			}
		}
	}
}
?>