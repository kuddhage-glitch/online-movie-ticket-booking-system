<?php
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

if($email != "" && $password != ""){
header("Location: index.php");
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#1e3a8a,#0f172a);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:white;
padding:40px;
border-radius:10px;
width:300px;
text-align:center;
}

h2{
margin-bottom:20px;
}

input{
width:100%;
padding:10px;
margin:10px 0;
border-radius:5px;
border:1px solid #ccc;
}

button{
width:100%;
padding:10px;
background:#ef4444;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
}

a{
display:block;
margin-top:10px;
text-decoration:none;
}

</style>

</head>

<body>

<div class="box">

<h2>Login</h2>

<form method="post">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

<a href="register.php">Create Account</a>

</form>

</div>

</body>
</html>
