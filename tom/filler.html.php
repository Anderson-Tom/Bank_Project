
<?php 
include "../tom/verify_user.php";
$_SESSION['helptext'] = "'Help on Filler page '";
include 'head.php';
?>


<form name="" id="" method=""  action="" onsubmit=">             
    <h2>Filler <img src="../common/images/help-01.png" alt="Help" id="helpbtn" onmousedown="frameToggleHelp() " > </h2>          
</form>
</body>	
<?php

	if ( ISSET($_SESSION['returnMessage']) )
	{		
		echo "<SCRIPT>alert($_SESSION[returnMessage]);</SCRIPT>";
		unset($_SESSION['returnMessage']);
		
	}
		session_destroy();
		
?>	
</html>