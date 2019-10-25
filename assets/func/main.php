<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getChallenge($start, $end){

	$text = array(
" Name Generator", 
" Higher-Lower/Heads-Tails",
" Temperature Converter",
" Calculate Age in Seconds",
" Encrypt/Decrypt Algorithm",
" Fizzbuzz",
" Rock-Paper-Scissors",
" Hangman",
" Love Calculator",
" Pseudorandom Sentence Gen",
" Password Generator",
" Atomically Correct Time",
" Haiku Generator",
" Magic Eight Ball",
" Collatz Conjecture",
" Reverse a String",
" Simple File Explorer",
" Count Words in a String",
" Minesweeper",
" Connect Four",
" BMI Calculator",
" 4Chan Thread Downloader",
" Sudoku Generator/Solver",
" Maze Generator/Solver",
" Decimal/Binary Converter",
" Picross Solver",
" Eulerian Path",
" Fibonnaci Sequence",
" Calculate 100 Factorial",
" Cipher Encrypt/Decrypt",
" Blackjack",
" Dungeons & Dragons w/ AI",
" Generate ASCII Tree",
" Genetic Polygon Algorithm",
" Benford's Law",
" Currency Converter",
" Static Website Generator",
" Crossword Game",
" Scientific Calculator",
" Perlin Noise Algorithm",
" Image Viewer",
" ASCII Digital Clock",
" Dijkstra's Algorithm",
" Text/Morse Translator",
" TicTacToe",
" Snake Game",
" FTP Client",
" Telnet Server",
" IMP Interpreter",
" Tetris",
" Conway's Game of Life",
" Web Crawler",
" Text Editor",
" RSS Feed Creator",
" Evaluate Binomial Coeff.",
" RPN Calculator",
" Mandlebrot Set",
" Sorting Algorithm",
" Convert Markdown -> HTML",
" N-Queens Problem",
" Credential Validator",
" Linked List",
" Mastermind",
" Random Image Generator",
" Ulam Spiral",
" Kligon Translator",
" Prime Number Gen. - Sieve",
" Markov Chain",
" Graphical Analog Clock + GUI",
" 2 Separate Languages Comm",
" Triangle Number Calculator",
" Calculate Typing Speed",
" Name Art in ASCII",
" Towers of Hanoi",
" Quine",
" IRC Bot",
" Brainfuck Interpreter",
" Visualize Sorting Algo",
" Chip-8 Emulator",
" Geek Code Generator (3.12)",
" Translate and Rotate Polygon",
" Pong w/ Variable Vectors",
" Battleships w/ AI",
" Simple Paint Program",
" TCP Chat w/ Basic Encryption",
" Incremental Economy Sim",
" Encrypt/Decrypt Text in Img",
" Pascal's Triangle",
" Sine Wave Generator (rand)",
" Basic HTML Web Browser",
" Flappy Bird",
" Fast Fourier Transformation",
" Method Ringing Simulator",
" Binary Search",
" Nintendo Oil Panic",
" Sierpinski Triangle Gen",
" Calc Dot-cross, 2 vectors",
" Little Man Computer Sim",
" Basic Lisp Interpreter",
" Enigma Machine Simulator");

	$output = "";
	$i = $start;
	while($i <= $end){
		$file = sprintf('%02d',$i) . ".php";
		$exist = "";
		if(file_exists ($file) == true){
			$output = $output . '<a href="./' . sprintf('%02d',$i) . '.php"' . $exist . '>' . sprintf('%02d',$i) . ' ☑ ' . trim($text[$i]) . '</a><br>
';
		}else{
			$output = $output . '<a href="./nope.php?chal=' . $i . '">' . sprintf('%02d',$i) . ' ☒ ' . trim($text[$i]) . '</a><br>
';
		}
		

		$i++;
	}

	echo $output;
}


function getBlockChart(){
	$output = "";
	$i=0;
	while($i <= 99){
		$file = sprintf('%02d',$i) . ".php";
		$exist = "";
		if(file_exists ($file) == true){
			$output = $output . "▓";
		}else{
			$output = $output . "░";
		}
		$i++;
	}
	echo $output;
}

function getCompData(){
	$i=0;
	$val = 0;
	while($i <= 99){
		$file = sprintf('%02d',$i) . ".php";
		$exist = "";
		if(file_exists ($file) == true){
			$val++;
		}
		$i++;
	}
	echo $val;
}
?>