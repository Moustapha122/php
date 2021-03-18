<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */


//1
$autorisation_entrer = "Oui";

if ($autorisation_entrer == "Oui") 
{
   echo "I love Greenchip ";
}
elseif ($autorisation_entrer == "Non") 
{
    echo "I don't love Greenchip ";
}
else 
{
    echo "what do you love?";
}
//2
for ($x = 0; $x <= 10; $x++) {
    echo "votre numero est: $x <br>";
  }

$note = 10;
//3
switch ($note) 
{ 
    case 0: 
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: 
        echo "Tu es très mauvais";
    break;
    
    case 7: 
        echo "Tu es mauvais";
    break;
    
    case 10: 
        echo "Tu as la moyenne";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
   
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>