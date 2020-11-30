@extends('layouts.main')
@section('title', 'caribengkel.id | Portal Bengkel Otomotif se-Indonesia!')
@section('content')

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>PORTAL BENGKEL OTOMOTIF<br>SE-INDONESIA!</h1>
					<p>Temukan bengkel terbaik untuk mobil dan motor kamu hanya di caribengkel.id</p>
					<!-- search bar -->
					<form action="">
						<div class="input-group md-form form-sm form-2 pl-0 pb-2" style="width:60%;margin:auto">
							<input class="form-control my-0 py-1 lime-border" style="background:white" type="text" placeholder="Search" aria-label="Search">
							<div class="input-group-append">
								<button type="submit" class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
					
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-bed"></i> Hotel</a></li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-grav"></i> Fitness</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-car"></i> Cars</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-cutlery"></i> Restaurants</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-coffee"></i> Cafe</a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container">
	
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section" style="padding-top:50px">
	<div class="container">
		<div class="section-title">
			<h2>Cari Bengkel</h2>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card category-otomotif zoom" style="background:#26abff">
					<img class="card-img-top" src="/fontawesome/svgs/solid/car.svg" alt="Card image cap" style="width:250px;height:250px;margin:auto">
					<div class="card-body">
						<h5 class="card-title" style="text-align:center;color:white">Mobil</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card category-otomotif zoom" style="background:#26abff">
					<img class="card-img-top" src="/fontawesome/svgs/solid/motorcycle.svg" alt="Card image cap" style="width:250px;height:250px;margin:auto">
					<div class="card-body">
						<h5 class="card-title" style="text-align:center;color:white">Motor</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Rekomendasi</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner pl-1 pr-1">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bengkel-terbesar-yamaha.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://vivaautorepairs.com.au/wp-content/uploads/2018/11/Car-workshop-near-me.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Full Study Table Combo</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Furnitures</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://moto-champ.net/wp-content/uploads/2018/10/800px_COLOURBOX4906548-750x430.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bengkel-terbesar-yamaha.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://vivaautorepairs.com.au/wp-content/uploads/2018/11/Car-workshop-near-me.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Full Study Table Combo</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Furnitures</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://moto-champ.net/wp-content/uploads/2018/10/800px_COLOURBOX4906548-750x430.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bengkel-terbesar-yamaha.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://vivaautorepairs.com.au/wp-content/uploads/2018/11/Car-workshop-near-me.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Full Study Table Combo</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Furnitures</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://moto-champ.net/wp-content/uploads/2018/10/800px_COLOURBOX4906548-750x430.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>26th December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class="section bg-light">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i> 
								<h4>Electronics</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Laptops <span>93</span></a></li>
								<li><a href="category.html">Iphone <span>233</span></a></li>
								<li><a href="category.html">Microsoft  <span>183</span></a></li>
								<li><a href="category.html">Monitors <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-apple icon-bg-2"></i> 
								<h4>Restaurants</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cafe <span>393</span></a></li>
								<li><a href="category.html">Fast food <span>23</span></a></li>
								<li><a href="category.html">Restaurants  <span>13</span></a></li>
								<li><a href="category.html">Food Track<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i> 
								<h4>Real Estate</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Farms <span>93</span></a></li>
								<li><a href="category.html">Gym <span>23</span></a></li>
								<li><a href="category.html">Hospitals  <span>83</span></a></li>
								<li><a href="category.html">Parolurs <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-4"></i> 
								<h4>Shoppings</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Mens Wears <span>53</span></a></li>
								<li><a href="category.html">Accessories <span>212</span></a></li>
								<li><a href="category.html">Kids Wears <span>133</span></a></li>
								<li><a href="category.html">It & Software <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-briefcase icon-bg-5"></i> 
								<h4>Jobs</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">It Jobs <span>93</span></a></li>
								<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
								<li><a href="category.html">Management  <span>183</span></a></li>
								<li><a href="category.html">Voluntary Works <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i> 
								<h4>Vehicles</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Bus <span>193</span></a></li>
								<li><a href="category.html">Cars <span>23</span></a></li>
								<li><a href="category.html">Motobike  <span>33</span></a></li>
								<li><a href="category.html">Rent a car <span>73</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-paw icon-bg-7"></i> 
								<h4>Pets</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cats <span>65</span></a></li>
								<li><a href="category.html">Dogs <span>23</span></a></li>
								<li><a href="category.html">Birds  <span>113</span></a></li>
								<li><a href="category.html">Others <span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-8"></i> 
								<h4>Services</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cleaning <span>93</span></a></li>
								<li><a href="category.html">Car Washing <span>233</span></a></li>
								<li><a href="category.html">Clothing  <span>183</span></a></li>
								<li><a href="category.html">Business <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>




<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="/main/images/logo-footer.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="/main/images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>
@endsection

  


