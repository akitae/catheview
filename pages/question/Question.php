<?php

class Question
{
    private $id;

    private $question;

    private $arrayReponse = array();

    private $idReponse;

    private $userReponse;

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
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * @param mixed $idReponse
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;
    }

    /**
     * @return mixed
     */
    public function getUserReponse()
    {
        return $this->userReponse;
    }

    /**
     * @param mixed $userReponse
     */
    public function setUserReponse($userReponse)
    {
        $this->userReponse = $userReponse;
    }

}