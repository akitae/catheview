<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <title>Cathéview</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap/propper.min.js"></script>
    <script src="js/bootstrap/boostrap.min.js"></script>
</head>

    <body>
        <!-- HEADER -->
        <div class="container">
            <nav class="header navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Cathéview</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=acceuil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=acceuil#presentation-jeu-de-piste">Présentation du jeu de piste</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=acceuil#visite">Visite virtuelle</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">
            <?php
                if(isset($_GET["page"])){
                    switch ($_GET["page"]){
                        case "aide":
                            include ("pages/aide/aide.html");
                            break;
                        case "question":
                            include ("pages/question/question_reponse.php");
                            break;
                        default:
                            include("pages/accueil/index.html");
                    }
                }else{
                    include("pages/accueil/index.html");
                }
            ?>
        </div>

        <footer>

        </footer>
    </body>
</html>