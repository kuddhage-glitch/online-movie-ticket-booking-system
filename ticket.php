<?php
$name = $_POST['name'];
$movie = $_POST['movie'];
$seats = $_POST['seats'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Ticket</title>

<style>

body{
font-family:Arial;
background:#0f172a;
color:white;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.ticket{
background:#1e293b;
padding:40px;
border-radius:12px;
width:350px;
text-align:center;
box-shadow:0 0 15px rgba(0,0,0,0.5);
}

.ticket h1{
color:#22c55e;
margin-bottom:20px;
}

.info{
margin:10px 0;
font-size:18px;
}

button{
margin-top:20px;
padding:10px 20px;
background:#ef4444;
border:none;
color:white;
border-radius:6px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="ticket">

<h1>🎟 Ticket Confirmed</h1>

<div class="info">Name: <?php echo $name; ?></div>
<div class="info">Movie: <?php echo $movie; ?></div>
<div class="info">Seats: <?php echo $seats; ?></div>

<p>Enjoy your movie 🍿</p>

<button onclick="window.print()">Print Ticket</button>

</div>

</body>
</html>