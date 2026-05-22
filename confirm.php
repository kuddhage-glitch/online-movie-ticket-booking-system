<?php

$name = $_POST['name'];
$movie = $_POST['movie'];
$seats = $_POST['seats'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Ticket Confirmed</title>

<style>

body{
font-family:Arial;
background:#1e293b;
color:white;
text-align:center;
margin-top:100px;
}

.ticket{
background:#334155;
padding:30px;
border-radius:10px;
display:inline-block;
}

</style>

</head>

<body>

<div class="ticket">

<h1>✅ Booking Confirmed</h1>

<p><b>Name:</b> <?php echo $name; ?></p>

<p><b>Movie:</b> <?php echo $movie; ?></p>

<p><b>Seats:</b> <?php echo $seats; ?></p>

<p>Enjoy Your Movie 🎬</p>

</div>

</body>
</html>