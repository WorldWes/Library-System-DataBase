<!-- Created by: India W. -->
<!-- Date modified: 12-6-2021 -->

<?php
include "connection.php";
?>

<html lang="en">
<head>
  <!-- Including Bootstrap library -->
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
      <!-- FOR MANUAL NAME UPDATING 
      (type name into "firstName" box that you wish to change and 
      type into "firstNameUpdate" box the name you want to change it to
       then hit the update button below the form)-->
      <label for="firstName">Firstname:</label>
      <input type="firstName" class="form-control" id="firstName" placeholder="Enter firstname" name="firstName">
        <!-- Second "firstName" box for update functionality-->
      <input type="firstNameUpdate" class="form-control" id="firstNameUpdate" placeholder="firstname update" name="firstNameUpdate">
    </div>

    <div class="form-group">
      <label for="lastName">Lastname:</label>
      <input type="lastName" class="form-control" id="lastName" placeholder="Enter lastname" name="lastName">
    </div>

    <div class="form-group">
      <label for="city">City:</label>
      <input type="city" class="form-control" id="city" placeholder="Enter city" name="city">
    </div>

    <div class="form-group">
      <label for="state">State:</label>
      <input type="state" class="form-control" id="state" placeholder="Enter state" name="state">
    </div>

    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <!-- Buttons for form -->
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
  </form>
</div>
</div>


<div class="col-lg-12">
<!-- table for database data -->
<table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>State</th>
        <th>Phone</th>
        <th>Adddress</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $res=mysqli_query($link,"select * from patron");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["patronId"]; echo "</td>";
      echo "<td>"; echo $row["firstName"]; echo "</td>";
      echo "<td>"; echo $row["lastName"]; echo "</td>";
      echo "<td>"; echo $row["city"]; echo "</td>";
      echo "<td>"; echo $row["state"]; echo "</td>";
      echo "<td>"; echo $row["phone"]; echo "</td>";
      echo "<td>"; echo $row["address"]; echo "</td>";
      echo "<td>"; echo $row["email"]; echo "</td>";
      // Buttons for table 
      echo "<td>"; ?> <a href="edit.php?patronId=<?php echo $row["patronId"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
      echo "<td>"; ?> <a href="delete.php?patronId=<?php echo $row["patronId"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";

      echo "</tr>";

    }
    ?>
    </tbody> 
  </table>

</div>
</body>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into patron values(NULL,'$_POST[firstName]','$_POST[lastName]','$_POST[city]','$_POST[state]','$_POST[phone]','$_POST[address]','$_POST[email]')");
  ?>
  <!--refresh without manually refreshing page-->
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}

if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from patron where firstName='$_POST[firstName]'") or die(mysqli_error($link));
  ?>
  <!--refresh without manually refreshing page-->
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php

}

if(isset($_POST["update"]))
{
  mysqli_query($link,"update patron set firstName='$_POST[firstNameUpdate]' where firstName='$_POST[firstName]'") or die(mysqli_error($link));
  ?>
  <!--refresh without manually refreshing page-->
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php

}

?>


</html>