<?php
include("auth.php");
include("header.php");
?>

    
    

    
 <div class="blok"  >
     <div class="form">
<p>Vítej <?php echo $_SESSION['username']; ?>!</p>
<p>Tohle je mapa, vydej se prozkoumat různé oblasti.</p>
</div>
     
     
<img src="lokace/mapa.jpg" id="map-image" alt="" usemap="#mapa" align="center" />

<map name="mapa">
    <area shape="rect" coords="625, 154, 692, 198" href="easter1.php" alt="easteregg" />
    <area shape="rect" coords="283, 557, 548, 595" href="ulicka.php" alt="ulicka" />
    <area shape="rect" coords="1, 438, 145, 714" href="kostel.php" alt="kostel" />
    <area shape="rect" coords="409, 229, 560, 544"  href="klub.php" alt="klub"/>
    <area shape="rect" coords="5, 270, 142, 393" href="posilka.php" alt="posilka" />
    <area shape="rect" coords="272, 5, 416, 75" href="bejvak.php" alt="bejvak"/>
    <area shape="rect" coords="3, 3, 123, 77" href="shop.php" alt="shop" />
</map>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="imageMapResizer.min.js"></script>
<script>$(document).ready(function(e){$("map").imageMapResize();});</script>
     
</div>
    
<?php
include("footer.php");
?>