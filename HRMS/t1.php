<html>
<head>
<script type="text/javascript">
	function changeLink(uid)
	{
		//alert (uid);
		//document.getElementsByName('myAnchor').value =""+uid+selection+"$";
		document.getElementById('myAnchor').value =uid;
		//document.getElementsByName('myAnchor').value +="$";
		//document.getElementsByName('myAnchor').value =selection;
		
		alert (document.getElementById('myAnchor').value);
	}
</script>
</head>
<body>
<form name="f" action="h.php" method="post">
<?php
echo "<input name='n' type='radio' value='3' onclick='changeLink(6)'>";

echo "<input type='hidden'  id='myAnchor' name='myAnchor' value=''>";
?>
<input name="s" type="submit" value="s">
</form>
</body>
</html>