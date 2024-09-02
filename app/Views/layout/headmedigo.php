
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			font-family: Arial, sans-serif;
		}

		.block-background {
			position: relative;
			width: 100%;
			height: 100vh;
			overflow: hidden;
		}

		.block-background video {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.block-background__overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.45);
		}

		.block-layout {
			display: grid;
			grid-template-rows: 1fr auto auto auto 1fr;
			grid-template-columns: 1fr 8fr 1fr;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			padding: 0 16px;
			box-sizing: border-box;
			z-index: 2;
		}

		.layout-element {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.text-box h1 {
			color: #ffffff;
			text-align: center;
		}

		.text-box p {
			color: #ffffff;
			text-align: center;
		}

		.grid-button {
			font-size: 16px;
			font-weight: 500;
			border-radius: 28px;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			margin: 10px;
			border: 1px solid #ffffff;
			color: #ffffff;
			transition: background-color 0.3s ease, color 0.3s ease;
		}

		.grid-button:hover {
			background-color: #ffffff;
			color: #000000;
		}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Medigo Red, free responsive template</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
	-->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/red-scheme.css">

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />