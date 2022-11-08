<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head> -->
<?php
include('./includes/contact_header.php');
 ?>
<body>
<!-- <h1><a href="../index.php" style="text-decoration:none">Cupcake Fashion</a></h1>  -->
<!-- <nav>
    <ul>
      <li><a href="men/men.php">Men</a><li>
      <li><a href="women/women.php">Women</a><li>
      <li><a href="accessories/accessories.php">Size Guide</a><li>
      <li><a href="sales/sales.php">Sales</a></a><li>
      <li><a href="contact/contact.php">Contact</a><li>
      <li><a href=""></a><li>
</ul>
</nav> -->
  <h1>Please let us know if you have any questions!</h1>
  <form action="" method="post"> 
  <fieldset>
    <label>First Name</label>
    <input type="text" name="first_name">

    <label>Last Name</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Comments</label>
    <textarea name="comments"></textarea>
    <input type="submit" value="Send it!">

    <p><a href="">Reset!</a></p>

  </fieldset>
  </form>

  <?php
  //Logic - if isset first_name, last_name...that's a good thing!
  //our second if statement - if I have empty fields, that's not good, I will echo  "please fill out all of the fields!!" Now, if the fields are not empty, then my else will display an echo of the information

  if(isset($_POST['comments'],
$_POST['last_name'],
$_POST['email'],
$_POST['first_name'],
$_POST['comments'])) {
 
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];

  //nest another if statement in reference to the fields being empty
  
  if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments']
)) {

  echo '<p class="error">Please fill out all of the fields!</p>';

} else {

  echo ' 
  <div class="box">
  <h2>Hello '.$first_name.' '.$last_name.' !</h2>
  <p>Thank you for contacting Cupcake Fashion. We have received your <b>email as :</b> '.$email.' and <b>comments:</b>'.$comments.'.<p>
  <p>We will get back to you soon!</p>
  </div>
  ';
}//end else
}//end isset

include('./includes/footer.php');

?>
