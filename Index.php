<?php

include("Database.php");

$username = "Squidward";
$password = "clarinet2";

// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "businessdb";
// $conn = "";

// try{

    
// $conn = mysqli_connect(
//     $db_server,
//     $db_user,
//     $db_pass,
//     $db_name,
//     $conn
// );

// } catch (mysqli_sql_exception){
//     echo "could not connect !  <br>";
// }


// if($conn){
//     echo " you are connected!  <br>";
// } 

// else {
//     echo "could not connect !";
// }


//to close a connection

$sql = "INSERT INTO users (user , password) VALUES ('$username', '$password') ";

try{
    mysqli_query($conn, $sql);
    echo " user is now registered";
} catch (mysqli_sql_exception) {
   echo " could not register user";
}



mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
hello

</body>
</html>