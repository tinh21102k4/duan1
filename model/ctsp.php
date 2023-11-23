<?php

function load_one_spct($prdid)
{
    $sql = "SELECT p.*,n.*,c.* FROM product p
    JOIN nature n ON p.prdid = n.itemsid
    JOIN category c ON p.prdid = c.itemsid
    WHERE p.prdid = ".$prdid ;
    $result =pdo_query($sql);
    return $result;
}
function all_prd_lq()
{
    $sql = "SELECT product.* FROM product JOIN category ON product.prdid = category.itemsid WHERE category.category = 'dress' ;";
    $result = pdo_query($sql);
    return $result;
}

?>