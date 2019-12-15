

<?php





//LOGIN BAR
echo "<nav id='statusBar'>";

echo "<ul>";

if(isset($_SESSION['userIn']) && $_SESSION['userIn'] != ''){

    echo "<li id='userLo'>Log Out</li>";
    echo "<li id='userLi'>User Logged In: " . $_SESSION['userIn'] . "</li>";

}   else{

    echo '<li><a href="registration.php?<?php echo SID;?>">Register</a></li>';

    echo '<li><a href="login.php?<?php echo SID;?>">Login</a></li>';

}


echo "</ul>";


echo "</nav>";

//START MAIN MENU
echo "<nav id='nav'> ";

$nav = array();

$nav['index.php?<?php echo SID;?>'] = 'Home';
$nav['public1.php?<?php echo SID;?>'] = 'Public 1';
$nav['public2.php?<?php echo SID;?>'] = 'Public 2';
$nav['members.php?<?php echo SID;?>'] = 'Members';


//CREATE UNORDERED LIST
echo '<ul>';

foreach ($nav as $key => $navValues) {
    echo "<li>";
    echo "<a href='$key'>$navValues</a>";
    echo "</li>";

}
echo '</ul>';

echo "</nav>";








if ( (empty($_POST['username'])) OR (empty($_POST['password'])) )
{
	//if the values are empty - 
	
	echo "<br /> Please fill in all the above inputs";

	}else{
		echo "<br> Process Validation";
		//if the inputs has values
	
		//store the data into local variables
	
		$Username = $_POST['username'];
		$Password = $_POST['password'];
	
		$Check=true;
		
		//Validate password - has to be more than 5 char
		if (strlen($Username) <5 )
		{
			echo "<br> Username or Password is incorrect";
			$Check=false;
		}
	
		//if first name has any special characters
		if (is_numeric($Username))
		{
			echo "<br> error - username has number...";
			$Check=false;
		}
	
		//if username is email format
	
		// Variable to check

		// Validate email
		if(filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
		}
		else{
			echo '<br>Invalid email format';
			$Check=false;
		}
	
		//all the password validations
	
		if (strlen($Password) <5 )
		{
			echo "<br> error - password has less than 5 characters";
			$Check=false;
		}
	
		//if all the validation are true then prepare
	
		//to store to online database
		if ($Check == true)
		{
		echo "<br> Checking.....";
}
	}
?>
