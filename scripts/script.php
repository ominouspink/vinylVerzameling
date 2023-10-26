<?php
$vinyl= $_GET["vinyl"];
$badIdeas = array("bad ideas", "Tessa Violet", "cute vinyl with songs about love and heartbreak. <br> this artist used to make covers on youtube!");
$nectar = array("nectar", "Joji", "very nice singer, used to be a youtuber making silly content.");


$vinylName;
$artist;
$artistInfo;

if($vinyl == NULL){
    $vinylInspect = "sops-vinyl";
    $vinylName= "no vinyl selected yet" ;
    $artist = "none";
    $artistInfo = "empty :p";
}
else if ($vinyl == "badIdeas"){
    $vinylInspect = "badIdeas";
    $vinylName= $badIdeas[0] ;
    $artist = $badIdeas[1];
    $artistInfo = $badIdeas[2];
}
else if ($vinyl == "nectar"){
    $vinylInspect = "nectar";
    $vinylName= $nectar[0] ;
    $artist = $nectar[1];
    $artistInfo = $nectar[2];
}


// $vinyl= $_GET["vinyl"];
// $badIdeas = array("bad ideas", "Tessa Violet", "cute vinyl with songs about love and heartbreak. <br> this artist used to make covers on youtube!");
// $nectar = array("nectar", "Joji", "very nice singer, used to be a youtuber making silly content.");


// $vinylName;
// $artist;
// $artistInfo;

// if($vinyl == NULL){
//     $vinylName= "no vinyl selected yet" ;
//     $artist = "none";
//     $artistInfo = "empty :p";
// }
// else{
//     echo $vinyl;
//     echo $badIdeas[1];
//     $vinylName= $vinyl[0] ;
//     $artist = $vinyl[1];
//     $artistInfo = $vinyl[2];
// }

