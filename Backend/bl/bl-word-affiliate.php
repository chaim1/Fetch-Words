<?php
include_once 'bl.php' ; 
include_once '../models/mod-word-affiliate.php' ; 

 class BusinessLogicAffiliate extends BusinessLogic {

    public function get()
    {
        $q = 'SELECT * FROM `affiliate`';
        
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new ModelWordsA($row));
        }

        return $resultsArray;
        
    }


    public function set($param)
    {
        $query = "INSERT INTO `affiliate` (`word`, `score`) VALUES (:wo, :sc )";
            $params = array(
                "wo" => $param->getWord(),
                "sc" => $param->getScore()
            );
            
            return $this->getDal()->insert($query,$params);
            
    }

}

 
?>
