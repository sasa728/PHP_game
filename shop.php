<?php
include("auth.php");
    include("header.php");
$zivoty=$_SESSION["zivoty"];
$unava=$_SESSION["unava"];
$penize=$_SESSION["penize"];
?>
<!DOCTYPE html>
<html>
    

    
 <div class="blok"  >
  <p>V místním obchodě mají opravdu nejlepší výběr všemožného zboží. Jen je škoda, že na většinu zboží je potřeba členská karta, kterou má pouze prodavačka, její dcera a jejich 10 koček. 
    </p>  <br>
     <p> A když tak přemýšlíš, ta prodavačka je úplně vedle. Nejen že má 10 koček, ale vždycky když přijdeš, tak do tebe začne sypat nějaký kódy, že si máš vybrat něco z horní matice a ať nedopleteš indexování. Sice nechápeš o čem mluví, ale dochází ti, že si musíš vybrat něco z horních vytrín.</p>
<img src="lokace/obchod.jpg"  alt="shop" align="center" />
<br>
     <form action="" method="GET">
      <input type='submit' name="a" value='Bejk'>
         <input type='submit' name="b" value='Máčka'>
         <input type='submit' name="c" value='Bahno'>
         <input type='submit' name="d" value='Jabko'>
    </form>
     
     
     
     <?php
     function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
};
     
     
     if(isset($_GET['a'])){if($penize>20 and $unava>=20){
        $penize=$penize-20;
        $unava=$unava-20;
        $odpoved='scenare/shop/1.php';
        include($odpoved);};
        }; 
     
     
        if(isset($_GET['b'])){if($penize>10 and $unava>=10){
        $penize=$penize-10;
        $unava=$unava-10; 
        $odpoved='scenare/shop/2.php';
        include($odpoved);};
        }; 
     
     
        if(isset($_GET['c'])){if($penize>10 and $zivoty<=90){
        $penize=$penize-10;
        $zivoty=$zivoty+10;
        $odpoved='scenare/shop/3.php';
        include($odpoved);};
        }; 
     
        if(isset($_GET['d'])){if($penize>5 and $zivoty<=95){
        $penize=$penize-5;
        $zivoty=$zivoty+5;
        $odpoved='scenare/shop/4.php';
        include($odpoved);};
        };  
     
     if(isset($_GET['a']) and $penize<20){phpAlert("Bejk je prostě moc drahej...");};
     if(isset($_GET['b']) and $penize<10){phpAlert("Máčka z dovozu a ty na ně stejně nemáš...");};
     if(isset($_GET['c']) and $penize<10){phpAlert("Bahno ve slevě a ty bez peněz, jaká to smůla.");};
     if(isset($_GET['d']) and $penize<5){phpAlert("V tomhle šopu nemáš na nic peníze, už ani na to jabko...");};
     
     if(isset($_GET['a']) and $unava==0){phpAlert("Už máš trcohu moc energie, nemyslíš?...");};
     if(isset($_GET['b']) and $unava==0){phpAlert("Tyhle cíga tě už víc nenakopnou...");};
     if(isset($_GET['c']) and $zivoty==100){phpAlert("Bahno ti obnovilo všechny smysly, tak by stačilo ne?");};
     if(isset($_GET['d']) and $zivoty==100){phpAlert("Jablíčko je výborné, ale všeho moc škodí...");};
     
   $_SESSION["zivoty"]= $zivoty;
$_SESSION["unava"]=$unava;
$_SESSION["penize"]=$penize;
    ?> 
     
    </div>
    
<?php include("footer.php") ?> 

</html>