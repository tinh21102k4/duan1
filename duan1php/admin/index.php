<?php 
// Hàm khởi tạo session
session_start();
define("ISLOGGED",true);
include "../config/connectDB.php";
include "../../model/pdo.php";
include "../../model/danhmuc.php";

if(isset($_SESSION['user_login'])) {
    include_once "admin.php";
}else{
    include_once "login.php";
}
?>