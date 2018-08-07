<html>
  <head>
    <title>Light Controller</title>
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>

    <h1>Text goes here</h1>

    <div class="slidecontainer">
      <input type="range" min="0" max="255" value="127" class="slider" id="range1" name="redSlider">
      <p>Red Value: <span id="slider1"></span></p>
    </div>
    <script type="text/javascript">
      var slider = document.getElementById("range1");
      var output1 = document.getElementById("slider1");

      var read = new XMLHttpRequest();
      read.open('GET', 'values.txt', false);
      read.send();
      var testText = read.response;
      console.log(testText);
      var textValue = parseInt(read.responseText);
      slider.value = textValue;
      console.log(textValue);

      output1.innerHTML = slider.value; // Display the default slider value
      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function() {
        output1.innerHTML = this.value;
      }
    </script>

    <div class="slidecontainer">
      <input type="range" min="0" max="255" value="127" class="slider" id="range2" name="greenSlider">
      <p>Green Value: <span id="slider2"></span></p>
    </div>
    <script>
      var slider = document.getElementById("range2");
      var output2 = document.getElementById("slider2");
      output2.innerHTML = slider.value; // Display the default slider value
      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function() {
        output2.innerHTML = this.value;
      }
    </script>

    <div class="slidecontainer">
      <input type="range" min="0" max="255" value="127" class="slider" id="range3" name="blueSlider">
      <p>Blue Value: <span id="slider3"></span></p>
    </div>
    <script>
      var slider = document.getElementById("range3");
      var output3 = document.getElementById("slider3");
      output3.innerHTML = slider.value; // Display the default slider value
      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function() {
        output3.innerHTML = this.value;
      }
    </script>


    <div id="buttons">
      <br>
      <input type="radio" id="mode1" name="mode" value="m1" checked>
      <label for="mod1">Mode 1</label>
      <br>
      <input type="radio" id="mode2" name="mode" value="m2">
      <label for="mode2">Mode 2</label>
      <br>
      <input type="radio" id="mode3" name="mode" value="m3">
      <label for="mode3">Mode 3</label>
      <br>
    </div>

<form action="" method="POST">
    <input type="range" min="1" max="12" step="1" value="1" id="foo" name="passengers" onchange='document.getElementById("bar").value = "Slider Value = " + document.getElementById("foo").value;'/>
    <input type="text" name="bar" id="bar" value="Slider Value = 1" disabled />
    <br />
    <input type=submit value=Submit />
</form>

<?php
  if(isset($_POST["passengers"])){
    echo "Number of selected passengers are:".$_POST["passengers"];
    // Your Slider value is here, do what you want with it. Mail/Print anything..
  }
  else{
    Echo "Please slide the Slider Bar and Press Submit.";
  }
?>


<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	$filename = "newfile.txt";
	$file = fopen( $filename, "w" );

	if( $file == false ) {
		echo ( "Error in opening new file" );
		exit();
	}
	$red = 1;
	fwrite( $file, $red );
	fclose( $file );
?>

  </body>
</html>
