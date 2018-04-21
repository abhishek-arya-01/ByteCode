<?php
 
	include 'phphead.php';
 
 ?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ByteCode | Search</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <form class="form-wrapper cf">
  	<input type="text" placeholder="Search here..." required>
	  <button type="submit">Search</button>
</form>

<div class="byline"><p>Enter your<a href=""> TOPIC </a> and get <a href=""> GET STARTED </a></p></div>



<?php
  $query = mysqli_query($con,"SELECT * from users");
  $num_rows = mysqli_num_rows($query);
  
  if($num_rows > 0)
	while($row = mysqli_fetch_assoc($query))
  
  echo "<div>
  <h3>".$row['username']."</h3>
  <p>".$row['userpass']."</p>
  <p>".$row['useremailid']."</p>
  <p>".$row['username']."</p>"

  ?>
  

</body>

</html>
