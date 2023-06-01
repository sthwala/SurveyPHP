

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
  <?php
  include 'Survey.php';
  include  'variable.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Insert into database
    $sql = "INSERT INTO table person VALUES ('".$_POST['data']."')";
    if(isset($_POST["submit"]) && $_POST["submit"]!="")
    {
       $_POST['surname'];
       $_POST['firstname'];
       $_POST['gender'];
       $_POST['contactnumber'];
       $_POST['age'];
       $_POST['favfood'];
       $_POST['eatout'];
       $_POST['movies'];
       $_POST['tv'];
       $_POST['radio'];
    }
    // Redirect
    header("Location: Welcome.php");
    exit;
  }
  ?>

<h1>Take Our Survey</h1>
<p><span class="error">* required field</span></p>
<form  method="POST" role="FORM" action="<?= $_SERVER['PHP_SELF']; ?>">  
  Surname: <input type="text" name="surname" value="<?php echo $surname;?>">
  <span class="error">* <?php echo $surnameErr;?></span>
  <br></br>

  Name: <input type="text" name="name" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br></br>

  contact Number: <input type="number" name="contact number" value="<?php echo $contactnumber;?>">
  <span class="error">* <?php echo $contactnumber;?></span>
  <br></br>
  <label for="Dateofbirth">Date of birth:</label>
  <input type="date" id="dateofbirth" name="dateofbirth"> 
  <br></br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br></br>
  
  <h4>What is your favourite food?(You can choose more than one option)</h4>
  <td>Pizza</td>
  <td><input type="checkbox" name="favfood[]" value="Pizza"></td>  
  <br></br>
  <td>Pasta</td>
  <td><input type="checkbox" name="favfood[]" value="Pasta"></td>  
  <br></br>
  <td>Papa and wors</td>
  <td><input type="checkbox" name="favfood[]" value="Papa and wors"></td>  
  <br></br>
  <h4>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</h4>
  <br></br>
  Eat out:
  <input type="radio" name="eatout" <?php if (isset($eatout) && $eatout=="strongly agree") echo "checked";?> value="strongly agree">strongly agree
  <input type="radio" name="eatout" <?php if (isset($eatout) && $eatout=="agree") echo "checked";?> value="agree">agree
  <input type="radio" name="eatout" <?php if (isset($eatout) && $eatout=="Neutral") echo "checked";?> value="Neutral">Neutral
  <input type="radio" name="eatout" <?php if (isset($eatout) && $eatout=="disagree") echo "checked";?> value="disagree">disagree
  <input type="radio" name="eatout" <?php if (isset($eatout) && $eatout=="strongly disagree") echo "checked";?> value="strongly disagree">strongly disagree  
  <span class="error">* <?php echo $eatoutErr;?></span>
  <br></br>
  Movies:
  <input type="radio" name="movies" <?php if (isset($movies) && $movies=="strongly agree") echo "checked";?> value="strongly agree">strongly agree
  <input type="radio" name="movies" <?php if (isset($movies) && $movies=="agree") echo "checked";?> value="agree">agree
  <input type="radio" name="movies" <?php if (isset($movies) && $movies=="Neutral") echo "checked";?> value="Neutral">Neutral
  <input type="radio" name="movies" <?php if (isset($movies) && $movies=="disagree") echo "checked";?> value="disagree">disagree
  <input type="radio" name="movies" <?php if (isset($movies) && $movies=="strongly disagree") echo "checked";?> value="strongly disagree">strongly disagree  
  <span class="error">* <?php echo $moviesErr;?></span>
  <br></br>
  TV:
  <input type="radio" name="tv" <?php if (isset($tv) && $tv=="strongly agree") echo "checked";?> value="strongly agree">strongly agree
  <input type="radio" name="tv" <?php if (isset($tv) && $tv=="male") echo "checked";?> value="male">Male
  <input type="radio" name="tv" <?php if (isset($tv) && $tv=="Neutral") echo "checked";?> value="Neutral">Neutral
  <input type="radio" name="tv" <?php if (isset($tv) && $tv=="disagree") echo "checked";?> value="disagree">disagree
  <input type="radio" name="tv" <?php if (isset($tv) && $tv=="strongly disagree") echo "checked";?> value="strongly disagree">strongly disagree
  <span class="error">* <?php echo $tvErr;?></span>
  <br></br>
  RADIO:
  <input type="radio" name="radio" <?php if (isset($radio) && $radio=="strongly agree") echo "checked";?> value="strongly agree">strongly agree
  <input type="radio" name="radio" <?php if (isset($radio) && $radio=="agree") echo "checked";?> value="agree">agree
  <input type="radio" name="radio <?php if (isset($radio) && $radio=="Neutral") echo "checked";?> value="Neutral">Neutral
  <input type="radio" name="radio" <?php if (isset($radio) && $radio=="disagree") echo "checked";?> value="disagree">disagree
  <input type="radio" name="radio" <?php if (isset($radio) && $radio=="strongly disagree") echo "checked";?> value="strongly disagree">strongly disagree  
  <span class="error">* <?php echo $radioErr;?></span>
  <br></br>
  <input type="submit" name="submit" value="Submit" />
  
</body>
</html>


