<?php

$rand_num = mt_rand(1,100);
// fwrite(STDOUT, 'Can you guess the number?  ');
$userGuess = fgets(STDIN);
$count = 0;
while ($rand_num != $userGuess){	
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
