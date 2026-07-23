
<!---------------------
Whaaat!? Festival 2020
---------------------->

<!doctype html>
<html lang="en">
	<head>
		<title>Whaaat!? A Festival for Games and Experimental Interactions</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="https://use.typekit.net/qkk8zor.css">
		
		
		<!-- CSS -->
		<style type="text/css">
		

			*{
				padding: 0px;
				margin: 0px;
				box-sizing: border-box;
			}
			
			body {
				width: 95%;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
				background-color: #fff;
				font-size: 100%;
				line-height: 1.5em;
				font-family: acumin-pro, sans-serif;
				color: rgba(48, 48, 48, 1);
			}

			/* The Grid! */

			.grid {
				display: grid;
				grid-gap: 0px;
				grid-template-columns: repeat(6, 200px);
				grid-template-rows: repeat(8, 200px);
				grid-template-areas:
					"h1 h1 h1 h2 h2 h2"
                    "a1 a1 a2 a2 a3 a4"
                    "a1 a1 a2 a2 a5 a6"
                    "a1 a1 a7 a7 a8 a9"
                    "b1 b1 a7 a7 b2 b2"
                    "b3 b3 b4 b4 b5 b5"
                    "b3 b3 b6 b6 b5 b5"
                    "f1 f1 f2 f2 f3 f3";
				background-color: #fff;
				color: #444;
				text-align: left;

    		}

			h1 {
				background-color: #000;
				background-image: url("images/cataloglogo@2x.png");
				background-size: contain;
				grid-area: h1;
				margin: 0;
			}
			
			h2 {
				background-color: #000;
				padding-top: 15px;
				grid-area: h2;
				margin: 0;
				color: #fff;
				text-align: center;
				font-size: 250%;
				line-height: 1em;
			}
			
			.ad {
				background-size: contain;
				background-repeat: none;
				padding: 10px;
				border: black thin solid;
			}
			
			.paolo {
				background-image: url("images/paolo@2x.png");
				grid-area: a1;
				padding-top: 50%;
				padding-left: 20px;
				font-size: 100%;
				line-height: 1.2em;
			}
			
			.register {
				background-image: url("images/registernow@2x.png");
				grid-area: a2;
			}
			
			.register_text {
				grid-area: a2;
				z-index: 1;
				padding: 10px;
				padding-top: 50%;
				font-size: 100%;
				line-height: 1.3em;
			}
			
			.arcade {
				grid-area: a6;
				background-image: url("images/virtualarcade@2x.png");
				padding-top: 70%;
				font-size: 65%;
				line-height: 1.2em;
			}
			
			.basement {
				grid-area: b4;
				background-image: url("images/basement@2x.png");
				padding-top: 22%;
				font-size: 75%;
				line-height: 1.1em;
			}
			
			.bookClub {
				grid-area: a7;
/* 				background-image: url("images/bookclub_irr@2x.png"); */

			}
			
			.bc_image {
				float: left;
				clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 49%, 100% 54%, 65% 49%, 65% 49%, 65% 67%, 65% 67%, 25% 100%, 25% 100%, 0% 100%, 0% 100%); 
				shape-outside: polygon(0% 0%, 100% 0%, 100% 0%, 100% 49%, 100% 54%, 65% 49%, 65% 49%, 65% 67%, 65% 67%, 25% 100%, 25% 100%, 0% 100%, 0% 100%);
			}
			
			.bookClub_text {
				clear: top;
				padding-top: 18%;
				font-size: 98%;
				line-height: 1.2em;
				text-align: justify;
			}
			
			.cereal {
				background-image: url("images/cereal@2x.png");
				grid-area: a3;
				padding-top: 110px;
				font-size: 60%;
				line-height: 1.2em;
			}
			
			.creature {
				grid-area: a8;
				background-image: url("images/creature@2x.png");
				padding-top: 30%;
				padding-left: 55%;
				font-size: 65%;
				line-height: 1.2em;
			}
			
			.deliveries {
				grid-area: a9;
				background-image: url("images/deliveries@2x.png");
				font-size: 65%;
				line-height: 1.2em;
				padding-left: 55%;
			}
			
			.fannyPack {
				grid-area: b1;
				background-image: url("images/fannypack@2x.png");
			}
			
			.fannyPack_text {
				z-index: 1;
				padding: 10px;
				padding-left: 55%;
				float: right;
				font-size: 75%;
				line-height: 1.1em;
				width: inherit;
				height: inherit;
			}
			
			.gameClub {
				grid-area: a4;
				background-image: url("images/secretgame@2x.png");
				background-repeat: no-repeat;
				padding-top: 65%;
				font-size: 63%;
				line-height: 1.2em;
				background-color: #000;
				color: #fff;
			}
			
			.gameJams {
				grid-area: b2;
				background-image: url("images/gamejams@2x.png");
				padding-top: 15%;
				padding-right: 30%;
				font-size: 90%;
				line-height: 1.1em;
			}
			
						
			.hams {
				grid-area: b6;
				background-image: url("images/hams@2x.png");
				padding-top: 140px;
				font-size: 65%;
				line-height: 1.2em;
			}
			
			.orderForm {
				grid-area: b5;
				background-image: url("images/orderform@2x.png");
				padding-top: 140px;
				font-size: 65%;
				line-height: 1.2em;
			}
			
			.sharp {
				grid-area: b3;
				background-image: url("images/johnsharp@2x.png");
				padding-top: 60%;
				padding-left: 40%;
				font-size: 100%;
				line-height: 1.2em;
			}
			
			.sms {
				grid-area: a5;
				background-image: url("images/sms@2x.png");
				padding-top: 45%;
				font-size: 75%;
				line-height: 1.2em;
			}			
			
			/* typography */
			
			.wideItalic {
				font-family: acumin-pro-wide, sans-serif;
				font-weight: 900;
				font-style: italic;
			}
			
			.condensedItalic {
				font-family: acumin-pro-condensed, sans-serif;
				font-weight: 400;
				font-style: italic;
			}
			
			.headline {
				text-transform: uppercase;
			}
			
			.caps {
				text-transform: uppercase;
			}
			
			.disclaimer {
				font-size: x-small;
			}
			
			.red {
				color: #ed1c24
			}
			
			/* Links */
			
			a {
				color: red;
				text-decoration: none;
			}
			
			.adButton {
				cursor: hand;
				text-decoration: none;
				display: inline-block;
				width: 100%;
				color: inherit;
			}
			
			.adButton:hover {
				background-color: rgba(211, 40, 40, 0.1);
			}
			
			/* Footer */
			
			.eef {
				grid-area: f1;
				background-image: url("images/eef.png");
				border: none !important;
			}
			
			.atlas {
				grid-area: f2;
				background-image: url("images/atlas.png");
				border: none !important;
			}
			
			.engineering {
				grid-area: f3;
				background-image: url("images/engineering.png");
				border: none !important;
			}

		</style>		    	
	
	</head>
	
	<body>
		<div class="grid">
			<h1></h1>
			<h2>
				<span class="condensedItalic headline">receive months of</span><br />
				<span class="wideItalic headline">festival novelties</span><br />
				<span class="headline">in the comfort of your home!!!</span>
			</h2>
			<div class="paolo ad">
				<strong class="headline">September 23, 2020</strong>
				<p>Our first guest for the month of <br /> September will be the <br /> one-and-only Paolo <br /> Pedercini from <br /><a href="https://molleindustria.org/">Molleindustria</a>. Paolo will <br />lead us in an experi-<br />mental gameplay session <br />to cleanse our palates, <br />broaden our horizons, and <br />challenge our understanding<br />of what games can do!</p>
				<p>Since 2003 <a href="https://molleindustria.org/">Molleindustria</a> <br /> has produced artisanal <br /> remedies to the idiocy of <br /> mainstream entertainment <br /> in the form of free, short-form, online games. Their products range from satirical business simulations to meditations on labor and alienation, from playable theories to politically incorrect pseudo-games.</p>
			</div>
			<div class="register ad"><a class="adButton" href="http://www.google.com">
				<div class="register_text"><strong>"So wait, what is this exactly?"</strong><br />
					This year, we're forgoing the one-day festival and exchanging it for a year-long* remote festival extravaganza, complete with amazing guests, weird games, clubs, surprise swag by mail and a whole lot more. New surprises will be announced every month.	Register now to be included in the experimental mailings and for priority registration for each month's activities.</div>
			</a></div>
			
			<div class="cereal ad">Do you remember how Jerry Seinfeld always had tons of cereal? And like, <em>kid</em> cereal? That's because he's awesome. He also has a bunch of classic cars. Classic cars and sugary cereal are a great combo. You should eat more cereal.</div>
			
			<div class="gameClub ad">Let's play games together. But in <em>secret</em>. No one else will know how much we are enjoying the special game-of-the-month And then we'll talk about those games and learn from eachother. Win win!</div>
			
			<div class="sms ad">You want to trust us with your phone number? Okay! You should! We'll take it and give it strangers, and then you'll play experimental SMS games with those same strangers! It's an experiment!</div>
			
			<div class="arcade ad">It's like Coachella, but instead of music, it's games! And instead of in the desert, it's on the internet! At your house! Another win!</div>
			
			<div class="bookClub ad"><img class="bc_image" src="images/bookclub_irr@2x.png" width="100%" /><div class="bookClub_text">During the 1st Epoch of the Quaternary, our pro- tophuman ancestors used books as a rudimentary tool for education and entertainment. In their honor, we will read books, and talk about them. But our books will be about video games, unlike the ancient books, which were all about sex and contacting aliens with pyramids. These books will also be spicy, but a different kind of spice. Not worse; just different. Like Old Bay is just as good as Garam Masala, right? But <em>completely</em> different. You wouldn't want to put Garam Masala in a crab boil, but... wait... that's actually genius.</div></div>
			
			<div class="creature ad">A nature reserve filled with mutants that teach you how to make better video games? Possibly, but first you'd have to successfully hit one with a tranquilizer dart.</div>
			
			<div class="deliveries ad">Things will come to you in the mail! What things? Whatever we can afford! But good things. Not dead things or rocks or old food. That’s gross.</div>
			
			<div class="fannyPack ad"><a class="adButton" href="https://hellopoetry.com/poem/465637/is-that-man-wearing-a-fanny-pack/">
				<div class="fannyPack_text"><p>i want to thank you for letting your guard down.<br />i wont let you regret it. i know your still letting some wounds heal. i wont ever forget it. the tremble in your voice, i know will not compromise.don't ever not speak to me. i am hoping to stay cornered by your truth. i am hoping to stay cornered by your beauty.</p><pre>&Tab;</pre><p>-Austin Stephenson</p></div>
			</a></div>
			
			<div class="gameJams ad">Our game jams are made with the choicest ripe fruit, natural pectin and proprietary chemical additives proven to produce games that are extra weird, occasionally fun, and most importantly, very hastily developed by anyone who is interested in participating.<br />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>New flavors announced monthly!</strong></div>
			
			<div class="sharp ad">On Wednesday, October 28, John Sharp will be visiting our virtual meeting room to discuss his phenomenal book <a href="https://mitpress.mit.edu/books/works-game">Works of Game</a>! Pick up your copy now and we'll discuss it for the month of October prior to his visit!</div>
			
			<div class="basement ad">When I was 7 there was only one kid in the neighborhood <br />with an NES so all the kids would line up to play <br />Teenage Mutant Ninja Turtles and I <br />was afraid of losing my turn to go to <br />the bathroom so I would hold it and <br />pee my pants just to play old videogames.<br />
This is kind of like that, but you can stop and pee <br />whenever you want.</div>
			
			<div class="orderForm ad"></div>
			
			<div class="hams ad"></div>
			
			<!-- Footer -->
			<div class="eef ad"></div>
			<div class="atlas ad"></div>
			<div class="engineering ad"></div>
		</div>
	</body>
</html>