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
		
	//personal detail
	
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$sex = $_POST['sex'];
	$mstatus = $_POST['mstatus'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	$uname = "tuhi";
	$pass = "tuhi";
	
	$uidquery = "select user_id from registered_users where user_name ='".$uname."' and password ='".$pass."';";
	echo $uidquery ;
	$user_id = mysql_query($uidquery);
	$user_id = mysql_fetch_row($user_id);
	$user_id = $user_id[0];

	$pinfo = "insert into personal_info values (".$user_id.",'".$name."','".$fname."','".$mname."','".$sex."','".$mstatus."','".$mobile."','".$email."','".$address."')";
	echo $pinfo;
	mysql_query($pinfo);

	//employement detail
	
	$ccn = $_POST['ccn'];
	$cd = $_POST['cd'];
	$respon1 = $_POST['respon1'];

	$pcn = $_POST['pcn'];
	$pd = $_POST['pd'];
	$respon2 = $_POST['respon2'];

	$einfo = "insert into employment_detail values (".$user_id.",'".$cd."','".$ccn."','".$respon1."','".$pd."','".$pcn."','".$respon2."')";	
	mysql_query($einfo);

	//professional certification
	
	$cname = $_POST['cname'];
	$iname = $_POST['iname'];
	$cdate = $_POST['edd']."-".$_POST['emm']."-".$_POST['eyy'];
	
	$cinfo = "insert into professional_certification values (".$user_id.",'".$cname."','".$iname."','".$cdate."')";	
	mysql_query($cinfo);

	//other info
	
	$jtype = $_POST['jtype'];
	$csalary = $_POST['csalary'];
	$esalary = $_POST['esalary'];
	
	$cinfo = "insert into employee_other_info values (".$user_id.",'".$jtype."','".$csalary."','".$esalary."')";	
	mysql_query($cinfo);

	?>
  <div style="clear:both"> </div>
  <div id="footer"> <a href="http://www.free-css.com/">Homepage</a> | <a href="http://www.free-css.com/">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a><br/>
    This work is licensed under a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a> </div>
</div>
</body>
</html>
