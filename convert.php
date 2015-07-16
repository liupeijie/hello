
<!doctype html>
<html>
	<head>
	    <title>convert</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		    
	</head>
	<body>
		<?php

	    echo '1.message=';
	    $message = $_GET["message"];
	    $len = strlen($message);
	    mb_internal_encoding("UTF-8");
		for($i=$len;$i>=0;$i=$i-2){			
			echo mb_substr($message, $i, 1);
		}
		for($i=$len-1;$i>=0;$i=$i-2){	
			echo mb_substr($message, $i, 1);
		}
	    
	    echo '<br>2.message=';
	    $count[]=0;
	    for($i=0;$i<$len;$i++){
	    	$temp=mb_substr($message,$i,1);
	    	$count[$temp]++;
	    	if($count[$temp] > 1)echo mb_substr($message,$i,1);

	    }

	   // phpinfo();
?>
		<Br><a href="http://liuphp.appspot.com/">本ページに戻る</a><br>
		<a href="http://liuphp.appspot.com/show?message=wearefamilyラブユー">showをみてみる</a><br>
		<a href="http://liuphp.appspot.com/getword">appその3(getword)</a><br>
		<a href="http://liuphp.appspot.com/madlib">appその4(madlib)</a>
	</body>
</html>

