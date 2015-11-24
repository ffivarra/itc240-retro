<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<?php

if(isset($_POST['submit'])){ //data submitted
 
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'fivarr01@seattlecentral.edu';
    $subject = 'Test from contact form.';
    $message = process_post();
    $replyTo = $_POST['email'];
    
    safeEmail($to, $subject, $message, $replyTo);
}
else{ //show form
    
    echo '
    
    <form method="post" action="' . THIS_PAGE . '";>
	<table border="1" style="border-collapse:collapse" align="center">
		<tr>
			<td align="right"><span class="required">*</span>Name:</td>
			<td><input type="text" name="Name" /></td>
		</tr>
		<tr><td align="right"><span class="required">*</span>Email:</td>
			<td><input type="text" name="Email" /></td>
		<tr><td align="right">What Services Are You Interested In?:</td>
			<td>
				<input type="checkbox" name="Interested_In[]" value="New Website" /> New Website <br />
				<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
				<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
			</td>
		</tr>
		<tr>
			<td align="right">Would You Like To Join Our Mailing List?</td>
			<td>
				<input type="radio" name="Join_Mailing_List?" value="Yes" /> Yes <br />
				<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
			</td>
		</tr>
		<tr><td align="right">Comments:</td>
			<td><textarea name="Comments" cols="40" rows="4" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" /></td>
		</tr>
    </table>
    </form>
    
    ';
}

?>

<?php include 'includes/footer.php';?>