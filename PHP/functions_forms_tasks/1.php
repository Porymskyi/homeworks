<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>For compare</title>
</head>
<body>
<form action="1.php">
    <input type="textarea" name="text1">
    <input type="textarea" name="text2">
    <input type="submit" value="OK">
</form>
<?php
class SimpleClass{
//some code
}
$instance = new SimpleClass();
$assigned = $instance;
$reference =& $instance;
$instance->var = 'какое-то значение';
$instance = null;
var_dump($instance);
var_dump($reference);
var_dump($assigned);

?>
</body>
</html>