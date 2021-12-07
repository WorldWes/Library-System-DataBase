<!-- Created by: India W. -->
<!-- Date modified: 12-6-2021 -->
<!-- Connection to DataBase File -->
<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"php_library1") or die(mysqli_error($link));

?>