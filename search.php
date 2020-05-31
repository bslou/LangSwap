<html>
<head>
<title>LangSwap - Search for Friends</title>
<link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.op{
  display: inline;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  height: 40px;
  font-size: 12pt;
  
  text-align-last: center;
}
.op:hover{
  cursor: pointer;
}
.sear{
  height: 40px;
  width: 250px;
  font-size: 12pt;
}
.sear:focus{
  outline-color: orange;
}
.but{
  height: 40px;
  background-color: #F7B577;
  opacity:0.8;
  font-size: 12pt;
}
.but:hover{
  cursor: pointer;
  opacity:1;
}
.but:focus{
  outline-color: orange;
}
.od{
  color: blue;
}
.od:hover{
  text-decoration: underline;
}
a{
  text-decoration: none;
}
 .lsw{
       display: inline; 
       letter-spacing: -4px; 
       font-size: 20pt; 
       color: black;
        position: absolute; 
        top: -15px;
        
}
@media only screen and (max-width: 800px){
  .sear{
    width: 100px;
    font-size: 9pt;
  }
  .but{
    font-size: 8pt;
  }
}
@media only screen and (min-width: 1100px){
        
        .lsw{
          font-size: 28pt;
          top: -30px;
        }
}
</style>
</head>

<body>
<a href = "index.php"><p class = "point lsw">LangSwap</p></a>
<center>
<div class = "wrapper">
<form method = "post">
<select class = "op but" id = "woe" onchange = "wore();">
<option value = "pe" selected>People</option>
<option value = "la">Languages</option>
</select>
	<input type="text" class="sear" 
	placeholder="Search People..." id = "search" autocapitalize="off" style = "padding: 6px;">
	<button class = "but" style = "padding: 10px; border: 0.5px solid gray;">Search</button>
</div>


</form>
</div>
</center>
<a href = "index.php" style = "float: right; margin-top: -40px; margin-right: 50px;" class = "od">Register</a>
<a href = "index.php" style = "float: right; margin-top: -40px;" class = "od">Login</a>
<hr><br><br><br><br><br><br><br><center><img src = "https://c0.wallpaperflare.com/preview/360/453/136/pixel-art-abstract-adult.jpg" alt = "Socializing people" style = "border-radius: 50%; width: 350px; height: 300px;"></center><br><center><h1>Find friend, classmate, family <br>member, or any person</h1></center>

<br><br><br><hr style = "opacity:0.4;"><center><p style = "opacity: 0.5; font-size: 9pt;">© 2020, LangSwap.com, Inc. or its affiliates</p></center><br><br><br>
<script>
function wore(){
  var d = document.getElementById("woe");
  var dot = d.options[d.selectedIndex].text;
  document.getElementById("search").placeholder = "Search "+dot+"...";
}

</script>
</body>
</html>
