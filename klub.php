<?php
include("auth.php");
include("header.php");
$zivoty=$_SESSION["zivoty"];
$xp=$_SESSION["xp"];
$unava=$_SESSION["unava"];
$penize=$_SESSION["penize"];
?>
<!DOCTYPE html>
<html>

    
 <div class="blok"  >
  <p>Na to, že tohle je místní klub a je to tu plný ožralů a feťáků, tak je to tu většinou strašně klidný a nikdo se moc nemlátí. Takovej family friendly klub, pokud teda nenarazíš na místního posilkáče. Ale kromě toho se tu dá pěkně zatancovat a popít. Vstup stojí 30 korun.
        </p>   
<img src="lokace/klub.jpg"  alt="klub"  align="center" usemap="#klub" />
     
     <map name="klub">
    <area shape="circle" coords="154, 244, 67" href="http://www.aneridisco.cz" alt="easteregg" target="_blank"/>
    <area shape="circle" coords="672, 569, 28" href="easter2.php" alt="easteregg"/>
    <area shape="rect" coords="595, 659, 638, 672" href="https://www.tatratea.com/en/#!/products/view/forest-fruit" alt="easteregg" target="_blank" />
</map>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="imageMapResizer.min.js"></script>
<script>$(document).ready(function(e){$("map").imageMapResize();});</script>
<br>
     <form action="" method="GET">
      <input type='submit' name="Kalit" value='Chlastat u baru'>
        <input type='submit' name="Klatit" value='Sbalit holku'>
        <input type='submit' name="Dencit" value='Tancovat'>
    </form>
     
    
    
    
    <?php
    
     function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
};
    
     
     if(isset($_GET['Kalit'])){if($zivoty>10 and $penize>30 and $unava<90 ) {
         
                                $dobro=rand(1,2);
                                $unava=$unava+10; 
                                $penize=$penize-30;
                                                    if($dobro==1){$xp=$xp+2;                                                          
                                                                    $rand=rand(1,2);
                                                            $odpoved='scenare/klub/1/1/'.$rand.'.php';
                                                                  include($odpoved) ;
                                                                 };
                                    
                                                    if($dobro==2){$zivoty=$zivoty-10;
                                                                  $rand=rand(1,2);
                                                            $odpoved='scenare/klub/1/2/'.$rand.'.php';
                                                                  include($odpoved) ;
                                            
                                                                 };
                                     
                                };};
    
    
    
    
    if(isset($_GET['Klatit'])){if($zivoty>5 and $penize>30 and $unava<90 ) {
         
                                $dobro=rand(1,2);
                                $unava=$unava+10; 
                                $penize=$penize-30;
                                                    if($dobro==1){$xp=$xp+2;
                                                                    $rand=rand(1,2);
                                                            $odpoved='scenare/klub/2/1/'.$rand.'.php';
                                                                  include($odpoved) ;
                                                                 };
                                    
                                                    if($dobro==2){$zivoty=$zivoty-5;
                                                                  $rand=rand(1,2);
                                                            $odpoved='scenare/klub/2/2/'.$rand.'.php';
                                                                  include($odpoved) ;
                                            
                                                                 };
                                     
                                };};
    
    
    
    
    
    if(isset($_GET['Dencit'])){if($zivoty>5 and $penize>30 and $unava<90 ) {
         
                                $dobro=rand(1,2);
                                $unava=$unava+10;
                                $penize=$penize-30;
                                                    if($dobro==1){$xp=$xp+2;
                                                                    $rand=rand(1,2);
                                                            $odpoved='scenare/klub/3/1/'.$rand.'.php';
                                                                  include($odpoved) ;
                                                                 };
                                    
                                                    if($dobro==2){$zivoty=$zivoty-5;
                                                                  $rand=rand(1,2);
                                                            $odpoved='scenare/klub/3/2/'.$rand.'.php';
                                                                  include($odpoved) ;
                                            
                                                                 };
                                     
                                };};
    
    
    
    
    
    
     
      if(isset($_GET['Kalit']) and $unava>=90){phpAlert("Na klub seš moc unavenej..");};
     
    if(isset($_GET['Klatit']) and $unava>=90){phpAlert("Na klub seš moc unavenej.");};
    
    if(isset($_GET['Kalit']) and $unava>=90){phpAlert("Na klub seš moc unavenej.");};
    
    
    
    
    
    if(isset($_GET['Kalit']) and $penize<30){phpAlert("Nemáš peníze na vstup.");};
     
    if(isset($_GET['Klatit']) and $penize<30){phpAlert("Nemáš peníze na vstup.");};
    
    if(isset($_GET['Kalit']) and $penize<30){phpAlert("Nemáš peníze na vstup.");};
      
    
    
    
    
    
    if(isset($_GET['Kalit']) and $zivoty<=10){phpAlert("S tvojím fyzickým stavem není moc bezpečný tam jít. Uzdrav se.");};
     
    if(isset($_GET['Klatit']) and $zivoty<=5){phpAlert("S tvojím fyzickým stavem není moc bezpečný tam jít. Uzdrav se.");};
    
    if(isset($_GET['Kalit']) and $zivoty<=5){phpAlert("S tvojím fyzickým stavem není moc bezpečný tam jít. Uzdrav se.");};
      
      
      
     
   $_SESSION["zivoty"]= $zivoty;
$_SESSION["penize"]=$penize;
       $_SESSION["xp"]=$xp;
$_SESSION["unava"]=$unava;
    ?> 
    </div>
   <?php include("footer.php"); ?>

</html>