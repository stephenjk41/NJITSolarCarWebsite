<html>
<body>
<?php

function getdata($name){

		$temp = $_POST [$name];
		return $temp;
}
	if(isset($_GET['submit'])){
 
			$message = getdata("message");
			$user = "sap229@njit.edu";
			$name = getdata("name");
			$Email = getdata("email");
			$subj = 'Name: ' . $name . ' Email: ' . $Email;
			echo $user;
			echo $subj;
			echo $message;
      echo "HELLO";
			mail($user, $subj, $message);
	
		}
		
		?>
</body>		
</html>
		