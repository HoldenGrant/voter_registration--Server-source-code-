<?php
session_start();
if (session_destroy()){
}
?>

<html>
<body>
	<div style="margin: 0px auto; text-align: center;">
		<br>
		<p>Logging out.<p>
		<p>Redirecting in a few seconds. If it doesn't, <a href="../view/index.php">click here</a> to redirect again.<p>
	
    
    <?php 
    header("Refresh: 2;url=../view/index.php");?>
	</div>
</body>
</html>