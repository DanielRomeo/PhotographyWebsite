<?php
    session_start();
    if (isset($_POST['submit'])) {
	     include('../includes/db_conx.php');
	     $user = $_POST['username'];
	     $pwrd = $_POST['pwrd'];

	     if (empty($user) || empty($pwrd)) {
		      echo "Missing Information";
	     }else{
		      $user = strip_tags($user);
		      $user = $db->real_escape_string($user);
		      $pwrd = strip_tags($pwrd);
		      $pwrd = $db->real_escape_string($pwrd);
		      $pwrd = md5($pwrd);
		      $query = $db->query("SELECT user_id, username FROM user WHERE username='$user' AND password='$pwrd'");
		      if ($query->num_rows ===1) {
				while($row = $query->fetch_object())
					 {
					      $_SESSION['user_id'] = $row->user_id;
					 }
				header('Location: admin.php');
				exit();
		      }else{
				echo "Missing Information";
		      }
	     }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Romeo.Css</title>
    <link rel="icon" href="images/macbaselogo.png">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <!--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="devicon-master/devicon.min.css">
    <link rel="stylesheet" type="text/css" href="devicon-master/devicon-colors.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
  </head>

    <body>
    <div class="container">

    <form action="login.php" method="post">
	 <div class="row">
	     
	     <div class="col-md-4">
		  <label>Username</label>
		  <input class="form-control" type="text" name="username"></input><br/><br/>
	     </div>

	     <div class="col-md-4">
		  <label>Password</label>
		  <input class="form-control" type="password" name="pwrd"></input><br/><br/>
	     </div>
	 </div>        
	 
	 <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>
    </div>
    
    </body>

    <script type="text/javascript" src="../bootstrap/js/jquery.js" ></script>
        <script type="text/javascript" src="../bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</html>

