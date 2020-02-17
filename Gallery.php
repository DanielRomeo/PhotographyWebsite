<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Insanity Photography</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="icon" href="images/logo/macbaselogo.png">	 
		
		<?php include("header.php") ?>
		<?php include("store.php") ?>
		<style type="text/css">
			<?php echo $headerstyle ?>
			html,body{
	margin: 0px;
	padding: 0px;
}
#menu-toggle{
	padding: 5px;
	background: black;
	color: white;
	margin-top: 15px;
	margin-left: 15px;
	width: 80px;
	border: none;
	position: absolute;
}
#menu-toggle:hover{
	background: #ffdb58; /* musturd yello*/
	color: white;
}
#SocialMediaHeader{
	margin-top: 15px
}
#SocialMediaHeader > div{
	padding: 15px;
}
#SocialMediaHeader > .container > .d-inline a{
	text-decoration: none;
	color: #ffdb58 ;
}
img{
	max-height: 450px;
	max-width: ;
}
#entireElse{
  max-width: 1000px;
  float: none;
  margin: auto; 
}
#portfolio {  
    margin: 1rem 0;
    -webkit-column-count: 3; 
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1rem;
    -moz-column-gap: 1rem;
    column-gap: 1rem;
    -webkit-column-width: 33.33333333333333%;
    -moz-column-width: 33.33333333333333%;
    column-width: 33.33333333333333%;
}
.tile { 
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;

}
.tile:hover { 

}

.scale-anm {
  transform: scale(1);
}



.tile img {
    max-width: 100%;
    width: 100%;
    height: auto;
    margin-bottom: 1rem;
}

.btn {
    background: white;
    margin: 5px;
    padding: 3px;
    color: black;
}

.btn:hover {
  text-decoration: none;
  background: #ffdb58; /* musturd yello*/
  color: white;
}

/*.btn:focus {
  outline: none;
  border-color: var(--darken-2);
  box-shadow: 0 0 0 3px var(--darken-3);
}

::-moz-focus-inner {
  border: 0;
  padding: 0;
}*/
#entirenavigation{
	width: 100%;
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/gall.css" />
	</head>

	<body>

		<div id="wrapper"> <!-- wrapped everything -->

			<div id="entirenavigation">
				<!-- Navigation-->
		        <?php echo $sidebarwrapper; ?>

		        <!-- nav button and header -->
		        <div id="">
		        	<!-- menu button -->
		        	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i style="margin-right: 6px;" class="fa fa-bars"></i>MENU</a>

		        	<!--  -->
			        <div id="SocialMediaHeader" class="text-right " style="float: right">
		        	<div class="container">

	            		<div class="d-inline">

	                		<a href="https://twitter.com/insanity_is_rar">
							    <span class="fa-stack fa-lg">
							        <i class="fa fa-circle fa-stack-2x"></i>
							        <i class="fab fa-twitter fa-stack-1x fa-inverse">  </i>
							    </span>
							</a>
						</div>

	            		<div class="d-inline">
	                		<a href="https://www.facebook.com/dibasmnisi/">
		                		<span class="fa-stack fa-lg">
		                    	<i class="fa fa-circle fa-stack-2x"></i>
		                    	<i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
		                  		</span>
	                		</a>
	              		</div>

			            <div class="d-inline">
			                <a href="https://www.instagram.com/insanity_is_rare_photography_">
			                  <span class="fa-stack fa-lg">
			                    <i class="fa fa-circle fa-stack-2x"></i>
			                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
			                  </span>
			                </a>
			            </div>
				    </div>
				</div>
	        </div>
	        </div> <br/>
		        </div>
		    </div>  

		    <br />

		    <div class="container-fluid text-center">
		    	<h1 class="display-4 ">GALLERY</h1>
		    </div>

		    <div id="entireElse" class="container">

		    	<style type="text/css">
		    		.btn{
		    			border: 1px solid black;
		    			padding: 4px;
		    			font-size: 17px;
		    			padding-left: 7px;
		    			padding-right: 7px;
		    			background: black;
		    			color: white;
		    		}
		    		.btn:hover{
		    			background: #ffdb58; 
		    		}
		    	</style>

		    	<div class="toolbar mb2 mt2">
		       	  <button id="allcategoriesbutton" class="btn fil-cat active" href="" data-rel="all">All</button>
				  <button id="" class="btn  fil-cat" href="" data-rel="graduations">graduations</button>
				  <!-- <button class="btn btn-outline-primary fil-cat" data-rel="fashion">Fashion</button> -->
				  <button class="btn  fil-cat" data-rel="product">product</button>
				  <button class="btn  fil-cat" data-rel="pregnancy">pregnancy</button>
				  <button class="btn  fil-cat" data-rel="babyshower">babyshower</button>
				  <button class="btn  fil-cat" data-rel="boutiquebrand">boutiquebrand</button>
				  <button class="btn  fil-cat" data-rel="newborn">newborn</button>
				  <button class="btn  fil-cat" data-rel="matricdance">matricdance</button>
				  <button class="btn  fil-cat" data-rel="engagementandbridal">engagmentandbridal</button>
				  <!-- <button class="btn  fil-cat" data-rel="portraitsandfun">portraitsandfun</button> -->
				</div> 
				 
				<div id="portfolio">

					<!-- graduations -->
			  		<?php echo $graduations; ?>

				  <!-- weddings -->
				  <?php echo $weddings; ?>

				  <!-- parties -->
				  <?php  echo $parties; ?>
				  
				  <!-- fashion -->
				  <!-- <?php  echo $fashion; ?> -->

				  <!-- events -->
				  <?php  echo $events; ?>

				  <!-- portraitsandfun -->
				  <!-- <?php  echo $portraitsandfun; ?> -->

				  <!-- product -->
				  <?php  echo $product; ?>

				  <!-- prefnancy -->
				  <?php  echo $pregnancy; ?>

				  <!-- boutiquebrand -->
				  <?php echo $boutiquebrand; ?>
				  
				  <!-- newborn -->
				  <?php  echo $newborn; ?>

				  <!-- engagementandbridal -->
				  <?php  echo $engagementandbridal; ?>

				  <!-- portraitsandfun -->
				  <?php  echo $portraitsandfun; ?>

				  <!-- matric Dance -->
				  <?php  echo $babyshower; ?>

				  <!-- portraitsandfun -->
				  <?php  echo $babyshower; ?>

				  <!-- matric dance -->
				  <?php echo $matricdance ?>
				</div>

				<div style="clear:both;"></div>
				<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
				<?php include("footer.php") ?>
			</div>  
	    </div> <!-- /#wrapper -->
	    
	    
	    <script type="text/javascript" src="js/all.js"></script>
	    <script type="text/javascript">
	    	$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});

	    	
	    </script>
	     
	    <script type="text/javascript" src="js/gallery.js"></script>
	</body>	
</html>