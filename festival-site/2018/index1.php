<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat?! A Game and Experimental Interaction Arcade</title>
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
		
	<style>
	body {
		width: 90%;
		min-width: 950px;
		padding: 0 auto;
		margin: 0 auto;
		text-align: center;
		background-color: #ba5da8;
		background-image: url("images/background2.png");
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
			<h1><img src="http://www.whaaat.io/images/whaaat_skate_Y.png" width="900" /></h1>
			<h3>a festival for games and experimental interactions</h3>
			<div id="details">
				<div class="date">
					<h2>September 29, 2018<br />Boulder, CO</h2>
				</div>
				<div class="apply">
					<a href="https://www.eventbrite.com/e/whaaat-tickets-48852715788" id="btn">Register</a>
				</div>
			</div>
			

		</header>
		<main>
			
			<nav>
				<a href="#scehdule">Schedule</a> | <a href="#speakers">Speakers</a> | <a href="#games">Featured Games</a>
			</nav>
			
			
			<div id="information">
				
				<div id="infoSection">
					<a name="schedule"></a>
					<h3 class="scheduleHeader">Schedule</h3>	
					<div class="schedule">
						
						<div class="schedule--info">
							<div class="schedule--time">9AM - 10PM</div>
							<div class="schedule--location">ATLAS Lobby</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Check-in and Coffee Hour</div>
							<div class="schedule--event--description">Come early to check-in and meet with the other attendees over coffee and a cereal buffet in the lobby of ATLAS where you can explore our featured experimental games</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">9AM - 4PM</div>
							<div class="schedule--location">ATLAS Lobby</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Whaaat!? Tabletop</div>
							<div class="schedule--event--description">All day long we'll have a rotating selection of tabletop and experimental games in the ATLAS lobby for you to explore. and play with your friends.</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">10AM - 11AM</div>
							<div class="schedule--location">ATLAS 100</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Morning Keynote with Mattie Brice</div>
							<div class="schedule--event--description"><em>Weirder Than Fiction: Play-Worlds & Radical Imagination</em>: As games evolve, game-makers and their methods of design change along with them. Not only do we advance in technology and hone techniques but discover alternative methods of creation that produce alien and confrontational work the field hasn't seen before. And with new, stranger games comes new and stranger forms of play as players evolve alongside the kinds of games they interact with. This talk follows work in adapting methods and influences from other fields, such as speculative design and performance art, to expand the form of games but also to involve players into kinds of play they haven't experienced before. In a world where consumer entertainment further encroaches on reality through monetizing our data and leisure time, game designers can fight back by creating weirder games that at least confront the dominant paradigms that bind us.</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">11AM - 3PM</div>
							<div class="schedule--location">ATLAS Black Box</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Whaaat!? Arcade</div>
							<div class="schedule--event--description">The ATLAS Black Box and Lobby will be home for the day to an amazing collection of indie and experimental games from all over the world. Find some hidden gems and new favorites. See the full list of these exciting exhibitions.</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">11AM - 3PM</div>
							<div class="schedule--location">ATLAS Black Box</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">MAL presents <em>That Kid in Your Neighborhood's Basement</em></div>
							<div class="schedule--event--description">The CU <a href="https://mediaarchaeologylab.com">Media Archeology Lab</a> has curated a special vintage videogame exhibition for Whaaat!? Featuring some of your favorite classics from years ago, this is a rare occasion to play some amazing classics!</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">11AM - 12PM</div>
							<div class="schedule--location">ATLAS 100</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Game Design/Development Local Industry Panel</div>
							<div class="schedule--event--description">Chris Lessard, Business Developer at <a href="https://www.boldergames.com">Bolder Games</a>; Zhenghua 'Z' Yang, Executive Producer at <a href="http://serenityforge.com">Serenity Forge</a> and Mathew Sisson, Owner and Chief Creative Officer at <a href="http://www.stellarfactory.com">Stellar Factory</a> sit down to talk about games and the local community.</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">11AM - 3PM</div>
							<div class="schedule--location">ATLAS Building (Various)</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Workshops</div>
							<div class="schedule--event--description">Throughout the day we'll host a series of hands-on workshops. More information and listings soon!</div>
						</div>
						
					
						
						<div class="schedule--info">
							<div class="schedule--time">12PM - 1PM</div>
							<div class="schedule--location">Boulder Area</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Lunch Break</div>
							<div class="schedule--event--description">Wander down to Pearl Street or over to the Hill with your new friends to socialize and eat some of Boulder's best!</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">1PM - 2PM</div>
							<div class="schedule--location">ATLAS 100</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Design Diary Live with Jason Tagmire</div>
							<div class="schedule--event--description"><em>Design Diary Live - Design inspiration comes from everything</em>: Every day Jason Tagmire works on a new game design based on a word of the day. He pulls up the dictionary, grumbles at how difficult the word of the day is, and then over the course of the day fills his design diary with pages of notes and drawings about a potential tabletop game. Sometimes it's something as simple as a turn order mechanic, but sometimes it’s inspiring enough to create a full game. In this session, he will present and discuss a word live, discuss some favorites as well as how restrictions breed creativity and finally bring in the audience to participate on a word of their choice.</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">1PM - 3PM</div>
							<div class="schedule--location">THING Lab</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Nintendo LABO Workshop</div>
							<div class="schedule--event--description">Join ATLAS Professor <a href="http://leithinger.com">Daniel Leithinger</a> for a 2 hour workshop using the Nintendo <a href="https://labo.nintendo.com">Labo</a>. Build cardboard contraptions to amaze and astonish your friends!</div>
						</div>
						
						<div class="schedule--info">
							<div class="schedule--time">3PM - 4PM</div>
							<div class="schedule--location">ATLAS 100</div>
						</div>
						<div class="schedule--event">
							<div class="schedule--event--title">Closing Keynote with Pippin Barr</div>
							<div class="schedule--event--description"><em>A Flurry of Odd Interactions: The Art of Videogame Experiments</em>: There is a rich history of experimentation in many forms of art that has led to striking, unusual and beautiful aesthetic experiences. Artists from Sol LeWitt to John Cage to Marina Abramovic all show us ways in which art can push boundaries, involve its audience, and consequently learn more about itself. In this talk, Pippin Barr will profile a collection of his own experimental videogame works in conversation with experimental approaches in other artistic media. The resulting flurry of odd interactions will help us to examine how videogames can use related experimental and artistic strategies to grow, mutate, and generally explore more of the available design space. You'll laugh, you'll cry, you'll videogames.</div>
						</div>
						
		
					</div>
				</div>
				
				
				
				<div id="infoSection">
					<a name="speakers"></a>
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
						<img class="speakerImage" src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Ftraceart.com.au%2Fassets%2Fimages%2F_med%2FPippin.png&f=1" width="400" />
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
					<a name="games"></a>
					<h3>Featured Games</h3>
					
						<div class="gameListing">
							<h4>Button Shy Collection - Jason Tagmire</h4>
							<div class="gameDescription">Since 2016, Jason Tagmire has been releasing a portable 'wallet' tabletop game each month through <a href="https://buttonshygames.com">Button Shy Games</a>. For Whaaat!? he's bringing the entire collection for attendees to play including <a hred="https://buttonshygames.com/products/sprawlopolis-pre-order">Sprawlopolis</a>, <a href="https://buttonshygames.com/products/circle-the-wagons">Circle the Wagons</a>, and <a href="https://buttonshygames.com/products/avignon-a-clash-of-popes">Avignon</a></div>
						</div>
						
						<div class="gameListing">
							<h4>Busy Work - Mouse & the Billionaire</h4>
							<div class="gameDescription"><a href="https://www.indiecade.com">IndieCade 2017</a> Media Choice award winner and <a href="https://2018.xoxofest.com/arcade">2018 XOXO Festival</a> arcade feature, <a href="http://www.mouseandthebillionaire.com/busyWork/">Busy Work</a> will run at Whaaat!? for (possibly?) the last. time. ever. This fast-paced multiplayer game makes a frantic and hilarious gameplay out of the monotonous aspects of office work. You and your colleagues (up to 4 players) compete to answer as many customer emails as possible before the morning meeting while constantly being interrupted with phone calls, pop-up calendar reminders, ‘urgent’ physical tasks, and more.</div>
						</div>
						
						<!--
						
						<div class="gameListing">
							<h4>Closer</h4>
							<div class="gameDescription">Lorem Ipsum</div>
						</div>
						
						-->
						
						<div class="gameListing">
							<h4>Enhance.Computer - Nicole He</h4>
							<div class="gameDescription"><a href="http://nicole.pizza">Nicole He's</a> cyberpunk voice game that pokes fun at the <a href="https://www.youtube.com/watch?v=Vxq9yj2pVWk">Let's Enhance</a> trope.</div>
						</div>
						
						<div class="gameListing">
							<h4>Geobio - Bearwarp</h4>
							<div class="gameDescription">geobio is an interactive multimedia installation from <a href="https://bearwarp.com">bearwarp</a> that utilizes salvaged consumer electronics to influence a digital landscape. Interactions with objects such as answering machines and alarm clocks transforms the created environment into a chaotic field of broken household items, accelerates the changing of the weather and produces a cacophonous soundscape.</div>
						</div>
						
						<div class="gameListing">
							<h4>One Hour, One Life - Jason Rohrer</h4>
							<div class="gameDescription"><a href="http://hcsoftware.sourceforge.net/jason-rohrer/">Jason Rohrer's</a> newest game, <a href="http://onehouronelife.com">One Hour One Life</a> is an experiment in creating real community in a gamespace. You can only last one hour at a time, but the tech tree in this game will take hundreds of generations to fully explore. Rely on those around you and instruct the next 'generation' to keep society progressing.</div>
						</div>
						
						<div class="gameListing">
							<h4>That Kid in Your Neighborhood's Basement - MAL</h4>
							<div class="gameDescription">The CU <a href="https://mediaarchaeologylab.com">Media Archeology Lab</a> has curated a special vintage videogame exhibition for Whaaat!? Featuring some of your favorite classics from years ago, this is a rare occasion to play some amazing classics!</div>
						</div>
											
						<div class="gameListing">
							<h4>Ravine - Stellar Factory</h4>
							<div class="gameDescription">Started as an ATLAS Game Design class project and part of an overwhelmingly successful Kickstarter campaign, <a href="https://www.playravine.com">Ravine</a> is a strategic and cooperative wilderness survival card game.</div>
						</div>
						
						<!--
						<div class="gameListing">
							<h4>Shadowfier - Blaine VanNice</h4>
							<div class="gameDescription">Lorem Ipsum</div>
						</div>
						
						<div class="gameListing">
							<h4>SOLA</h4>
							<div class="gameDescription">Lorem Ipsum</div>
						</div>
						-->
						
						<div class="gameListing">
							<h4>Sokpop Collection</h4>
							<div class="gameDescription">Dutch game design collective <a href="https://sokpop.co">Sokpop</a> has been releasing a game every two weeks to their faithful Patreon subscribers. Whaaat!? will feature a collection of our favorites, including <a href="https://sokpop.itch.io/zoo-packs">Zoo Packs</a>, their adorable take on online two-player strategy games.</div>
						</div>
						
						<div class="gameListing">
							<h4>...and many many more surprises to come!</h4>
						</div>
				</div>
					
				
				
			</div>
		</main>
		
		<footer>
			<img src="http://www.whaaat.io/images/universityPartners.png" width="800px" alt="sponsered by CU Boulder and the ATLAS Institute" />
		</footer>
		 
	</body>
</html>