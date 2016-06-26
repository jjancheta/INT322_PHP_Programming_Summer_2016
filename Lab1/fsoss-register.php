
<!doctype html>
<html>
  <head>
    <title>FSOSS Registration</title>
  </head>
  <body>
  <?php
  $firstNameErr ="";
  $lastNameErr ="";
  $organizationErr="";
  $emailErr="";
  $phoneErr="";
  $dataValid=true;
  // If submit with POST
  if ($_POST) { 
        // Test for nothing entered in field
	//if ($_POST['firstName'] == "") {
	if (empty($_POST['firstName'])) {  
		$firstNameErr = "*Firstname is required.";
		$dataValid = false;
	}
	//if ($_POST['lastName'] == "") {
	if (empty($_POST['lastName'])) {
		$lastNameErr = "*Lastname is required.";
		$dataValid = false;		
	}
	//if ($_POST['organization'] == "") {
	if (empty($_POST['organization'])) {  
		$organizationErr = "*Organization is required.";
		$dataValid = false;		
	}
	//if ($_POST['email'] == "") {
	if (empty($_POST['email'])) {  
		$emailErr= "*Email address is required.";
		$dataValid = false;		
	}
	//if ($_POST['phone'] == "") {
	if ($_POST['phone'] == "") {  
		$phoneErr = "*Phone number is required.";
		$dataValid = false;		
	}
  }

if ($_POST && $dataValid) {
      echo "<h3>";
	  foreach($_POST['title'] as $title){
		echo "Title: <mark>" . $title . "</mark><br>";
	  }
	  $firstName = $_POST['firstName'];
	  $lastName = $_POST['lastName'];
	  echo "Fullname: <mark>$firstName $lastName</mark><br>";
	  $organization = $_POST['organization'];
	  echo "Organization: <mark>$organization</mark><br>";
	  $email = $_POST['email'];
	  echo "Email: <mark>$email</mark><br>";
	  echo "Days Attending: ";
	  foreach($_POST['dayAttend'] as $dayAttend){
		echo "<mark>" . $dayAttend . "</mark> ";
	  }
	  $tShirt = $_POST['t-shirt'];
	  echo "<br>T-shirt Size: <mark>$tShirt</mark><br>";
	  echo "</h3>";
  }
else{
?>  
  <h1>FSOS Registration</h1>
  <form method="post" name ="fsoss" action= "fsoss-register.php">
	<table>
	<tr>
    	<td valign="top">Title:</td>
	<td>
		<table>
		  <tr>
			<td><input type="radio" name="title[]" value="Mr.">Mr</td>
		  </tr>
		  <tr>
			<td><input type="radio" name="title[]" value="Mrs.">Mrs</td>
		  </tr>
		  <tr>
		   <td><input type="radio" name="title[]" value="Ms.">Ms</td>
		  </tr>
		</table>
	</td>
	</tr>
	<tr>
      <td>First name:</td>
	  <td><input name="firstName" type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
	  <?php echo $firstNameErr;?></td>
	</tr>
	<tr>
      <td>Last name:</td>
	  <td><input name="lastName" type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>">
	  <?php echo $lastNameErr;?></td>
	</tr>
	<tr>
      <td>Organization:</td>
	  <td><input name="organization" type="text" value="<?php if (isset($_POST['organization'])) echo $_POST['organization']; ?>">
	  <?php echo $organizationErr;?></td>
	</tr>
	<tr>
      <td>Email address:</td>
	  <td><input name="email" type="text" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
	  <?php echo $emailErr;?></td>
	</tr>
	<tr>
      <td>Phone number:</td>
	  <td><input name="phone" type="text" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>">
	  <?php echo $phoneErr;?></td>
	</tr>
	<tr>
      <td>Days attending:</td>
	  <td>
		<input name="dayAttend[]" type="checkbox" value="Monday">Monday
		<input name="dayAttend[]" type="checkbox" value="Tuesday">Tuesday<td/>
	</tr>
	<tr>
	  <td>T-shirt size:</td>
	  <td>
	    <select name="t-shirt">
		  <option>--Please choose--</option>
		  <option value="S">Small</option>
		  <option value="M">Medium</option>
		  <option value="L">Large</option>
		  <option value="XL">X-Large</option>
		</select>
	  </td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	  <td></td>
	  <td><input name="submit" type="submit"></td>
	</tr>
	</table>
  </form>
<?php
  }
?>	  
 </body>
</html>