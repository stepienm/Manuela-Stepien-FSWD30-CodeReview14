<?php
	ob_start();
	session_start();
	require_once 'actions/connect.php';
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select logged-in users detail
	$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Vienna Events</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Mina" rel="stylesheet">
		<style>
		ul {
		    list-style-type: none;
		    overflow: hidden;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    font-size: 17px;
		    padding: 16px;
		    text-decoration: none;
		}
		li a button{
		    font-size: 22px;
    		padding: 2px;
		    text-decoration: none;
		}

		li a:hover {
		    background-color: white;

		}
		</style>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
  				<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Vienna Events</a>
				    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse navbar-right">
				      <ul class="nav navbar-nav ">
				      	<li><a class="nav-link" href="#">Hi <?php echo $userRow['userEmail']; ?></a></li>
				        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header><!-- /header -->


<!--  ***************    banner    ***************  -->
	
		<div class="banner"></div>

<!--  ***************    events    ***************  -->
	

		<div class="container sections">
			<div class="row">
				<ul>
					<li>
						<h1 > All Events</h1>
					</li>
					<li>
						<a href="create.php"><button>Add</button>
				      		</a>
					</li>
				</ul>
			</div>
			
			
			
		        <?php
		            $sql = "SELECT sImg,name,eTime,id FROM allE";
		            $result = $conn->query($sql);
		 
		            echo "<div class='row'>";    
		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "
		                        <div class='col-md-4'>
		                          <div class='thumbnail'>
		                              <img src='".$row['sImg']."' style='width:100%;height:250px;'>
		                              <div class='caption'>
		                                <h3>".$row['name']."</h3>
		                                <p>".$row['eTime']."</p>
		                              </div>
		                              <div>
                                        <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                        <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                                    </div>
		                            </a>
		                          </div>
		                        </div>
		";
		                }
		            }
		            echo "</div>";
		            ?>
		</div>

		<hr>


<!--  ***************    footer Section    ***************  -->
	
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="copyright_text_area">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
								<p>Made by <a href="https://www.linkedin.com/in/manuela-stepien-8a4b7115a/">Manuela Stepien </a>2018. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer text-right">
								
								<div class="footer_socail wow zoomIn" data-wow-duration="1.5s">
									<a href="https://github.com/stepienm">
										<img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" width="20px"></a>
									<a href="https://www.linkedin.com/in/manuela-stepien-8a4b7115a/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjaj6moTs6ULMk4wpq8GrTWkFfUYOM4abr0xeLIfkEKrqxMrrI" width="20px"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</body>
</html>

<?php ob_end_flush(); ?>