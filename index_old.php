
<!---------------------
Whaaat?! Arcade
 
---------------------->

<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat?! A Game and Experimental Interaction Arcade</title>
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
		
		
		<!-- CSS -->
		<style type="text/css">
			body {
				width: 90%;
				min-width: 950px;
				margin: 0 auto;
				text-align: center;
				background-color: #ba5da8;
				background-image: url("images/background2.png");
				background-repeat: repeat;
				font-size: 200%;
				font-family: 'Roboto', sans-serif;
				color: #fff;
			}
			h1 {
				padding-top: 50px;
				font-size: 300%;
			}
			#information {
				padding: 15px 30px 0px 30px;
				margin: 0px 50px 30px 20px;
			}
			#information p {
				text-align: left;
				font-size: 50%;
				line-height: 200%;
			}
			.speakerImage {
				float: left;
				padding: 0 20px 20px 0;
			}
			
			.speakerImage p {
				font-size: 10%;
			}
			.speakerBio {
				text-align: left;
			}
			#infoSection {
				text-align: center;
				margin-bottom: 20px;
				padding-bottom: 50px;
				border-top: #fff thin solid;
			}
			#gameListLeft {
				float: left;
				line-height: 200%;
				margin-left: 75px;
				text-align: right;
				
			}
			#gameListRight {
				float: right;
				line-height: 200%;
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
			
			#signUp {
				float: left;
				width: 49%;
				padding-bottom: 30px;
			}
			#apply {
				float: right;
				width: 49%;
				border-left: #fff thin solid;
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
			<h1><img src="images/whaaat_skate_Y.png" width="900" /></h1>
			<h3>a festival for games and experimental interactions</h3>
			<h2>September 29, 2018<br />Boulder, CO</h2>
			

		</header>
		<main>
			
			<div id="information">
				<div id="infoSection">
					<h3>Speakers</h3>
					
					<div id="speakerProfile">
						<h4>Mattie Brice</h4>
						<img class="speakerImage" src="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fdsi.sva.edu%2Fwp-content%2Fuploads%2F2018%2F01%2Ffaculty_mattie-brice-1400x735.jpg&f=1" width="400" />
						<span class="speakerBio">
						<p>Mattie Brice is an artist and design researcher working with play and games to engage social issues and create new cultural practices. Her approach is interdisciplinary, mixing theoretical research with critical practice with a focus on grassroots activist change. She began her career as a media critic in games journalist publication like Kotaku and Paste speaking to the experiences of marginalized players and creators while introducing alternative narratives of design to contemporary industrial practices. Mattie participated in DIY movements that distributed tools and resources for marginalized people to be able to make games without programming knowledge or formal game design training and began making her own work, the first being Mainichi which toured exhibition spaces internationally. She also organized community events around diversity and games such as the Queerness and Games Conference that focused on bringing together marginalized voices into a community of practice and thought. Currently Mattie teaches design research at NYC universities such as NYU and The New School and is developing play experiences and methodologies for creating interventions for power abuse and discrimination in professional and intimate networks.</p>
						</span>
					</div>
					
					<div id="speakerProfile">
						<h4>Pippin Barr</h4>
						<img class="speakerImage" src="http://traceart.com.au/assets/images/_med/Pippin.png" width="400" />
						<span class="speakerBio">
						<p>Pippin Barr is a videogame maker, educator, and critic who lives and works in Montréal. He is the Associate Director of the Technoculture, Art, and Games (TAG) Lab, Canada's premier games research centre and part of the Milieux Institute for Art, Culture and Technology and is an Assistant Professor in the Department of Design and Computation Arts at Concordia University where he teaches courses in programming, videogame design and expressive uses of web technologies. Pippin is a prolific maker of videogames, producing work addressing everything from airplane safety instructions to contemporary art to the nature of videogames and videogame technologies. He has collaborated with diverse figures such as performance artist Marina Abramović, Twitter personality @seinfeld2000, and the International Federation for Human Rights. Pippin holds a Ph.D. in Computer Science from Victoria University of Wellington, New Zealand with a dissertation that examined the presence and mediation of values in videogames. Pippin is a well-known figure in the independent and artistic videogame scenes, maintains a process of radically transparent videogame design and development via his presence on GitHub, and his book, How to Play a Video Game, introduces the uninitiated and culturally curious to the world of video games. Pippin's website, www.pippinbarr.com, organises his diverse activities into a central location.</p>
						</span>
					</div>

				
					<div id="speakerProfile">
						<h4>Jason Tagmire</h4>
						<span class="speakerImage">
							<img src="http://www.njpen.com/wp-content/uploads/2015/08/Button-Shy-Games-feat.jpg" width="400" />
							<p>Photo Credit: Matt Skoufalos.</p>
						</span>
						<span class="speakerBio">
						<p>Jason Tagmire is a game designer from South Jersey and the founder of Button Shy Games. On the design side, Jason started out his adventure by winning The Game Crafter's Resource Game Design Contest with his family-friendly resource management game, Sandwich City. Shortly after, he reduced our 16th president to 16-bits in his card game, Pixel Lincoln. He's also the designer of the AEG card-throwing game, Maximum Throwdown, the Philly Geek Awards 2016 Game of The Year, Pretense, and Eagle Gryphon's Seven7s. Additionally, Jason founded Button Shy Games, a family publishing company that focuses on small games that can fit in your pocket. All games are hand assembled in the Tagmire household by Jason, Carolyn and the rest of their family, then shipped directly to the customers, allowing for a personal connection in every single game. Some of Button Shy's biggest success stories are Sprawlopolis, Circle The Wagons, and Avignon: A Clash of Popes, which together have sold over 12,500 copies without any retail presence.</p>
						</span>
					</div>
				</div>
				
			
				<div id="infoSection">
					<h3>Also Featuring:</h3>
					<div id="gameListLeft">
						Experimental Game Arcade<br />
						Whaaat!? Game Jam
						
					</div>
					<div id="gameListRight">
						Workshops<br />
						Panels
					</div>
<!--
					<div id="infoSection">
						Vintage Arcade Pop-Up, Presented by <a href="https://mediaarchaeologylab.com">MAL</a>
					</div>
-->
				</div>
					
				
				
			</div>
			<div id="interact">
				<div id="signUp">
					<p>Mailing List</p>
					 <form id="emailSubmitForm" name="contact">  
						<input name="email" id="emailField" type="email" placeholder="Email Address" required>  
						<button type="submit" id="btn">SIGN UP</button>
					</form>  
				</div>
				<div id="apply">
					<p>Register for the Festival</p>
					<a href="https://www.eventbrite.com/e/whaaat-tickets-48852715788" id="btn">Registration</a>
				</div>
			</div>
		</main>
		
		<footer>
			<img src="images/universityPartners.png" width="800px" alt="sponsered by CU Boulder and the ATLAS Institute" />
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