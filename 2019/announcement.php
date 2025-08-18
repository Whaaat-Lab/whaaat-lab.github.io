
<!---------------------
Whaaat?! Arcade
---------------------->

<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat?! A Festival for Games and Experimental Interactions</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Mitr:400&display=swap" rel="stylesheet">
		
		
		
		<!-- CSS -->
		<style type="text/css">
			:root {
				--heroLeft: 30px;
				--heroRight: 0px;
				--heroRot: -4deg;
			}
						
			body {
				min-width: 950px;
				margin: 0 auto;
				text-align: center;
				background-color: #ff6f61;
				background-image: url("images/trianglesBG.png");
				background-repeat: repeat;
				font-size: 200%;
				font-family: 'Montserrat', sans-serif;
				color: #fff;
			}
			
			h1 {
				padding-top: 50px;
				font-size: 300%;
			}
			
			h2 {
				line-height: 100%;
			}
			
			/* Main Titles */
			h3 {
				padding-bottom: 50px;
			}
			
			.heroContainer {
				position: relative;
				top: 60px;
				left: -500px;
				height: 10px;
				width: 200%;
				transform: rotate(var(--heroRot));
				z-index: -1;
				background-image: linear-gradient(to right, #f8f266, #ffbd95);
				background-size: cover;
			}
			
			.heroBG {
				height: 0;
				position: relative;
				top: -25px;
				width: 400px;
				display: block;
				margin-left: auto;
				margin-right: auto;
				border-bottom: 75px solid #9d446e;
				border-left: var(--heroLeft) solid transparent;
				border-right: var(--heroRight) solid transparent;
				width: 600px !important;

			}

			
			.hero {
				position: relative;
				font-family: 'Baloo Bhai', cursive;
/* 				font-family: 'Mitr', sans-serif; */
				z-index: 4;
			}
			
			
			p {
				background-color: #ff6f61;
			}
			
			a {
				color: #fff;
				font-weight: bolder;
				text-decoration: none;
			}
			
			.strip {
				background: #fff;
				color: #9d446e;
			}
			
			#information {
				padding-bottom: 100px;
				margin: 0 auto;
				display: block;
			}
			
			#information p {
				text-align: left;
				font-size: 75%;
				line-height: 150%;
			}
			
			#speakerProfile {
				min-height: 300px;
				padding-bottom: 20px;
				padding-top: 50px;
			}
			
			.speakerImage {
				float: left;
				padding: 0 20px 20px 0;
			}
			
			.speakerName {
				font-size: 200%;
			}
			
			.speakerImage p {
				font-size: 10%;
			}
			.speakerBio {
				text-align: left;
				font-size: 80%;
			}
			
			#infoSection {
				margin: 0 auto;
				display: block;
				margin-bottom: 30px;
				clear: both;
				padding: 40px 0;
				
			}
			
			#infoSectionContent {
				clear: both;
				align-content: center;
				margin: 0 auto;
				padding: 0;
				max-width: 960px;

			}
			
			
			#intro .hero {
				margin-bottom: -50px;
			}
			
			#intro .heroBG {
				border-bottom: 75px solid #459e99;
				width: 400px !important;
				top: 100px;

			}
			
			
			#intro ul {
				padding: 30px 30px 50px 30px;
				list-style: none;
			}
			
			#intro li {
				font-size: 60% !important;
				text-align: left;
				padding-top: 15px;
				line-height: 150%;
				color: #9d446e;
				font-weight: 500;
			}
			
			#infoLeft {
				flex: 1;
				float: left;
				line-height: 200%;
				width: 45%;
				padding: 20px;
				margin-bottom: 50px;
			}
			
			#infoRight {
				flex: 1;
				float: right;
				line-height: 200%;
				width: 45%;
				padding: 10px;
				margin-bottom: 50px;
			}
			
			.boxed {
				position: relative !important;
				background: rgba(255, 186, 149, 0.8);
				z-index: -2 !important;

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
			
			#gameListCenter {
				clear: both;
			}
			
			#tickets {
				column-count: 3;
			}
			
			.ticketOption {
				padding: 10px;
				background-color: #459e99;
			}
			
			.ticketOption:hover {
				background-color: #347571;
			}
			
			.ticketDescription {
				font-size: 50%;
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

			@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
				body { font-size: 200%;}
				#signUp { width: 90%; clear: both;}
				#apply { width: 90%; clear: both; border-left: none;}
			}
		</style>		    	
	
	</head>
	<body>
		
		<header>
			<h1><img src="images/90scartoon.png" width="900" /></h1>
			<h2 class="hero">October 5, 2019<br />Boulder, CO</h2>
		</header>
		
		
		<main>
			<div id="information">
				
				
				<!-- About -->
				<div id="infoSection">
					<div id="infoSectionContent">
						
						<div class="heroContainer"><div class="heroBG"></div></div>
						<h3 class="hero">We’re…a little different</h3>
						<h6>Whaaat!? is a games festival. But probably not in the way you’re thinking.</h6>
						<div id="intro">
							<div class="heroBG"></div>
							<h4 class="hero">Whaaat!? Does NOT</h4>
							<ul class="boxed">
								<li>...have a demo of every game releasing in the next 3 years on display for you to line up and try out until somebody kicks you off.</li>
								<li>...have hundreds of studios and developers vying for your attention and money with jargon-saturated song & dance routines featuring the #NextBigThing.</li>
								<li>...have panels on driving revenue with <del>psychological warfare</del> microtransactions, or how to rewire humans brains to increase “player engagement.”</li>
								<li>...have Keanu Reeves in a graphic tee and blazer. (Although we wouldn't be opposed to that...?)</li>
							</ul>
							<div class="heroBG"></div>
							<h4 class="hero">Whaaat!? DOES</h4>
							<ul class="boxed">
								
								<li>...have games. Weird new games. Old dusty games. Games for outsiders. Overlooked gems. Games with bizarre controllers. Games that are in art museums. Games that will start an argument between you and your friends over what a game actually is.</li>
								<li>...have keynotes from brilliant people who explode the idea of games into a million tiny pieces and then reassemble those fragments into mind-blowing new things.</li>
								<li>...have workshops and panels featuring Professional Humans™ from the games industry (and beyond) who will teach you how to make better and more interesting games.</li>
								<li>...have an all-you-can-eat cereal bar. (Keanu Reeves, eat your heart out.)</li>
							</ul>
							<p>Whaaat!? <strong>does</strong> have a place for you, whether you’re an expert gamer, an aspiring developer, or you literally know nothing about games.</p>
						</div>
					</div>
				</div>
				
				<div id="infoSection" class="strip">
					<div id="infoSectionContent">
						<h2 class="hero">It might get weird, but it’ll be fun.</h2>
					</div>
				</div>
				
				
				<div id ="infoSection">
					<div id="infoSectionContent">
	
						<p>This year we're excited to feature two distinct tracks. <em>Arcade</em> and <em>Conference</em>.</p>
						
						<div id="infoLeft">
							<h4 class="hero">Whaaat!? Arcade</h4>
							<p>The Whaaat!? Tabletop and Digital Arcades will be free and open to all who want to come, mingle, and play games thanks to the generous support of the <a href="http://www.atlas.colorado.edu">ATLAS Institute</a> and CU Boulder's <a href="http://eef.colorado.edu">EEF</a></p>
						</div>
						
						<div id="infoRight">
							<h4 class="hero">Conference</h4>
							<p>The conference portion of the Festival is limited to 175 tickets and will feature talks, workshops, panels, and tons of fun surprises.</p>
						</div>
					</div>
				</div>
				
				<!-- Arcade -->
				<div id="infoSection">
					<div id="infoSectionContent">

						<div class="heroContainer"><div class="heroBG"></div></div>
						<h3 class="hero">Arcade</h3>
						<p>This year's specially curated selection of games will not disappoint. From vintage classic on the original hardware to installation games that can't be experienced anywhere else. You'll be talking about this for months. We'll provide a list as we get closer, but, keep in mind, we don't want to blow <em>all</em> the surprises. 🙈🙉🙊</p>
					</div>
				</div>
				
				<!-- Speakers -->
				<div id="infoSection">
					<div id="infoSectionContent">
	
						<div class="heroContainer"><div class="heroBG"></div></div>
						<h3 class="hero">Conference Speakers</h3>
						
						<div id="speakerProfile">
							
							<img class="speakerImage" src="https://i1.wp.com/www.colleenmacklin.com/wp-content/uploads/2019/04/Colleen_MIT_Cards.png" width="400" />
							<span class="speakerBio">
							<p><span class="speakerName hero">Colleen Macklin</span></p>
							<p>Whether she’s delighting people with her clever, intriguing games, or using games to take on the world’s most fiendish problems, there’s a lot of reasons we love Colleen Macklin. One of them is the Metagame, a must-have in any tabletop game library, and our top choice to play with any group of people (and required play on the first day of our Game Design class at CU.) Colleen is also a professor at Parsons School of Design, where she founded and co-directs the Prototyping Education & Technology Lab. PETLab develops games that help people engage with diverse topics like disaster preparedness, the US Budget deficit, climate change, women’s health, and urban activism. Colleen’s work has been shown with Come Out & Play, Creative Time and The Whitney Museum, and she’s co-authored two incredible books: Games, Design and Play and Iterate: Ten Lessons in Design and Failure. Her new literary word puzzle game Losswords (with the company Local No. 12) comes out later this year, and we can’t wait.</p>
							</span>
						</div>
						
						<div id="speakerProfile">
							<img class="speakerImage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Jason_Rohrer_-_Game_Developers_Conference_2011_-_Day_2_%281%29.jpg/800px-Jason_Rohrer_-_Game_Developers_Conference_2011_-_Day_2_%281%29.jpg" width="400" />
							<span class="speakerBio">
							<p><span class="speakerName hero">Jason Rohrer</span></p>
							<p>If we were to describe our idea of a great game, it would have interesting mechanics and visuals, be accessible to lots of people, be enjoyable to play and, most importantly, create an overall experience that leads us to a deeper understanding of life and the world we live in. We know, it's a lot to ask of of any game or any designer, but we know it’s possible. The reason we know is because Jason Rohrer does this again and again. Over the course of his career, Jason has made so many fascinating and important games that have reached beyond the boundaries of what we thought games could do. His game Passage is included in the permanent collection of the Museum of Modern Art. It's the kind of thing you experience for 5 minutes and then think about for years. In 2016, The Davis Museum at Wellesley College exhibited a large portion of his body of work. It was the first museum retrospective of a single video game designer. His current project One Hour One Life, featured at last year’s Whaaat!? Arcade, is an evolving game world that represents 4,000 years of human history. </p>
							</span>
						</div>
					</div>
				</div>
				
				<div id="infoSection">
					<div id="infoSectionContent">
	
						<div class="heroContainer"><div class="heroBG"></div></div>
						<h3 class="hero">Conference Features</h3>
						<p>This year's conference is going to be 🤯! You'll get to hear our amazing speakers above as well as:</p>
						<div id="gameListLeft" class="hero">
							Official Whaaat!? Cereal Bar<br />
							Game Jams
							
						</div>
						<div id="gameListRight" class="hero">
							Workshops<br />
							Panels
						</div>
						
						<div id="gameListCenter" class="hero">
							And More Surprises to Come!
						</div>
					</div>
				</div>
				
				<div id="infoSection">
					<div id="infoSectionContent">
	
						<div class="heroContainer"><div class="heroBG"></div></div>
						<h3 class="hero">Registration</h3>
						<p>Registration is open now for both Arcade and Full Conference passes. Arcade is free and open to all, and the Conference is limited to 175 seats. Register below for your chance to attend this year's Whaaat!? Festival.</p>
						<p>Student Scholarship applications will open soon.</p>
						<div id="tickets">
							<div class="ticketOption">
								<a href="https://www.eventbrite.com/e/whaaat-arcade-tickets-65282732410">
								<div class="ticketDescription">Arcade</div>
								<div class="ticketPrice hero">Free</div>
								</a>
							</div>
							
							<div class="ticketOption">
								<a href="https://www.eventbrite.com/e/whaaat-festival-tickets-65281816671">
								<div class="ticketDescription">Conference</div>
								<div class="ticketPrice hero">$40</div>
								</a>
							</div>
							
							<div class="ticketOption">
								<div class="ticketDescription">Student Scholarship</div>
								<div class="ticketPrice hero">Via Application</div>
							</div>
						</div>
					</div>			
				</div>
			
			
			<!-- End Information -->
			</div>
			
			
			
			<div id="interact">
				<div id="signUp">
					<h4 class="hero">Sign Up for Updates</h4> 
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
			// Random Shapes
			var heros = document.getElementsByClassName("heroContainer");
			
			
			
			for (var i=0; i < heros.length; i++){
				var left = Math.floor((Math.random() * 100) + 1);
				var right = Math.floor((Math.random() * 100) + 1);
				var rot = Math.floor((Math.random() * 8) - 4);
				
				heros[i].style.setProperty('--heroRot', rot + 'deg');	
				heros[i].style.setProperty('--heroLeft', left +'px');
				heros[i].style.setProperty('--heroRight', right +'px');

				
			}
						
			// Mail Signup
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