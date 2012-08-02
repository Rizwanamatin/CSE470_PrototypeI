<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SWANSONG</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<script type="text/javascript">
	function changeLink(uid,selection)
	{
		//alert (uid);
		
		
		document.getElementById('uid').value +=""+uid;
		document.getElementById('status').value +=""+selection;
		//document.getElementById('myAnchor').value =selection;
		//document.getElementsByName('myAnchor').value +="$";
		//document.getElementsByName('myAnchor').value =selection;
		
		//alert (document.getElementById('status').value);
	}
</script>

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
		//$query = mysql_query("select name,sex from personal_info");
		$qq="select distinct job_id from job_detail where department='".$_POST['department']."' and designation='".$_POST['category']."'";
		//echo $qq;
		$query = mysql_query($qq);
		
		$job_id = mysql_fetch_row($query);
		$job_id = $job_id[0];
		
		$query2 = mysql_query("select user_id from job_applied where job_id = ".$job_id);
	?>


	<form name="login" action="final_cv.php" method="post">

		<table align="left">
	
		<?php 
		
		$i=0;
		while($row = mysql_fetch_row($query2))
		{
			$q="select a.name,a.sex,b.emp1_company_name,b.emp1_designation from personal_info a,employment_detail b   where a.user_id=b.user_id and a.user_id=".$row[0];
			//echo $q;
			$out=mysql_query($q);
			while($r = mysql_fetch_row($out))
			{
				echo "<tr>";
				echo "<td><a href='' target='_blank'>".$r[0]."</a></td>";
				echo "<td>".$r[1]."</td>";
				echo "<td>".$r[2]."</td>";
				echo "<td>".$r[3]."</td>";
				echo "<td>Selected<input name='selection".$i."' type='radio' value='1' onclick='changeLink(".$row[0].",1)'/></td>";
				echo "<td>Short Listed<input name='selection".$i."' type='radio' value='2' onclick='changeLink(".$row[0].",2)'/></td>";
				echo "<td>Rejected<input name='selection".$i."' type='radio' value='3' onclick='changeLink(".$row[0].",3)'/></td>";
				
				echo "<input type='hidden' name='myAnchor1' value='3'>";
				//$qqq = "insert into job_application_status values (".$job_id.",".$row[0].",".$myAnchor.")";
				//echo $qqq;
				
			$i++;
			echo "</tr>";
			}
			
		}
				echo "<input type='hidden' id='uid' name='uid' value=''>";
				echo "<input type='hidden' id='status' name='status' value=''>";
				echo "<input type='hidden' id='jid' name='jid' value='".$job_id."'>";

		?>	
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
