<?php
require_once '../bl/bl-word-influencer.php';

class wordInfluencerContruler {

    private $blI;

    function __construct(){
        $this->blI = new BusinessLogicInfluencer;
    }
// for to get to the word
    public function ActionGetWord(){
        return  $this->blI->get();
    }
// for to set to the word
    public function ActionInsertWord($params){

        return  $this->blI->set($params);

    }

}

?>
