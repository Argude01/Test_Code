$(document).ready(function(){
	$.ajax({
		type: 'POST',
		url: 'php/load_category.php'
	})
	.done(function(category_menu){
		$('#category_list').html(category_menu)		
	})
	.fail(function(){
		alert('ERROR: Category could not be upload')
	})

	$('#category_list').on('change', function(){
		var id = $('#category_list').val()
		$.ajax({
			type: 'POST',
			url: 'php/load_product.php',
			data: {'id': id}
		})
		.done(function(product_menu){
			$('#product_list').html(product_menu)

			//graphic randomly
			var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	        var barChartData = {
	          labels : ["January","February","March","April","May","June","July"],
	          datasets : [
	            {
	              fillColor : 'rgba(91,228,146,0.6)', 
	              strokeColor : 'rgba(57,194,112,0.7)',
	              highlightFill : 'rgba(73,206,180,0.6)', 
	              highlightStroke : 'rgba(66,196,157,0.7)', 
	              data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
	            }
	          ]
	        }
	        
	          var ctx = document.getElementById("canvas").getContext("2d");
	          window.myBar = new Chart(ctx).Bar(barChartData, {
	            responsive : true
	          });
		})
		.fail(function(){
			alert('ERROR: Product could not be upload')
		})
	})

	$('#product_list').on('change', function(){
		var id = $('#product_list').val()
		$.ajax({
			type: 'POST',
			url: 'php/load_brand.php',
			data: {'id': id}
		})
		.done(function(brand_menu){
			$('#brand_list').html(brand_menu)
		})
		.fail(function(){
			alert('ERROR: Product could not be upload')
		})
	})

	$('#brand_list').on('change', function(){
		//graphic randomly
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	    var barChartData = {
	      labels : ["January","February","March","April","May","June","July"],
	      datasets : [
	        {
	          fillColor : 'rgba(91,228,146,0.6)', 
	          strokeColor : 'rgba(57,194,112,0.7)',
	          highlightFill : 'rgba(73,206,180,0.6)', 
	          highlightStroke : 'rgba(66,196,157,0.7)', 
	          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
	        }
	      ]
	    }
	    
	      var ctx = document.getElementById("canvas").getContext("2d");
	      window.myBar = new Chart(ctx).Bar(barChartData, {
	        responsive : true
	      });
	})
})

