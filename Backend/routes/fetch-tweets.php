<?php
// include_once '../controllers/cont-word-affiliate.php';
// include_once '../controllers/cont-word-influencer.php';
// include_once '../controllers/cont-word-marketing.php';
// $dataAffiliate = [['affiliate',130692],['affiliates',129500],['affiliate marketing',129351],['affiliated companies',129336]['affiliated chains'],['affiliated chains',129328],['affiliate program',129328],['affiliate link',129324],['affiliated company',129323],['affiliate with',129322]];
// $dataInfluencer = [['influencer',129625],['influencers',129399],['influence',67127],['influenceable',64883]['influenced chains'],['affiliated chains',129328],['affiliate program',129328],['affiliate link',129324],['affiliated company',129323],['affiliate with',129322]];
// $dataInfluencer = 'influenced","score":64869},{"word":"influences","score":64785},{"word":"influence peddler","score":64678},{"word":"influence peddling","score":64671},{"word":"influence-peddling","score":64661}]';
// $dataMarketing = [['affiliate',130692],['affiliates',129500],['affiliate marketing',129351],['affiliated companies',129336]['affiliated chains'],['affiliated chains',129328],['affiliate program',129328],['affiliate link',129324],['affiliated company',129323],['affiliate with',129322]];

// $dataMarketing = '[{"word":"marketing","score":130899},{"word":"marketing mix","score":129364},{"word":"marketing research","score":129353},{"word":"marketing strategy","score":129348},{"word":"marketing campaign","score":129347},{"word":"marketing cost","score":129331},{"word":"marketing department","score":129331},{"word":"marketings","score":129324},{"word":"marketing plan","score":129323},{"word":"marketing board","score":129321}]';

// $contWordAffiliate = new wordAffiliateContruler;
// $resA = $contWordAffiliate->ActionInsertWord();


// $contWordInfluencer = new wordInfluencerContruler;
// $resI = $contWordInfluencer->ActionInsertWord();


// $contWordMarketing = new wordMarketingContruler;
// $resM = $contWordMarketing->ActionInsertWord();



// $fileNewName = $conC->ActionInsertImage($position,$tempFile);
// $course = new ModelCourses([
//     'name' => $_POST['NameCourse'],
//     'description'  => $_POST['DescriptionCourse'],
//     'image' => $fileNewName
// ]);

// $conC->ActionInsertCourses($course);

// $curl = curl_init();
// $url = "https://api.datamuse.com/sug?s=influencer";

// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec($curl );

// preg_match_all("!https://images-na.ssl-images-amazon.com/images/I/[^\s]*?._AC_US218_.jpg!" , $result , $matches);

// $images = array_unique($matches[0]);


// print_r($result);
// echo $result;

// curl_close($curl);
$url = "https://api.datamuse.com/sug?s=influencer";
$contents = file_get_contents($url);
 
//If $contents is not a boolean FALSE value.
// if($contents !== false){
    //Print out the contents.
    echo $contents;
// }
