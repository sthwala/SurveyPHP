<?php
ini_set('memory_limit', '512M');
ini_set('max_execution_time', '300');
include 'database.php';
include  'variable.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    $surname = $_POST["surname"];
    // check if surname only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = $_POST["firstname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  
  function validating($contactnumber){
    if (empty($_POST["contactnumber"])) {
      $contactnumberErr = "Contactnumber is required";
    } else {
        $contactnumber = $_POST["contactnumber"];
     // check if the contact number is valid and contains interger or not
    if(preg_match('/^[0-9]{10}+$/', $contactnumber)) {
      echo "Valid Phone Number";
      } 
    }

      validating("1016660180"); //10 digits valid phone number
      validating("101666018000"); //12 digits invalid phone number
      validating("101$666*01"); //10 letters phone number with invalid characters
      validating("101$666*0180"); //10 digits phone numbers with invalid characters
    }
    
    $bday = new DateTime($age); // Your date of birth
    $today = new Datetime(date('m.d.y'));
    $age = $today->diff($bday);
   
    $dateOfBirth = "17-10-1985";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    echo 'Age is '.$diff->format('%y');
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }



    if(isset($_POST['submit'])){//to run PHP script on submit
      if(!empty($_POST['favfood'])){
      // Loop to store and display values of individual checked checkbox.
      foreach($_POST['favfood'] as $selected){
      echo $selected."</br>";
      }
      }
      }
    
  if (empty($_POST["eatout"])) {
    $eatoutErr = "rating is required";
  } else {
    $eatout = $_POST["eatout"];
  }
  
  if (empty($_POST["movies"])) {
    $moviesErr = "rating is required";
  } else {
    $movies = $_POST["movies"];
  }
  
  if (empty($_POST["tv"])) {
    $tvErr = "rating is required";
  } else {
    $tv = $_POST["tv"];
  }
  
  if (empty($_POST["radio"])) {
    $radioErr = "rating is required";
  } else {
    $radioErr = $_POST["radio"];
  }

  
    }




?>