<?php
require('db.php');
include("auth.php");
include("header.php");
$jmeno=$_SESSION["username"];
$hlava=$_SESSION["hlava"];
$oci=$_SESSION["oci"];
$pusa=$_SESSION["pusa"];
$brada=$_SESSION["brada"];
$zivoty=$_SESSION["zivoty"];
$xp=$_SESSION["xp"];
$unava=$_SESSION["unava"];
$penize=$_SESSION["penize"];
$chlava = '<img src="pvy-obliceje/1/' .$hlava. '.jpg">';
$coci = '<img src="pvy-obliceje/2/' .$oci. '.jpg">';
$cpusa = '<img src="pvy-obliceje/3/' .$pusa. '.jpg">';
$cbrada = '<img src="pvy-obliceje/4/' .$brada. '.jpg">';   

if ($xp<=9) {$hodnost='Zhulenec';}; 
if ($xp>=10) {$hodnost='Vesnickej tuner aut';}; 
if ($xp>=20){$hodnost='Vesnickej ochlasta';}; 
if ($xp>=30){$hodnost='Slabčák';}; 
if ($xp>=40){$hodnost='Vesnický dítko';}; 
if ($xp>=50){$hodnost='Běžný občan';}; 
if ($xp>=60){$hodnost='Starosta';}; 
if ($xp>=70){$hodnost='Pardál';}; 
if ($xp>=80){$hodnost='Chábr';}; 
if ($xp>=90){$hodnost='Řetízkáč';}; 
if ($xp>=100){$hodnost='Rafan z Petrovic';};




?>
<!DOCTYPE html>
<html>


<div class="blok">
    <h1> <?php echo $hodnost;?><br><?php echo $jmeno;?>   </h1>
    <div class="polovina2">
        <div class="postava">
            <?php 
                    echo $chlava; echo '<br>';
                    echo $coci;  echo '<br>';
                    echo $cpusa; echo '<br>';
                    echo $cbrada; echo '<br>'; ?>
        </div> 
        <?php if($hlava==9 and $oci==1 and $pusa==11 and $brada==5){echo '<img src="grafika/ecdl.jpg">';}
        ?>
        <p><img src="grafika/zdravi.jpg">Zdraví: <?php echo $zivoty ?></p> 
        <p><img src="grafika/xp.jpg">Xp: <?php echo $xp ?></p> 
        <p><img src="grafika/spanek.jpg">Únava:  <?php echo $unava ?></p> 
        <p><img src="grafika/love.jpg">Love:  <?php echo $penize ?></p> 
        

        </div>
    
    <div class="polovina">
        <p>Tak tohle seš ty. Naprostá troska co nikdy nic nedokázala a ani asi nedokáže... Nebo se snad mýlím? Mimochodem, kromě fotky tvojeho pohoršujícího obličeje zde najdeš jak na tom seš. Kolik ti zbývá životů, kolik máš zkušeností a jak moc seš znaven.Pamatuj, pokud je tvé zdraví příliš nízké nebo tvá únava příliš vysková, tak se nemůžeš zůčastnit různých akcí. Tvé zkušenosti udávají jak tě vnímá okolí. A peníze... No to je snad jasný ne? Bez peněz do šopu nelez! </p>
    </div>
    
     
    
    </div>

  
    
    
    
<?php include("footer.php");?>
</html>