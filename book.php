<?php
$movie = $_GET['movie'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Seat Selection</title>

<style>

body{
font-family:Arial;
background:#0f172a;
color:white;
text-align:center;
}

.container{
margin-top:40px;
}

.seats{
display:grid;
grid-template-columns:repeat(8,40px);
gap:10px;
justify-content:center;
margin:30px 0;
}

.seat{
width:40px;
height:40px;
background:#334155;
border-radius:5px;
cursor:pointer;
}

.selected{
background:#22c55e;
}

input{
padding:10px;
margin:10px;
width:200px;
}

button{
padding:10px 20px;
background:red;
border:none;
color:white;
cursor:pointer;
border-radius:5px;
}

</style>

</head>

<body>

<h1>🎬 <?php echo $movie; ?></h1>
<h3>Select Your Seats</h3>

<div class="container">

<div class="seats">

<?php
for($i=1;$i<=24;$i++){
echo '<div class="seat"></div>';
}
?>

</div>

<form action="ticket.php" method="post">

<input type="hidden" name="movie" value="<?php echo $movie; ?>">
<input type="hidden" name="seats" id="seatCount">

<input type="text" name="name" placeholder="Enter Name" required><br>

<button type="submit">Generate Ticket</button>

</form>

</div>

<script>

let seats = document.querySelectorAll(".seat");

seats.forEach(seat => {
seat.addEventListener("click", () => {
seat.classList.toggle("selected");

let count = document.querySelectorAll(".selected").length;
document.getElementById("seatCount").value = count;
});
});

</script>

</body>
</html>
