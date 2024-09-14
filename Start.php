<?php
// echo"i love pizza  <br> "; 
// echo"it's really good"
//this is a comment
/*this
is 
a 
multiline comment
*/




//variable = a reusable container that holds data
//         strings, interger,float,boolean

//   $name = "Bro Code";
//   $food = "food";
//   $email = "fake@gmail.com";
//   echo $name;
// known as a string litereal



// // INTERGERS
// $age = 21;
// $users = 2;
// $quantity = 4;
// $gpa = 2.5;

// //FLOAT
// $price = 5.99;
// $tax_rate = 5.1;

// //BOOLEAN
// $employed = true;
// $online = true;
// $forsale = true; 

// $total = null;

// echo " hello {$name}  <br>";
// echo  "You like {$food} <br>";
// echo "Your Email is {$email}";
// echo "you are {$age} years old<br>";
// echo "there are {$users} online <br>";
// echo "you will like to buy {$quantity} items <br>";
// echo "Your gpa is: {$gpa}    <br>";
// echo "Your pizza is \${$price}  <br>";
// echo "the sales tax rate is: \${$tax_rate}% <br>";
// echo" online status :{$online} <br>";

// echo "you have ordered {$quantity} x {$food}s <br>";
// $total = $quantity * $price ;
// echo "your total is: \${$total}"





//Arithmetic operators 
// + - * / **  % 

// $x = 10; 
// $y = 3;
// $z = null ;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
// $z = $x ** $y;
// $z = $x % $y;

// echo $z

// INCREMENT AND DECREMENT OPERATORS
// $Counter = 0;

// $Counter = ++$Counter;
// //or
// $Counter++;

// echo $Counter;


// $Counter = 2;

// // $Counter = --$Counter;
// //or
// $Counter--;
// //or
// $Counter+=3;

// echo $Counter;

//OPERATOR PFREDECENCE
// ()
//**
// * / %
// + -

// $total = 1 + 2 - 3 * 4/ 5 ** 6;
// echo $total;










?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <br>
    <button>order a pizza</button> -->
    <!-- <form action="index.php" method="post"><br>
        <label for="">username:</label><br>
        <input type="username" name="username"><br>

        <label for="">password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="log in">
    </form> -->

<!-- <form action="index.php" method="post">
   <input type="radio"  name="credit_card" value="visa">
   visa <br>
    <input type="radio"  name="credit_card" value="master-card">
    master card<br>
    <input type="radio"  name="credit_card" value="american-express">
    American express<br>
    <input type="submit" name="confirm" >


</form> -->
<!-- 
<form action="index.php" method="post">
  <input type="checkbox" name="foods[]" value="Pizza" id="">pizza <br>
  <input type="checkbox" name="foods[]" value="Harmburger" id="">Harmburger <br>
  <input type="checkbox" name="foods[]" value="Hotdog" id="">Hotdog <br>
  <input type="checkbox" name="foods[]" value="Taco" id="">Taco <br>
  <input type="submit"  name="submit" >
</form> -->
<!-- <form action="index.php" method="post">
  <input type="checkbox" name="pizza" value="Pizza" id="">pizza <br>
  <input type="checkbox" name="hamburger" value="Harmburger" id="">Harmburger <br>
  <input type="checkbox" name="hotdog" value="Hotdog" id="">Hotdog <br>
  <input type="checkbox" name="taco" value="Taco" id="">Taco <br>
  <input type="submit"  name="submit" >
</form> -->

<!-- <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    age:<br>
    <input type="text" name="age"><br>
    email: <br>
    <input type="email" name="email" id=""> <br>
    <input type="submit" name="login" value="login">
</form> -->



</body>

</html>


<?php




// foreach($_POST as $key => $value){
//     echo "{$key} = {$value} <br>";
// }



// if (isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $username = $_POST["password"];

//     if (empty($username)) {
//         echo "username is missing ";
//     } else if (empty($password)) {
//         echo "password is missing";
//     } else {
//         echo "hello {$username}";
//     }
// }


// if(isset($_POST["confirm"])){

//     $credit_card = null;
   
//    if(($credit_card = $_POST["credit_card"])){
//        $credit_card = $_POST["credit_card"];
// }elseif($credit_card == "visa") {
//     echo "you selected visa";
// }elseif($credit_card == "master-card"){
//     echo "you selected master-card";
// }elseif($credit_card == "american-express"){
//     echo "you select american-express";
// }else{
//     echo "please make a selection";
// }
// }


// echo $credit_card;


// $credit_card = null;

// if(isset($_POST["credit_card"])){
//     $credit_card = $_POST["credit_card"];
// }

// switch($credit_card){
//     case 'visa':
//         echo "you selected visa";
//         break;
//     case 'master-card':
//         echo "you selected master-card";
//         break;
//     case 'american-express':
//         echo "you selected american-express";
//         break;
//     default :
//         echo "please make a selection";
//         break;
// }

// echo $credit_card;


// if (isset($_POST["submit"])) {
//     $foods = $_POST["foods"];

//     foreach($foods as $food){
//         echo $food . "<br>";
//     }
    
// }

// echo $foods[1];



// function happy_birthday($first_name, $age){
//     echo "happy birthday dear {$first_name}! <br>";
//     echo "happy birthday to you ! <br>";
//     echo "happy birthday dear {$first_name}! <br>";
//     echo "how are {$age} years old ! <br>" ;
// }

// happy_birthday("spongebob" , 30);
// happy_birthday("Patrick" , 35);
// happy_birthday("Squidward" , 45);
// // happy_birthday();
// // happy_birthday();

// function is_even($number){
//     // $result = $number % 2; 
//     // return $result; 
     

//     return $number % 2;
// }

// echo is_even(10);


// function hypotenuse(float $a, float $b){
//     $c = sqrt($a ** 2+ $b ** 2);
//     return $c;
    
// }
// // function hypotenuse($a , $b){
// //     $c = sqrt($a ** 2+ $b ** 2);
// //     return $c;
    
// // }

// echo hypotenuse("pizza","taco");
// // echo hypotenuse(3,4);




// $username = "Bro code";
// $username = array("Bro" ,"the" ,"code");  
// $phone = "123-456-7890";
// $age = 93;
// $email= "Brocode@gmail.com";
//string to lower function
// $username = strtolower($username);

// // string to upper function
// $username = strtoupper($username);

//trim
// $username = trim($username);

//string pad function:   to pad a string upto a certain amount of characters 
// $username = str_pad($username,20, "/");

//string replace
// $username = str_replace("-", "", $phone);

//string reverse
// $username = strrev($username);
//string shuffle: $username = str_shuffle($username);

//string compare: we can compare a string or a variable against another string
// $equals = strcmp($username, "Bro Code");

// echo $equals;


// string length function 
// $count = strlen($phone);
// echo $count;

// string position: to find the position of a character
// $count = strpos($username, " ");
// $count = strpos($phone, "-");

// echo $index;



//sub-string function:  to create a new string from a portion of another string.
// $firstname = substr($username, 0, 3);
// $lastname = substr($username ,4 );
// echo $firstname;
// echo $lastname;


//to export each portions of an array into an array. with the explode function

// $username = implode("-", $username);
// echo $username;
// $fullname = explode(" ",$username);
// // echo $fullname; 
// foreach($fullname as $name){
//     echo $name . "<br>";
// }
// echo $username;


// if(isset($_POST["login"])){
   
//     $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

//     $email = filter_input(INPUT_POST, "email" , FILTER_VALIDATE_EMAIL);
      
//     if (empty($age)) {
//         echo "that number wasn't valid <br>";
//     } else {
//         echo "you are {$age} years old <br> ";
//     }
//     if (empty($email)) {
//         echo "that email wasn't valid <br>";
//     } else {
//         echo "this is your email: {$email}" ;
//     }


// }

// if(isset($_POST["login"])){
//     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
//     echo "hello {username}";
//     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);

//     $email = filter_input(INPUT_POST ,"email", FILTER_SANITIZE_SPECIAL_CHARS);
//     echo "you are {$age} years old ";

// }

// include("header.html");


?>

<!-- // <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>this is the homepage</h1> <br>
//     stuff about your homepage and go here <br>
// </body>
// </html> -->


<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- this is the Home page <br>
<a href="index.php">this goes to the login page</a>

<form action="index.php" method="post">
    username: <br>
    <input type="text" name="username" ><br>
    password: <br>
    <input type="password" name="password" > <br>
    <input type="submit"  name="login" value="login">
</form> -->
    
</body>
</html>

<?php
// include("Footer.html")

// setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
// setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
// setcookie("fav_desert", "ice cream", time() + (86400 * 4), "/");
// /*
// foreach($_COOKIE as $key => $value){
//     echo"{$key} = {$value} <br>";
// }*/


// if (isset($_COOKIE["fav_food"])) {
//     echo "BUY SOME  {$_COOKIE["fav_food"]} !!!";    
// }else{
//     echo "i dont know your favourite food";
// }




//session = 5gb used to store information on a user to be used across multiple pages. a user is assigned 
        //   a session-id for example .it can be used login credentials.

        // session_start()



        
// if(isset($_POST["login"])){
   


//     if(!empty($_POST["username"])) {
//     // !empty($_POST["password"]) {


//         $_SESSION["username"] = $_POST["username"];
//         $_SESSION["password"] = $_POST["password"];
//         header("Location: Home.php");
   
//     } else {
//         echo "missing username/password <br>";
//     }
// }
    // $_SESSION["username"] = "BroCode";
    // $_SESSION["password"] = "pizza123";

    // echo $_SESSION["username"] . "<br>";
    // // echo $_SESSION["password"] . "<br>";

    //     $_SESSION["username"] = "BroCode";
    //     $_SESSION["password"] = "pizza123";
    
        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
this is the login page <br>
<a href="Home.php">this goes to the home page</a>

<form action="Home.php" method="post">
    <input type="submit" name="logout" value="logout"> -->
    <!-- </form> -->


    <!-- <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post">
         username: <br>
         <input type="text" name="username" > <br>
         <input type="submit"  value="submit">

    </form>
       -->


    
</body>
</html>

<?php

// echo $_SESSION ["username"] . "<br>";
// echo $_SESSION ["password"] . "<br>";

// if(isset($_POST["logout"])) {
//     session_destroy();
// }


//change file name to start.php.

// foreach ($_SERVER as $key => $value) {
//     echo "{$key}  = {$value} <br>";
// }
    // if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    //     echo "hello";
    // }


// $password = "pizza123";

// $hash = password_hash($password, PASSWORD_DEFAULT);

// if (password_verify("pizza123", $hash)) {
//     echo "you are loggede in !";
// } else {
//     echo "incorrect password !";
// }

// echo $hash;

// include("Database.php");

// mysqli_close($conn)


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST , "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST , "password ", FILTER_SANITIZE_SPECIAL_CHARS);


if (empty($username)) {
     echo "Please enter a username";
} else if ( empty($password)) {
    echo "Please enter a password";
} else {
    $hash = password_hash($password , PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(user, password) VALUES('$username', '$hash')";
    mysqli_query($conn, $sql) ;
    echo "you are now registered !" ;

    try{
        mysqli_query($conn, $sqli);
        echo "you are now registered !";
    }

    catch (mysqli_sql_exception){
    }
    echo "that username is taken";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2>welcome to fakebook</h2>
    username: <br>
    <input type="text" name="username"> <br>
    password: <br>
    <input type="password" name="password" > <br>
    <input type="submit" name="submit" value="register">
</form>
    


</body>
</html>

