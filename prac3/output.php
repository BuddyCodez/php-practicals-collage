<?php 
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$operator = $_POST['operator'];
if($operator == "add"){
    $result = $v1 + $v2;
    echo "The sum of $v1 and $v2 is $result";
} 
else if($operator == "sub")
{
    $result = $v1 - $v2;
    echo "The difference of $v1 and $v2 is $result";
}
else if($operator == "mul")
{
    $result = $v1 * $v2;
    echo "The product of $v1 and $v2 is $result";
}
else if($operator == "div")
{
    $result = $v1 / $v2;
    echo "The division of $v1 and $v2 is $result";
}
else if($operator == "mod")
{
    $result = $v1 % $v2;
    echo "The modulus of $v1 and $v2 is $result";
}
else if($operator == "sq")
{
    $result = $v1 ** $v2;
    echo "The square of $v1 and $v2 is $result";
}
else
{
    echo "Invalid operator";
}

?>