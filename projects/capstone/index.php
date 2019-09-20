<?php 
/**
 * ^title^Hangman Word Challenge^/title^
 * 
 * ^gitRepo^https://github.com/SethKalkstein/capstone^/gitRepo^
 * 
 * ^tech^JavaScript, JQuery, CSS, HTML, SASS^/tech^
 * 
 * ^highlights^Timer, Game Scoring, Event Listeners, Random Generator, Local Storage, Sorting, Letter Search, Modals^/highlights^
 * 
 * ^description^The classic game of Hangman with some added features. Guess a letter!^/description^
 * 
 * ^image^hangman.png^/image^
 * 
 * ^path^here^/path^
 * 
 * ^order^2^/order^
 * 
 */
?>

<!DOCTYPE html>
<html>
<head>

	<title>Capstone Hangman</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
	<header>
		<h1>Welcome to Hangman</h1>
		<p>Figure out a word by guessing one letter at a time...<span> You get 6 misses total. If you need help press the hint hint button. You will lose points for using a hint and for missed letters. You will gain points for completeing the word.</span></p>
	</header>

	<main>		
		<section id="userInput">
			<!-- user input for guessed letter -->
			<input id="letterHolder" type="text" name="holder">
			<!-- submit button for guessed letter -->
			<input id="guess" type="submit" name="holder" value="Guess">
		</section>
		
		<section id="timerArea">
			<!-- the game timer -->
			<h3>Timer</h3>
			<p id="timer"></p>
		</section>

		<!-- place holder for the word that will be guessed -->
		<p id="wordHolder"></p>
		
		<section id="usedLetters">
			<!-- area to show user guessed letters -->
			<h3>Used Letters</h3>
			<p id="used"></p>
		</section>

		<section id="hintArea">
			<!-- button to give the user a hint -->
			<input type="submit" id="hintButton"name="hint" value="hint" alt="">
			<!-- place holder for the hint text -->
			<p id="hint">?</p>
		</section>

		<!-- area that will hold the classic hang man graphic -->
		<figure id="hangmanImageWrapper">
			<!-- <img src=""> -->
		</figure>

		<!-- score board keeping track of the three highest scores. Displays their name, their score, and whither they had a win or a loss -->
		<section id="winnerArea">
			<h3>Winner Board</h3>
			<table>
				<tr id="tableHeadings">
					<th>Score</th>
					<th>Player Name</th>
					<th>Win or Loss</th>
				</tr>
				<tr class="highPlayers"></tr>
				<tr class="highPlayers"></tr>
				<tr class="highPlayers"></tr>
			</table>
		</section>
	</main>

	<script type="text/javascript" src="index.js"></script>

</body>
</html>