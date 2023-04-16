<?php

class Thesaurus
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getSynonyms($word): string | false
    {
        return json_encode(["word" => strtolower($word), "synonyms" => $this->data[$word] ?? []]);
    }
}

$data = array(
    "market" => array("trade"),
    "small" => array("little", "compact")
);

$thesaurus = new Thesaurus($data);

echo $thesaurus->getSynonyms("small");

echo $thesaurus->getSynonyms("market");

echo $thesaurus->getSynonyms("asleast");
