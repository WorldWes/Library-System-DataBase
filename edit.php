<!-- Created by: India W. -->
<!-- Date modified: 12-6-2021 -->
<!-- Webpage for editing dabase entries -->

<?php
include "connection.php";
$patronId=$_GET["patronId"];

$firstName="";
$lastName="";
$city="";
$state="";
$phone="";
$address="";
$email="";


$res=mysqli_query($link,"select * from patron where patronId=$patronId");
while($row=mysqli_fetch_array($res))
{
    $firstName=$row["firstName"];
    $lastName=$row["lastName"];
    $city=$row["city"];
    $state=$row["state"];
    $phone=$row["phone"];
    $address=$row["address"];
    $email=$row["email"];


}
?>

<html lang="en">
<head>
  <title>Bootstrap 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>Library Sign-up Form</h2>
  <form action="" name="form1" method="post">
  <!-- Fill in form text boxes for database entries -->
    <div class="form-group">
      <label for="firstName">Firstname:</label>
      <input type="firstName" class="form-control" id="firstName" placeholder="Enter firstname" name="firstName" value="<?php echo $firstName; ?>">
    </div>
    <div class="form-group">
      <label for="lastName">Lastname:</label>
      <input type="lastName" class="form-control" id="lastName" placeholder="Enter lastname" name="lastName" value="<?php echo $lastName; ?>">
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="city" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $city; ?>">
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="state" class="form-control" id="state" placeholder="Enter state" name="state" value="<?php echo $state ?>">
    </div>
    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="<?php echo $phone; ?>">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
    </div>

    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>
</div>

</div>
</body>

<?php
if(isset($_POST["update"]))
{
  mysqli_query($link,"update patron set firstName='$_POST[firstName]', lastName='$_POST[lastName]', city='$_POST[city]', state='$_POST[state]', phone='$_POST[phone]', address='$_POST[address]', email='$_POST[email]' where patronId=$patronId");
  ?>
  <script type="text/javascript">
  window.location.href="index.php";
  </script>
  <?php

}



?>





</html>