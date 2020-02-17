<?php
    session_start();
    include('../includes/db_conx.php');
    if (!isset($_SESSION['user_id'])) {
        header('Location : login.php');
        exit();
    }

    if (isset($_POST['submit'])) {
        // get the blog data:
        $title = $_POST['title'];
        $body = $_POST['body'];
        $category = $_POST['category'];
        $title = $db->real_escape_string($title);
        $body = $db->real_escape_string($body);
        $user_id = $_SESSION['user_id'];
        $date = date('Y-m-d G:i;s');
        $body = htmlentities($body);
        if ($title && $body && $category ) {
            $query = $db->query("INSERT INTO posts (user_id, title, body, category_id, posted) VALUES ('$user_id', '$title', '$body', '$category', '$date')");
            if ($query) {
                echo "Post Added";
            }else{
                echo "error";
            }
        }else{
            echo "Missing data";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="icon" href="images/macbaselogo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../fontawesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="../devicon-master/devicon.min.css">
        <link rel="stylesheet" type="text/css" href="../devicon-master/devicon-colors.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
        <link rel="icon" href="../images/logo/macbaselogo.png">
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="../ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <head>

    <style>
      body{
        text-align: center;
      }
      .wrapper{
        margin:auto;
        width: 900px;
      }
      label{
        display: block;
      }
      .content{
        text-align: left;
        margin-top: 20px;
        padding: 8px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 20px;
      }
    </style>
  </head>

<body>

    <?php include("adminnavigation.php") ?>    

    <div class="wrapper">
        <div class="content">
            <form action="newpost.php" method="post">
                <label>Title</label>

                <input id="title" class="form-control" type="text" name="title" />

                <label for="">Body:</label>

                <textarea  class="form-control" name="body" id="body" cols=50 rows=30></textarea>

                <label>Category:</label>

                <select class="form-control" name="category">
                    <?php
                        $query = $db->query("SELECT * FROM categories");
                        while ($row = $query->fetch_object()) {
                            echo "<option value='".$row->category_id."'>".$row->category."</option>";
                        }
                    ?>
                </select>

                <br />
                <input class="btn btn-default" type="submit" name="submit" value="submit" />
            </form>
            <script type="text/javascript">
                CKEDITOR.replace('body');
            </script>
        </div>
    </div>


    </body>
        <script type="text/javascript" src="../bootstrap/js/jquery.js" ></script>
        <script type="text/javascript" src="../bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</html>
