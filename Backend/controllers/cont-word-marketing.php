<?php
require_once '../bl/bl-word-marketing.php';

class wordMarketingContruler {

    private $blM;

    function __construct(){
        $this->blM = new BusinessLogicMarketing;
    }

    public function ActionGetWord(){
        return  $this->blM->get();
    }

    public function ActionInsertWord($params){
 
        return  $this->blM->set($params);

    }

}

?>