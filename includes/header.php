<?php
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
    case 'accessories.php':
        $title = 'Accessories';
        $body = 'Accessories inner';
        break;
    case 'contact.php':
        $title = 'Contact';
        $body = 'contact inner';
        break;
    case 'thx.php':
        $title = 'Thank You Page';
        $body = 'Thank_you inner';

}
// our navigational array
$nav = array(
	'index.php' => 'Home',
    'men.php' => 'Men',
    'women.php' => 'Women',
    'size_guide.php' => 'Size Guide',
    'accessories.php' => 'Accessories',
    'contact.php' => 'Contact',
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-wide, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
        <title><?php echo $title; ?></title>
        <link href="./css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body class="<?php echo $body ;?>">
            <header>
                <div class="inner-header">      
                <h1><a href="index.php" style="text-decoration:none">Cupcake Fashion</a></h1>
                <!-- <img id="logo" src="images/logo.png" alt="logo"> -->
                 
                <!--<nav>
                    <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                    </ul>
                </nav> -->
                <nav>
                    <ul>
                    <?php
                    foreach($nav as $key => $value) {
                        if(THIS_PAGE == $key) {
                            echo '<li><a style="color:purple;" href=" '.$key.' "> '.$value.' </a></li>';
                        } else {
                            echo '<li><a style="color:black;" href=" '.$key.' "> '.$value.' </a></li>';
                        }

                        }//end foreach
                    ?>
                    </ul>
                </nav>
                </div>
            <!-- end inner header -->
            </header>
