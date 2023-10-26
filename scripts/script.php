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



//hieronder een database ophaal connectie

function vinylOphalen(){
// SQL query voor het ophalen van de data uit mijn vinyl verzameling tabel
$query = "SELECT * FROM vinylVerzameling";
global $mysqli;
//het uitvoeren van die query
$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_assoc($result)) {
    // Access individual columns by field name
    echo "info: " . $row['info'] . "<br>";
    echo "naam: " . $row['naam'] . "<br>";
    echo "artiest: " . $row['artiest'] . "<br>";
    // You can access other columns in a similar way
    echo "<br>";
    $row['naam'] = array( $row['naam'], $row['artiest'], $row['info']);
}}
