<?php
function loadproduct()
{
    $sql = "SELECT * FROM product ORDER BY prdid DESC limit 8";
    $result = pdo_query($sql);
    return $result;  
}
function topproduct()
{
    $sql = "SELECT * FROM product  ORDER BY price asc LIMIT 3";
    $result = pdo_query($sql);
    return $result;
}
function topnewproduct()
{
    $sql = "SELECT * FROM product ORDER BY prdid desc limit 3";
    $result = pdo_query($sql);
    return $result; 
} 
function top3limited()
{
    $sql = "SELECT * FROM product JOIN nature
    ON product.prdid = nature.itemsid
    WHERE nature.amount = 1 limit 3;";
    $result = pdo_query($sql);
    return $result; 
} 


?>