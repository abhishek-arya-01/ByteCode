<?php
$connect = mysqli_connect("localhost", "root", "", "bytecode");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM res_dir 
	WHERE Category LIKE '%".$search."%'
	OR Name LIKE '%".$search."%' 
	OR Link LIKE '%".$search."%' 
	OR Des LIKE '%".$search."%'
	";
	
	
	
	//$counter = mysqli_query($connect,"SELECT COUNT(Sno) AS `count` FROM `res_dir`");
	//$rew = mysqli_fetch_assoc($counter);
	//$wer = $rew['count'];
	//echo'<center>Search out of<b>&nbsp;'.$wer.'&nbsp;</b>resource links.</center>';
	//echo'<br>';
	//echo'<br>';
}
else
{
	$query = "
	SELECT * FROM res_dir ORDER BY RAND()";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
	$rowcount=mysqli_num_rows($result);
	echo "Total&nbsp;<b>".$rowcount."&nbsp;</b>Resources.....";
	echo'<br>
	<br>';
	
  
	
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Link</th>
							<th>Rating</th>
							<th>Description</th>
							<th>Category/Tags</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '		
			<tr>
				<td><b>'.$row["Name"].'</b></td>
				<td><a href="'.$row["Link"].'">'.$row["Link"].'</a></td>
				<td>'.$row["Rating"].'</td>
				<td>'.$row["Des"].'</td>
				<td>'.$row["Category"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'No Data Found';
}
?>
<!-- ByteCode By Abhishek Arya -->
<!-- ByteCode By Abhishek Arya, Mon, 16 Apr 2018 01:10:12 GMT -->