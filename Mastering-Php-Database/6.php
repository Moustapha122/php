
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<?php

/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 */
?>
<form action="action.php" method="post">
<p>Votre nom : <input type="text" name="nom" /></p>
<p>Votre âge : <input type="text" name="age" /></p>
<p><input type="submit" value="OK"></p>
</form>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>