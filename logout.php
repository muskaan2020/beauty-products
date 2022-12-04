<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('You are successfully logout!! Please login again!!'); location='index.php';</script>";
?>