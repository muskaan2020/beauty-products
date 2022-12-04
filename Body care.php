<?php include'navbar/navbar.php';?>
<html>
<head><link rel="stylesheet" type="text/css" href="css/care.css"></head>
</html>
<?php include 'config/config.php'; ?>
<section class="w3l-recent-work-hobbies">
        <div class="recent-work ">
            <div class="container">
			<br><h1 style="text-align: center; font-weight: bold; font-size: 35px;"><span> Body Care </span></h1><br>
                <div class="row about-about">
                <?php
                $sql="select * from  products where p_catg=3";

$ret=mysqli_query($conn,$sql);
// $cnt=1; 
while ($row=mysqli_fetch_array($ret)) {
?>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone">
                        <img src="images/<?php echo $row['p_img']?>" alt="product" height="300px" width="300px"
                            class="img-responsive about-me">
                        <div class="about-grids ">
                          <hr>
                            <h5 class="para" style="text-align: center; "><?php  echo $row['p_name'];?></h5>
                            <p class="para " style="text-align: center; "> Price: Rs <?php  echo $row['p_price'];?><br>
							<a href="payment.php?id=<?php echo $row['pid']; ?>" style="text-decoration: none; color:black; font-weight: bold;">Buy-Now</a>
                            </p>

                        </div>
                    </div>
                   <?php
// $cnt=$cnt+1;
}?>

                </div>
            </div>
        </div>
    </section>
<br><br><?php include'includes/footer.php';	