<?php
ob_start();
error_reporting(-1);
ini_set('display_erros','On');

$first_name= '';
$last_name = '';
$email = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$comments_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(empty($_POST['first_name'])) {
      $first_name_err="Please fill out your first name!";
  } else {
      $first_name = $_POST['first_name'];
  }

  if(empty($_POST['last_name'])) {
      $last_name_err="Please fill our your last name!";
  } else {
      $last_name = $_POST['last_name'];
  }

  if(empty($_POST['email'])) {
      $email_err="Please fill out your email!";
  } else {
      $email = $_POST['email'];
  }

  if(empty($_POST['comments'])) {
      $comments_err="Please fill out your comments!";
  } else {
      $comments = $_POST['comments'];
  }


if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
$to = 'thaonhi.nguyen411@gmail.com';
  ini_set('date.timezone', 'America/Los_Angeles');  
  $subject = 'Email from Cupcake Fashion on '.date('m/d/y, h i A');
  $body = '
  First Name : '.$first_name.' '.PHP_EOL.'
  Last Name : '.$last_name.' '.PHP_EOL.'
  Email : '.$email.' '.PHP_EOL.'
  Comments : '.$comments.' '.PHP_EOL.'
  ';


  $headers = array(
      'From' => 'thaonhi.nguyen411@gmail.com'
      // cupcake_fashion_customers@gmail.com
  );

  $headers = implode("\n", $headers);

  
  if(!empty($first_name && $last_name && $email && $comments) ) {
  mail($to, $subject, $body, $headers);

  header('Location: thx.php');
  }
}
}

  include('./includes/contact_header.php');



?>
<body>           
 <h1>Please let us know if you have any questions!</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
  <fieldset>
    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST ['first_name'])) echo htmlspecialchars($_POST["first_name"]);?>">
    <span class="error"><?php echo $first_name_err; ?></span>

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
    <span class="error"><?php echo $last_name_err; ?> </span>

    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span class="error"><?php echo $email_err; ?></span>

    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
    <span class="error"><?php echo $comments_err; ?></span>

    <input type="submit" value="Send it!">

    <p><a href="">Reset!</a></p>

  </fieldset>
  </form>

  <?php
  include('./includes/footer.php');
  ?>