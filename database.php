<?php
include 'variable.php';
$servername = "localhost";
 $username = "Snowie";
 $password = "";
 $db = "DataBase_Survey";


// Create connection
$con= new mysqli( $servername, $username, $password);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($con->query($sql) === TRUE) {
echo "";
} else  {
echo "Error creating database: " . $con->error;
}


// Create connection
$con= new mysqli( $servername, $username, $password, $db);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS person(
surname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    contactnumber INT(10) NOT NULL,
    age INT(10) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    favfood VARCHAR(50)NOT NULL,
    eatout VARCHAR(50) NOT NULL,
    movies VARCHAR(50) NOT NULL,
    tv VARCHAR(50) NOT NULL,
    radio VARCHAR(50) NOT NULL
)";

if ($con->query($sql) === TRUE) {
echo "";
} else {
echo "Error creating table: " . $con->error;

}

//$con = mysqli_connect("$servername","$username","$password","$db");
// Create connection
$con= new mysqli( $servername, $username, $password, $db);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('$surname','$firstname','$contactnumber','$age','$gender', '$favfood', '$eatout','$movies','$tv','$radio' );";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('dolo', 'Sinothando', 0793587120, 01/03/2000, 'female', 'Pizza', 'disagree', 'agree', 'agree', 'strongly agree');";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('MaButhelezi', 'Mama', 0731708540, 11/17/1960, 'female', 'Pasta', 'disagree', 'agree', 'agree', 'strongly agree');";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('Thwala', 'Sinothando', 0793587120, 01/03/2000, 'female', 'Pizza', 'disagree', 'agree', 'agree', 'strongly agree');";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('MaButhelezi', 'Mama', 0731708540, 11/17/1960, 'female', 'Pasta', 'disagree', 'agree', 'agree', 'strongly agree');";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('zulioi', 'Baba', 0822974361, 05/17/1959, 'male', 'Pap and Vors', 'disagree', 'agree', 'agree', 'strongly agree');";
$sql .= "INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
VALUES ('MAhlake', 'Lihle', 0608261098, 05/27/1990, 'female', 'pap and vors, 'disagree', 'agree', 'agree', 'strongly agree');";


if ($con->multi_query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
?>
  