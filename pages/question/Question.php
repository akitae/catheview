<?php

class Question
{
    private $id;

    private $question;

    private $arrayReponse = array();

    private $reponse;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return array
     */
    public function getArrayReponse()
    {
        return $this->arrayReponse;
    }

    /**
     * @param array $arrayReponse
     */
    public function setArrayReponse($arrayReponse)
    {
        $this->arrayReponse = $arrayReponse;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }

}