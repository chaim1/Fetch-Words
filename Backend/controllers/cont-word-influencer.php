<?php
require_once '../bl/bl-word-influencer.php';

class wordInfluencerContruler {

    private $blI;

    function __construct(){
        $this->blI = new BusinessLogicInfluencer;
    }

    public function ActionGetWord(){
        return  $this->blI->get();
    }

    public function ActionInsertWord($params){
 
        return  $this->blI->set($params);

    }

}

?>