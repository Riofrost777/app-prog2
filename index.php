<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
      <?php
			if (isset($_GET['id']) && isset($_GET['send']))
			{
				$_SESSION['id'] = $_GET['id'];
				$send = $_GET['send'];
        include("$send.php");
			}
			else if(isset($_GET['send']))
      {
        $send = $_GET['send'];
        include("$send.php");
      }
      else include("login.php");

      ?>
	</body>
</html>
