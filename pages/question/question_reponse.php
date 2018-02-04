<?php

    include("Question.php");

    $question1 = new Question();
    $question1->setId("question1");
    $question1->setQuestion("Quel est le premier évèque d'Amiens ?");
    $question1->setArrayReponse(array(0 => "Firmin le Confesseur", 1 => "Honoré d'Amiens", 2 => "Firmin d'Amiens"));
    $question1->setReponse(3);

    $question2 = new Question();
    $question2->setId("question2");
    $question2->setQuestion("Quel est le premier évèque d'Amiens ?");
    $question2->setArrayReponse(array(0 => "Firmin le Confesseur", 1 => "Honoré d'Amiens", 2 => "Firmin d'Amiens"));
    $question2->setReponse(3);

    $questions = array($question1, $question2);

    // Vue

    $counter = 1;
    foreach ($questions as $question) {
        echo '
            <div class="question">
                <div class="row">
                    <div class="col-1 container-numero">
                        <div class="numero">'.$counter.'</div>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12">
                                <label class="label-question">'.$question->getQuestion().'</label>
                            </div>
                        </div>';

                echo
                '       <div class="row">
                            <div class="col-12">';
                        foreach ($question->getArrayReponse() as $reponse) {
                            echo '
                                <label class="custom-control custom-radio">
                                  <input name="'.$question->getId().'" type="radio" class="custom-control-input">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">'.$reponse.'</span>
                                </label>
                            ';
                        }
                    echo '
                            </div>
                         </div>
                    ';

        echo '
                    </div>
                </div>
            </div>';

        $counter++;
    }

