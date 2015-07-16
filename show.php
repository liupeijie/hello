
<!doctype html>
<html>
	<head>
	    <title>show</title>
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
		<h2>みんなの暗号をお見せします〜〜どら</h2>
		<?php
		$proxy = array(
			"http" => array(
				"proxy" => "tcp://http://liuphp.appspot.com/show?message=weareeefamily:",
				"request_fulluri" => true
			)
		);
		$proxy_context = stream_context_create($proxy);

		$message = $_GET["message"];
		$handle = @fopen("http://step15-krispop.appspot.com/peers?endpoint=convert", "r");
		if ($handle) {
		    while (($buffer = fgets($handle, 4000)) !== false) {
		    	echo $buffer= trim($buffer);
		    	echo "<Br>";
		        $temp = $buffer.'/convert?message='.$message;	        
		        echo file_get_contents( $temp, false, $proxy_context)."<br><br>";
		    }
		    if (!feof($handle)) {
		        echo "Error: unexpected fgets() fail\n";
		    }
		    fclose($handle);
		}
		?>
		
	</body>
</html>

