<?php include 'includes/config.php';?>

<?php

//process querystring here
if(isset($_GET['id'])){ //process data
	
	//cast the data to an integer for security purposes (what the user types never touches the database)
	$id = (int)$_GET['id'];
}
else{
	
	header('Location:artists_list.php');
}

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or exit( mysqli_connect_error());

$sql = "SELECT * FROM Artists WHERE ArtistID = $id";

$result = mysqli_query($iConn, $sql);

if(mysqli_num_rows($result) > 0){ //show records

    while($row = mysqli_fetch_assoc($result)){

	$Name = stripslashes($row['Name']);
	$Bio = stripslashes($row['Bio']);
	$title = $Name;
	$pageID = $Name;
	$Feedback = ''; //no feedback necessary
	
    /* 
	echo '<p>';
    echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
    echo 'LastName: <b>' . $row['LastName'] . '</b> ';
    echo 'Email: <b>' . $row['Email'] . '</b> ';
	
	echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';
	
    echo '</p>'; 
	*/
    }
    
}
else{ //inform no records

    $Feedback = 'Info for this artist is not available.';
}

?>

<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<?php

if($Feedback == ''){ //data exists, show it
	
	echo '<p>';
	//echo '<b>Name:</b> ' . $Name . '</br >';
	echo $Bio . '</br >';
	
	echo '</br ><img src="uploads/artist' . $id . '.jpg" />';
	echo '</p>';
}
else{ //warn user no data
	
	echo $Feedback;
}

echo '<p><a href="artists_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to MySQL
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php';?>