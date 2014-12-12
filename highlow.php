<?php

// version 2 with args as comments
//var_dump($argc);
//var_dump($argv);
// if ($argc == 3) {
	// This only starts after hitting enter twice
	//echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
	// }
// $rand_num = rand($argv[1], $argv[2]);
// $rand_num = mt_rand(1,100);
// 
fwrite(STDOUT, 'Start guessing by hitting enter');
$userGuess = '';

$userGuess = fgets(STDIN);
if (is_numeric($argc[1])) {
	$low=$argc[1];
} else {
	$low=1;
}
if (is_numeric($argc[2])) {
	$high=$argc[2];
} else {
	$high=9;
}
$rand_num = rand($low, $high);
$count = 0;

while($rand_num != $userGuess){	
	$count++;
	fwrite(STDOUT, 'Can you guess the number?  ');
	$userGuess = fgets(STDIN);

	if ($userGuess < $rand_num) {
		fwrite(STDOUT, "Guess higher :(\n");
		// $userGuess = fgets(STDIN);
	} 

	elseif ($userGuess > $rand_num) {
		fwrite(STDOUT, "Guess lower :(\n");
		// $userGuess = fgets(STDIN);
	}
		
	else {
		fwrite(STDOUT, "You guessed it! :)\n");
		echo "$rand_num\n";
		echo "'You took this many guesses' = $count\n";
		exit(0);	
	}

}
