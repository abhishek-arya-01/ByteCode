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

<form class="form-wrapper cf" method="get">
  	<input type="text" name="query" placeholder="Search here..." required>
	<button type="submit">Search</button>
</form>

<div class="byline"><p>Enter your<a href=""> TOPIC </a> and get <a href=""> GET STARTED </a></p></div>



<?php
    $query = $_GET['query'];
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;
         
         
        $raw_results = mysqli_query($con,"SELECT * FROM users
            WHERE (`username` LIKE '%".$query."%')") or die("Some error occured...");
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['username']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
  

</body>

</html>







