<?php

namespace cbenco\Domain\Translation;

class TranslationModel
{
    private $id;
    private $wordId;
    private $tranlation;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    	return $this;
    }
    /**
     * @return int
     */
    public function getId($id)
    {
        return $this->id;
    }
    /**
     * @return int
     */
    public function getWordId($wordId)
    {
        return $this->wordId;
    }

    /**
     * @param int $wordId
     */
    public function setWordId($wordId)
    {
        $this->wordId = $wordId;
    	return $this;
    }

    /**
     * @return array
     */
    public function getTranslation($translation)
    {
        return $this->translation;
    }

    /**
     * @param array $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
    	return $this;
    }
}