<- form.html ->
<form method="post">
    <input type="text" name="email">
    <button type="submit">إرسال</button>
</form>

<?php
if ($_POST) {
    if (empty($_POST["email"])) {
        echo "الحقل فارغ";
    } else {
        echo "البريد: " . $_POST["email"];
    }
}
?>
