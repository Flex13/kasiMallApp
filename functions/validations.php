<?php

class Redirect {
// Redirect to a new page
function redirect_to($new_location) {
    header("location:".$new_location);
    exit;

}
}


//Error Messages 
$errors   = array(); 
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

//Error Messages 
$success   = array(); 
function display_success() {
	global $success;

	if (count($success) > 0){
		echo '<div class="success">';
			foreach ($success as $succes){
				echo $succes .'<br>';
			}
		echo '</div>';
	}
}





//Check Email in Database if it Exists

function CheckEmail($c_email) {
    global $connect;

    $user_check_query = "SELECT * FROM customers WHERE customer_email='$c_email' LIMIT 1";
    $result = mysqli_query($connect, $user_check_query);
    $customer = mysqli_fetch_assoc($result);
  
    if ($customer) { // if user exists
      if ($customer['customer_email'] === $c_email) {
        return true;
      }
      else {
          return false;
      }

    }
}

//Check Username in Database if it Exists

function CheckUsername($c_username) {
    global $connect;

    $user_check_query = "SELECT * FROM customers WHERE customer_username='$c_username' LIMIT 1";
    $result = mysqli_query($connect, $user_check_query);
    $customer = mysqli_fetch_assoc($result);
  
    if ($customer) { // if user exists
      if ($customer['customer_username'] === $c_username) {
        return true;
      }
      else {
          return false;
      }

    }
}

function Username($c_username) {
    if (preg_match('/^[a-z\d_]{2,20}$/i', $c_username)) {
      return true;
    } else {
      return false;
    }
  } 

  // Check Name and Surname

  function Name($c_firstname) {
    if(preg_match("/^[a-zA-Z -]+$/", $c_firstname)) {
      return true;
    } else {
      return false;
    }
  }

  function Surname($c_surname ) {
    if(preg_match("/^[a-zA-Z -]+$/", $c_surname)) {
      return true;
    } else {
      return false;
    }
  }


function current_date() {
    $date = new DateTime();
    return $date->format('Y/m/d/H:i:s');
}

function valid_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    }
}

function test_input($data)
    {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
    }

    function checkPassword($c_pass ) {
        if(preg_match('%^[A-za-z0-9]{4,20}$%', $c_pass)) {
          return true;
        } else {
          return false;
        }
      }

      function checkAge($day,$month,$year ) {
        $min_age = 15; // Set the min age in years
            if( mktime(0, 0, 0, $month, $day, $year) < mktime(0, 0, 0, date('m'), date('j'), ( date('Y') - $min_age ) ) )
            {
                return true;
            }
            else
            {
                return false;
            }
      }

      // Error Messages 
function errorMessage() {

    if(isset($_SESSION["errorMessage"])) {
        $output = "<div class='alert  m-3 error text-center'>";
        $output .= htmlentities($_SESSION['errorMessage']);
        $output .= "</div>";
        $_SESSION["errorMessage"] = null;
        return $output;
    }
}

//Success Messages

function successMessage() {

    if(isset($_SESSION["successMessage"])) {
        $output = "<div class='alert m-3 success text-center'>";
        $output .= htmlentities($_SESSION['successMessage']);
        $output .= "</div>";
        $_SESSION["successMessage"] = null;
        return $output;
    }
}

//Check Email and Username in Database if it Exists

function CheckEmailUsername($customer_email_username) {
  global $connect;

  $user_check_query = "SELECT * FROM customers WHERE customer_email='$customer_email_username' OR customer_username='$customer_email_username' LIMIT 1";
  $result = mysqli_query($connect, $user_check_query);
  $customer = mysqli_fetch_assoc($result);

  if ($customer) { // if user exists
    if ($customer['customer_email'] === $customer_email_username) {
      return true;
    }
    else {
        return false;
    }

    if ($customer['customer_username'] === $customer_email_username) {
      return true;
    }
    else {
        return false;
    }
  }
}

//Check password in Database if it Exists

function passwordcheck($c_pass,$c_email_username) {
  global $connect;

  $password = md5($c_pass);

  $user_check_query = "SELECT * FROM customers WHERE customer_email='$c_email_username' OR customer_username='$c_email_username' and customer_password='$password' LIMIT 1";
  $result = mysqli_query($connect, $user_check_query);
  $customer = mysqli_fetch_assoc($result);

  if ($customer) { // if user exists
    if ($customer['customer_email'] === $c_email_username || $customer['customer_username'] === $c_email_username) {
      if ($customer['customer_password'] === $password) {
        return true;
      } else {
        return false;
      }
      
    }   
}

}


?>

