<?php 
// header('Content-type: application/json');
include_once '../controllers/cont-word-affiliate.php';
include_once '../controllers/cont-word-influencer.php';
include_once '../controllers/cont-word-marketing.php';

$contWordMarketing = new wordMarketingContruler;
$contM = $contWordMarketing->ActionGetWord();

$contWordInfluencer = new wordInfluencerContruler;
$contI = $contWordInfluencer->ActionGetWord();

$contWordAffiliate = new wordAffiliateContruler;
$contA = $contWordAffiliate->ActionGetWord();

function getWordApi($cont){
    $objResult = [];
    $index = 0;
    foreach ($cont as $result) {
        $obj = new stdClass();
        $obj = (object) array('word' => $result->getWord(),'score'=> $result->getScore() );
        $objResult[$index] =$obj;
        $index++;
    };
    echo json_encode($objResult);
}

getWordApi($contM);
getWordApi($contI);
getWordApi($contA);