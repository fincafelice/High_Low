<?php

$rand_num = mt_rand(1,100);

// fwrite(STDOUT, 'Can you guess the number?  ');
	// $userGuess = fgets(STDIN);

while ($rand_num != $userGuess){	
	
	fwrite(STDOUT, 'Can you guess the number?  ');
	$userGuess = fgets(STDIN);

	if ($userGuess < $rand_num) {
		fwrite(STDOUT, "Guess higher :\(\n");
		// $userGuess = fgets(STDIN);
	} 

	elseif ($userGuess > $rand_num) {
		fwrite(STDOUT, "Guess lower :\(\n");
		// $userGuess = fgets(STDIN);
	}
		
	else {
		fwrite(STDOUT, "You guessed it\! :\)\n");
		exit(0);	
	}

}

// fwrite(STDOUT, "You guessed it\! :\)\n");
