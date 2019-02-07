<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<script type="text/javascript">
			function check()
			{
				if((document.f1.t1.value=="")||(document.form1.t3.value=="")||(document.form1.t4.value=="")||(document.f2.t1.value=="")||(document.f2.t2.value=="")||(document.f2.t3.value=="")||(document.f2.t4.value==""))
				{
					alert("Please enter complete details")
					document.f1.t1.focus()
				}
			}
			function check1()
			{
				if(document.f1.t4.value=="")
				{
					alert("Please enter BookID")
					document.f1.t4.focus()
				}
			function check2()
			{
				if(document.f2.t2.value=="")
				{
					alert("Please enter PRN number.")
					document.f2.t2.focus()
				}
			}
		</script>
	</head>
	<body>
		<h2 align="center"> Borrow </h1>
		<h3 align="center"> Book Details </h3>
		<input type='text' name='bookid'>
			  <?php
 	$username = "root";
 	$passwd = "";
 	$dbname = "login";
 	$host = "localhost";	
 	$id=$_POST['bookid'];
	$dbconn = mysqli_connect($host, $username, $passwd, $dbname) ;
	if(isset($_POST['submit']))
	{
 	$sql1= "select * from book where bookid=$rows[id]";
 	$res1 = mysqli_query($dbconn,$sql1);
	
	echo "<table cellpadding='10px'>
   				<tr>
					<td>Book Name: </td>
					<td><input type='text' name='t1' value=$row['name']></td>
					<td>Author: </td>
					<td><input type='text' name='t2' value='$row['author']></td>
				</tr>
				<tr>
					<td>ISBN: </td>
					<td><input type='text' name='t3' value='$row['isbn']></td>
				</tr>
				<tr>
					<td>Borrow Date: </td>
					<td>
						<input type=textbox value='<?php echo date('d/m/Y'); ?>'>
					</td>
					<td>Return: </td>
					<td>
						<input type=textbox value='<?php echo date('d/m/Y', strtotime('+7 day', time())); ?>'>
					</td>
				</tr>
			</table>"; } ?> 

			<table cellpadding="5px" cellspacing="5px" align="center">
				
		<center>
		<input type="submit" class="button button2" value="Fetch" Name="submit" onclick="check1()">
		</center>




		<h3 align="center"> Student Details </h3>
		<center>
		<form name='f2'>
			<table cellpadding="5px" cellspacing="5px" align="center">
				<tr>
					<td> Name: </td>
					<td> <input type="text" name='t1'> </td>
					<td> PRN No.: </td>
					<td> <input type="text" name='t2'> </td>
				</tr>
				<tr>
					<td> Branch: </td>
					<td> <input type="text" name='t3'> </td>
					<td> Year: </td>
					<td> <input type="text" name='t4'> </td>
				</tr>
			</table>
				<input type="submit" class="button button2" value="Fetch" Name="Fetch2" onclick="check2()">
		</form>
		<input align="center" type="submit" class="button button2" value="Issue" Name="Issue" onclick="check()">
		</center>
	</body>
</html>
