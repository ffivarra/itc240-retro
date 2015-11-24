<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<?php

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or exit( mysqli_connect_error());

$sql = "SELECT * FROM Artists";

$result = mysqli_query($iConn, $sql);

if(mysqli_num_rows($result) > 0){ //show records

    while($row = mysqli_fetch_assoc($result)){

    echo '<p>';
    //echo 'Name: <b>' . $row['Name'] . '</b> ';
    //echo 'Bio: <b>' . $row['Bio'] . '</b> ';
	
	echo '<a href="artists_view.php?id=' . $row['ArtistID'] . '">' . $row['Name'] . '</a>';
	
    echo '</p>';
    }
    
}
else{ //inform no records

    echo '<p><b>Currently no artists.</p></b>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to MySQL
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php';?>