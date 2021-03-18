<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	
	class Chien {
		public $couleur_des_yeux;
		public $couleur_de_nez;
		public $couleur_du_fourrure;
	
		function set_name($name) {
		  $this->name = $name;
		}
		function get_name() {
		  return $this->name;
		}
	  }
	
	  $couleur_des_yeux = new Chien();
	  $couleur_de_nez = new Chien();
	  $couleur_du_fourrure = new Chien();
	  $couleur_des_yeux->set_name('les yeux de mon chien sont bleus,');
	  $couleur_de_nez->set_name('et son nez est marron,');
	  $couleur_du_fourrure->set_name('fourrure blanche.');
	  echo $couleur_des_yeux->get_name();
	  echo "<br>";
	  echo $couleur_de_nez->get_name();
	  echo "<br>";
	  echo  $couleur_du_fourrure->get_name();
	  echo "<br>";


	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>