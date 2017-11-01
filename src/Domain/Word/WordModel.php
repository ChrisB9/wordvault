<?php

namespace cbenco\Domain\Word;


class WordModel
{
    private $id;
    private $word;
    private $description;

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    	return $this;
    }
    /**
     * @return integer
     */
    public function getId($id)
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getWord($word)
    {
        return $this->word;
    }

    /**
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    	return $this;
    }

    /**
     * @return string
     */
    public function getDescription($description)
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    	return $this;
    }
}