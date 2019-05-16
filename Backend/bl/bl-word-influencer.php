<?php
include_once 'bl.php' ; 
include_once '../models/mod-word-influencer.php' ; 

 class BusinessLogicInfluencer extends BusinessLogic {

    public function get()
    {
        $q = 'SELECT * FROM `influencer`';
        
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new ModelWordsI($row));
        }

        return $resultsArray;
        
    }


    public function set($param)
    {
        $query = "INSERT INTO `influencer` (`word`, `score`) VALUES (:wo, :sc )";
            $params = array(
                "wo" => $param->getWords(),
                "sc" => $param->getPhone()
            );
            
            return $this->getDal()->insert($query,$params);
            
    }

}

 
?>
