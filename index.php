<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Ticket Booking</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#0f172a;
color:white;
}

/* Navbar */

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 60px;
background:#020617;
}

.logo{
font-size:24px;
font-weight:bold;
color:#f43f5e;
}

.nav-links a{
color:white;
text-decoration:none;
margin-left:20px;
}

.nav-links a:hover{
color:#f43f5e;
}

/* Movies */

.container{
padding:40px 80px;
}

.movies{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:30px;
}

.movie{
background:#1e293b;
padding:15px;
border-radius:10px;
transition:0.3s;
}

.movie:hover{
transform:scale(1.05);
}

.movie img{
width:100%;
height:320px;
object-fit:cover;
border-radius:8px;
}

button{
width:100%;
padding:10px;
border:none;
background:#ef4444;
color:white;
border-radius:5px;
cursor:pointer;
margin-top:10px;
}

button:hover{
background:#dc2626;
}

</style>
</head>

<body>

<div class="navbar">
<div class="logo">🎬 MovieBook</div>

<div class="nav-links">
<a href="#">Home</a>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
</div>
</div>

<div class="container">

<h2>Now Showing</h2>

<div class="movies">

<!-- Movie Cards -->

<div class="movie">
<img src="images/endgame.jpg">
<h3>Avengers Endgame</h3>
<a href="book.php?movie=Avengers Endgame">
<button>Book Ticket</button>
</a>
</div>

<div class="movie">
<img src="images/spiderman.jpg">
<h3>Spider Man</h3>
<a href="book.php?movie=Spider Man">
<button>Book Ticket</button>
</a>
</div>

<div class="movie">
<img src="images/batman.jpg">
<h3>Batman</h3>
<a href="book.php?movie=Batman">
<button>Book Ticket</button>
</a>
</div>

<div class="movie">
<img src="images/interstellar.jpg">
<h3>Interstellar</h3>
<a href="book.php?movie=Interstellar">
<button>Book Ticket</button>
</a>
</div>

<div class="movie">
<img src="images/joker.jpg">
<h3>Joker</h3>
<a href="book.php?movie=Joker">
<button>Book Ticket</button>
</a>
</div>

<div class="movie">
<img src="images/avatar.jpg">
<h3>Avatar</h3>
<a href="book.php?movie=Avatar">
<button>Book Ticket</button>
</a>
</div>

</div>
</div>

</body>
</html>