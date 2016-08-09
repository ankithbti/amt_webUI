<?php

ob_start();
session_start();
//require_once('dbconfig.php');
date_default_timezone_set('UTC');
$curr_date = date(DATE_RFC822);
$datetime = date('Y-m-d H:i:s') ;
?>

<html>
<?php
	include 'pageHeader.html'
?>
<body>

<div class="container" align="center">
	<div class="row heading">
  		<div class="col-md-3"><img src="resources/images/logo_name.png"/></div>
  		<div class="col-md-9"></div>
  	</div>
	
	<hr>

	<ul class="nav nav-pills">
	  <li role="presentation" id="obBtn" class="active"><a href="#">OrderBook Configuration</a></li>
	  <li id="strategyBtn" role="presentation"><a  href="#">Strategy Configuration</a></li>
	  <li id="riskBtn" role="presentation"><a href="#">Risk Configuration</a></li>
	</ul>

	<div id="obBlock">
		<h2>OB Config Section</h2>
	</div>

	<div id="strategyBlock">
		<h2>Strategy Config Section</h2>
	</div>

	<div id="rmsBlock">
		<h2>RMS Config Section</h2>
	</div>

	
</div>

<?php
	include 'pageFooter.html'
?>
</body>	
</html>
