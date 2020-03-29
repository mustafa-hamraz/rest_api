<?php
//Get the info about what user has requested. London or Stockholm
$userInput = $_POST['user'];


//Api that request info
$api_url_london = 'https://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=16ce40370539cf4b81309fbb19b4fcda';
$api_url_stockholm = 'https://api.openweathermap.org/data/2.5/weather?q=Stockholm,se&appid=16ce40370539cf4b81309fbb19b4fcda';


if($userInput == 'London')
{
    //Request the weather data 
    $api_reponse = file_get_contents($api_url_london);
    //Convert the resived data into json 
    $json = json_decode($api_reponse,true);
    //print it out for the user
    var_dump($json);
}
else if($userInput == 'Stockholm')
{
    //Request the weather data 
    $api_reponse = file_get_contents($api_url_stockholm); 
    //Convert the resived data into json 
    $json = json_decode($api_reponse,true);
    //print it out for the user
    var_dump($json);
 
}

