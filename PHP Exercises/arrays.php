<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
	"caesar salad",
	"steak",
	"fries",
	"lemon cake"
];
/*
Print every array element in a new line.
*/
echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
		  <li>{$food[0]}</li>
		  <li>{$food[1]}</li>
		  <li>{$food[2]}</li>
		  <li>{$food[3]}</li>
  	  </ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
	"salad" => "caesar salad",
	"main course" => "steak",
	"side" => "fries",
	"dessert" => "lemon cake"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
foreach ($food_assoc as $key => $value){
	echo "{$value} | {$key}<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
	"caesar salad" =>[
		"type" => "salad",
		"origin" => "Mexico"
	],
	"steak" =>[
		"type" => "main course",
		"origin" => "Argentina"
	],
	"fries" =>[
		"type" => "side",
		"origin" => "Belgium"
	],
	"lemon cake" =>[
		"type" => "dessert",
		"origin" => "England"
	]
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
foreach ($food_assoc as $key => $value){
	echo "{$key}";
	foreach($food_assoc[$key] as $x => $x_value){
		echo " | $x_value";
	}
	echo"<br>";
}
       



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table><tr><th>food</th><th>type</th><th>origin</th></tr>";
foreach($food_assoc as $key => $value){
    echo "<tr>";
	echo "<td>{$key}</td>";
    foreach($food_assoc[$key] as $x => $x_value){
		echo "<td>{$x_value}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>