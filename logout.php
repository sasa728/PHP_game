<?php
require('db.php');
session_start();
$id=$_SESSION["id"];
$zivoty=$_SESSION["zivoty"];
$xp=$_SESSION["xp"];
$unava=$_SESSION["unava"];
$penize=$_SESSION["penize"];
$query = "UPDATE `postava`" . "SET `zivoty` = $zivoty, `xp` = $xp, `unava` = $unava , `penize` = $penize". " WHERE `postava`.`id_postava` = $id";
$result=mysqli_query($con,$query);






if(session_destroy())
{
header("Location: login.php");
}
?>