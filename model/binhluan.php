<?php 
function loadall_comment()
{
    $sql = "SELECT * FROM";
    $result = pdo_query($sql);
    return $result;
}
?>