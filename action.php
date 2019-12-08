<?php
// Initialize variables to null.
$FirstNameError ="";
$LastNameError ="";
$MiddleNameError ="";
$GenderError="";
$EmailError="";
$PhoneNumberError="";
$AadharNumberError="";
$StudentRegisterNumberError="";
$UserNameError="";
$PasswordError="";
$ConfirmPasswordError="";
$FirstName=$LastName=$MiddleName=$Gender=$Email=$PhoneNumber=$AadharNumber=$StudentRegisterNumber=$UserName=$Password=$ConfirmPassword="";
// On submitting form below function will execute.
if(isset($_POST['Sign Up']))
{
	if (empty($_POST["FirstName"])) 
	{
		$FirstNameError = "FirstName is required";
	}	 
	else 
	{
		$FirstName = test_input($_POST["FirstName"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$FirstName)) 
		{
			$FirstNameError = "Only letters and white space allowed";
		}
	}
	if(empty($_POST["LastName"]))
	{
		$LastNameError = "FirstName is required";
	} 
	else 
	{
		$LastName = test_input($_POST["LastName"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$LastName)) 
		{
			$LastNameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["Gender"])) 
	{
		$GenderError = "Gender is required";
	} 
	else 
	{
		$Gender = test_input($_POST["Gender"]);
	}


	if (empty($_POST["Email"])) 
	{
	$EmailError = "Email is required";
	} 
	else 
	{
		$Email = test_input($_POST["Email"]);
		// check if e-mail address syntax is valid or not
		if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$Email)) 
		{
			$emailError = "Invalid Email format";
		}	
	}
	if (empty($_POST["PhoneNumber"])) 
	{
		$PhoneNumberError = "PhoneNumber is required";
	}	 
	else 
	{
		$PhoneNumber = test_input($_POST["PhoneNumber"]);
		// check if  Phone Number syntax is valid or not
		if (!preg_match("/^[0-9]{10}+$/", $PhoneNumber) 
		{
			$PhoneNumberError = "Invalid PhoneNumber format";
		}
	}
	if (empty($_POST["AadharNumber"])) 
	{
		$AadharNumberError = "AadharNumber is required";
	} 
	else 
	{
		$AadharNumber = test_input($_POST["AadharNumber"]);
		// check if  Aadhar Number syntax is valid or not
		if (!preg_match(" ^([0-9]){12}$", $AadharNumber) 
		{	
			$AadharNumber = "Invalid Aadhar format";
		}
	}
	if (empty($_POST["UserName"])) 
	{
		$UserNameError = "UserName is required";
	} 	
	else 
	{
		$UserName = test_input($_POST["UserName"]);
		// check if UserName syntax is valid or not
		if (!preg_match("/^[a-zA-Z0-9]{5,}$/", $username) 
		{
			$UserNameError = "Invalid email format";
		}
	}	
	if(!empty($_POST["Password"]) && ($_POST["Password"] == $_POST["ConfirmPassword"])) 
	{
        $Password = test_input($_POST["Password"]);
        $ConfirmPassword = test_input($_POST["ConfirmPassword"]);
        if (strlen($_POST["Password"]) <= '8') 
        {
            $PasswordError = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$Password)) 
        {
            $PasswordError = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$Password)) 
        {
            $PasswordError = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$Password)) 
        {
            $PasswordError = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } 
        else 
        {
            $ConfirmPasswordError = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
}
//php code ends here
?>
