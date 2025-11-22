<?php
include("auth.php");
include("header.php");
require('db.php');

$zivoty=$_SESSION["zivoty"];
$xp=$_SESSION["xp"];
$unava=$_SESSION["unava"];
$penize=$_SESSION["penize"];
$id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html>
<style>
    .fontos {font-size:400%;}
    
    </style>    
    
 <div class="blok"  >
  <p>V temný uličce to vždycky vypadá jakože se tam nic neděje. Většinou je ale opak pravdou a dostaneš tam pěkně na budku. Potuluje se to tam bezdomovci, opilými rváči a všeljakou havětí. Na druhou stranu, když tam někoho pořádně dokopeš, tak to policajti nebudou řešit, protože se to tam děje běžně a může ti z toho i něco kápnout.
        </p>   
<img src="lokace/ulicka.jpg"  alt="ulicka" align="center" />
     
     
     <form action="" method="GET">
      <input type='submit' name="Ulicka" value='Vstoupit'>
    </form> 
     
     
 <p class="fontos">Dnes se tu prej potuluje:</p>    

     
     <?php
     
     function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
};
     
     
     $nepritel=rand(1,9);
     $obrazek = '<img src="nepratele/' .$nepritel. '.jpg ">';
     
$kvery = mysqli_query($con,"SELECT jmeno FROM `nepratele` WHERE id_nepritel = $nepritel");
$vec = mysqli_fetch_assoc($kvery);
$jmeno_nepritel = $vec['jmeno'];
     
     echo $obrazek;
     
     echo '<p class="fontos">';
     echo $jmeno_nepritel;
     echo '</p>';
     
    $x=0;
     
     
     if(isset($_GET['Ulicka'])) {
         if($zivoty>30 and $unava<80) {
             
             $dobro=rand(1,2);
             $unava=$unava+20;
            $x=$dobro;                                  
             if ($dobro==1) {
             $penize=$penize+30;
             $xp=$xp+5;
             $rand=rand(1,2);     
             $odpoved= $odpoved='scenare/ulicka/1/'.$rand.'.php';
             include($odpoved); 
             };
             
             
             if ($dobro==2) {
             $zivoty=$zivoty-30;
             $penize=$penize-5;
             $rand=rand(1,2);
             $odpoved='scenare/ulicka/2/'.$rand.'.php';
             include($odpoved); 
             };
             
             
             
                                                  };
                
         
     };
      
    
     
     
     
     
     if(isset($_GET['Ulicka']) and $zivoty<30){phpAlert("Tohle je moc nebezpečné...");};
     if(isset($_GET['Ulicka']) and $unava>=80){phpAlert("Na to seš moc unavenej.");};
     
       
   $_SESSION["zivoty"]= $zivoty;
$_SESSION["penize"]=$penize;
       $_SESSION["xp"]=$xp;
$_SESSION["unava"]=$unava;
     
     
     if ($x==1){$v='Vyhra';} ;
         if ($x==2){$v='Prohra';} ;
     
     $jmeno=  $_SESSION["jmeno"];

    if(isset($_GET['Ulicka']))  {$query = "INSERT INTO `souboje` (id_user,id_nepritel,stav)
VALUES ('$jmeno','$jmeno_nepritel','$v')";
    
        $result = mysqli_query($con,$query);   }
     
     ?> 
    </div>
    
<?php include("footer.php"); ?>

</html>