<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Insanity Aboutus</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/about.css" />
		<?php include("header.php") ?>
		<style type="text/css">
			<?php echo $headerstyle ?>
			#SocialMediaHeader > .container > .d-inline a{
			  text-decoration: none;
			  color: #ffdb58 ;
			}
			#SocialMediaHeader:hover{
				background: white;
			}
		</style>
	</head>

	<body>
		
		<div id="wrapper"> <!-- wrapped everything -->

			<!-- Navigation-->
	        <?php echo $sidebarwrapper; ?>

	        <!-- nav button and header -->
	        <div>
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


	        <!--  -->
	        <div id="header">
	        	<div class="text-center container">
	        		<h1 class="display-4">About Insanity</h1>	

	        		<h2 class="display-4" style="font-size: 29px;">Insanity Is Rare is a Photography company established in April 2015 founded by Basa Mnisi. The word Insanity simply means Abnormal and Different and Unique every way, which best describes us. We are all about capturing insanely beautiful and unique pictures that will terrify you.</h2>
	        		<h2 class="display-4" style="font-size: 29px;">Cliche is not part of our vocabulary. We've been shooting for more than 4 years now and we are not going to stop anytime soon.</h2>
	        	</div>	        	
	        </div> <hr />
	        <!-- end of header -->

	        <!-- start of new section -->
	        <div id="secondcontent" class="container text-center">

	        	<div class="row">
	        	
	        		<div class="text-center">
	        			<h1 class="display-4 text-center">One Woman Team</h1>
	        		</div>
	        		
	        	</div>
	        		
        		<div class="row">
        			
        			<div class="col-md-6">
        			<!-- __________________________________________________  -->
						<h1 class="display-4" style="font-size: 45px; font-weight: bold;">"</h1>  
							
						<h2 style="font-size: 29px;" class="display-4">	
						Hello I am Margeret Mnisi, I am based in Polokwane, Limpopo South Africa and I am Available for both local and International commissions. I am a freelance Photographer and I cover everything; Weddings, baby showers, parties, engagments, pregnancy, new born family, graduations, boutiques, fashion and products.<br/> In some Events such as weddings, depending on the package chosen, I work with one other experienced creative photographer. I love what I do and I am really passionate about capturing special moments<br/>
						</h2>

						<h1 class="display-4" style="font-size: 70px; font-weight: bold;">"</h1>
        			</div>
        			<!-- ___________________________________________  -->

        			<!-- ____________________________________________ -->
        			<div class="col-md-6">
        				<h1>Basa Mnisi</h1>

        				<div class="view zoom">
						    <img src="images/basa/1.jpg" style="max-height: 450px;" class=" img-fluid " alt="">
						    <div class="mask flex-center">
						        <!-- <p class="white-text">Zoom effect</p> -->
						    </div>
						</div>
        			</div>	
        			<!-- ____________________________________________________ -->

        		</div>


	        </div>
	        


	        <!-- footer -->
	        <?php include("footer.php") ?>
	    </div> <!-- /#wrapper -->
	  
	   
	    <script type="text/javascript" src="js/all.js"></script>
	    <script type="text/javascript">
	    	$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
	    </script>
	</body>	
</html>