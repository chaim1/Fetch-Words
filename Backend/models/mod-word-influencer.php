<?php
include_once 'model.php';
require_once '../bl/bl-word-influencer.php';


    class ModelWordsI  implements IModel
    {
        private $word;
        private $score;

        function __construct($arr) {

                $this->word = $arr['word'];
                $this->score = $arr['score'];
        }

        //get value

        public function getWord() {
            return $this->word;
        }
        public function getScore() {
            return $this->score;
        }

        //set value

        public function setWord($data) {
            $this->word =$data;
        }
        public function setScore($data) {
            $this->score =$data;
        }

    }
?>
