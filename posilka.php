<?php
include("auth.php");
include("header.php");
 $xp=$_SESSION['xp'];
$penize=$_SESSION["penize"];
$unava=$_SESSION["unava"];
$zivoty=$_SESSION["zivoty"];
?>
<!DOCTYPE html>
<html>


    
    

    
 <div class="blok"  >
  <p>Do posilky se chodí bušit s zvlášť do tady tohodlenctoho "Zlatýho Džimu", to ví každý malý dítě. Ale jakmile si přišel, tak ti místní 
      posilkáč začal nabízet všeljakou zdravou stravu, tabletky, proteiny a podobný věci. Nejseš si úplně jistej, co má za luben, ale ten týpek se ti moc  nezdá. Vstup do posilky stojí prej 20 korun, tak kdo ví, co se tam naučíš za ty love.
        </p>   
<img src="lokace/posilka.jpg"  alt="posilka" align="center" />
<br>
     <form action="" method="GET">
      <input type='submit' name="posilka" value='Vstoupit'>
    </form>
     
     <?php function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
};
     

     
     
     
     
     if(isset($_GET['posilka'])){if($zivoty>=10 and $unava<=90 and $penize>=20){
        $penize=$penize-20;
        $unava=$unava+10;
        $dobry=rand(1,2);
            if($dobry==1){
                    $xp=$xp+1;
                    $rand=rand(1,3);
                    $odpoved='scenare/posilka/1/'.$rand.'.php';
                include($odpoved) ;
                    };
            if($dobry==2){
                    $zivoty=$zivoty-5;
                     $rand=rand(1,3);
                     $odpoved='scenare/posilka/2/'.$rand.'.php';
                include($odpoved) ;
                    };
        }; 
                     };
      
     
      if(isset($_GET['posilka']) and $unava==90){phpAlert("Na todlencto seš moc znavené...");};
     if( isset($_GET['posilka']) and $zivoty==10){phpAlert("Tvé zdraví je nízké, podle mě je nebezpečné tam jít...");};
     if( isset($_GET['posilka']) and $penize<20){phpAlert("Seš bez peněz.");};
     
   $_SESSION["zivoty"]= $zivoty;
$_SESSION["unava"]=$unava;
$_SESSION["penize"]=$penize;
       $_SESSION["xp"]=$xp;
    ?> 
    </div>
    
<?php include("footer.php")?>

</html>