<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hW-1</title>
</head>
<body>
<p>При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.</p>
<form >
    <input type="textarea" name="text1">
    <input type="textarea" name="text2">
    <input type="submit" value="Sent">
</form>
<?php
/*
*@return array
*@param array $a
*@param array $b
*/
function getCommonWords($a, $b){
    $result = array();
    $arrayA = explode(" ", $a);
    $arrayB = explode(" ", $b);
    foreach ($arrayA as $value) {
        if(in_array($value, $arrayB)){
            $result[] =  $value;
        }
    }
    return $result;
}
if(isset($_GET[text1]) && isset($_GET[text2])){
    $returnWords = getCommonWords($_GET[text1], $_GET[text2]);
    foreach ($returnWords as $value) {
        echo "<br>" . $value;
    }
}
?>
</body>
</html>