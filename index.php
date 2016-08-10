<?php

ob_start();
session_start();
//require_once('dbconfig.php');
date_default_timezone_set('UTC');
$curr_date = date(DATE_RFC822);
$datetime = date('Y-m-d H:i:s') ;
?>
<!DOCTYPE html>
<html lang="en">
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
</div>

<div id="obBlock" class="container">
	<h2>OB Config Section</h2>

	<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>ENO</th>  
            <th>EMPName</th>  
            <th>Country</th>  
            <th>Salary</th>  
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>Anusha</td>  
            <td>India</td>  
            <td>10000</td>  
          </tr>  
          <tr>  
            <td>002</td>  
            <td>Charles</td>  
            <td>United Kingdom</td>  
            <td>28000</td>  
          </tr>  
          <tr>  
            <td>003</td>  
            <td>Sravani</td>  
            <td>Australia</td>  
            <td>7000</td>  
          </tr>  
		   <tr>  
            <td>004</td>  
            <td>Amar</td>  
            <td>India</td>  
            <td>18000</td>  
          </tr>  
          <tr>  
            <td>005</td>  
            <td>Lakshmi</td>  
            <td>India</td>  
            <td>12000</td>  
          </tr>  
          <tr>  
            <td>006</td>  
            <td>James</td>  
            <td>Canada</td>  
            <td>50000</td>  
          </tr>  
		  
		   <tr>  
            <td>007</td>  
            <td>Ronald</td>  
            <td>US</td>  
            <td>75000</td>  
          </tr>  
          <tr>  
            <td>008</td>  
            <td>Mike</td>  
            <td>Belgium</td>  
            <td>100000</td>  
          </tr>  
          <tr>  
            <td>009</td>  
            <td>Andrew</td>  
            <td>Argentina</td>  
            <td>45000</td>  
          </tr>  
		  
		    <tr>  
            <td>010</td>  
            <td>Stephen</td>  
            <td>Austria</td>  
            <td>30000</td>  
          </tr>  
          <tr>  
            <td>011</td>  
            <td>Sara</td>  
            <td>China</td>  
            <td>750000</td>  
          </tr>  
          <tr>  
            <td>012</td>  
            <td>JonRoot</td>  
            <td>Argentina</td>  
            <td>65000</td>  
          </tr>  
        </tbody>
    </table>

</div>

<div id="strategyBlock">
	<h2>Strategy Config Section</h2>
</div>

<div id="rmsBlock">
	<h2>RMS Config Section</h2>
</div>

<?php
	include 'pageFooter.html'
?>
</body>	
</html>
