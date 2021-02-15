
<?php
// PassWord
$password ='11aaaa11';
//Message
$message = '';
// Flag 
$isValid = false;
// Test longueur du password
if (strlen($password) < 8  ) {
  $message .= "Votre mot de passe doit comporter au moins 8 caractères \n";
} 
// Test minuscule
if ( !preg_match('#[a-z]#', $password) ) {
  $message .= "Votre mot de passe doit comporter au moins une minuscule  \n";
} 
// Test majuscule
if ( !preg_match('#[A-Z]#', $password) ) {
  $message .= "Votre mot de passe doit comporter au moins une majuscule  \n";
} 
// Test nombre
if ( !preg_match('#[0-9]#', $password) ) {
  $message .= "Votre mot de passe doit comporter au moins un nombre  \n";
} 
// Validation mot de passe
if ($message == '') { 
  $isValid = true;
  $message = "Votre mot de passe est valide.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Condition</title>
</head>

<body>
<?php echo $password?>
  <div class="container">
    <h1 class="text-center">Condition - PHP</h1>
    
    <div class="alert <?php echo $isValid ? "alert-success" : "alert-danger" ?>"> <!-- ajoutez la classe bootstrap dynamiquement -->
      <p> <?php echo nl2br($message)  ?></p>

    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>