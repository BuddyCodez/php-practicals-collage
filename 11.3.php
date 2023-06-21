<?php



// Example usage

// Converting associative array to JSON string
$associative_array = array('name' => 'John', 'age' => 30, 'city' => 'New York');
$json_string = json_encode($associative_array);
echo "Associative Array to Json:<br>". $json_string. "<br>";

// Converting JSON string to associative array
$json_string = '{"name": "John", "age": 30, "city": "New York"}';
$associative_array = json_decode($json_string, true);
echo "Json to Associative Array:<br>";

print_r($associative_array);

?>
