<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat?! A Festival for Games and Experimental Interactions</title>
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
		
	<style>
	body {
		width: 90%;
		min-width: 950px;
		padding: 0 auto;
		margin: 0 auto;
		text-align: center;
		background-color: #ff6f61;
		background-image: url("http://www.whaaat.io/images/trianglesBG.png");
		background-repeat: repeat;
		font-size: 90%;
		font-family: 'Roboto', sans-serif;
		color: #fff;
	}
	h1 {
		padding-top: 50px;
		font-size: 3rem;
	}
	h2 {
		font-size: 3rem;
	}
	h3 {
		font-size: 2rem;
	}
	
	#details {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-gap: 40px;
/* 		padding-bottom: 40px; */
	}
	
	.apply {
/* 		border-left: #fff thin solid; */
		position: relative;
		top: 50px;
		left: 100px;
	}
	
	
	main {
		background-color: #fff;
		color: #333;
		padding-top: 0px;
		padding: 0px;
		width: 100vw;
		position: relative;
		margin-left: -50vw;
		margin-top: 100px;
		left: 50%;
	}
	
	nav {
		background-color: #6D2C61;
		font-size: 1.5rem;
		color: #fff;
		padding: 30px 0 30px 0;
		margin: 0;
		margin-bottom: 0px;
		text-transform: capitalize;
	}
	
	nav a {
		color: #fff;
		padding-right: 30px;
		padding-left: 30px;
		text-transform: uppercase;
		text-decoration: none;
	}
	
	#information {
		padding: 15px 30px 0px 30px;
		margin: 0px 50px 30px 20px;
	}
	
	#information h3 {
		background: #ba5da8;
		color: #fff;
		height: 100px;
		margin-left: -100px;
		margin-right: -100px;
		text-align: center;
		padding-top: 50px;
	}
	
	.scheduleHeader {
		/* background-image: url("images/scheduleBG.png") !important; */
		background-repeat: repeat-x;
	}
	
	#information h4 {
		font-size: 2rem;
	}
	
	#information p {
		text-align: left;
	}
	
	#information a {
		text-decoration: none;
		color: #ba5da8;
	}
	
	.speakerImage {
		float: left;
		padding: 0 20px 20px 0;
	}
	.speakerBio {
		text-align: left;
		font-size: 1rem;
		line-height: 1.5rem;
	}
	#infoSection {
		text-align: center;
		margin-bottom: 20px;
		padding-bottom: 50px;
		border-top: #fff thin solid;
	}
	#gameListLeft {
		float: left;
		font-size: 2rem;
		line-height: 2.5rem;
		margin-left: 75px;
		text-align: right;
		
	}
	#gameListRight {
		float: right;
		font-size: 2rem;
		line-height: 2.5rem;
		margin-right: 200px;
		text-align: left;
	}
	
	#interact {
		border: #fff thin solid;
		padding: 15px 30px 0px 30px;
		margin: 200px 50px 30px 20px;
		height: 200px;
		text-align: center;
		clear: both;
		
	}
		
	.schedule {
		display: grid;
		grid-template-columns: 25% 75%;	
		grid-remplate-rows: auto;
		grid-row-gap: 40px;

	}
	
	.schedule--time{
		font-weight: bold;
	}
	.schedule--location{
		color: #666;
	}
	
	.schedule--event {
		text-align: left;
		align-self: start;
	}
	
	.schedule--event--title {
		font-size: 1.75rem;
		padding-bottom: 10px;
		align-self: start;
	}
	
	.schedule--event--description {
		line-height: 1.5rem;
	}
	
	.gameListing {
		text-align: left;
	}
	
	.gameDescription {
		text-align: left;
		font-size: 1rem;
		line-height: 1.5rem;
	}
	
	
	#signUp {
		float: left;
		width: 49%;
		padding-bottom: 30px;
	}

	#emailField {
		padding: 12px 12px;
		min-width: 200px;
	}
	#btn {
		 -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
		background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
		background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
		background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
		background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
		background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
		background-color:#ffffff;
		border:1px solid #dcdcdc;
		display:inline-block;
		cursor:pointer;
		color:#ba5da8;
		font-family:Arial;
		font-size: 2rem;
		padding:12px 24px;
		text-decoration:none;
		text-shadow:0px 1px 0px #ffffff;
	}
	#btn:hover {
	  	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
		background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
		background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
		background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
		background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
		background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
		background-color:#f6f6f6;
	}
	#btn:active {
		position:relative;
		top:1px;
	}
	
	footer {
		text-align: center;
		padding: 100px 30px 10px 0;
	}
	</style>
	

		
	
	</head>
	<body>
		
		
		<header>
			<h1><img src="http://www.whaaat.io/images/90scartoon.png" width="900" /></h1>
			<h2>October 5, 2019<br />Boulder, CO</h2>
		</header>
		
		<main>
			
			
			<div id="information">
				
				<div id="infoSection">
				</div>
					
				
				
			</div>
		</main>
		
		<footer>
			<img src="http://www.whaaat.io/images/universityPartners2019.png" width="800px" alt="sponsered by CU Boulder and the ATLAS Institute" />
		</footer>
		 
	</body>
</html>