<?php
session_start();
include "../../models/pdo.php";
include "../../models/taikhoan.php";
include "includes/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dstaikhoan':
            $dstaikhoan = loadall_dstaikhoan();
            include "includes/qltaikhoan/dstk.php";
            break;
    }
} else {
    include "includes/home.php";
}
include "includes/footer.php";
?>