<html>
	<p>
		<?php
		// Round a floating point number to an integer
		// and print it to the screen
		$redondo = round(9.59483);
		print $redondo;
		?>
	</p>
	<p>
		<?php
		// Round a floating point number to 3 decimal places
		// and print it to the screen
		$redondo3 = round(2.9049494, 3);
		print $redondo3;
		?>
	</p>
	<p>
		<?php
		$meses = array();
		array_push($meses, "enero");
		array_push($meses, "febrero");
		array_push($meses, "marzo");
		array_push($meses, "abril");
		array_push($meses, "mayo");
		print count($meses);

		// Create an array and push 5 elements on to it, then
		// print the number of elements in your array to the screen

		?>
	</p>
	<p>
		<?php
		// Create an array with several elements in it,
		// then sort it and print the joined elements to the screen
		$rideshare = array("Uber", "Lyft", "Juno", "Maven");
		sort($rideshare);
		print join(", ", $rideshare);//it works for strings too", " is to add a comma and a space
		?>
	</p>
	<p>
		<?php
		// Reverse sort your array and print the joined elements to the screen
		$rideshare = array("Uber", "Lyft", "Juno", "Maven");
		rsort($rideshare);
		print join(":", $rideshare); //":" adds a colon but not a space0
		?>
	</p>
	<p>
		<?php
		// Create an array and push on the names
		// of your closest family and friends
		$famfriends = array();
		array_push($famfriends, "Ana");
		array_push($famfriends, "Ixchel");
		array_push($famfriends, "Adrian");
		array_push($famfriends, "Emiliano");
		array_push($famfriends, "Satopare");
		array_push($famfriends, "Satamare");

		// Sort the list
		sort($famfriends);
		print join(" ", $famfriends);
		?>
	</p>
	<p>
		<?php
		// Randomly select a winner!
		$winner = $famfriends[rand(0, 5)];

		// Print the winner's name in ALL CAPS
		$upperwinner = strtoupper($winner);
		print $upperwinner;
		?>
	</p>
	<p>
		<?php
		// user definde functions
		function aboutMe ($name,$age) {
			echo "Hello! My name is " . $name . ", and I am " . $age . " years old.";
		}
		aboutMe("Raul", 36);
		?>
	</p>
</html>