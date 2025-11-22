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
        .zapati{width:100%;}
        
    </style>
<link rel="stylesheet" href="css/css.css" />
</head>
<body>
    <div id="nadpis">
         <a href="login.php" ><img src="grafika/logo.jpg" alt="logo" ></a>
    
    </div>
    
    
     <div class="blok">
         <div class="polovina">
             <h1>Registrace</h1>
             <form name="registration" action="" method="post">
                 <input type="text" name="username" placeholder="Username" required /> <br> 
                 <input type="email" name="email" placeholder="Email" required /> <br>
                 <input type="password" name="password" placeholder="Password" required /> <br>
                 <input type="submit" name="submit" value="Register" /> <br>
             </form>
         </div>

     <div class="polovina2">
      <form action="" method="GET">
        <p>Hlava </p> <select name="hlava">
            <option value="1">Plešatec</option>
            <option value="2">Háro</option>
            <option value="3">Ježek</option>
            <option value="4">Pankáč</option>
            <option value="5">Klasik</option>
            <option value="6">Kouty</option>
            <option value="7">Čepec</option>
            <option value="8">Kšiltovka</option>
            <option value="9">Klobouk</option>
            <option value="10">Shrek</option>
        </select>
          <br>
        <p>Oči </p> <select name="oci">
            <option value="1">Tečky</option>
            <option value="2">Zhulenec</option>
            <option value="3">Modré oči</option>
            <option value="4">Naštvanec</option>
            <option value="5">Zelené oči</option>
            <option value="6">Hnědé oči</option>
            <option value="7">Frajerský brejle</option>
            <option value="8">Ninja páska</option>
            <option value="9">Shrek</option>
        </select>
          <br>
        <p>Pusa </p> <select name="pusa">
            <option value="1">bez výrazu</option>
            <option value="2">Anglický úsměv</option>
            <option value="3">Cigárko</option>
            <option value="4">Velký fous 1</option>
            <option value="5">Naštvanec</option>
            <option value="6">Knírek</option>
            <option value="7">Velikánský rty</option>
            <option value="8">Slintal</option>
            <option value="9">Vymlácená držka</option>
            <option value="10">Francouz</option>
            <option value="11">Šedý fous</option>
            <option value="12">Shrek</option>
        </select>
          <br>
        <p>Brada </p> <select name="brada">
            <option value="1">Nic</option>
            <option value="2">Velký fous 2</option>
            <option value="3">Lehký vous</option>
            <option value="4">Shrek</option>
            <option value="5">Lehkej fousík</option>
        </select>
          <br>
        <input type="submit" name="asdf" value="Ukaž moju postavu" />
          <br>
    </form><br>
         
         <div class="postava">
         <?php
             require('db.php');
             
             
$hlava='1';
$oci='1';
$pusa='1';
$brada='1';
$chlava='<img src="pvy-obliceje/1/1.jpg">';
$coci='<img src="pvy-obliceje/2/1.jpg">';
$cpusa='<img src="pvy-obliceje/3/1.jpg">';
$cbrada='<img src="pvy-obliceje/4/1.jpg">';
             
             
if(isset($_GET['asdf'])){
    $hlava = $_GET['hlava'];
$oci = $_GET['oci']; 
$pusa = $_GET['pusa'];
$brada = $_GET['brada'];   
$chlava = '<img src="pvy-obliceje/1/' .$hlava. '.jpg">';
$coci = '<img src="pvy-obliceje/2/' .$oci. '.jpg">';
$cpusa = '<img src="pvy-obliceje/3/' .$pusa. '.jpg">';
$cbrada = '<img src="pvy-obliceje/4/' .$brada. '.jpg">';
echo $chlava; echo '<br>';
echo $coci;  echo '<br>';
echo $cpusa; echo '<br>';
echo $cbrada; echo '<br>';}
             
             ;
        echo $hlava; echo '<br>';
echo $oci;  echo '<br>';
echo $pusa; echo '<br>';
echo $brada; echo '<br>';     
             
             if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
    
        $result = mysqli_query($con,$query);             
                 
    
    $kvery = "INSERT into `postava` (hlava, oci, pusa, brada)
VALUES ('$hlava', '$oci', '$pusa', '$brada')";
    $result=mysqli_query($con,$kvery);
    
             
             
             
             ?> </div>
         
    </div>
    <?php if($result){
            echo "<div class='blok'>
<p>You are registered successfully.</p>
<br/><p><a href='login.php'> Click here to Login</a></p></div>";
        }
    }else{};?>
     
</div>
    </div>
    </div>
    <br>
    <?php include("footer.php") ?>
 
</body>
</html>


