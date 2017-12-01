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

  
	$mUserName 	= $_SESSION['username'];
  //$mUserName = 'staff';


	$result = $mysqli->query("SELECT name, Progress FROM markers WHERE name='$mUserName'");


	if (mysqli_num_rows($result) == 0)
	{
			$mProgress = 0;
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
        <nav class="navbar navbar-inverse navbar-fixed-center">
      <div class="container" style="float:right;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
            <a class="navbar-brand" href="http://localhost:8888/homepage.html"> HomePage</a>

          </form>
        </div>

        <form class="navbar-form navbar-right">
            <div class="form-group">
            <button name="submit" type="submit"class="btn btn-default"><a href="http://localhost:8888/solarCart/" >Your Cart</a></button>
        </form>


      </div>
        </nav>  

        <div class="row">

        <div class="container" style="float:right;">
                            <div class="progress" style="width:80%;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:$mProgress%">
                                $mProgress%
                                </div>
                             </div>
                          </div>
              <div class="col-md-4 solar">
                  <a href="detailsCW.html">
                    <img src="assets/images/solarInstallation.png" alt="" width="350" height="350"  />
                  </a>
              </div>

              

                    <div class="col-md-8">
                      <div class="details-description">
                        <h3>Solar Progress Bar</h3>
                              <p> The Project Status Bar allows customers to follow the status of their installation. 
                                  Whether it's just a small solar project, or a large scale industrial one, we will keep 
                                  you informed every step of the way. 
                               </p>
                               <p> If you do not have any projects or are expierencing problems please give us a call at 
                                    <a href="">864-888-8888</a>.
                                </p>
                        </div>
          </div>


   



           

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Static navbar -->
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="navbar-header pull-right">
  <div class="container" style="float:right;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href="#">SpartanSolr &copy; 2015, All Rights Reserved</a>
  </div>
  <div class="navbar-collapse collapse">
      
    </div>
  </div>
  </footer>
</body>
</html>
_END;
}
}

?>
