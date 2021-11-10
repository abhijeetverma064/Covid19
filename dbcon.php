<?php 

$server='localhost';
$user='root';
$password='';
$db='ictiit';

$con=mysqli_connect($server,$user,$password,$db);
if($con){
	 ?>
	 <script>
	 	alert(" connection is established");
	 </script>
	 <?php
	}else{
		?>
		<script>
	 	alert("no connection");
	 </script>
	 <?php
	}

 ?>