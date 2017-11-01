<?php

namespace cbenco\Domain\Word;

class WordController
{

    public function create($word, $description) {
    	$word = new WordModel;
    	$word->setWord($word);
    	$word->setDescription($description);
    	//@TODO: WordHandling
    	return $word;
    }

    public function delete($id) {}

    public function update($id, $param) {}
}