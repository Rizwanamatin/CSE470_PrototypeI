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
<form name="job_detail" action="job_submit.php" method="post">
<?php

	$job_id = $_POST['hidden_job_id'];
	//echo "from hidden".$job_id;
	
	$sql = mysql_query("select * from job_detail where job_id=".$job_id);

while ($row = mysql_fetch_row($sql))
{
?>
	
  <table border="1">
    <tr> 
      <td bgcolor="#CCCCFF"><strong><font color="#FF6633" size="4">Circular For</font></strong></td>
      <td><?php echo $row[4]?></td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>No Of Vacancy</strong></font></td>
      <td></td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>Department</strong></font></td>
      <td></td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>Responsibility</strong></font></td>
      <td> 
        <?php
				$data = $row[7];
				//echo $row[7];
				$final_data = explode("\n",$data);
				foreach($final_data as $key=>$value){ 
				
				echo $value."<br>";
				
				}
				?>
      </td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>Qualification</strong></font></td>
      <td>
	   <?php
				$data = $row[6];
				//echo $row[7];
				$final_data = explode("\n",$data);
				foreach($final_data as $key=>$value){ 
				
				echo $value."<br>";
				
				}
				?>
	  </td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>Job Location</strong></font></td>
      <td></td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCFF"><font color="#FF6633" size="4"><strong>Salary Range</strong></font></td>
      <td></td>
    </tr>

    <tr> 
      <td></td>
	  		
			<?php

				$uidquery = "select user_id from registered_users where user_name ='".$_POST['uname']."' and password ='".$_POST['pass']."';";
				$user_id = mysql_query($uidquery);
				$user_id = mysql_fetch_row($user_id);
				$user_id = $user_id[0];
			?>

	  <input type="hidden" name="hjob_id" value="<?php echo $_POST['hidden_job_id']; ?>">
	  <input type="hidden" name="huser_id" value="<?php echo $user_id; ?>">
	  
      <td><input type="submit" name="submit" value="Apply"></td>
    </tr>


  </table>
<?php
}
?>
</form>
  <div style="clear:both"> </div>
  <div id="footer"> <a href="http://www.free-css.com/">Homepage</a> | <a href="http://www.free-css.com/">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a><br/>
    This work is licensed under a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a> </div>
</div>
</body>
</html>
