<html>
<head>
<title>Password </title>
</head>
<body>

<table border=1 cellpadding=1  cellspacing=1>

<tr>
	<th>Username</th>
	<th>Email ID</th>
	<th>Password</th>
</tr>

<?php
	
	include 'phphead.php';
	
	
	
    $useremailid = $_GET['useremailid'];
  
     
    $min_length = 3;
    
     
    if(strlen($useremailid) >= $min_length){ 
         
        $useremailid = htmlspecialchars($useremailid);
        
         
         
        $raw_results = mysqli_query($con,"SELECT * FROM users
            WHERE (`useremailid` = '".$useremailid."')") or die("Some error occured...");
             
        
        if(mysqli_num_rows($raw_results) > 0){ 
             
            while($results = mysqli_fetch_array($raw_results)){
            
             
            echo"<tr>";
			echo"<td>".$results['username']."</td>";
			echo"<td>".$results['userpass']."</td>";
			echo"<td>".$results['useremailid']."</td>";
               
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
	

?>

</table>
</body>
</html>