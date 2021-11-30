<?php
 
    if(isset($_POST['submit'])){
        register();
    } 

function register(){
    include ("dbconn.php");
   

$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR firstname='" .  $_POST['firstname'] . "'";
       
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		
		if ($row['email'] == '' || $row['firstname'] == ''|| !is_array($row['email'] ?? false)) {
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email,  password, country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "',  '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);

			 $_SESSION['message'] = '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ' registered!</p>';

			 header( "refresh:0.5;url=index.php?menu=8" );
		}
		else {
		
			message(2, '<p>User ' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ' already exist!</p>');
		}
		

}

?>