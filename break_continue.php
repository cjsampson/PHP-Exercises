<?php

// Create a for loop that shows all even numbers between 1 and 100 using continue

for($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
	continue;
}

// Create another for loop that counts from 1 to 100, but stops after 10 using break

for($n = 1; $n <= 100; $n++) {
	echo $n . "\n";
	if($n == 10) {
		break;
	}
}