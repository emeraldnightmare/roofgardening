<?php 
$paget = "Roof Top Garden";
include('header.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,700'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="index.css">
<section id ="banner">
    <nav class="navbar navbar-light bg-dark">
    <a class="btn " >HI <?php echo $_SESSION['username'] ?></a>
<form class="form-inline">
      <?php if(!$_SESSION["username"]!= 'GUEST'){  ?>
<a href="orders.php" class="btn btn-outline-success my-2 my-sm-0" >ORDER</a> 
<?php } ?>
  <a href="cart/cart.php" class="btn" style="background-color:rebeccapurple">            
              <?php $icon = 'cart';include('icons.php'); ?>
              </a>   
    <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" >Logout</a>
  </form>
</nav>
       <div class ="banner-text">
           <h2>THE ROOFTOP GARDEN</h2>
           <div class="banner-btn" style="padding-top:50px;">
               <a href="plants.php" class="btn btn-success btn-lg  ">PLANTS</a> 
               <a href="equip.php" class="btn btn-success btn-lg ">EQUIPMENTS</a>
           </div>
       </div>
    </section>
    <section>
	<div class="container">
		<div class="row flex-center sm-no-flex">
			<div class="pull-right sm-no-float col-md-8">
				<ul class="team-members">
					<!-- single member row starts -->
					<li class="clearfix">
						<div class="member-details">
							<div>
								<img src="hardik.png" alt="UI Designer">
								<div class="member-info">
									<h3>HARDIK PARMAR</h3>
									<p>BACK-END 
                    DEVELOPER
                  </p>
								</div>
							</div>
						</div>
						
						
						
					
					</li><!-- /single member row ends -->
					
					<!-- single member row starts -->
					<li class="clearfix">
						
						<div class="member-details">
							<div>
								<img src="ruchit.png" alt="UI Designer">
								<div class="member-info">
									<h3>RUCHIT AGARWAL</h3>
									<p>UI Designer</p>
								</div>
							</div>
						</div>
						
						<!-- /single member row ends -->

					<!-- single member row starts -->
					
					<li class="clearfix">

						<div class="member-details">
							<div>
								<img src="preet.png" alt="UI Designer">
								<div class="member-info">
									<h3>PREET WADHWANI</h3>
									<p>UI Designer</p>
								</div>
							</div>
						</div>
					</li><!-- /single member row ends -->

				</ul><!-- /end team-photos -->
			</div><!-- /end col-md-8 -->
			
			<div class="pull-left col-md-4 sm-text-center">
				<div class="team-overview">
					<h2>Who Are We?</h2>
					<h4>  Meet the Entire Team    </h4>
					<p><div>We are here to make you all aware about the importance of plants in our life.
						Thats why we have made this website for you. 

						Generally, home gardening refers to the cultivation of a small portion of land which may be around the household or 
						within walking distance from the family home [14]. Home gardens can be described as a mixed cropping system that encompasses vegetables, 
						fruits, plantation crops, spices, herbs, ornamental and medicinal plants as well as livestock that can serve as a supplementary 
						source of food and income.
					</div></p>
				</div>
			</div><!-- /end col-md-4 -->
		</div><!-- /end row -->
	</div><!-- /end container -->
</section>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://roofgarden.tk/">roofgarden</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <?php include('footer.php'); ?>
