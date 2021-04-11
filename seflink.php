<?php 

//We find special characters and replace them with new characters

function replaceLink($link)

{

    $replaceArr = array(

    " " => "-", 

    "ü" => "u", 

    "Ü" => "U", 

    "ı" => "i", 

    "İ" => "I", 

    "ş" => "s", 

    "Ş" => "S", 

    "ğ" => "g", 

    "Ã" => "G",

    "ö" => "o", 

    "Ö" => "O");

    foreach($replaceArr as $key => $value)

    {

        $sarch[] = $key;

        $replace[] = $value;

    }

    return str_replace($sarch, $replace, $link);

}

//We create sample data links

$arr = array("1" => "Örnek Link 1", "2" => "Örnek Link 2", "3" => "Örnek Link 3", "4" => "Örnek Link 4");

foreach( $arr as $key => $value )

{

    echo '<a href="'.replaceLink("$value.html").'">Link '.$key.'</a><br />';

}

//We print our created chief link on the screen (test)

if( isset($_GET["sayfa"]) == "deneme" ){

    echo $_GET["id"];

PHP ?>
