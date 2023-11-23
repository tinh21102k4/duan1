<?php
 function loadone_dm($prdid)
 {
    $sql = 'SELECT product.*
    FROM product
    JOIN category ON product.prdid = category.itemsid
    WHERE category.itemsid = '.$prdid;
    $result = pdo_query_one($sql);
    return $result;
 }
 function delete_danhmuc($itemsid)
 {
     $sql = "DELETE FROM category WHERE itemsid =".$itemsid;
     pdo_execute($sql);
 }
 
 function loadall_danhmuc()
 {
     $sql = "SELECT * FROM category ORDER BY id DESC limit 5 ";
     $result = pdo_query($sql);
     return $result;
 }
 
 function loadone_danhmuc($itemsid)
 {
     $sql = "SELECT * FROM category WHERE itemsid =" .$itemsid;
     $result = pdo_query_one($sql);
     return $result;
 }
 
 function update_danhmuc($itemsid,$cate)
 {
     $sql = "UPDATE category SET category = '".$cate." ' WHERE itemsid =" .$itemsid;
     pdo_execute($sql);
 }
?>