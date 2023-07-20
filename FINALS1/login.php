<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 20px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
form {
  text-align: center;
}

input[type=text], input[type=password] {
  width: 15%;
  padding: 12px 20px;
  margin: 9px;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;

}

a:hover, a:active {
  background-color: green;
  color: white;
}
</style>
<body>
<?php 
include 'dbc.php';
session_start();
if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($connect,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connect,$password);

    $query = "SELECT * FROM tbl_users WHERE username='$username' AND password='".md5($password)."'";

    $result = mysqli_query($connect,$query) or die(mysql_error());

    $oner = (mysqli_num_rows($result));

    if ($oner==1){
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
    else {
        echo "<script>alert('Username and Password is incorrect.');</script>"; 
            echo "<script>window.location.href = 'login.php'</script>";
    }

}
else{

    ?>

<center><h2>Log-In Form</h2></center>
<form method="post" action="">
<input type="text" name="username" placeholder="Username"/><br>
<input type="password" name="password" placeholder="Password"/><br>
<input type="submit" name="submit" value="Login"/><br>
<p>Not registered yet?  </p>
<a href="regis.php"</a> Register Here

</form>
    <?php 
}
    ?>
</body>
</html>