<?php 

if(isset($_POST['myid']) && isset($_POST['fid']))
{
	$myid=$_POST['myid'];
	$fid=$_POST['fid'];
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> CHAT</title>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="moment.min.js"></script>
	<script src="livestamp.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	
	<div class="chat" id="chat">

		<div class="stream" id="cstream">
			
		</div>
		
	</div>

	<div class="msg">
		<form method="post" id="msenger" action="">
			<textarea name="msg" id="msg-min"></textarea>
			<input type="hidden" name="mid" value="<?php echo $myid;?>">
			<input type="hidden" name="fid" value="<?php echo $fid;?>">
			<input type="submit" value="send" id="sb-mt">
		</form>
	</div>

	<div id="dataHelper"></div>
		
	</div>

</div>

<script type="text/javascript">
var myid= "<?php echo $myid; ?>";
var fid="<?php echo $fid; ?>";
// alert("this "+ myid+" "+fid);
</script>
<script type="text/javascript" src="my_script.js"></script>


</body>
</html>