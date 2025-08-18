
<!---------------------
Whaaat?! Arcade
api key = AIzaSyAmywhg7D7c5i9XP-sZX4Dcoh4Rq75zKZI
---------------------->

<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat?! A Festival for Games and Experimental Interactions</title>
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
		
		
		<!-- CSS -->
		<style type="text/css">
			body {
				width: 90%;
				min-width: 950px;
				margin: 0 auto;
				text-align: center;
				background-color: #ff6f61;
				background-image: url("images/trianglesBG.png");
				background-repeat: repeat;
				font-size: 200%;
				font-family: 'Baloo Bhai', cursive;
				color: #fff;
			
			}
			h1 {
				padding-top: 50px;
				font-size: 300%;
			}
			
			h2 {
				line-height: 100%;
			}
			#interact {
				border: #fff thin solid;
				padding: 30px 30px 0px 30px;
				margin: 0px 50px 30px 20px;
				height: 200px;
				text-align: center;
				
			}
			#signUp {
				float: left;
				width: 49%;
				text-align: right;
			}
			#apply {
				float: right;
				width: 49%;
				text-align: left;
				padding-top: 30px;
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
				color:#666666;
				font-family:Arial;
				font-size:12px;
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

/*
			@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
				body { font-size: 200%;}
				#signUp { width: 90%; clear: both;}
				#apply { width: 90%; clear: both; border-left: none;}
			}
*/
		</style>		    	
	
	</head>
	<body>
		
		<header>
			<h1><img src="images/90scartoon.png" width="900" /></h1>
			<h2>October 5, 2019<br />Boulder, CO</h2>
		</header>
		
		
		<main>
			<div id="interact">
				<div id="signUp">
					<p>Sign Up for Updates</p> 
				</div>
				<div id="apply">
					<form id="emailSubmitForm" name="contact">  
						<input name="email" id="emailField" type="email" placeholder="Email Address" required>  
						<button type="submit" id="btn">SIGN UP</button>
					</form> 
				</div>
			</div>
		</main>
		
		<footer>
			<img src="images/universityPartners2019.png" width="800px" alt="sponsered by the ATLAS Institute, with the generous help of the Engineering Excellence Fund" />
		</footer>
		
		<script> 
				const scriptURL = 'https://script.google.com/macros/s/AKfycbztg5G5-p1esDmulww8Cta1OIO0M76_HPrORvba_zlAQw_h0jkQ/exec'  
				const form = document.forms['contact']  
				form.addEventListener('submit', e => {  
					e.preventDefault()  
					fetch(scriptURL, { method: 'POST', body: new FormData(form)})  
				    .then(response => console.log('Success!', response))
				    .catch(error => console.error('Error!', error.message))
				    document.getElementById("emailField").value = "Thanks! More info coming soon!"
				})  
		</script> 
	</body>
</html>