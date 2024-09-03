<!DOCTYPE html>
<html lang="en-US">

<head>
	<?= $this->include('layout/headmedigo') ?>
	<?= $this->include('layout/headklassy') ?>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			margin: 0;
			padding: 0;
			background: #f4f4f4;
		}

		/* Table Section */
		.table-section {
			padding: 40px 20px;
			background: #fff;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
		}

		/* Heading */
		h2 {
			font-size: 28px;
			margin-bottom: 20px;
			color: #333;
		}

		/* Table Wrapper */
		.table-wrapper {
			overflow: auto;
			/* Allows both horizontal and vertical scrolling */
			-webkit-overflow-scrolling: touch;
			/* Smooth scrolling on touch devices */
		}

		/* Table Styles */
		table {
			width: 100%;
			border-collapse: collapse;
			border-radius: 8px;
			overflow: hidden;
			background: #fff;
			font-size: 12px;
			text-align: center;
			/* Reduced font size */
		}

		.table-container {
			max-height: 400px;
			/* Atur tinggi maksimum kontainer tabel */
			overflow-y: auto;
			/* Tambahkan scroll vertikal jika konten melebihi tinggi */
			border: 1px solid #ddd;
			/* Tambahkan border di sekitar kontainer */
			border-radius: 8px;
			/* Rounded corners */
		}


		thead {
			background-color: #333;
			color: #fff;
		}

		thead th {
			padding: 12px;
			/* Adjusted padding for smaller font size */
			text-align: left;
			font-weight: 600;
			text-transform: uppercase;
		}

		tbody tr {
			transition: background 0.3s ease;
		}

		tbody tr:hover {
			background-color: #f0f0f0;
		}

		tbody td {
			padding: 10px;
			/* Adjusted padding for smaller font size */
			border-bottom: 1px solid #ddd;
		}

		/* Responsive Styles */
		@media (max-width: 768px) {
			table {
				border: 0;
			}

			thead {
				display: none;
			}

			tbody,
			tbody tr,
			tbody td {
				display: block;
				width: 100%;
				box-sizing: border-box;
				border-bottom: 1px solid #ddd;
			}

			tbody tr {
				margin-bottom: 15px;
				padding: 10px;
				background-color: #fff;
			}

			tbody td {
				display: flex;
				justify-content: space-between;
				padding: 10px;
				border-top: 1px solid #ddd;
			}

			tbody td::before {
				content: attr(data-label);
				font-weight: 600;
				margin-right: 10px;
			}
		}
	</style>
</head>

<body>
	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Portfolio</a>
				<ul>
					<li><a href="portfolio.html">Portfolio Grid</a></li>
					<li><a href="project-image.html">Project Image</a></li>
					<li><a href="project-slideshow.html">Project Slideshow</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a>
				<ul>
					<li><a href="blog.html">Blog Standard</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
					<li><a href="#">visit templatemo</a></li>
				</ul>
			</li>
			<li><a href="archives.html">Archives</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul> <!-- /.main_menu -->
	</div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.html">
							<img src="images/logominitok.jpeg" alt="Minitok" width="100" height="auto">
						</a>
					</div> <!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#">Portfolio</a>
									<ul>
										<li><a href="portfolio.html">Portfolio Grid</a></li>
										<li><a href="project-image.html">Project Image</a></li>
										<li><a href="project-slideshow.html">Project Slideshow</a></li>
									</ul>
								</li>
								<li><a href="#">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Standard</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
										<li><a href="#">visit templatemo</a></li>
									</ul>
								</li>
								<li><a href="archives.html">Archives</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
						<div class="responsive-navigation visible-sm visible-xs">
							<a href="#nogo" class="menu-toggle-btn">
								<i class="fa fa-bars"></i>
							</a>
						</div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<section id="" class="parallax first-widget" style="position: relative; overflow: hidden;">
		<video autoplay muted loop
			style="position: absolute; width: 100%; height: 100%; top: 50%; left: 50%; object-fit: cover; transform: translate(-50%, -50%); z-index: -1;">
			<source src="images/video.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div class="parallax-overlay">
			<div class="container home-intro-content">
				<div class="row">
					<div class="col-md-12">
						<h2>Aplikasi Monitoring Stock Minimum NTE Telkom</h2>
						<p>Solusi terbaik untuk memonitor kebutuhan NTE di Telkom Regional dengan efisien</p>
						<div class="layout-element" style="grid-row: 2 / 10; grid-column: 1/3;">
							<a class="grid-button">Mulai</a>
							<a class="grid-button">Cek</a>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="section" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="left-text-content">
						<br />
						<h1>Aplikasi Monitoring Stock Minimum NTE</h1>
						<p class="testimonial-description">Thank you for all your good work in creating theme.
							They have a 'presence' which feels right.</p>
					</div>
				</div>
				<br />
				<div class="col-lg-6 col-md-6 col-xs-12">
					<section>
						<!--for demo wrap-->
						<h1>Fixed Table header</h1>
						<br />
						<div class="tbl-header">
							<div class="table-container">
								<table class="table table-bordered" id="filterTable" width="100%">
									<thead>
										<tr class="text-center"
											style="color:black; background-color:gray; color:white;">
											<th rowspan="2" class="first-col sticky-col"
												style="min-width: 250px; text-align: center; vertical-align: middle;">
												Warehouse</th>
											<th rowspan="2" hidden>regional</th>
											<th rowspan="2" hidden>witel</th>
											<th rowspan="2" style="text-align: center; vertical-align: middle;"
												style="max-width:70px" hidden>Minimum Qty</th>
											<th colspan="2">Stock SCMT</th>
											<th colspan="2">GAP Stock</th>
											<th colspan="2">Kebutuhan</th>
											<th colspan="2">Minimum Stock Requirement Retail</th>
											<th colspan="2">On Delivery</th>
										</tr>
										<tr class="text-center" style="background-color:gray; color:white;">
											<!-- <th  colspan="4" ></th> -->
											<th style="text-align: center; vertical-align: middle;">Total
												Retail</th>
											<th style="text-align: center; vertical-align: middle;">Total
												Premium</th>

											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Retail</th>
											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Premium</th>

											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Retail</th>
											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Premium</th>

											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Retail</th>
											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Premium</th>

											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Retail</th>
											<th style="max-width:100px; text-align: center; vertical-align: middle;">
												Total Premium</th>
										</tr>
									</thead>
									<tbody id="tableBiasa-body">
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG1">WH
													TR TREG1</a>
											</td>
											<td hidden>WH TR TREG1</td>
											<td hidden>WH TR TREG1</td>
											<td hidden>8.380</td>

											<div class="text-center">
												<td>1.755</td>
												<td>2.684</td>

												<td class="blink-red ">
													<span>-2.865</span>
												</td>

												<td class="blink-yellow ">
													<span>-1.076</span>
												</td>

												<td>
													4.460 </td>
												<td>
													2.980 </td>

												<td>4.620</td>
												<td>3.760</td>

												<td><a onClick='setOnDelivery("WH TR TREG1","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG1","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">1.736</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG2">WH
													TR TREG2</a>
											</td>
											<td hidden>WH TR TREG2</td>
											<td hidden>WH TR TREG2</td>
											<td hidden>11.095</td>

											<div class="text-center">
												<td>635</td>
												<td>5.388</td>

												<td class="blink-red ">
													<span>-5.560</span>
												</td>

												<td class=" blink-green ">
													<span>488</span>
												</td>

												<td>
													6.920 </td>
												<td>
													2.820 </td>

												<td>6.195</td>
												<td>4.900</td>

												<td><a onClick='setOnDelivery("WH TR TREG2","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG2","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">1.514</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG3">WH
													TR TREG3</a>
											</td>
											<td hidden>WH TR TREG3</td>
											<td hidden>WH TR TREG3</td>
											<td hidden>7.035</td>

											<div class="text-center">
												<td>1.431</td>
												<td>1.893</td>

												<td class="blink-red ">
													<span>-2.569</span>
												</td>

												<td class="blink-yellow ">
													<span>-1.142</span>
												</td>

												<td>
													3.980 </td>
												<td>
													1.920 </td>

												<td>4.000</td>
												<td>3.035</td>

												<td><a onClick='setOnDelivery("WH TR TREG3","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG3","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">1.203</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG4">WH
													TR TREG4</a>
											</td>
											<td hidden>WH TR TREG4</td>
											<td hidden>WH TR TREG4</td>
											<td hidden>6.340</td>

											<div class="text-center">
												<td>2.335</td>
												<td>1.984</td>

												<td class="blink-yellow ">
													<span>-1.265</span>
												</td>

												<td class="blink-yellow ">
													<span>-756</span>
												</td>

												<td>
													3.360 </td>
												<td>
													1.900 </td>

												<td>3.600</td>
												<td>2.740</td>

												<td><a onClick='setOnDelivery("WH TR TREG4","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG4","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">920</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG5">WH
													TR TREG5</a>
											</td>
											<td hidden>WH TR TREG5</td>
											<td hidden>WH TR TREG5</td>
											<td hidden>12.520</td>

											<div class="text-center">
												<td>6.368</td>
												<td>5.376</td>

												<td class="blink-yellow ">
													<span>-1.037</span>
												</td>

												<td class=" blink-green ">
													<span>261</span>
												</td>

												<td>
													6.500 </td>
												<td>
													2.900 </td>

												<td>7.405</td>
												<td>5.115</td>

												<td><a onClick='setOnDelivery("WH TR TREG5","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG5","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">1.230</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG6">WH
													TR TREG6</a>
											</td>
											<td hidden>WH TR TREG6</td>
											<td hidden>WH TR TREG6</td>
											<td hidden>7.910</td>

											<div class="text-center">
												<td>8.831</td>
												<td>4.768</td>

												<td class=" bgc-green  ">
													4.186 </td>

												<td class=" blink-green ">
													<span>1.503</span>
												</td>

												<td>
													2.200 </td>
												<td>
													1.620 </td>

												<td>4.645</td>
												<td>3.265</td>

												<td><a onClick='setOnDelivery("WH TR TREG6","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG6","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">920</a>
												</td>
											</div>
										</tr>
										<tr>
											<td value="" class="first-col sticky-col"
												style="background-color:gray; color:white; font-weight: bold;">
												<a style="text-decoration:none; color: white; font-weight: bold; cursor: pointer;"
													href="https://minitok.scmt-telkom.com/rekap_delivery/Witel/WH TR TREG7">WH
													TR TREG7</a>
											</td>
											<td hidden>WH TR TREG7</td>
											<td hidden>WH TR TREG7</td>
											<td hidden>7.365</td>

											<div class="text-center">
												<td>5.064</td>
												<td>2.552</td>

												<td class=" blink-green ">
													<span>79</span>
												</td>

												<td class="bgc-yellow  ">
													-153 </td>

												<td>
													3.720 </td>
												<td>
													1.480 </td>

												<td>4.985</td>
												<td>2.705</td>

												<td><a onClick='setOnDelivery("WH TR TREG7","retail")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">0</a>
												</td>
												<td><a onClick='setOnDelivery("WH TR TREG7","premium")'
														data-toggle='modal' data-target='#onDeliveryModal'
														style="cursor: pointer; color:grey;">910</a>
												</td>
											</div>
										</tr>
										<tr style="font-weight: bold; background-color:gray; color:white;">
											<td value="" class="sticky-col first-col text-center"
												style="background-color:gray; color:white;">
												<div hidden>Z</div>Total
											</td>
											<td hidden></td>
											<td hidden></td>
											<td hidden>60.645</td>

											<div class="text-center">
												<td>26.419</td>
												<td>24.645</td>

												<td>-9.031</td>
												<td>-875</td>

												<td>31.140</td>
												<td>15.620</td>

												<td>35.450</td>
												<td>25.520</td>

												<td><a href="" style="color:white;">0 </a></td>
												<td><a href="" style="color:white;">8.433 </a></td>
											</div>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</section>


					<!-- follow me template -->
				</div>
			</div>
		</div>
	</section>

	<section class="cta clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.cta -->

	<section class="light-content services">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-umbrella fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Easy Theme Colors</h3>
							<p>There are 4 color themes (blue, green, red, orange) and this one is red.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-mobile-phone fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Change Icons</h3>
							<p>Check <a rel="nofollow" href="http://fontawesome.io/icons/"
									target="_blank">FontAwesome</a> for your suitable icons. Example: &lt;i
								class=&quot;fa fa-download&quot;&gt;&lt;/i&gt;</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-pencil-square-o fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Pixel Perfect Design</h3>
							<p>Based on a 12 column grid system, with every pixel snapped.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div>

			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-code fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Valid HTML5</h3>
							<p>We offer validated html files and well commented code on our themes.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-eye-slash fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Retina Ready</h3>
							<p>Incredibly clean design provides you powerful way to grow your business.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-suitcase fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Special Thanks</h3>
							<p>Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_blank">Unsplash</a>
								for images used in this template.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<section class="dark-content portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Our Lovely Portfolio</h2>
						<p class="section-desc">Everything you need to create a professional website.</p>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Dashboard Template</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Visual Admin</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project1.jpg" title="Visual Admin">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project1.jpg" alt="Visual Admin">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Mobile Ready</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Compass Template</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project2.jpg" title="Compass Template">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project2.jpg" alt="Compass Template">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Responsive Design</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Awesome Theme</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project3.jpg" title="Awesome Theme">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project3.jpg" alt="Awesome Theme">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Portfolio</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Volton Personal Site</a>
								</h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project4.jpg" title="Volton Personal Site">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project4.jpg" alt="Volton Personal Site">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Green</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Rectangle Design</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project5.jpg" title="Rectangle Design">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project5.jpg" alt="Rectangle Design">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Portfolio</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Masonry Gallery</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project6.jpg" title="Masonry Gallery">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project6.jpg" alt="Masonry Gallery">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Branding / Identity</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">Gloss Template</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project7.jpg" title="Gloss Template">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project7.jpg" alt="Gloss Template">
				</div>
			</div> <!-- /.item -->
		</div> <!-- /#owl-demo -->
	</section> <!-- /.portfolio-holder -->

	<section class="testimonials-widget">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bxslider">
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Andy Colin - Architect</span>
								<p class="testimonial-description">Thank you for all your good work in creating theme.
									They have a 'presence' which feels right.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Thomas Teddy - Design Writer</span>
								<p class="testimonial-description">I love the logo. Particularly how the mark can stand
									on its own. Nice work! It feels tall and proud and powerful — and I love that.
									That's what I was after.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">John Willy - Developer</span>
								<p class="testimonial-description">You're pretty awesome to work with. Incredibly
									organized, easy to communicate with, responsive with next iterations, and beautiful
									work.</p>
							</div>
						</div>
					</div> <!-- /.bxslider -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonials-widget -->

	<section class="light-content our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Meet our happy staff</h2>
						<p class="section-desc">Medigo is the automated way to keep track of what everyone is working
							on.</p>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		<div class="team-members">
			<div class="container">
				<div class="row">

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member1.jpg" alt="">
								<span class="member-role">Marketing Manager</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Amy Groovy</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member2.jpg" alt="">
								<span class="member-role">Web Developer</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Candy Sharp</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member3.jpg" alt="">
								<span class="member-role">Graphic Designer</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Linda Master</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.team-members -->
	</section> <!-- /.our-team -->

	<section id="blogPosts" class="parallax">
		<div class="parallax-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<h2 class="section-title">Recent from our blog</h2>
							<p class="section-desc">Everything you need to create a professional website.</p>
						</div> <!-- /.section-header -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row latest-posts">
					<div class="col-md-4 col-sm-6">
						<div class="blog-post clearfix">
							<div class="thumb-post">
								<a href="blog-single.html"><img src="images/includes/blogthumb1.jpg" alt=""
										class="img-circle"></a>
							</div>
							<div class="blog-post-content">
								<h4 class="post-title"><a href="blog-single.html">Getting Creative With the Google Maps
										API</a></h4>
								<span class="meta-post-date">12 February 2084</span>
							</div>
						</div> <!-- /.blog-post -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="blog-post clearfix">
							<div class="thumb-post">
								<a href="blog-single.html"><img src="images/includes/blogthumb2.jpg" alt=""
										class="img-circle"></a>
							</div>
							<div class="blog-post-content">
								<h4 class="post-title"><a href="blog-single.html">Design Deliverables – easily share
										project</a></h4>
								<span class="meta-post-date">10 February 2084</span>
							</div>
						</div> <!-- /.blog-post -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="blog-post clearfix">
							<div class="thumb-post">
								<a href="blog-single.html"><img src="images/includes/blogthumb3.jpg" alt=""
										class="img-circle"></a>
							</div>
							<div class="blog-post-content">
								<h4 class="post-title"><a href="blog-single.html">Using Templates to Get Your Clients
										Thinking</a></h4>
								<span class="meta-post-date">8 February 2084</span>
							</div>
						</div> <!-- /.blog-post -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog Posts</a></li>
							<li><a href="archives.html">Shortcodes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2084 Company Name
						| Design: templatemo</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>

</html>