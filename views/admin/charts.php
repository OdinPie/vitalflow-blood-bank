<?php
 
 $dataPoints = array(
     array("label"=> "Barisal", "y"=> 41),
     array("label"=> 'Khulna', "y"=> 35),
     array("label"=> 'Rajshahi', "y"=> 50),
     array("label"=> 'Dhaka', "y"=> 71, "indexLabel"=> "Highest"),
     array("label"=> 'Chattogram', "y"=> 52),
     array("label"=> 'Rangpur', "y"=> 22, "indexLabel"=> "Lowest"),
     array("label"=> 'Sylhet', "y"=> 45),
 );
 $dataPoints1 = array(
     array("label"=> "Eligible", "y"=> 70),
     array("label"=> 'Not Eligible', "y"=> 30),
 );
     
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                      
    <title>Document</title>
    <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Donors Across the Divisions"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "bar", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Eligiblity of Donors"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "pie", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
chart2.render();
 
}
</script>
</head>
<body> 
<div>
<div>
<div id="chartContainer2" style="height: 370px; width:100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</div>
<div>
<div id="chartContainer" style="height: 370px; width:100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</div>
</div>
</body>
</html>