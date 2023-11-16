<?php
session_start();
include "../../models/pdo.php";
include "../../models/taikhoan.php";
include "../../models/hanghoa.php";
include "../../models/danhmuc.php";
include "../../models/feedback.php";

include "includes/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dstaikhoan':
            $dstaikhoan = loadall_dstaikhoan();
            include "includes/qltaikhoan/dstk.php";
            break;
        case 'dshanghoa':
            $dshanghoa = loadall_dshanghoa();
            include "includes/qlhanghoa/dshh.php";
            break;
        case 'dsdanhmuc':
            $dsdanhmuc = loadall_dsdanhmuc();
            include "includes/qldanhmuc/dsdm.php";
            break;
        case 'feedback':
            $dsfeedback = loadall_dsfeedback();
            include "includes/qlfeedback/dsfb.php";
            break;
    }
} else {
    include "includes/home.php";
}
include "includes/footer.php";
?>