<!DOCTYPE html>
<html>
  <head>
   
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
   
	<script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
	<link rel="import" href="../bower_components/font-roboto/roboto.html">
	<!--<link rel="import" href="../bower_components/core-header-panel/core-header-panel.html">-->
	<link rel="import" href="../bower_components/core-toolbar/core-toolbar.html">
	<link rel="import" href="../bower_components/paper-tabs/paper-tabs.html">
	<link rel="import" href="../bower_components/paper-button/paper-button.html">
	<style>
	html,body {
		height: 100%;
		margin: 0;
		background-color: rgb();
		font-family: 'RobotoDraft', sans-serif;
	}
	core-header-panel {
		height: 100%;
		overflow: auto;
		-webkit-overflow-scrolling: touch; 
	}
	core-toolbar {
		background: rgb(38, 43, 217);
		color: white;
	}
	#tabs {
		width: 100%;
		margin: 0;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		text-transform: uppercase;
	}
	@media (min-width: 150px) {
		#tabs {
			width: 600px;
		}
		#main
		{
			width: 600px;
		}
	}
	div#main
	{
		position: relative;
		width: 82%;
		left: 8%;
		border: solid;
	}
	div#team
	{
		display: none;
		position: relative;
		padding-left: 30px;
		padding-top: 1px;
		padding-bottom: 50px;
		width: 82%;
		left: 7%;
		color: rgb(255, 255, 255);
		background-color: rgb(80, 90, 200);
	}
	#team div
	{
		font-size: 20px;
	}
	div#media
	{
		display: none;
		position: relative;
		width: 82%;
		left: 8%;
	}
	div#sponsors
	{
		display: none;
		position: relative;
		width: 82%;
		left: 8%;
	}
	div#calendar
	{
		display: none;
		position: relative;
		width: 82%;
		left: 8%;
	}

	paper-button.colored
	{
		color: rgb(0, 0, 0);
		background: rgb(255, 255, 255);
		margin-top: 10px;
	}
	.invis
	{
		display: none;
	}
  </style>
  </head>
  <body unresolved>
    <core-header-panel>
		<core-toolbar>
			<paper-tabs flex id="tabs" selected="Home" self-end>
				<paper-tab name="Home" onclick="home()">Home</paper-tab>
				<paper-tab name="Team" onclick="team()">Team</paper-tab>
				<paper-tab name="Media" onclick="media()">Media</paper-tab>
				<paper-tab name="Sponsors" onclick="sponsors()">Sponsors</paper-tab>
				<paper-tab name="Calendar" onclick="calendar()">Calendar</page-tab>
			</paper-tabs>
		</core-toolbar>
		<img src="Background placeholder this is very serious.png" height="50" width="72">
	<core-header-panel>
	<div id="main" class="test">
		<h1>Welcome to the Pengbots!</h1>
		<img src="eventually will be pic of team">
		<h2 id="news">Recent News</h2>
		<div id="recentNewsArea">
		</div>
		
	</div>
	
	<div id="team" class="test">
		<div class="tea">
			<h1>Students</h1>
				<paper-button class="colored" raised onclick='showP("bryce")'>Bryce Andersen</paper-button>
				<paper-button class="colored" raised onclick='showP("taz")'>Taz Anderson</paper-button>
				<paper-button class="colored" raised onclick='showP("caleb")'>Caleb Braaten</paper-button>
				<paper-button class="colored" raised onclick='showP("sam")'>Sam Brooks</paper-button>
				<paper-button class="colored" raised onclick='showP("gary")'>Gary Dunham</paper-button>
				<paper-button class="colored" raised onclick='showP("nelson")'>Nelson Dunham</paper-button>
				<paper-button class="colored" raised onclick='showP("nathen")'>Nathen Flynn</paper-button>
				<paper-button class="colored" raised onclick='showP("anthony")'>Anthony Guerrero</paper-button>
				<paper-button class="colored" raised onclick='showP("sheryl")'>Sheryl Johnston</paper-button>
				<paper-button class="colored" raised onclick='showP("jacob")'>Jacob Sea</paper-button>
				<paper-button class="colored" raised onclick='showP("crisante")'>Crisante Williams</paper-button>
				<paper-button class="colored" raised onclick='showP("madyson")'>Madyson Yetter</paper-button>
			<h1>Teachers</h1>
			
				<paper-button class="colored" raised onclick='showP("mrchonka")'>Mr. Chonka</paper-button>
				<paper-button class="colored" raised onclick='showP("msjordan")'>Ms. Jordan</paper-button>
				
			<h1>Mentors</h1>
				
				<paper-button class="colored" raised onclick='showP("scott")'>Scott Evensen</paper-button>
				<paper-button class="colored" raised onclick='showP("suzy")'>Suzy Megyery</paper-button>
				
				<!--
				<paper-button class="colored" raised onclick="caleb()"></paper-button>
				<paper-button class="colored" raised onclick="caleb()"></paper-button>
				<paper-button class="colored" raised onclick="caleb()"></paper-button>
				<paper-button class="colored" raised onclick="caleb()"></paper-button>
				-->
		</div>
		<div id="back" class="invis"><paper-button class="colored" raised onclick="team()">BACK</paper-button></div>
		<div class="invis" id="bryce"></div>
		<div class="invis" id="taz"></div>
		<div class="invis" id="caleb"></div>
		<div class="invis" id="sam"></div>
		<div class="invis" id="gary"></div>
		<div class="invis" id="nelson"></div>
		<div class="invis" id="nathen"></div>
		<div class="invis" id="anthony"></div>
		<div class="invis" id="sheryl"></div>
		<div class="invis" id="jacob"></div>
		<div class="invis" id="crisante"></div>
		<div class="invis" id="madyson"></div>
		
		<div class="invis" id="mrchonka"></div>
		<div class="invis" id="msjordan"></div>
		
		<div class="invis" id="scott"></div>
		<div class="invis" id="suzy"></div>
	</div>
	
	<div id="media" class="test">
		<h1>Title</h1>
		<paper-button class="colored" raised onclick="history()">View Team History</paper-button>
	</div>
	<div id="sponsors" class="test">
		<h1>Thanks to all our sponsors!</h1>
		<a href="sponsorsite"><img src="sponsorpic" height="200" width="300"></a>
		<a href="sponsorsite"><img src="sponsorpic"></a>
	</div>
	<div id="calendar" class="test">
		<iframe src="https://www.google.com/calendar/embed?src=kjordan2660%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>	</div>
	<script>
		
		function home()
		{		
			erase("test");
			document.getElementById("main").style.display = "block";
		}
		function team()
		{
			erase("test");
			erase("invis");
			show("tea");
			document.getElementById("team").style.display = "block";
			
		}
		
		function media()
		{
			erase("test");
			document.getElementById("media").style.display = "block";
		}
		
		function sponsors()
		{
			erase("test");
			document.getElementById("sponsors").style.display = "block";
		}
		
		function calendar()
		{
			erase("test")
			document.getElementById("calendar").style.display = "block";
		}
		
		function erase(classname)
		{
			var i;
			var o = document.getElementsByClassName(classname);
			for (i = 0; i < o.length; i++)
				o[i].style.display = "none";
		}
		
		function show(classname)
		{
			var i;
			var o = document.getElementsByClassName(classname);
			for (i = 0; i< o.length; i++)
				o[i].style.display = "block";
		}
		
		function idshow(idname, view)
		{
			document.getElementById(idname).style.display = view;
		}
		
		function showP(name)//for team div
		{
			erase("tea");
			idshow("back", "inline-block");
			document.getElementById(name).style.display = "block";
		}
		
	</script>
		</body>
</html>