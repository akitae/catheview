<?php

    $arrayReponse = $_POST;

    if (isset($arrayReponse) && !empty($arrayReponse)) {
        $resultat = true;
        foreach($arrayReponse as $key => $value)
        {
            foreach ($questions as $question) {
                if ($question->getId() == $key) {
                    $question->setUserReponse($value);
                }
            }
        }
    }

?>