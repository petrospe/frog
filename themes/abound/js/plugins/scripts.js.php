<script>
        /* line */
		var lineChartData = {
			labels : <?php echo json_encode($label); ?>,
			datasets : [
				{
					label: "Active Services",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : <?php echo json_encode($data3); ?>
				},
				{
					label: "Inactive Services",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : <?php echo json_encode($data4); ?>
				}
			]

		}
        /* doughnut */
		var doughnutData = <?php echo $json1;?>;             
        /* pie */            
                var pieData = <?php echo $json2;?>;

window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {responsive: true, showXLabels: 10});
	
                var ctx = document.getElementById("chart-area1").getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                
                var ctx = document.getElementById("chart-area2").getContext("2d");
		window.myPie = new Chart(ctx).Pie(pieData, {responsive : true});
        };
</script>