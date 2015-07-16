
<!doctype html>
<html>
	<head>
	    <title>madlib</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		    
	    <style>
         	body {
		        height: 100%;
		        font-family: sans-serif;
		        background-image:url(images/img_13.jpeg);
		    }
		</style>
	</head>
	<body>
		
		<?php

		function getUrlsFromPeers(){
			$proxy = array(
				"http" => array(
					"proxy" => "tcp://http://liuphp.appspot.com/madlib:",
					"request_fulluri" => true
				)
			);
			$proxy_context = stream_context_create($proxy);

			$message = $_GET["message"];
			$handle = @fopen("http://step15-krispop.appspot.com/peers?endpoint=getword", "r");
			$i=0;
			if ($handle) {
			    while (($buffer = fgets($handle, 4000)) !== false) {
			    	$peers[$i]= trim($buffer);
			    	$i++;	
			    }
			    fclose($handle);
			}

			return $peers;
		}

		function getWords($pos){
			$peers = getUrlsFromPeers();
			$num = rand(0, count($peers)-1);
        	$getword = file_get_contents($peers[$num] . "/getword?pos=" . $pos);
        	if(@$getword) return $getword;
        	else return getWords($pos);
        }
?><h2><?
        echo getWords("name")." is swiming with ".getWords("name")."<br>";
        echo "But here comes a ".getWords("animal")."! ".getWords("verb")." in the ".getWords("noun")." ".getWords("adverb")."<Br><br>";
        echo "My name is ".getWords("name").", I am so ".getWords("adjective").", ".getWords("name")." and ".getWords("name")." are my favoriate friends";
		?></h2>
		<a href="http://liuphp.appspot.com/convert?message=wearefamilyラブユー">appその1(convert)</a><br>
		<a href="http://liuphp.appspot.com/show?message=wearefamilyラブユー">appその2(show)</a><br>
		<a href="http://liuphp.appspot.com/getword?pos=">appその3(getword)</a>
		
	</body>
</html>

