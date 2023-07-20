<!DOCTYPE html>
 <html>
 <head>
     <title>Registration</title>
 </head>
 <body>

 <?php 
    include 'dbc.php';
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($connect,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($connect,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect,$password);
        $password = md5($password);

        $query = "INSERT INTO tbl_users(username, password, email) 
        VALUES('$username', '$password', '$email')";
        $result = mysqli_query($connect,$query);

        if ($result) {
            echo "<script>alert('You have successfully registered');</script>"; 
            echo "<script>window.location.href = 'login.php'</script>"; 
        }
    }
    else{
  ?>

 <h3>Registration Form</h3>
 <form method="post">
     <input type="text" name="username" placeholder="Username"/> <br/>
     <input type="email" name="email" placeholder="Email"/> <br/>
     <input type="password" name="password" placeholder="Password"/> <br/>
     <input type="submit" name="submit" value="Register"/>
     <input type="reset" name="reset" value="Clear"/>
 </form>

 <?php 
}
  ?>

 </body>
 </html>