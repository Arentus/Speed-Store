<?php include_once("../includes/layouts/header.php") ?>
	<!--CARRUSEL-->
<section>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="../img/vivid.jpg" class="image" alt="First Slide">
        </div>
        <div class="item">
            <img src="../img/bands.jpg" class="image" alt="Second Slide">
        </div>
        <div class="item">
            <img src="../img/3.jpg" class="image" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
	</div>
</section>
	<!-- CATALOGO -->
	<section>
	<div class="catalog" id="catalog">
		<div class="container">
			<div class="row">
				
				<div class="col-md-4 col-lg-3">
					<div class="card" id="card">
						<img src="../img/naruto.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>Naruto Clan</h4>
							<p>Price: 17.45$
							</p>
							<button class="pewbtn pewbtn-blue">Buy</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="card">
						<img src="../img/pirate.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>Pirate Travesy</h4>
							<p>Price: 9.45$
							</p>
							<button class="pewbtn pewbtn-blue">Buy</button>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="card">
						<img src="../img/exhale.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>Exhale Unicorn</h4>
							<p>Price: 9.45$
							 ut</p>
							<button class="pewbtn pewbtn-blue">Buy</button>

						</div>
					</div>
				</div>


				<div class="col-md-4 col-lg-3">
					<div class="card">
						<img src="../img/alan.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>Alan Walker Brand</h4>
							<p>Price: 14.55$</p>
							<button class="pewbtn pewbtn-blue">Buy</button>
						</div>
					</div>
				</div>


				<div class="col-md-4 col-lg-3">
					<div class="card">
						<img src="../img/linch.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>Linch King Adventure Time</h4>
							<p>Price: 9.99$</p>
							<button class="pewbtn pewbtn-blue">Buy</button>
						</div>
					</div>
				</div>


				<div class="col-md-4 col-lg-3">
					<div class="card">
						<img src="../img/llamaste.jpg" alt="Street Urban" style="width: 100%;">
						<div class="content">
							<h4>LLama TShirt</h4>
							<p>Price: 12.55$</p>
							<button class="pewbtn pewbtn-blue">Buy</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
		
	</section>
	
	<script type="text/javascript">

		$(document).ready(function(){
		
			$("#myCarousel").carousel({
			     interval : false
			});

		});
	</script>
<?php include_once("../includes/layouts/footer.php") ?>

