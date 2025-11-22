<!DOCTYPE html>
<html>
<?php
    require('db.php'); 
    include("auth.php");
    include("header.php");?>

    
<div class="blok">
    <h2>Souboje</h2>
    <p>Zde najdeš svoje starší souboje a jejich výsledky. V tabulce se nachází tvé jméno, s kým si bojoval a jak souboj dopadl.</p>
   </div>
    <div class="tabulka">
   <?php
    $jmeno=$_SESSION["jmeno"];
    $x = mysqli_query($con,"SELECT * FROM `souboje` WHERE `id_user` = '$jmeno' "); 
    
echo "<table>"; 
        echo "<thead>"; echo "<tr><th>Jméno</th> <th>Protivník</th> <th>Stav</th> </tr> "; echo "</thead>";
        
while($row = mysqli_fetch_array($x)){ 
echo "<tr><td>" . $row['id_user'] . "</td><td>" . $row['id_nepritel'] . "</td><td>" . $row['stav'] . "</td></tr>";  
}

echo "</table>"; 
    ?>
</div>


<?php include("footer.php");?>
</html>