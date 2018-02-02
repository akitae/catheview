<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cathéview</title>
    <?php include('../../config/config.php');
    ?>
    <link rel="stylesheet" href="<?=$host?>/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=$host ?>/css/style.css">
    <script src="<?php echo $host ?>/js/bootstrap/bootstrap.min.js"></script>
</head>
<body>

    <!-- HEADER -->
    <div class="container">
        <nav class="header navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Cathéview</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#presentation-jeu-de-piste">Présentation du jeu de piste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visite">Visite virtuelle</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
		<h1>Aide sur les icônes de la visite</h1><br/>
		<div class="row">
		  <div class="col-6 col-md-2"><img src="<?=$host ?>/images/ico_picture.png" alt="Photo" class="img-thumbnail"></div>
		  
		  <div class="col-12 col-md-10">
			<p>
				Afficher l'élément avec plus de détails
			</p>
		  </div>
		  
		</div>
		<div class="row">
		  <div class="col-6 col-md-2"><img src="<?=$host ?>/images/ico_help.png" alt="Photo" class="img-thumbnail"></div>
		  
		  <div class="col-12 col-md-10">
			<p>
				Aller vers la page d'aide
			</p>
		  </div>
		  <br/>
		</div>
		<div class="row">
		  <div class="col-6 col-md-2"><img src="<?=$host ?>/images/ico_next.png" alt="Photo" class="img-thumbnail"></div>
		  
		  <div class="col-12 col-md-10">
			<p>
				Avancer vers la prochaine zone
			</p>
		  </div>
		  <br/>
		</div>
		<div class="row">
		  <div class="col-6 col-md-2"><img src="<?=$host ?>/images/ico_navbar.png" alt="Photo" class="img-thumbnail"></div>
		  
		  <div class="col-12 col-md-10">
			<p>
				Barre de navigation (plus détaillée ci-dessous)
			</p>
		  </div>
		  <br/>
		</div>
		
		
	</div>
</body>
</html>