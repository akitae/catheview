<?php

    include("Question.php");

    $question1 = new Question();
    $question1->setId("question1");
    $question1->setQuestion("Qui est le Gisant de droite ?");
    $question1->setArrayReponse(array(0 => "Evrard de FOUILLOY", 1 => "Geoffroy d’EU", 2 => "Joseph d'ARIMATHIE"));
    $question1->setIdReponse(1);

    $question2 = new Question();
    $question2->setId("question2");
    $question2->setQuestion("Où se trouve la véritable Vierge Dorée ?");
    $question2->setArrayReponse(array(0 => "Dans la cathédrale", 1 => "Sur le tympan", 2 => "Exposée dans un musée"));
    $question2->setIdReponse(1);

    $question3 = new Question();
    $question3->setId("question3");
    $question3->setQuestion("Que représentent les hauts reliefs sur le tombeau de ferry de beauvoir ?");
    $question3->setArrayReponse(array(0 => "Le sacre de Charlemagne", 1 => "La vie de Saint Firmin", 2 => "Joseph d’ARIMATHIE recueillant le sang du Christ"));
    $question3->setIdReponse(2);

    $question4 = new Question();
    $question4->setId("question4");
    $question4->setQuestion("Que représentent les hauts reliefs sur le tombeau de ferry de beauvoir ?");
    $question4->setArrayReponse(array(0 => "1429", 1 => "1549", 2 => "1907"));
    $question4->setIdReponse(1);

    $question5 = new Question();
    $question5->setId("question5");
    $question5->setQuestion("Vivarais a conçu :");
    $question5->setArrayReponse(array(0 => "Le parcours du labyrinthe", 1 => "L’Orgue", 2 => "Les grilles de choeur"));
    $question5->setIdReponse(3);

    $question6 = new Question();
    $question6->setId("question6");
    $question6->setQuestion("En quelle année est mort Geoffroy d’EU ?");
    $question6->setArrayReponse(array(0 => "1222", 1 => "1236", 2 => "1429"));
    $question6->setIdReponse(2);

    $question7 = new Question();
    $question7->setId("question7");
    $question7->setQuestion("Quelle est l’utilité du labyrinthe ?");
    $question7->setArrayReponse(array(0 => "Suivre le chemin emprunté par les rois mages", 1 => "Remplacer le pèlerinage à Jérusalem / Saint Jacques de Compostelle", 2 => "Mettre à l’épreuve la foi"));
    $question7->setIdReponse(2);

    $question8 = new Question();
    $question8->setId("question8");
    $question8->setQuestion("Lorsqu’elle est exposée, où se trouve la relique du chef de Saint Jean-Baptiste ?");
    $question8->setArrayReponse(array(0 => "Devant la porte de la cathédrale", 1 => "Derrières les grilles du choeur", 2 => "Face aux reliefs représentant la vie du précurseur"));
    $question8->setIdReponse(3);

    $question9 = new Question();
    $question9->setId("question9");
    $question9->setQuestion("Qui fut le premier évêque d’Amiens ?");
    $question9->setArrayReponse(array(0 => "Saint Firmin", 1 => "Saint Jean-Baptiste", 2 => "Saint Honoré"));
    $question9->setIdReponse(1);

    $question10 = new Question();
    $question10->setId("question10");
    $question10->setQuestion("L’orgue est un monument historique");
    $question10->setArrayReponse(array(0 => "Vrai", 1 => "Faux"));
    $question10->setIdReponse(1);

    $questions = array($question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10);

?>