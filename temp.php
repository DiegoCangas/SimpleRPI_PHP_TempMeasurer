<?php
$temp = 0;
 $f = fopen("/sys/class/thermal/thermal_zone0/temp","r");
 $temp = fgets($f);
 //echo 'SoC temperature is '.round($temp/100)/10;
 fclose($f);
 ?>
 <body>
	 <h2>
	<form ame="formulario" method="post" action="/send.php">
		<meter name = "SoC Temp" min="0" max="105" low="55" high="80" optimum="40" value=<?php echo(round($temp/100)/10) ?> title = "Temperatura SoC"></meter>
	</form>
	</h2>
</body>
<style>
meter {
  margin-left:160px;
  width: 350px;
  height: 70px;
}
body {
	background-color:lightgray;
	}
meter::after {
 content : attr(value) " ºC";
 top:-48px;
 left:10px;
 position:relative;
 color:white;
}
meter::before {
 content : attr(name) ":";
 top:46px;
 left:-140px;
 position:relative;
}

</style>