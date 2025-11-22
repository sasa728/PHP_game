<?php
include("auth.php");
include("header.php");
$xp=$_SESSION['xp'];
$penize=$_SESSION["penize"];
$zivoty=$_SESSION["zivoty"];
?>
<!DOCTYPE html>
<html>

    
    

    
 <div class="blok"  >
  <p>Vešel si do kostela a vyskočil na tebe tenhlencten týpek. Vypadá celkem zajímavě a divně
      se na tebe šklebí. Vyznává asi i nějakou podivnou víru, říkal něco jako Lanux, Lenux nebo Linux, úplně si nejseš jistej, protože to řekl strašně rychle. Ale jakmile pokračoval s mluvením, tak ti došlo, že to je fajnovej chlápek,
      kterej to má v hlavě v pořádku.
        </p>  
     <br>
     <p>Pokud chceš koupit odpustku, tak stojí 5 korun.</p>
<img src="lokace/kostel.jpg"  alt="kostel" align="center" />
<br>
     <form action="" method="GET">
      <input type='submit' name="kostel1" value='Přiznat se k hříchům'>
        <input type='submit' name="kostel2" value='Koupit odpustku'>
    </form>
     
     <?php 
     
     function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
};
    
     
     if(isset($_GET['kostel1'])){ if($zivoty>5) {
         
                                $dobro=rand(1,2);
                                 
                                                    if($dobro==1){$xp=$xp+1;
                                                                    $rand=rand(1,2);
                                                            $odpoved='scenare/kostel/1/1/'.$rand.'.php';
                                                                  include($odpoved) ;
                                                                 };
                                    
                                                    if($dobro==2){$zivoty=$zivoty-5;
                                                                  $rand=rand(1,2);
                                                            $odpoved='scenare/kostel/1/2/'.$rand.'.php';
                                                                  include($odpoved) ;
                                            
                                                                 };
                                     
                                };};
     
     if(isset($_GET['kostel2'])){
                                    if($penize>5) {
                                                   $penize=$penize-5;
                                                   $xp=$xp+1;
                                                   $rand=rand(1,2);
                                                   $odpoved='scenare/kostel/2/'.$rand.'.php';
                                                   include($odpoved) ;
                                                  };
                
                                };
     
      if(isset($_GET['kostel1']) and $zivoty<=5){phpAlert("Něco se ti nezdá, nikdy nevíš, kdy dostaneš do tlamy. Měl bys jít.");};
     
     if(isset($_GET['kostel2']) and $penize<5){phpAlert("Už nemáš ani na odpustku. S tebou je to hodně špatný.");};
      
      
     
   $_SESSION["zivoty"]= $zivoty;
$_SESSION["penize"]=$penize;
       $_SESSION["xp"]=$xp;
    ?> 
    </div>
    
    
<?php include("footer.php") ?>

</html>