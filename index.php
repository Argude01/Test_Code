<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>

  <script>
    function WordCount(){    
      var textArea = [];
      textArea = document.getElementById("area").value;
      var characters = [];
      var position = 0;
      var total = 0;

      for ( i=0; i<textArea.length; i++){
        total = 0;
        var newCharacter = textArea[position];
        //alert(characters);
        for (j = 0; j < textArea.length; j++){
          //alert( newCharacter + textArea[j] );
          if ( newCharacter == textArea[j] ){
            total++;
            //alert( newCharacter +" "+ total);
          }            
        }
        if ( newCharacter == " "){
          //alert('inserting... Space'+" "+total);
          characters.push(['Space', total]);
          position++; 
        }else{
          //alert('inserting...'+newCharacter+" "+total);
          characters.push([newCharacter, total]);
          position++; 
          
        }             
      }
      
      text1 = "<ul>";
      for (i = 0; i < textArea.length; i++) {
          text1 += "<li>" + textArea[i] + "</li>";
      }
      text1 += "</ul>";

      text2 = " <ul>";
      for (i = 0; i < characters.length; i++) {
          text2 += "<li>" + characters[i] + "</li>";
      }
      text2 += "</ul>";

      document.getElementById("result1").innerHTML = text1;
      document.getElementById("result2").innerHTML = text2;
     }
  </script>

  <script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var barChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [{
          fillColor : 'rgba(91,228,146,0.6)', 
          strokeColor : 'rgba(57,194,112,0.7)',
          highlightFill : 'rgba(73,206,180,0.6)', 
          highlightStroke : 'rgba(66,196,157,0.7)', 
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }]
    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
          responsive : true
        });
      }
  </script>
  
  <title>Test</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="page-header text-left">
      <h1>Annual Sales <small>by Category, Product or Brand</small></h1>
    </div>
    <div class="row">
      <div class="col-md-4">
          <p>Category:
          <select id="category_list" name="category_list" class="form-control">
          </select>
        </p>
      </div>
      <div class="col-md-4">
        <p>Product: 
        <select id="product_list" name="product_list" class="form-control">
        </select>
      </p>
      </div>
      <div class="col-md-4">
        <p>Brand: 
        <select id="brand_list" name="brand_list" class="form-control">
        </select>
      </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p><b>Result: </b></p><p id="resultado1"></p>
      </div>
      <div style="width: 50%">
        <canvas id="canvas" height="450" width="600"></canvas>
      </div>
    </div>     
  </div>

  <!-- Counting each character from the textarea -->
  <div class="container">
    <div class="page-header text-left">
      <h1>Textarea <small>How many "A" letters are? </small></h1>
    </div>
    <div class="row">
      <div class="alert alert-info" role="alert">Counting each character from the text.</div>
      <div class="col-md-4">    
        <TEXTAREA ID="area" COLS=20 ROWS=5>Type here.</TEXTAREA><BR>
        <div class="col-md-4">
          <p><br><button onClick="WordCount()" type="button" class="btn btn-default btn-block">Count</button></p>
        </div>  
      </div>
      <div class="col-md-4">
        <h1>Result:</h1>
        <p id="result1"></p>
      </div>
      <div class="col-md-4">
        <h1>Characters:</h1>
        <p id="result2"></p>
      </div>
    </div>         
  </div>  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>

</body>
</html>