<html>
<head>
<style>
.pretty{
  border: 1px solid black;
  border-radius: 5px 5px 5px 5px;
  text-align: center;
  width: 30%;
}
.click{
  border: 1px solid black;
  opacity:0.8;
  border-radius: 2px 2px 2px 2px;
}
.click:hover{
  cursor: pointer;
  opacity:1;
}
</style>
</head>
<body>
<button onclick = "mok();">Go Back</button>
<center>
<div class = "pretty">
<p id = "num"></p>
<h2 id = "question"></h2>
<p id = "error" style = "color: red;"></p>
<p id = "correct" style = "color: green;"></p><br>
<input type = "radio" id = "1" name="radAnswer" checked><label for = "1" id = "one">The woman is my friend</label><br>
<input type = "radio" id = "2" name="radAnswer"><label for = "2" id = "two">The man is my friend</label><br>
<input type = "radio" id = "3" name="radAnswer"><label for = "3" id = "three">The woman knows me</label><br>
<input type = "radio" id = "4" name="radAnswer"><label for = "4" id = "four">The man knows me</label><br><br><button class = "click">Next</button><br><br>
<button class = "click">Finish for Right Now</button><br><br>
</div>
</center>



<script>
document.getElementById("num").innerHTML = "1/200";
document.getElementById("question").innerHTML = "La femme est mon amie";
function mok(){
  var o = confirm("Are you sure you want to go back?");
  if (o){
    window.history.back();
  }
  
}
</script>
</body>


</html>
