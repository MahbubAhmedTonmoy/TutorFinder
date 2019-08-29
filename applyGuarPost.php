<?php
    require 'config.php';
    session_start();
    if(!(isset($_SESSION['un'])) && !(isset($_SESSION['name']))){
        header("location:login.php");
    }
    $userId = $_SESSION['un'];
    if(isset($_GET["id"]) && isset($_GET["post"]))
    {
        $data = $_GET["id"];
        $post_id = $_GET["post"];
    }
        /*echo $data;
        echo "<br>";
        echo $post_id;
        echo "<br>";
        echo $userId;*/
    
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Apply Guardian Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="apply.css" rel="stylesheet">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />

    <style>
    body {
             font-family: "Lato", sans-serif;
    }
    .sidenav {
        width: 200px;
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
    
        margin-left: 200px; /* Same width as the sidebar + left position in px */
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
      <li><a href="editpostG.php">Edit Post</a></li>
      <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
    </ul>
  </div>
</nav>  

      

<div class="done">
        <div class="card-deck">
        <div class="card">
        <?php
             //$sql = "SELECT fullname, phone, nid, email, address FROM guardian_info where phone =$data";
             $sql = "SELECT a.fullname, a.phone, a.nid, a.email, a.address  FROM guardian_info a where  a.phone =$data ";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_array($resultset) ) {
		?>
            <div class="card-body">
            <div class="desc"><b>Guardian info </b><?php echo $record['fullname']; ?></div>    
            <div class="desc"><b>Phone: </b><?php echo $record['phone']; ?></div>
                    <div class="desc"><b>Email: </b><?php echo $record['email']; ?></div> 
                    <div class="desc"><b>Nid No: </b><?php echo $record['nid']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $record['address']; ?></div> 
                    
            </div>
        </div>
        <?php } ?>
        <div class="card">
        <?php
            $sql3 = "SELECT * FROM apply_g_post where post_id = $post_id  AND g_id = $data";
			$resultset3 = mysqli_query($conn, $sql3) or die("database error:". mysqli_error($conn));			
			$count = mysqli_num_rows($resultset3);
		?>
            
            <div class="card-body">
            <div class="desc">    Total request on this post:<p style="color:red; text-align:center;"><?php echo $count; ?></p></div>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted"></small></p>
            <br>
            <?php
            $sql5 = "SELECT * FROM apply_g_post where post_id = $post_id  AND tutor_id = $userId";
            $resultset5 = mysqli_query($conn, $sql5) or die("database error:". mysqli_error($conn));
            $eligible = mysqli_num_rows($resultset5);
            if($eligible == 0){
            echo "<a href=\"applyPost.php?userId=$userId&data=$data&post_id=$post_id\" class=\"btn btn-info\" role=\"button\">Confirm</a>";
            echo "<a href=\"applyPost.php?\" class=\"btn btn-info\" role=\"button\">Cancel</a>"; 
            }else {
                echo '<span style="color:red; text-align:center;">You have already Applied</span>';
            }
            ?>
            </div>
        </div>
        <div class="card">
        <?php
             //$sql = "SELECT fullname, phone, nid, email, address FROM guardian_info where phone =$data";
             $sql2 = "SELECT post_id, g_id, subjects, medium, salary, divisions, address, dateTime FROM g_post where post_id = $post_id  AND g_id = $data";
			$resultset2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));			
			while( $record2 = mysqli_fetch_array($resultset2) ) {
		?>
            <div class="card-body">
            <div class="desc"><p style="color:red; text-align:center;"><b>Tution Details: </b></p></div> 
            <div class="desc"><b>Guardian ID: </b><?php echo $record2['g_id']; ?></div> 
            <div class="desc"><b>Post Id: </b><?php echo $record2['post_id']; ?></div>
                    <div class="desc"><b>Subjects: </b><?php echo $record2['subjects']; ?></div> 
                    <div class="desc"><b>Medium: </b><?php echo $record2['medium']; ?></div> 
                    <div class="desc"><b>Salary: </b><?php echo $record2['salary']; ?></div> 
                    <div class="desc"><b>Division </b><?php echo $record2['divisions']; ?></div> 
                    <div class="desc"><b>Address </b><?php echo $record2['address']; ?></div> 
                    <div class="desc"><b>Posting Date&Time: </b><?php echo $record2['dateTime']; ?></div>
                    

            </div>
        </div>
        <?php } ?>
 </div>
</div>    


</body>

</body>        
</html>