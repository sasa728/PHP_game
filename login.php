<!DOCTYPE html>
<html>
<head>
 <meta charset='UTF-8'>
	  <meta name='description' content='Můj PVY projekt'>
	  <meta Name='Author' content='Tomecek'>
	  <meta Name='keywords' content='html,nejlepsi,stranka,projekt,zabava,mamtorad'>
	  <meta Name='viewport' content='width=device-width, initial-scale=1.0'>
	  <title>Simulátor vesnice</title>
	  <link rel='stylesheet' type='text/css' href='styl.css'>
        
    <style>
        @font-face { font-family: skolacek-ce; src: url('font/skolacek-ce.otf'); }
        .x {text-align:center;}
    </style>
<link rel="stylesheet" href="css/css.css" />
</head>
    
<body>
    <div id="nadpis">
    <img src="grafika/logo.jpg" alt="logo" >
    </div>
    <?php echo '<h1 class="x">'; echo date("l");echo " "; echo date("Y/m/d"); echo "</h1>"; ?>
<?php
require('db.php');
session_start();
    

    


if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            
            
            
        $kvery = mysqli_query($con,"select id from users where username = '".$_SESSION['username']."'");
$vec = mysqli_fetch_assoc($kvery);
$id=$vec['id'];

$kvery = mysqli_query($con,"SELECT hlava FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$hlava = $vec['hlava'];

            
// JEDENKRAT A NAPOSLEDY ZKOUSKA INNER JOIN... JE TO FAKT BLBOST :))           
$kvery = mysqli_query($con,"SELECT oci FROM `postava` INNER JOIN `users` ON `users`.`id` = `postava`.`id_postava`;");
$vec = mysqli_fetch_assoc($kvery);
$oci = $vec['oci'];
    
$kvery = mysqli_query($con,"SELECT pusa FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$pusa = $vec['pusa'];
    
$kvery = mysqli_query($con,"SELECT brada FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$brada = $vec['brada'];
    
$kvery = mysqli_query($con,"SELECT zivoty FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$zivoty = $vec['zivoty'];
    
$kvery = mysqli_query($con,"SELECT xp FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$xp = $vec['xp'];
    
$kvery = mysqli_query($con,"SELECT unava FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$unava = $vec['unava'];
    
$kvery = mysqli_query($con,"SELECT penize FROM `postava` WHERE id_postava = $id");
$vec = mysqli_fetch_assoc($kvery);
$penize = $vec['penize'];
    
            
            
 $_SESSION['id'] = $id;
             $_SESSION['jmeno'] = $username;
            $_SESSION['hlava'] = $hlava;
             $_SESSION['oci'] = $oci;
             $_SESSION['pusa'] = $pusa;
             $_SESSION['brada'] = $brada;
             $_SESSION['zivoty'] = $zivoty;
            $_SESSION['xp'] = $xp;
            $_SESSION['unava'] = $unava; 
            $_SESSION['penize'] = $penize;
            
            
	    header("Location: index.php");
         }else{
	echo "<div class='blok'>
<h3>Username/password is incorrect.</h3><p>
<br/>Click here to <a href='login.php'>Login</a></p></div>";
	}
    }else{
?>
<div class="blok">
<h1>Přihlášení</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Jméno" required />
<input type="password" name="password" placeholder="Heslo" required />
<input name="submit" type="submit" value="Login" />
</form>
<p> Nežiješ ještě v této vesnici? <a href='registration.php'>Klikni zde!</a></p>
</div>
<?php } ; ?>
    
    
    
    
    
    <div class="stred">
        <h2>Vesnice?!</h2>
        <p>
        Vítej u hry, která tě naučí jak funguje taková běžná vesnice. Pokuď nejsi
        občanem této vesnice, tak si sploď nového člověka, pokuď si již ve vesnici
        nějakou tu dobu žiješ, tak se prostě přihlaš.        
        </p>
        <br>
        <p>
        V této hře se dostaneš do naprosto smyšlené vesnice, která obsahuje běžné lokace, typické pro vesnický život. Hra obsahuje autentické nářečí a slova, kterým budeš jen těžko rozumět.   
        Prozkoumej každou lokaci. Staň se králem vesnice a ukaž všem co seš zač.
        </p>
        
        <h2>Projdi všechny dostupné lokace!</h2>    
        <p>
        Prozkoumej všechny lokace, které jsou ve hře dostupné. Navštiv lokace jako je tvůj dům, obchod, klub a mnohé další. Můžeš navštívit lokace s postavami, které rozhodně nejsou podobné na lidi z okolí autora.
        </p>
        <img src="grafika/lokace.jpg" alt="lokace" height="100%" width="100%">
        
        <h2>Nalez všechny eastereggy!</h2>    
        <p>
        Ve hře se nachází několik eastereggů, které rozhodně nepoukazují na život autora této hry. Nalezni je všechny a pobav se nad absurditou života, který autor prožívá.
        </p>
        <img src="grafika/easter.jpg" alt="eastereggy" height="100%" width="100%" >
        
        
        
        
        
    </div>

    
    
    
        
   <?php include("footer.php") ?>
</body>
</html>