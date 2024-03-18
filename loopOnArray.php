<?php
$fruits = ["Banana", "Big banana", "Apple", "Pine apple", "Coconut"];

// foreach ($fruits as $key => $fruit) {
//     echo ++$key . "." . $fruit . " ";
// }

// echo $fruits[1];


for ($i = 0; $i < count($fruits); $i++) {
    echo $i + 1 . ". " . $fruits[$i] . "<br>";
}

?>