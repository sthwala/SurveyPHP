<?php
include 'database.php';
include 'variable.php';

$con = mysqli_connect("$servername","$username","$password","$db");

$sql = "SELECT * FROM person";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    echo "Total number of surveys:". $rowcount;
 }
 $sql = "SELECT * FROM person WHERE age = (SELECT avg(age) FROM person)";
 echo "<table>";
 echo "<tr><th>Average age:</th><th></th></tr>";
 foreach ($con->query($sql) as $row) {
 echo "<tr ><td></td><td>$row[age]</td></tr>";
 }
 $sql = "SELECT * FROM person WHERE age = (SELECT MAX(age) FROM person)";
 echo "<table>";
 echo "<tr><th>Oldest person who participated in survey</th><th></th></tr>";
 foreach ($con->query($sql) as $row) {
 echo "<tr ><td></td><td>$row[age]</td></tr>";
 }
 echo "</table>";
 $sql = "SELECT * FROM person WHERE age = (SELECT MIN(age) FROM person)";
 echo "<table>";
 echo "<tr><th>Youngest person who participated in survey</th><th></th></tr>";
 foreach ($con->query($sql) as $row) {
 echo "<tr ><td></td><td>$row[age]</td></tr>";
 }
 echo "</table>";

 //$sql="SELECT AVG(pizza) as a, AVG(pasta) as b, AVG(papandvors) as c, FROM person = '$favfood'" ;
 $sql = "SELECT * FROM person WHERE favfood = (SELECT avg(favfood) FROM person)";
  echo "<table>";
 echo "<tr><th>Average age:</th><th></th></tr>";
 foreach ($con->query($sql) as $row) {
 echo "<tr ><td></td><td>$row[age]</td></tr>";
 }
?>
<html>
    <body>
      <br></br>
      <a href="Welcome.php"><button>OK</button></a>
      <
    </body>    
</html>