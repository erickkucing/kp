<?php

// My common functions
function myEscapeStringData($dataArray) {
    //implode
    $tampString = '"' . implode('", "', $dataArray) . '"';
    $tampString = str_replace(',","', '!#44!","', $tampString);
    $tampString = str_replace(',"}"', '!#44!"}"', $tampString);
    $tampString = str_replace(',"', '!#4344!', $tampString);
    $tampString = str_replace(",", "!#44!", $tampString);
    $tampString = str_replace('!#4344!', ',"', $tampString);
    $tampString = str_replace("\/", "!#47!", $tampString);
    $tampString = str_replace('\"', "!#34!", $tampString);
    $tampString = str_replace("'", "!#39!", $tampString);
    return $tampString;
}

function myEscapeStringDataLevel($dataArray) {
    //implode
    $tampString = '"{' . implode(',', $dataArray) . '}"';
    $tampString = str_replace(',","', '!#44!","', $tampString);
    $tampString = str_replace(',"}"', '!#44!"}"', $tampString);
    $tampString = str_replace(',"', '!#4344!', $tampString);
    $tampString = str_replace(",", "!#44!", $tampString);
    $tampString = str_replace('!#4344!', ',"', $tampString);
    $tampString = str_replace("/", "!#47!", $tampString);
    $tampString = str_replace('"{"', '!#1111!', $tampString);
    $tampString = str_replace('"}"', '!#2222!', $tampString);
    $tampString = str_replace('":"', '!#3333!', $tampString);
    $tampString = str_replace('","', '!#4444!', $tampString);
    $tampString = str_replace('"', "!#34!", $tampString);
    $tampString = str_replace('!#1111!', '"{"', $tampString);
    $tampString = str_replace('!#2222!', '"}"', $tampString);
    $tampString = str_replace('!#3333!', '":"', $tampString);
    $tampString = str_replace('!#4444!', '","', $tampString);
    $tampString = str_replace("'", "!#39!", $tampString);
    return $tampString;
}

function myEncryptNumeric($text){
    $text = crypt($text,'$1$g$');
    $text = str_replace("~", "21", $text);
    $text = str_replace("`", "22", $text);
    $text = str_replace("!", "23", $text);
    $text = str_replace("@", "24", $text);
    $text = str_replace("#", "25", $text);
    $text = str_replace("$", "26", $text);
    $text = str_replace("%", "27", $text);
    $text = str_replace("^", "28", $text);
    $text = str_replace("&", "29", $text);
    $text = str_replace("*", "33", $text);
    $text = str_replace("(", "43", $text);
    $text = str_replace(")", "53", $text);
    $text = str_replace("-", "63", $text);
    $text = str_replace("_", "73", $text);
    $text = str_replace("+", "83", $text);
    $text = str_replace("=", "93", $text);
    $text = str_replace("{", "30", $text);
    $text = str_replace("[", "31", $text);
    $text = str_replace("]", "32", $text);
    $text = str_replace("}", "34", $text);
    $text = str_replace("|", "35", $text);
    $text = str_replace(";", "36", $text);
    $text = str_replace(":", "37", $text);
    $text = str_replace('"', "38", $text);
    $text = str_replace("'", "39", $text);
    $text = str_replace("<", "40", $text);
    $text = str_replace(">", "41", $text);
    $text = str_replace(",", "42", $text);
    $text = str_replace(".", "44", $text);
    $text = str_replace("?", "45", $text);
    $text = str_replace("/", "46", $text);
    return $text;
}

?>