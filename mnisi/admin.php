<?php
session_start();
if (!isset($_SESSION['user_id'])) {
header('Location: login.php');
exit();
}
include("../includes/db_conx.php");
//post count
$post_count = $db->query("SELECT * FROM posts");
//count comments:
$comment_count = $db->query("SELECT * FROM comments");

if (isset($_POST['submit'])) {
$newCategory = $_POST['newCategory'];
if (!empty($newCategory)) {
  #add it to database:
  $sql = "INSERT INTO categories (category) VALUES ('$newCategory')";
  $query = $db->query($sql);
  if ($query) {
	echo "new Catagory added";
  }else{
	echo "Error";
  }
}else{
  echo "Missing newCategory";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MacBase</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
		<link rel="icon" href="../images/logo/macbaselogo.png">     
		<style>
		html,body{
		padding: 0px;
		margin: 0px;
		font-family: 'Titillium Web', sans-serif;
		height: 100%;
		}
		/*navigation styling ::::*/
		.abs-center-x {
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
		}
		#buttonToggleNav{
		color: white;
		background: #ff5c5c;
		}
		nav#MainNavigation{
		background: white;
		margin-bottom: 50px;
		}
		nav#MainNavigation li a{
		color: black;
		}
		nav#MainNavigation li a.active {
		color: #ff5c5c;
		}
		.cool-link {
		display: inline-block;
		color: #000;
		text-decoration: none;
		}
		.cool-link::after {
		content: '';
		display: block;
		width: 0;
		height: 2px;
		background: #000;
		transition: width .6s;
		}
		.cool-link:hover::after {
		width: 100%;
		//transition: width .6s;
		}
		</style>
	</head>

<body>

		<?php include("adminnavigation.php") ?>

		<div class="container">
                
			<div class="row text-center">
				
				<div class="col-md-6">
					
					<div style="text-align: left;" id="addCategorybox" class="">
						<form method="post" action="admin.php">
							<p>Add new category:</p>
							<input style="width: 320px"; type="text" class="form-control" name="newCategory">
							<br>
							<button class="btn btn-primary" name="submit">Add</button>
						</form>
					</div>
				</div>

				<div class="col-md-6">
					<p>Total Blog Posts: <?php echo $post_count->num_rows ?></p>
					<p>Total Comments: <?php  echo $comment_count->num_rows ?></p>
					<p>Total Likes: </p>
				</div>

			</div>
			<hr>

			<div class="row">

				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						
						<div class="card-footer text-muted">
						   <p>No of Comments: </p>
							<a href="#" class="card-link">Delete Post</a>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</body>


	<?php include("../footer.php") ?>
</html>
