<?php



class ProgressBar extends CI_Controller{
    public function index (){
        

// database settings
$db_username = 'root';
$db_password = 'root';
$db_name = 'solarCart';
$db_host = 'localhost';


//mysqli
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);


if (mysqli_connect_errno())
{
	header('HTTP/1.1 500 Error: Could not connect to db!');
	exit();
}

	$mUserName 		= '';

	$result = $mysqli->query("SELECT name, Progress FROM markers WHERE name='$mUserName'");


	if (mysqli_num_rows($result) == 0)
	{
			header('HTTP/1.1 500 You have no projects at this time!');
			exit();
	}
	else
	{
		if (!$result)
    		die($conn->error);
		else
		{
			$result->data_seek(1);
			$mProgress = $result->fetch_assoc()['Progress'];
		}
	}


echo <<<_END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <div class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                  <a href="" class="navbar-brand">SpartanSolr</a>

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="aboutus.html">About-us</a></li>
                        <li><a href="index.html">Manager</a></li>
                        <li><a href="">User/Tools</a></li>
                        <li><a href="">864-888-8888</a></li>
                    </ul>
                </div>

            </div>
    </div>

    <div class="container">
	   	<div class="progress">
	  		<div class="progress-bar" role="progressbar" aria-valuenow="70"
	  		aria-valuemin="0" aria-valuemax="100" style="width:$mProgress%">
	    	$mProgress%
	  		</div>
		</div>
	</div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
_END;
}
}

?>
