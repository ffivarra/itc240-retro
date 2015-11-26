<?php
//config.php

define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

//database credentials here
include 'credentials.php';
include 'common.php';
include 'MyAutoLoader.php';
//include 'Pager.php';

define('VIRTUAL_PATH', 'http://fivarra.com/retro/'); # Virtual (web) 'root' of application for images, JS & CSS files
define('PHYSICAL_PATH', '/home/fraiva2/fivarra.com/retro/'); # Physical (PHP) 'root' of application for file & upload reference
define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

//this defines the current filename:
define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); //constants never change and are always available

//echo THIS_PAGE;

//this allows us to add unique info to our pages:
switch(THIS_PAGE){
	case "index.php":
		$title = "Home";
		$pageID = "Welcome!";
		$headerPic = "images/dt.jpg";
		break;
	
    case "template.php":
        $title = "Template";
        $pageID = "My Template Page ID";
		$headerPic = "images/blueprint.jpg";
        break;
        
    case "daily.php":
        $title = "Daily";
        $pageID = "SoTD Page ID";
		$headerPic = "images/calendar.png";
        break;
    
	case "contact.php":
		$title = "Contact";
		$pageID = "Send Us Your Feedback!";
		$headerPic = "images/contact.png";
		break;
		
    case "newsletter.php":
		$title = "Newsletter";
		$pageID = "Join Our Mailing List!";
		break;
        
    case "artists_list.php":
		$title = "Artists";
		$pageID = "Learn More About Your Favorite Music Artists!";
		break;
	
    default:
        $title = THIS_PAGE;
        $pageID = "Golly Gee Willikers!";
} //end of switch statement

//here are our navigation pages:
$nav1['index.php'] = 'Home';
$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';
$nav1['newsletter.php'] = 'Newsletter';
$nav1['artists_list.php'] = 'Artists';

				/*
                <li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
                */
			
/*
foreach($nav1 as $link => $label){
    echo "link is $link and label is $label<br />";
}
*/

//echo $title;

//die;

//creates links inside the "header.php" file:

//

function makeLinks($arr, $prefix = '', $suffix = '', $exception = ''){
    $myReturn = '';
    foreach($arr as $link => $label){
        
        if(THIS_PAGE == $link){
            //current file gets active class:
            $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
        }
        else{
            $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
        }
    }
    return $myReturn;
}; //end of makeLinks()