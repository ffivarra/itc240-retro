<?php include 'includes/config.php';?>
<?php include 'includes/common.php';?>
<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<?php

if(isset($_POST['Submit'])){ //data submitted
 
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'fivarr01@seattlecentral.edu';
    $subject = 'Test from contact form.';
    $message = process_post();
    $replyTo = $_POST['Email'];
    
    safeEmail($to, $subject, $message, $replyTo);
    
    echo 'Submission Successful. Thank you!';
    
    //connect to the database in order to add contact data
    $iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

    //process each post var, adding slashes, using mysqli_real_escape(), etc.
    $Name = dbIn($_POST['Name'],$iConn);
    $Email = dbIn($_POST['Email'],$iConn);
    $Comments = dbIn($_POST['Comments'],$iConn);

    //place question marks in place of each item to be inserted
    $sql = "INSERT INTO test_Contacts (Name,Email,Comments,DateAdded) VALUES(?,?,?,NOW())";
    $stmt = @mysqli_prepare($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
    
    /*
     * second parameter of the mysqli_stmt_bind_param below 
     * identifies each data type inserted:
     *
     * i == integer
     * d == double (floating point)
     * s == string
     * b == blob (file/image)
     *
     *example: an integer, 2 strings, then a double would be: "issd"
     */

    mysqli_stmt_bind_param($stmt, 'sss',$Name,$Email,$Comments);

    //execute sql command
    mysqli_stmt_execute($stmt) or die();
    
    //close statement
    @mysqli_stmt_close($stmt);
    
    //close connection
    @mysqli_close($iConn);
}
else{ //show form
    
    echo '
    
    <form method="post" action="' . THIS_PAGE . '">
    Name: <input type="text" name="Name" required="required"/><br />
    Email: <input type="email" name="Email" required="required"/><br />
    Comments: <textarea name="Comments"></textarea><br />
    <input type="submit" value="Send" name="Submit"/>
    </form>
    
    ';
}

?>

<?php include 'includes/footer.php';?>