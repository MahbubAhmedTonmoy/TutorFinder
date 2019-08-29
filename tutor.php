<?php
    require 'config.php';
    session_start();
    if(!(isset($_SESSION['un'])) && !(isset($_SESSION['name']))){
        header("location:login.php");
    }
    
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tutor Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />
    <style>
    body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 350px;
    position: fixed;
    z-index: 1;
    top: 52px;
    left: 10px;
    
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.done {
   
    margin-left: 400px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
.btn-info {
    margin-left:20px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tutor Finder</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tutor.php">Tutor</a></li>
      <li><a href="searchTution.php">Search Tution Guardian</a></li>
      <li><a href="post.php">Create Post</a></li>
      <li><a href="tutorPanel.php">Tutor Panel</a></li>
      <li><a href="infoupdate.php">Account Settings</a></li>
      <li><a href="editpostT.php">Edit Post</a></li>
      <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
    </ul>
  </div>
</nav>     

<?php
    $user = $_SESSION['un'];

?>

<div class="done">
	<div class="row">
		<div class="col-sm-6">
			<?php
             //$sql = "SELECT fullname, phone, nid, email, address FROM guardian_info where phone =$data";
             $sql = "SELECT a.fullname, a.institutionname, a.phone, a.email, a.nid, a.address FROM tutor_info a where a.phone =$user";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_array($resultset) ) {
			?>
            <div class="card hovercard">
                <div class="cardheader">               
					<div class="avatar">
						<img alt="gone" src="gone.png">
					</div>
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <?php echo $record['fullname']; ?>
                    </div>
                    <div class="desc"><b>Institution Name: </b><?php echo $record['institutionname']; ?></div>
                    <div class="desc"><b>Phone: </b><?php echo $record['phone']; ?></div> 
                    <div class="desc"><b>Email: </b><?php echo $record['email']; ?></div> 
                    <div class="desc"><b>Nid No: </b><?php echo $record['nid']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $record['address']; ?></div> 
                    
                
                </div>
            </div>
			<?php } ?>
        </div>
	</div>	
</div> 

</body>
</html>