<?php
function calculerMoyenne($notes) {
    return array_sum($notes) / count($notes);
}

$notes = [12, 15, 18];
echo "المعدل: " . calculerMoyenne($notes);
?>
