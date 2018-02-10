<?php
    include("create_question.php");
    include("reponse.php");

    echo '<form action="" method="post">';

    $counter = 1;
    foreach ($questions as $question) {
        echo '<div class="question">';
            echo'<div class="row align-items-center">';
                echo'<div class="col-1 hidden-md-down container-numero">';
                    echo'<div class="numero">'.$counter.'</div>';
                echo'</div>';
                echo'<div class="col-10">';
                    echo'<div class="row">';
                        echo'<div class="col-12">';
                            echo'<label class="label-question">'.$question->getQuestion().'</label>';
                        echo'</div>';
                    echo'</div>';

                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            foreach ($question->getArrayReponse() as $reponse) {
                                $checked = "";
                                $disabled = "";
                                $cssClass = "";
                                // On check la radio que l'utilisateur a sélectionné.
                                if (isset($resultat)) {
                                    $disabled = "disabled";
                                    $arrayReponse = $question->getArrayReponse();
                                    if (strcmp($reponse, $question->getUserReponse()) == 0) {
                                        $checked = "checked";
                                    }

                                    if (strcmp($arrayReponse[$question->getIdReponse()-1], $reponse) == 0) {
                                        $cssClass = "the-true";
                                    }

                                    if (strcmp($arrayReponse[$question->getIdReponse()-1], $question->getUserReponse()) != 0 && strcmp($reponse, $question->getUserReponse()) == 0) {
                                        $cssClass = "wrong";
                                    }
                                }
                                echo '<div class="form-check form-check-inline">';
                                    echo '<label class="form-check-label">';
                                        echo '<input class="form-check-input" type="radio" name="'.$question->getId().'" value="'.$reponse.'" '.$checked.' '.$disabled.'>';
                                        echo '<span class="'.$cssClass.'">'.$reponse.'</span>';
                                    echo '</label>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="col-1 text-center">';
                    if (isset($resultat)) {
                        $arrayReponse = $question->getArrayReponse();
                        if (strcmp($arrayReponse[$question->getIdReponse()-1], $question->getUserReponse()) == 0) {
                            echo '<img src="images/check.png" width="40px"/>';
                        } else {
                            echo '<img src="images/cancel.png" width="40px"/>';
                        }
                    }
                echo '</div>';
            echo '</div>';
        echo'</div>';

        $counter++;
    }
        if (!isset($resultat)) {
            echo'<div class="row ">';
                echo '<div class="col-12 text-right">';
                    echo '<button type="submit" class="btn btn-cath">Envoyer les réponses</button>';
                echo '</div>';
            echo '</div>';
        }
    echo '</form>';
