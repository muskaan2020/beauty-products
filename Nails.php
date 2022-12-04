<?php include 'config/config.php'; ?>
<?php include 'includes/navbar.php'; ?>
<section class="w3l-recent-work-hobbies">
        <div class="recent-work ">
            <div class="container">
                <div class="row about-about">
                <?php
                $sql="select * from  products where cid=5";

$ret=mysqli_query($conn,$sql);
// $cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone">
                        <img src="images/<?php echo $row['p_img']?>" alt="product" height="300" width="400"
                            class="img-responsive about-me">
                        <div class="about-grids ">
                            <hr>
                            <h5 class="para"><?php  echo $row['p_name'];?></h5>
                            <p class="para "><?php  echo $row['p_desc'];?> </p>
                            <p class="para " style="color: #7d1128;"> Price: Rs <?php  echo $row['p_price'];?>
                            </p>

                        </div>
                    </div>
                    <br><?php
// $cnt=$cnt+1;
}?>

                </div>
            </div>
        </div>
    </section>