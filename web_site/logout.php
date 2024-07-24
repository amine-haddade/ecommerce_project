<?php 
session_start();
session_destroy();
setcookie("user","",time()-1,"/");
header('location:index.php');