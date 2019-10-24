<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getChallenge($start, $end){

	$text = array("Name Generator"," Higher-Lower/Heads-Tails"," Temperature Converter"," Calculate Age in Seconds"," Encrypt/Decrypt Algorithm"," Fizzbuzz"," Rock-Paper-Scissors"," Hangman"," Love Calculator"," Pseudorandom Sentence Generator"," Password Generator"," Atomically Correct Time from an Internet Clock"," Haiku Generator"," Magic Eight Ball"," Collatz Conjecture"," Reverse a String"," Simple File Explorer"," Count Words in a String"," Minesweeper"," Connect Four"," BMI Calculator"," 4Chan/(HoneyChan) Thread Downloader"," Sudoku Generator/Solver"," Maze Generator/Solver"," Decimal/Binary Converter"," Picross Solver"," Eulerian Path"," Fibonnaci Sequence"," Calculate and Print 100 Factorial"," Cipher Encrypt/Decrypt tool"," Blackjack"," Dungeons & Dragons w/ AI"," Generate ASCII Tree"," Genetic Algorithm on Polygons"," Benford's Law"," Currency Converter"," Static Website Generator (CMS)"," Crossword Game"," Scientific Calculator"," Perlin Noise Algorithm"," Image Viewer"," ASCII Digital Clock"," Dijkstra's Algorithm"," Text/Morse Translator"," TicTacToe"," Snake Game"," FTP Client"," Telnet Server"," IMP Interpreter"," Tetris"," Conway's Game of Life"," Web Crawler"," Text Editor"," RSS Feed Creator"," Evaluate Binomial Coefficients"," RPN Calculator"," Mandlebrot Set"," Sorting Algorithm"," Convert Markdown -> HTML"," N-Queens Problem"," Credential Validator"," Linked List"," Mastermind"," Random Image Generator"," Ulam Spiral"," Kligon Translator"," Prime Number Generator using Sieve"," Markov Chain"," Graphical Analog Clock + GUI"," 2 Seperate Languages send Strings to each other"," Triangle Number Calculator"," Calculate Typing Speed"," Name Art in ASCII"," Towers of Hanoi"," Quine"," IRC Bot"," Brainfuck Interpreter"," Visualization of Sorting Algorithm"," Chip-8 Emulator"," Geek Code Generator (3.12)"," Define, Translate, and Rotate a Polygon"," Pong w/ Variable Vectors"," Battleships w/ AI"," Simple Paint Program"," TCP Chat w/ Basic Encryption"," Incremental Economy Simulator"," Encrypt/Decrypt text into an image"," Pascal's Triangle"," Sine Wave Generator from Pseudorandom Numbers"," Basic HTML Web Browser"," Flappy Bird"," Fast Fourier Transformation"," Method Ringing Simulator"," Binary Search"," Nintendo Oil Panic"," Sierpinski Triangle Generator"," Calculate Dot-and-cross of 2 vectors"," Little Man Computer Simulator"," Basic Lisp Interpreter"," Enigma Machine Simulator with settings.conf");

	$output = "";
	$i = $start;
	while($i < $end-1){
		$output = $output . '<a href="./' . $i . '.php">' . $i . ' ' . trim($text[$i]) . '</a><br>
';
		$i++;
	}
	$output = $output . '<a href="./' . $i . '.php">' . $i . ' ' . trim($text[$i]) . '</a>';
	echo $output;
}
?>