<?php

//common.php

/**
 * generic error handling function for hiding db errors, etc.
 *
 * Change the socks reference and any HTML to suit
 *
 * @param string $myFile File from which error emitted
 * @param string $myLine Line where error can be found
 * @param string $errorMsg Message to be shown to admin only
 * @return void
 * @see dbIn()
 * @todo none
 */

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error. Would you like to buy some socks?";
        die();
    }
}

/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.  
 * Using our dbOut() function allows us to encapsulate the most common functions for removing  
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str)
{
	if($str!=""){$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;
} #End dbOut()

/**
 * Filters data per MySQL standards before entering database. 
 *
 * Adds slashes and helps prevent SQL injection per MySQL standards.    
 * Function enclosed in 'wrapper' function to add further functionality  
 * as vulnerabilities emerge.
 *
 * @param string $var data as entered by user
 * @param object $myConn active mysqli DB connection, passed by reference.
 * @return string returns data filtered by MySQL, adding slashes, etc.
 * @see dbIn() 
 * @todo none
 */
function dbIn($var,&$iConn)
{
	if(isset($var) && $var != "")
	{
		return mysqli_real_escape_string($iConn,$var);
	}else{
		return "";
	}
	
} #End dbIn()