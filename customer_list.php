<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<?php

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or exit( mysqli_connect_error());

$sql = "SELECT * FROM test_Customers";

$result = mysqli_query($iConn, $sql);

if(mysqli_num_rows($result) > 0){ //show records

    while($row = mysqli_fetch_assoc($result)){

    echo '<p>';
    echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
    echo 'LastName: <b>' . $row['LastName'] . '</b> ';
    echo 'Email: <b>' . $row['Email'] . '</b> ';
	
	echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';
	
    echo '</p>';
    }
    
}
else{ //inform no records

    echo '<p><b>Currently no customer records.</p></b>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to MySQL
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php';?>