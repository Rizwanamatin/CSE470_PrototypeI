<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SWANSONG</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
require_once('db_connection.php');
?>
<div id="container">
  <div id="banner"> <img src="img/swan_banner.jpg" alt="swan" title="swan" /> </div>
  <div id="bannerb">
    <p class="sitename">Your Company Name</p>
    <h1>About Us</h1>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li id="active"><a href="http://www.free-css.com/" id="current">Active link</a></li>
      <li><a href="http://www.free-css.com/">Item two</a></li>
      <li><a href="http://www.free-css.com/">Item three</a></li>
      <li><a href="http://www.free-css.com/">Item four</a></li>
      <li><a href="http://www.free-css.com/">Item five</a></li>
    </ul>
  </div>

	<?php
		$query = mysql_query("select name,sex from personal_info");
			
	?>

	<form name="login" action="shortlist_cv.php" method="post">

		<table align="left">
	
			<tr> 
			<td>Department<select name="department">
			<?php
			$query = mysql_query("select distinct department from job_detail;");
			while ($row = mysql_fetch_row($query)) 
				echo "<option value='".$row[0]."'>".$row[0]."</option>";
			?>
			</select>
			</td>
			<td>Category<select name="category">
			<?php
			$query = mysql_query("select distinct designation from job_detail;");
			while ($row = mysql_fetch_row($query)) 
				echo "<option value='".$row[0]."'>".$row[0]."</option>";
			?>
			</select>
			</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	
	</form>

  <div style="clear:both"> </div>
  <div id="footer"> <a href="http://www.free-css.com/">Homepage</a> | <a href="http://www.free-css.com/">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a><br/>
    This work is licensed under a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a> </div>
</div>
</body>
</html>
