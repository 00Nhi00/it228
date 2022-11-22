<?php

$first_name= '';
$last_name = '';
$email = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$comments_err = '';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']))
;

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'About Cupcake Fashion';
        $body = 'home';
        break;
    case 'men.php':
        $title = 'Menswear';
        $body = 'menswear inner';
        break;
    case 'women.php':
        $title = 'Womenswear';
        $body = 'women inner';
        break;
    case 'size_guide.php':
        $title = 'Size Guide';
        $body = 'size_guide inner';
        break;
    case 'sales.php':
        $title = 'Sales';
        $body = 'sales inner';
        break;
    case 'contact.php':
        $title = 'Contact';
        $body = 'contact inner';
        break;
    

}

// create nav function
$nav = array(
    'men.php' => 'Men',
    'women.php' => 'Women',
    'size_guide.php' => 'Size Guide',
    'sales.php' => 'Sales',
    'contact.php' => 'Contact',
);

// function make_links($nav){
//     $my_return='';
    
//     foreach($nav as $key => $value) {
//         if(THIS_PAGE == $key) {
//             echo $my_return = '<li><a style="color:purple;" href=" '.$key.' "> '.$value.' </a></li>';
//         } else {
//             echo $my_return =  '<li><a style="color:black;" href=" '.$key.' "> '.$value.' </a></li>';
//         }

//         }//end foreach
    
//     return $my_return;
// }

// config for contact form

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
    $_POST['comments'],
    )){

    $to = 'thaonhi.nguyen411@gmail.com';
    $subject = 'Email on '.date('m/d/y, h i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Comments/Requirements : '.$comments.' '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'cupcake_fashion_customers@gmail.com'
    );
    
    if(!empty($first_name && $last_name && $email && $comments) ) {

    
    mail($to, $subject, $body, $headers);
    header('Location:./thx.php');
    }
}//end isset
}// end server request method

?>