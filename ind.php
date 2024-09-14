<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- 

    <form action="index.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log-in">
    </form> -->

    <!-- 
    <form action="index.php" method="post">
        <label for="">quantity</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total"><br>

    </form> -->

    <!-- 
  <form action="index.php" method="post">
    <label for="">x:</label>
    <input type="text" name="x"><br>
    <label for="">y:</label>
    <input type="text" name="y"><br>
    <label for="">z:</label>
    <input type="text" name="z"><br>
    <input type="submit" value="total"><br>

  </form> -->

    <!-- <form action="index.php" method="POST">
    <label for="">radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
  </form> -->

    <!-- <form action="index.php" method="post">
    <label for="">enter a number to count to:</label>
    <input type="text" name="counter">
    <input type="submit" value="start">
  </form> -->

    <!-- <form action="index.php" method="post">
    <label for="">enter a number to count to:</label>
    <input type="text" name="counter">
    <input type="submit" value="stop">
  </form> -->

    <!-- <form action="index.php" method="post">
    <label for="">enter a country</label>
    <input type="text" name="country">
    <input type="submit">
  </form> -->
    
</body>
</html>

<?php


// echo "{$_POST["username"]} <br>"; 
// echo "{$_POST["password"]}  <br>";

// $item ="pizza";
// $price = 5.99;
// $quantity = $_POST["quantity"];
// $total = null;


// $total = $quantity * $price;
// echo "You have ordered {$quantity} X {$item}/s <br>";
// echo"your total is: \${$total}";

// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];


// $radius = $_POST["radius"];
// $circumference = null;
// $area = null;
// $volume = null;
// $total = null;

// $total = abs($x); 
// echo $x;
//echo $total;

// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
//  $total = pow($x , $y);
// $total = max($x,$y,$z);
//  $total = min($x,$y,$z);
// $total = pi();
// // $total = rand(1,6);
// echo $total;

// $circumference = 2 * pi() *$radius;
// $circumference = round($circumference, 2 );
// $area = pi() * pow($radius , 2);
// $area = round($area , 2);
// $volume =4/3 *pi() * pow($radius,3);
// $volume = round($volume,2);
// echo "circumference = {$circumference} cm <br>";
// echo "area {$area} cm^2 <br>";
// echo "volume = {$volume} cm^3 <br>"





//conditional statement

// $age = 101;
//  if($age <= 18){
//     echo"you may enter this site";
//  }else if($age >= 18){
//      echo"you are too hold to enter the age";
//  }
//  else if($age <= 0){
//      echo"this wasnt a valid age";
//  }
//  else{
//     echo "you must be 18+ to enter";
//  }

// $adult = true;

// if($adult == true){
//     echo "you may enter the site";
// }else{
//     echo"you must be an adult to enyter";
// }


// $hours = 50;
// $rate = 15;
// $weekly_pay = null;
// if($hours <= 0){
//     $weekly_pay = 0;
// }
// else if($hours <= 40){
//     $weekly_pay = $hours * $rate;
// }else{
//     $weekly_pay = ($rate * 40) + ($hours - 40 ) * ($rate * 1.5);
// }

// echo" you maade \${$weekly_pay} this week";


// $temp = 25;
// $cloudy = true;

// if($temp < 0 || $temp > 30){
//     echo "the weather is bad <br>.";
// }else {
//     echo "the weather is good <br>";
// }

// if(!$cloudy ){
//     echo"its cloudy";

// }else{
//     echo"its sunny";
// }


// $age = 18;
// $citizen = true;

// if($age >= 18 && !$citizen){
//     echo "you cannot vote";
// }

// else{
//     echo "you can vote";
// }


// $child = false;
// $senior= false ;
// $ticket = null;

// if($child || $senior ){
//     $ticket = 10;
// }
// else{
//     $ticket = 15;
// }

// echo "the ticket price is \${$ticket}";

// $date = date("I");

// $date = "Tuesday";

// switch($date){
//     case "monday":
//     echo "i hate mondays ";
//     break;
//     case "tuesdsay":
//         echo "it is taco tuesday";
//         default:
//         echo "{$date} is not a valid date";
// }


// //for loop
//  for($i = 0; $i > 0 ;$i+=3 ){
//     echo $i.  "<br>";
//  }

// $counter = $_POST["counter"];

// for($i = $counter ; $i >0 ; $i--){
//     echo $i . "<br>";

// }
// for($i =0 ; $i< $counter; $i++){
//     echo $i . "<br>";

// }


// $seconds = 0;
// $running = true;

// while($running){
//       if(isset($_POST["stop"])){
//         $runnimg = false;
//       }else {

//     //wait a second
//     $seconds++;
//     echo $seconds . "<br>";
//       }



// }

// while( $counter <= 0 ){
//     $counter++ ;
//     echo $counter . "<br>";
// }


//array

// $foods = array("apple", "orange", " banana", "coconut");

// foreach ($foods as $food ) {
//    echo $food . '<br> ';
// }

// $foods[0] = "pineapple";
// array_push($foods, "pineapple" ,"kiwi");
// array_pop($foods);
// array_shift($foods);
// $foods =  array_reverse($foods);

// echo count($foods);


// foreach($foods as $food ){
//     echo $food . "<br>";
// }

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";
// echo $foods[4] . "<br>";




// ASSOCIATE ARRAY  OR YOU CALL IT OBJECT = AN ARRAY MADE OF KEY=VALUE PAIRS. -->

// <!-- countries => capital -->
// <!-- // id => username -->
//  <!-- // item => price -->


// $capitals = array("usa"=>"washington d.d",
//  "japan" => " kyoto",
//  "south korea" => "seoul",
//   "india" =>" new delhi");

// $capital = $capitals[$_POST["country"]];
// echo " the capital is {$capital}"; 


//   $capitals["usa"] = "las vegas";
//   $capitals["china"] = "beijing";
//   array_pop($capitals);
//   array_shift($capitals);
// array_keys($capitals);


// $keys = array_keys($capitals); 
//   foreach($capitals as $key => $value ){
//     echo "{$key} = {$value} <br>";

//   }




// $capitals=  array_flip($capitals);
//   $values = array_keys($capitals);

// echo count($capitals); 

// foreach($capitals as $key => $value ){
//     echo "{$key}  = {$value} <br>";

//   }






// echo $capitals["usa"];



// TWO USEFUL PHP FUNCTIONS
// ISSET() = returns true if variable is declared and not null;
// empty() = returns true if a variable is not declared , false, null, ""

// $username = "Brocode";
// $username = null;
// $username = false;
// echo isset($username);
// in php 1 means true

// if (isset($username)) {
//     echo "this variable not empty";
// }else{
//     echo "this variable is empty";
// }

// if (isset($username)) {
//     echo "this variable is set";
// }else{
//     echo "this variable is not set";
// }
?>