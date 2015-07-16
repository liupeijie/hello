
<!doctype html>
<html>
	<head>
	    <title>getword</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		    
	</head>
	<body>
		

		<?php
		
		srand((float) microtime() * 10000000);
		if (@$_GET['pos']) {

			if($_GET['pos']==name){
				$input = array("PeiJie", "Kris", "Daniel", "YiRui", "Moeko","Mariko", "Minori", "Tsumugi", "Haruka", "Hanae","Yuri", "Natsuko", "Kei", "Mami", "Akari","Miku", "Chihiro", "Mika", "Himari", "Ana","Yuko","Superman");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==verb){
				$input = array("beat", "kiss", "know", "listen", "buy","eat", "see", "touch", "watch", "hit","think", "forgot", "get", "pass", "go","run", "finish", "take", "play", "learn","fly","cry");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==adjective){
				$input = array("beautiful", "nice", "cute", "dirty", "fast","slow", "big", "small", "warm", "hot","cold", "honor", "fool", "lovely", "stupid","fat", "slim", "tall", "smart", "sweet","high","sad");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==adverb){
				$input = array("certainly", "hardly", "academically", "well", "quickly","fairly", "pretty", "rather", "much", "half","highly", "awfully", "deeply", "greatly", "very","partly", "little", "so", "barely", "fully","only","really");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==noun){
				$input = array("China", "car", "room", "fan", "photo","people", "milk", "book", "water", "fire","brother", "group", "google", "interview", "result","family", "army", "labor", "health", "life","oasis","club");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==exclaimation){
				$input = array("Yuck", "Wow", "Whoop", "Whoopee", "Whew","Well,well", "Ugh", "Say", "Psst", "Oh","Ow", "Ouch", "Help", "Hey", "Jesus","Mmmm", "Mercy", "My", "Gee", "God","Goodness","Ahem");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}else if($_GET['pos']==animal){
				$input = array("turkey", "monkey", "pig", "dog", "cat","horse", "rabit", "bear", "bird", "fog","ox", "cow", "deer", "fish", "elephant","lion", "tiger", "jackal", "panda", "whale","shark","shrimp");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
			}
		}
			?>
	</body>
</html>

