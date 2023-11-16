<?php
function loadall_dsdanhmuc()
{
    $sql = "SELECT * FROM catagory";
    $dsdanhmuc = pdo_query($sql);
    return $dsdanhmuc;
}
