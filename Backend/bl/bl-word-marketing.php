<?php
include_once 'bl.php' ; 
include_once '../models/mod-word-marketing.php' ; 

 class BusinessLogicMarketing extends BusinessLogic {

    public function get()
    {
        $q = 'SELECT * FROM `marketing`';
        
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new ModelWordsM($row));
        }

        return $resultsArray;
        
    }


    public function set($param)
    {
        $query = "INSERT INTO `marketing` (`word`, `score`) VALUES (:wo, :sc )";
            $params = array(
                "wo" => $param->getWords(),
                "sc" => $param->getPhone()
            );
            
            return $this->getDal()->insert($query,$params);
            
    }

}

 
?>
