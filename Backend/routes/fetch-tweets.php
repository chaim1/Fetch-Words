<?php
include_once '../controllers/cont-word-affiliate.php';
include_once '../controllers/cont-word-influencer.php';
include_once '../controllers/cont-word-marketing.php';

$contWordAffiliate = new wordAffiliateContruler;
$contWordInfluencer = new wordInfluencerContruler;
$contWordMarketing = new wordMarketingContruler;

// Brings the words from api and puts them into a database
function setWordToDB($urlApi,$nameModel,$controler){
    $contents = file_get_contents($urlApi);
    $manage = json_decode($contents, true);
    foreach ($manage as $res) {
        bildAffiliateModel($nameModel,$res["word"], $res["score"],$controler);
    };
}

//Arrange the object and send it to a database
function bildAffiliateModel($nameModel,$word,$score,$controler){
    $word = new $nameModel([
        'word' => $word,
        'score'  => $score
        ]);
        $res = $controler->ActionInsertWord($word);
        echo 'ok';
        echo '<br>';
}

setWordToDB('https://api.datamuse.com/sug?s=affiliate','ModelWordsA',$contWordAffiliate);

setWordToDB('https://api.datamuse.com/sug?s=influencer','ModelWordsI',$contWordInfluencer);

setWordToDB('https://api.datamuse.com/sug?s=marketing','ModelWordsM',$contWordMarketing);



