<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
      <?php echo $tagline ?>
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
  <body>
  <!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.instagram.com/rudiansyah21_/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://twitter.com/rudiansyah21_"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://github.com/rudiansyahap"><i class="fab fa-github"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php"><?php echo $sitename ?></a>
			<form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">Search
      </button>
	  </form>
		</div>
	</header>

		<!-- label -->
		<header>
	<div class="medsos">
	  <div class="container">
		<ul>
      <li>
        <a href="index.php">Home
        </a>
      </li>
      <li>
        <a href="popular.php">Popular Movies
        </a>
      </li>
      <li>
        <a href="now-playing.php">Now Playing Movies
        </a>
      </li>
      <li>
        <a href="upcoming.php">Upcoming Movies
        </a>
      </li>
      <li>
        <a href="tv-series.php">TV SERIES
        </a>
      </li>
		</ul>
		</div>
		</div>
		</header>
	
		<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
		</script>