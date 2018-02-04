<?php


    include("create_question.php");

    include("reponse.php");


    // Vue

    echo '<form action="question_reponse.php" method="post">';

    $counter = 1;
    foreach ($questions as $question) {
        echo '
            <div class="question">
                <div class="row align-items-center">
                    <div class="col-1 container-numero">
                        <div class="numero">'.$counter.'</div>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-12">
                                <label class="label-question">'.$question->getQuestion().'</label>
                            </div>
                        </div>';

                echo '<div class="row">';
                    echo '<div class="col-12">';
                        foreach ($question->getArrayReponse() as $reponse) {
                            $checked = "";
                            $disabled = "";
                            // On check la radio que l'utilisateur a sélectionné.
                            if (isset($resultat)) {
                                $disabled = "disabled";
                                $arrayReponse = $question->getArrayReponse();
                                if (strcmp($reponse, $question->getUserReponse()) == 0) {
                                    $checked = "checked";
                                }
                            }
                            echo '<label class="custom-control custom-radio">';
                            echo '<input name="'.$question->getId().'" type="radio" class="custom-control-input" value="'.$reponse.'" '.$checked.' '.$disabled.'>';
                            echo '<span class="custom-control-indicator"></span>';
                            echo '<span class="custom-control-description">'.$reponse.'</span>';
                            echo'</label>';
                        }
                    echo '
                            </div>
                         </div>
                    ';

        echo '</div>';
        echo '<div class="col-1 text-center">';
            if (isset($resultat)) {
                $arrayReponse = $question->getArrayReponse();
                if (strcmp($arrayReponse[$question->getIdReponse()-1], $question->getUserReponse()) == 0) {
                    echo '<img src="../../images/check.png" width="40px"/>';
                } else {
                    echo '<img src="../../images/cancel.png" width="40px"/>';
                }
            }
        echo '</div>';

        echo '
            </div>
            </div>';

        $counter++;
    }

    echo '<button type="submit" class="btn btn-primary">Submit</button>';
    echo '</form>';

echo '
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
  </label>
</div>
';
