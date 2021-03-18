<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	$conn = mysqli_connect("localhost","root","","Moustapha");
	$mysqli = new mysqli("localhost", "root", "", "Moustapha");
    $mysqli -> set_charset("utf8");

    $requete = "SELECT * FROM utilisateur";
    $resultat = $mysqli -> query($requete);

    while ($ligne = $resultat -> fetch_assoc()) {
        echo $ligne['id'] . ' ' . $ligne['nom'] . ' ' . $ligne['prenom'] . ' ';
        echo $ligne['email'] ;
    }
    $mysqli->close();
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
