<?php
function loadall_dsfeedback()
{
    $sql = "SELECT * FROM customer_feedback";
    $dsfeedback = pdo_query($sql);
    return $dsfeedback;
}
// git branch + ten nhanh 
// git checkout + ten nhanh
// git push -u origin + ten nhanh

