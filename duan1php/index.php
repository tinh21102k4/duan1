<?php
include ('../model/pdo.php');
include ('../model/sanpham.php');
include ('../model/ctsp.php');
include('./userprofile/header.php');
if(isset($_GET['act'])){
     $act = $_GET['act'];
     switch( $act ) {
        case 'login':
            include('./userprofile/login.php');
             break;
            //  
        case 'cart':
            include('./userprofile/cart.php');
            break;
            // 
        case 'homepage':
            include('./userprofile/home.php');
            break;
            // 
        case 'sanphamct':
            if(isset($_GET['prdid'])&&($_GET['prdid']>0))
            {
                $prdid=$_GET['prdid'];
                
            }
            include('./userprofile/sanphamct.php');
            break;
            // 
        case 'productview':
            include('./userprofile/productview.php');
            break;
        case 'wishlist':
        include('./userprofile/withlist.php');
        break;
            
        default:
        include('./userprofile/home.php');

}
}else{
    include('./userprofile/home.php');
}
include('./userprofile/footer.php');
?>