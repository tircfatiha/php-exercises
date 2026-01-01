<?php
if (isset($_FILES["file"])) {
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];

    if (($type == "image/jpeg" || $type == "image/png") && $size < 2*1024*1024) {
        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
        echo "تم الرفع بنجاح";
    } else {
        echo "ملف غير صالح";
    }
}
?>
