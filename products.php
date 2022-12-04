<?php 
	error_reporting(0);
	session_start();
	if(strlen($_SESSION['isloggedin']==0))
	{
		echo "<script type='text/javascript'>alert('Please login to proceed');location='index.php';</script>";
		//header('location: index.php');
		unset($_SESSION['isloggedin']);
	}
	else{
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
	<div class="container">

		<!--header-->
		<div class="main">
        	<div class="navbar">
            <div class="icon">
                <h2 class="logo">BeautYou</h2>
            </div>

            <div class="menu">
                <ul> 
					<li><a href="Skin care.php" target="_parent">Skin</a></li> 
					<li><a href="Hair care.php" target="_parent">Hair</a> </li> 
					<li><a href="Body Care.php" target="_parent">Body</a></li>
					<li><a href="Cosmetics.php" target="_parent">Cosmetics</a></li>
					<li><a href="logout.php" target="_parent">Logout</a></li>					
                </ul>
            </div>

            <div class="search">
			<form name=f2 action="#" method="POST">
                <input class="srch" type="search" name="query" placeholder="Type To text">
                <button type="submit" class="btn" name="search">Search</button>
			</form>	
            </div>
			
		</div>
			
			
			<!--display categories-->
			<?php include 'config/config.php'; ?>
			<section class="w3l-recent-work-hobbies">
			<div class="recent-work ">
            <div class="container">
			<br><h1 style="color: white; text-align: center; font-weight: bold; font-size: 30px;"><span> CATEGORIES </span></h1><br>
                <div class="row about-about">
                
				<?php
                $sql="select * from  category";

				$ret=mysqli_query($conn,$sql);
				// $cnt=1;
				while ($row=mysqli_fetch_array($ret)) {
				?>
                <div class="col-lg-4 col-md-6 col-sm-6 propClone">
                    <a href="<?php  echo $row['c_name'];?>.php"><img src="images/<?php echo $row['c_img']?>" alt="category" height="200px" width="370px"
                        class="img-responsive about-me"></a>
                        <div class="about-grids ">
                        <h3 class="para" style="color: white; text-align: center "><?php  echo $row['c_name'];?></h3>

                        </div>
                </div>
                <?php
// $cnt=$cnt+1;
}?>

            </div>
        </div>
    </div>
</section>
</div>	
</div>	
</body>
<?php 
if(isset($_POST['search'])){
	$query = $_POST['query']; 
	
	$min_length = 3;
	
	if(strlen($query) >= $min_length){ 
		
		$sql="SELECT * FROM products
			WHERE 'p_name' LIKE '%'.$query";
		$raw_results = mysqli_query($conn, $sql);
			
		if(mysqli_num_rows($raw_results) > 0){ 
			
			while($results = mysqli_fetch_array($raw_results)){
			
				echo "<p>".$results['p_img']."<h3>".$results['p_name']."</h3></p>";
				header('location: search.php');
			}
			
		}
		else{
			echo "<script>alert('No results');</script>";
		}
		
	}
	else{ 
		echo "Minimum length is ".$min_length;
	}
}
?>

<?php include 'includes/footer.php'; ?>
</html>
<?php 
} 
?>