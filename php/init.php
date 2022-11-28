<?php



const DIR =__DIR__;

function monVardump($param){

    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

// const ROOT = $_SERVER['']

$tab =[34, 87, 90 , 5];

$dbh = new PDO('mysql:host=localhost;dbname=wf3_commerce', 'root','');


function multiPar10(int $param):int
{
    return $param * 10 ;
}
