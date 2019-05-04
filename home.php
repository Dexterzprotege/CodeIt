<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Code It</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="main">

  <div class="row">
  <div class="col-sm-12">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand " href="home.php">Code It!</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php">Code</a></li>
      <li class="space"><a href="archive.php">About</a></li>
      <li class="space"><a href="contest.php">Login</a></li>
    </ul>
  
</nav>
</div>
</div>
<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>

<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>


</select><br><br>

<!-- <label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form> -->
<!-- Text box for writing code-->
<div class="form-group c1 purple-border">
        <label for="ta">Type here</label>
        <textarea class="form-control" name="code" rows="8" cols="10"></textarea>
      </div>
<!-- Text box for outputting code-->        
      <div class="form-group c2 purple-border">
          <label for="out">See your output</label>
          <textarea class="form-control" id="div" name="output" rows="8" cols="50"></textarea>
        </div>
<!-- Text box for custom input-->
        <div class="form-group c1 purple-border">
            <label for="in">Custom Input</label>
            <textarea class="form-control" name="input"  rows="2"></textarea>
          </div>
<!-- Submit button-->
    <div><input type="submit" id="st" class="btn-lg btn-success" value="Run Code">    </div>
      </form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<!-- <label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br> -->

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->




</div>
</div>

<div class="col-sm-4">

  
</div>
</div>
</div>
<!--  -->
</body>
</html>


