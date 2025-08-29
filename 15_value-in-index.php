<?php
function getValueByIndex($array,$index){
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Invalid Index!";
    }
}
$animals = ["lion", "tiger", "cat", "dog", "capybara"];
echo "Value at index 2: ".getValueByIndex($animals, 2). "<br>";   
echo "Value at index 5: ".getValueByIndex($animals, 5); 
?>