
<?php
include('./includes/contact_header.php');
 ?>

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
