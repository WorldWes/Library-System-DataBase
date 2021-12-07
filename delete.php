<!-- Created by: India W. -->
<!-- Date modified: 12-6-2021 -->
<!-- Deletion from DataBase File -->
<?php
include "connection.php";
$patronId=$_GET["patronId"];
mysqli_query($link,"delete from patron where patronId=$patronId");
?>

<script type="text/javascript">
window.location="index.php";

</script>