<?php
if(isset($_POST['register'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "<script>alert('Account Created Successfully!'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#7c3aed,#0f172a);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:white;
padding:40px;
border-radius:10px;
width:320px;
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
background:#22c55e;
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

<h2>Create Account</h2>

<form method="post">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">Create Account</button>

<a href="login.php">Already have account? Login</a>

</form>

</div>

</body>
</html>
