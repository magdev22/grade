<?php
include("./functions.php");
$grade= $_POST['grade'];
$array= explode(",", $grade);
$sum=sumArr($array);
?>
<form action="" method="post">
    <input type="text" name="grade">
    <input type="submit">
</form>
<h1>четвертная <?php print_r($sum) ?></h1>
