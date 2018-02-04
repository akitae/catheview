<?php

    include("Question.php");

    $question1 = new Question();
    $question1->setId("question1");
    $question1->setQuestion("Quel est le premier évèque d'Amiens ?");
    $question1->setArrayReponse(array(0 => "Firmin le Confesseur", 1 => "Honoré d'Amiens", 2 => "Firmin d'Amiens"));
    $question1->setIdReponse(3);

    $question2 = new Question();
    $question2->setId("question2");
    $question2->setQuestion("Quel est le premier évèque d'Amiens ?");
    $question2->setArrayReponse(array(0 => "Firmin le Confesseur", 1 => "Honoré d'Amiens", 2 => "Firmin d'Amiens"));
    $question2->setIdReponse(3);

    $questions = array($question1, $question2);

?>