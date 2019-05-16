<?php
require_once '../bl/bl-word-affiliate.php';

class wordAffiliateContruler {

    private $blW;

    function __construct(){
        $this->blW = new BusinessLogicAffiliate;
    }

    public function ActionGetWord(){
        return  $this->blW->get();
    }

    public function ActionInsertWord($params){
 
        return  $this->blW->set($params);

    }

}

?>