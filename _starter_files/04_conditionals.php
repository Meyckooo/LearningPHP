<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 18;

// if ($age >= 18){
//   echo 'Yehey!, You are old enough to vote';
// }else{
//   echo 'Sorry, You are not old enough to vote';
// }



$time = 12;

$day = [
  'Morning' => 'Good Morning',
  'Noon' => 'Good After Noon',
  'Evening' => 'Good Evening'
];

// if ($time === 1 || $time <= 11){
//   echo $day['Morning'];
// }else if ($time === 12 || $time <= 17){
//     echo $day['Noon'];
// }else if ($time === 18 || $time <= 24){
//   echo $day['Evening'];
// }else{
//   echo "Invalid Time";
// }


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

$posts = ['First_Post'];

// echo !empty($posts) ? $posts[0] : 'No Post';

// $firstposts = !empty($posts) ? $posts[0] : 'No Post';
// echo ($firstposts);

// $ternary = ($age >= 18) ? "Yehey!, You are old enough to vote" : "Sorry, You are not old enough to vote" ;

// echo $ternary;


/* -------- Coalescing Operator-------- */
$first_posts = $posts[0] ?? 'No Post';

echo ($first_posts);



/* -------- Switch Statements ------- */

// switch($age){
//   case "18":
//     echo "Yehey!, You are old enough to vote";
//     break;
//   case "17":
//     echo "Sorry, You are not old enough to vote";
//     break;
//   default:
//   echo "You're not a citizen on this country";
// }


?>
