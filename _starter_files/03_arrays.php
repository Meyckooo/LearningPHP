<?php

//Simple Array

$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[1];

// ASSOCIATIVE ARRAY
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green',
];

// echo $colors[1];

$hex = [
'red' => '#f00',
'blue' => '#0f0',
'green' => '#00f'
];

// echo $hex['red'];

$person =[
'first_name' => 'Meycko',
'last_name' => 'Canoy',
'email_address' => 'meyckocanoy@gmail.com'
];

// echo $person['first_name'];


// Multi dimentional Array
$people = [
[
  'first_name' => 'Meycko',
  'last_name' => 'Canoy',
  'email_address' => 'meyckocanoy@gmail.com'
],
[
  'first_name' => 'Xaviery',
  'last_name' => 'Batucan',
  'email_address' => 'xababy@gmail.com'
],
[
  'first_name' => 'Mike',
  'last_name' => 'Ygona',
  'email_address' => 'mikeykun@gmail.com'
]
];

// echo $people[2]['email_address'];
echo (json_encode($people));
?>