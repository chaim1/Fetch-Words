<?php
require_once '../bl/bl-word-marketing.php';

class wordMarketingContruler {

    private $blM;

    function __construct(){
        $this->blM = new BusinessLogicMarketing;
    }
// for to get to the word
    public function ActionGetWord(){
        return  $this->blM->get();
    }
// for to set to the word
    public function ActionInsertWord($params){

        return  $this->blM->set($params);

    }

}

?>
