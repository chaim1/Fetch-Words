<?php
require_once '../bl/bl-word-affiliate.php';

class wordAffiliateContruler {

    private $blW;

    function __construct(){
        $this->blW = new BusinessLogicAffiliate;
    }
// for to get to the word
    public function ActionGetWord(){
        return  $this->blW->get();
    }
// for to set to the word
    public function ActionInsertWord($params){

        return  $this->blW->set($params);

    }

}

?>
