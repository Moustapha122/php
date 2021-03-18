<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 
	

	/*  
	Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir

	Étape 2 - Définissez un cookie qui expire dans une semaine

	Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. 
	*/
	
	$cookie_name = "user";
$cookie_value = " MOUSTA MAH";
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); 
if(!isset($_COOKIE[$cookie_name])) {
	echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
	echo "Cookie '" . $cookie_name . "' is set!<br>";
	echo "Value is: " . $_COOKIE[$cookie_name];
  }//3
  
 
  session_start();
  $_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
	?>

<form  method = "GET">
<a href="#">Cliquez ici</a>
</form>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>