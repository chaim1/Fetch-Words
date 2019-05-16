<?php
include_once 'bl.php' ;
include_once '../models/mod-word-influencer.php' ;

 class BusinessLogicInfluencer extends BusinessLogic {

  // Brings data from database
    public function get()
    {
        $q = 'SELECT * FROM `influencer`';

      // Sending data to the function select in dal
        $results = $this->getDal()->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push($resultsArray, new ModelWordsI($row));
        }

        return $resultsArray;

    }


    //Sending data to a database
    public function set($param)
    {
        $query = "INSERT INTO `influencer` (`word`, `score`) VALUES (:wo, :sc )";
            $params = array(
                "wo" => $param->getWord(),
                "sc" => $param->getScore()
            );

            // Sending data to the function select in dal
            return $this->getDal()->insert($query,$params);

    }

}


?>
