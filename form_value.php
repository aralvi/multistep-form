<?php
$postdata = file_get_contents("php://input");
echo $postdata;
foreach ($_POST as $key => $value) {
    echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
}
?>