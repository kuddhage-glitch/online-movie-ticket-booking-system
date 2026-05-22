
<?php
session_start();
include 'config/db.php';

$user_id=$_SESSION['user_id'];

$sql="SELECT movies.title,bookings.seat_number,bookings.booking_date
FROM bookings
JOIN movies ON bookings.movie_id=movies.id
WHERE bookings.user_id='$user_id'";

$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Tickets</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2 class="title">My Bookings</h2>

<table>
<tr>
<th>Movie</th>
<th>Seat</th>
<th>Date</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['seat_number']; ?></td>
<td><?php echo $row['booking_date']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
