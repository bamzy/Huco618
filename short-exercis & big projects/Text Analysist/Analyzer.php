<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 20/04/2016
 * Time: 3:43 PM
 */
class Analyzer
{
    private $data;
    private $source;
    private $re = '/# Split sentences on whitespace between them.
    (?<=                # Begin positive lookbehind.
      [.!?]             # Either an end of sentence punct,
    | [.!?][\'"]        # or end of sentence punct and quote.
    )                   # End positive lookbehind.
    (?<!                # Begin negative lookbehind.
      Mr\.              # Skip either "Mr."
    | Mrs\.             # or "Mrs.",
    | Ms\.              # or "Ms.",
    | Jr\.              # or "Jr.",
    | Dr\.              # or "Dr.",
    | Prof\.            # or "Prof.",
    | Sr\.              # or "Sr.",
    | T\.V\.A\.         # or "T.V.A.",
                        # or... (you get the idea).
    )                   # End negative lookbehind.
    \s+                 # Split on whitespace between sentences.
    /ix';
    public function __construct($input)
    {
        $this->source = $input;
        if (file_exists ( "src.txt" ))
            $this->data = file_get_contents("src.txt");
        else
            $this->data = file_get_contents($this->source);
        $this->data = strip_tags($this->data);
        $this->data = str_replace(array("\n","\r"), ' ', $this->data);
        $first = strpos($this->data, "[v]PREFACE");
        $this->data = substr($this->data,$first);
    }
    public function getSummary($stopwords){
        echo "Word Count: " . $this->getWordCount() . "\n";
        echo "Character Count: " . $this->getCharCount(). "\n";
        echo "Sentence Count: " . $this->getSentenceCount(). "\n";
        echo "More Exact Sentence Count: " . $this->getExactSentenceCount(). "\n";
        echo "Average Sentence Size in Words: " . $this->getAvgSentence(). "\n";
        echo "Word Frequency: \n";
        print_r($this->getWordFrequency($stopwords));



    }
    public function getWordCount(){
        return str_word_count($this->data);
    }
    public function getCharCount(){
        return strlen($this->data);
    }
    public function getSentenceCount(){
        return preg_match_all("([^\.\!\?]+)", $this->data);
    }
    public function getAvgSentence(){



        $sentences = preg_split($this->re, $this->data, -1, PREG_SPLIT_NO_EMPTY);
        $sum = 0;
        for ($i = 0; $i < count($sentences); ++$i) {
             $sum = $sum +str_word_count($sentences[$i]);
        }
        return $sum / $this->getExactSentenceCount();
    }
    public function getExactSentenceCount(){

        $sentences = preg_split($this->re, $this->data, -1, PREG_SPLIT_NO_EMPTY);
        return count($sentences);
    }
    public function getWordFrequency($stopwords){
        $res =  ( array_count_values(str_word_count($this->data, 1)) );
        for ($i=0;$i<sizeof($stopwords);$i++){
            unset($res[$stopwords[$i]]);
        }
        arsort($res);
        return $res;
    }


}