<?php
include('../connectdb.php');
  
if (isset($_POST['submit-btn'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM account WHERE username = '$username' AND pass = '$pass'";
    $result = $conn->query($sql);
        
    // If else for determining account type
    if ($result->num_rows>0){
        $row = $result->fetch_object();
        $_SESSION['username'] = $row->username;
        $_SESSION['type'] = $row->type;
        if($row->type == 0){
            header("Location: ../a/a.php");
        }
        else if($row->type == 1){
            header("Location: ../a/b.php");
        }
	} 
	else {
      	echo "<script>alert('Incorrect login details.');</script>";
	}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <!-- login form -->
        <form method="POST" action="login_form-handling.php">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="pass"><br>
            <input type="submit" name="submit-btn">
        </form>

    </body>
</html>