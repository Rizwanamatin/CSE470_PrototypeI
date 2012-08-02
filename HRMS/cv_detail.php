<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SWANSONG</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<script src="js/calendar.js" type="text/javascript">

</script>

<div id="container">
  <div id="banner"> <img src="img/logo.jpg" /> </div>
  <div id="bannerb">
    <p class="sitename">Your Company Name</p>
    <h1>About Us</h1>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li id="active"><a href="index.php" id="current">Home</a></li>
      <li><a href="login.php">Upload CV</a></li>
	  <li><a href="check_sorted_cv.php">View</a></li>
    </ul>
  </div>

	<form name="cv_post" action="cv_submit.php" method="post">
		<table align="left">
			<tr>
				
        <td><strong><font color="#330066" size="4">Personal Detail</font></strong></td>
        <td></td>
			</tr>

			<tr>
				<td>Name</td><td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>Fther's Name</td><td><input type="text" name="fname" value=""></td>
			</tr>
			<tr>
				<td>Mother's Name</td><td><input type="text" name="mname" value=""></td>
			</tr>
			<tr>
				<td>Sex</td>
				<td>
					<select name="sex">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Marital Status</td>
				<td>
					<select name="mstatus">
						<option value="Married">Married</option>
						<option value="Unmarried">Unmarried</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Mobile</td><td><input type="text" name="mobile" value=""></td>
			</tr>
			<tr>
				<td>Email</td><td><input type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>Address</td><td><input type="text" name="address" value=""></td>
			</tr>
			<tr>
				
        <td><strong><font color="#330066" size="4">Employment Detail</font></strong></td>
        <td></td>
			</tr>

<tr><td>
<table>
		<tr>
			<td>Company Name [Current]</td>
		</tr>		
		<tr>
			<td><input type="text" name="ccn" value=""></td>
		</tr>		

		<tr>
			<td>Designation [Current]</td>
		</tr>		
		<tr>
			<td><input type="text" name="cd" value=""></td>
		</tr>		

		<tr>
			<td>Responsibility [Current]</td>
		</tr>		
		<tr>
			<td><textarea name="respon1" cols="20" rows="10"></textarea></td>
		</tr>
</table>		
</td>

<td>
<table>
		<tr>
			<td>Company Name [Previous]</td>
		</tr>		
		<tr>
			<td><input type="text" name="pcn" value=""></td>
		</tr>		

		<tr>
			<td>Designation [Previous]</td>
		</tr>		
		<tr>
			<td><input type="text" name="pd" value=""></td>
		</tr>		

		<tr>
			<td>Responsibility [Previous]</td>
		</tr>		
		<tr>
			<td><textarea name="respon2" cols="20" rows="10"></textarea></td>
		</tr>		
</table>
</td></tr>
        <td><strong><font color="#330066" size="4">Professional Certification</font></strong></td>
        <td></td>
			</tr>
			
			<tr>
				<td>
					Certification Name
				</td>
				<td>
					<input name="cname" type="text" value="">
				</td>

			</tr>
			<tr>
				<td>
					Institute Name
				</td>
				<td>
					<input name="iname" type="text" value="">
				</td>

			</tr>
			<tr>
				<td>
					Exam Date
				</td>
				<td>
					Day <select name="edd">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						
					</select>
				</td>
				<td>
					Month <select name="emm">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						
					</select>
				</td>
				<td>
					Year <select name="eyy">
						<option value="2011">2011</option>
						<option value="2012">2012</option>
					</select>
				</td>

			</tr>
			
			<tr>
				
        <td><strong><font color="#330066" size="4">Other Info</font></strong></td>
        <td></td>
			</tr>
		<tr>
			<td>Job Type</td>
			<td><select name="jtype">
						<option value="Entry">Entry Level</option>
						<option value="Mid">Mid Level</option>
						<option value="High">High Level</option>
					</select></td>

		</tr>
		<tr>
			<td>Current Salary</td>
			<td><input type="text" name="csalary" value=""></td>
		</tr>
		<tr>
			<td>Expected Salary</td>
			<td><input type="text" name="esalary" value=""></td>
		</tr>
		<tr align="right"><td>
		<input type="submit" name="cvsubmit" value="Submit">
		</td></tr>
		</table>	
</form>

  <div style="clear:both"> </div>
  <div id="footer" align="center"> <a href="index.php">Homepage</a> | <a href="#">contact</a> </div>
</div>
</body>
</html>
