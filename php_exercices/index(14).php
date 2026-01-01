<?php
try {
    $a = 10;
    $b = 0;
    if ($b == 0) {
        throw new Exception("القسمة على صفر ممنوعة");
    }
    echo $a / $b;
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
