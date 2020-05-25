
<html>
<head>
<title>LangSwap - MainPage</title>
    <link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
      .ro{
        margin-left: 10px;
        height: 25px;
        border: 1px solid black;
        text-align-last: center;
      }
      .ro:hover{
        cursor:pointer;
        opacity: 0.8;
      }
      .ro:focus{
        outline: none;
        box-shadow: 0px 0px 5px orange;
      }
      .sear{
        height: 50px;
        width: 400px;
        border: 0.5px solid black;
        border-radius: 15px 0px 0px 15px;
        font-size: 12pt;
        display: inline;

      }
      .sear:focus{
        outline: none;
        border: 3px solid orange;
        background-color: white;
      }
      .bar{
        position: absolute;
        top: 0;
        display: inline;
        height: 50px;
        width: 60px;
        border: 0.5px solid black;
        background-color: #ECECEC;
        border-radius: 0px 15px 15px 0px;
        font-size: 12pt;
      }
      .bar:hover{
        cursor: pointer;
        opacity: 0.7;
      }
      .bar:focus{
        outline: none;
        border: 3px solid orange;
      }
      a{
        text-decoration: none;
      }
      .lo{
        float: right;
        margin-top: 15px;
        color: blue;
        padding: 10px;
        font-size: 13pt;
      }
      .lo:hover{
        text-decoration:underline;
        font-size: 15pt;
      }
      table, td, th{
        border: 1px solid black;
        border-collapse: collapse;
        border-radius: 1em;
        padding: 10px;
        width: 70%;
      }
      td{
        text-align: center;
        font-size: 16pt;
        padding: 10px;
      }
      th{
        text-align: center;
        font-weight: bold;
        font-size: 16pt;
        background-color: white;
      }
      .point:hover{
        cursor: pointer;
      }
      .allButton{
     border: 0.5px;
     border-radius: 2px;
     border-style: solid;
     border-color: black;
     font-family: serif;
     font-size: 12pt;
     background:linear-gradient(lightblue, white, lightblue);
     color: black;
     display: inline;
     padding: 10px;
     border-radius: 15px 15px 15px 15px;
     cursor:pointer;
     margin: 6px;
     opacity: 0.8;
    }
    .allButton:hover{
      opacity: 1;
      border: 2px solid black;
    }

    .allButton:focus{
      border: 3px solid blue;
      outline: none;
    }
          .goog-logo-link {
        display:none !important;
      } 

      .goog-te-gadget{
        color: transparent !important;
      }
      .goog-te-banner-frame.skiptranslate {
        display: none !important;
        } 
      body {
        top: 0px !important; 
      }
    *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 70px; /* Location of the box */
      left: 0;
      top: 0;
      text-align: center;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 30%;
      -webkit-border-radius: 0px !important;
    -moz-border-radius: 0px !important;
    border-radius: 0px !important; 
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    .k{
      color: black;
    }
    .k:hover{
      text-decoration: underline;
    }
    hr{
      oapcity:0.4;
    }
    .wrap4{
        background-image: url('http://www.baltana.com/files/wallpapers-2/White-Bokeh-Wallpaper-08163.png');
    }
    .rect{
      width: 70%;
      height: 330px;
      border-radius: 20px 20px 20px 20px;
      box-shadow: 0px 0px 10px gray;
      transition: transform .2s;
      background-color: white;
    }
    .rect:hover{
      /*cursor: pointer;*/
      transform: scale(1.05);
    }
    .sticky{
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1;
    }
    .who{
      background-image: url('https://image.freepik.com/free-photo/abstract-art-background-light-blue-white-colors-watercolor-painting-canva_113767-2321.jpg');
      background-size: 100% 100%;
    }
    .topL{
        display:flex;
        border: 1px solid black;
        border-radius: 50%;
        width:100px;
        text-align: center;
        height:100px;
        margin-left: 15px;
      }
      .topL:hover{
        border:2px solid black;
      }
      .new{
        
        border: none;
        background-color: lightblue;
        width: 100px;
        height: 30px;
        font-family: serif;
        text-align: center;
        font-size: 14pt;
      }
      .new:hover{
        cursor: pointer;
        opacity:0.5;
      }
      .alo{
        border: none;
        float: left;

        display: inline;
        max-width: 300px;
        height: 500px;
      }
      .bl{
        color: black;
      }
      .pmo{
        float: right;
        display: inline;
        margin-right: 10px;
        margin-top: -20px;
        border: 1px solid lightgreen;
        border-radius: 50%;
        width: 30px;
        text-align: center;
        background-color: lightgreen;
      }
      .pmo:hover{
        opacity: 0.7;
      }
      .fd{
        border-radius: 50%; width: 90px; height: 63px
      }
      h2{
        font-weight: 900;
      }
      .noe{
        color: green;
        background-color: lightgreen;
        padding: 1px;
        font-family: cursive;
        opacity:0.8;
      }
      .noe:hover{
        opacity:1;
      }
</style>
</head>

<body>
<div id = "myHeader" class = "who">
<p style = "display: inline; letter-spacing: -4px; font-size: 28pt; color: black; float: left;" class = "point">LangSwap</p><div id="google_translate_element" style = "float: left; margin-left: 10px; margin-top: 10px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div style = "position: absolute; left: 34.5%; top: 2px;"><form method = "post"><input type = "text" style = "display: inline; padding: 8px;" class = "sear" placeholder = "Search people..."><button class = "bar">&#128270;</button></form></div>
<a href = 'profile.php' class = 'lo'>👤</a>
<a href = '#' class = 'lo' id='myBtn'>⚙️</a>
<a href = '#' class = 'lo'>🔔</a>
<br><br><br><br><hr></div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h1>Settings</h1><br><br>
    <hr><br><a href = "#" class = "k">Change Password</a><br><br><hr><br><a href = "#" class = "k">Notifications</a><br><br><hr>
    <br><a href = "index.php" class = "k">Log out</a><br><br><hr>  
    
    
    </center>
    <br>
  </div>
</div>
<div style = "background: linear-gradient(#EAEAEA, white, #EAEAEA);">
<center>

<button class = "allButton" onclick = "oj();">Our shop</button><button class = "allButton" onclick = "odo();">Learn language by yourself</button><button class = "allButton" onclick = "opo();">Help</button>
</center>
<hr style = "border:none; height: 20px; width: 100%; height: 50px; margin-top: 0; border-bottom: 1px solid gray; box-shadow: 0 20px 20px -20px #333; margin: -50px auto 10px;">
</div>
<div style = "background-color: #F3F3F3;">
<br>
<center>
<table>
<th>Exchange With Others</th>
</table>
</center>
<br>
<center><div class = "rect"> 
<!--<center><h2>Name</h2></center><center><p class = "alo"><b>Description</b><br> Hi Bye Peace................................................................. ........................................................ ..................................................... ......................................................</p></center><center><a href = "#" class="topL"></a> <br><button style = "display: flex; margin-left: 15px;" class = "new">Lang Swap</button><p>Native Language &rarr;</p><p>Language To Learn &rarr;</p></center><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a>-->

<center><a href = "#"><img src = "" alt = "Profile" class = "fd"></a></center><center><h2 style = "letter-spacing: 3px; font-family: cursive; display: inline;">Name</h2></center><br><center><p style = "max-width: 600px; height: 100px; overflow: scroll; border: 0.1px solid black;"><b>Description </b>.............................................................................................................................. ................ ........................................................................... ........ ................................. ................. ........................................................................... .......................................................................... ....<br></p></center><br><p>Native Language &rarr;</p><p>Language to Learn &rarr;</p><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a><br><center><a href = "#" class = "noe">LangSwap</a></center>




</div><br><br>
<center><div class = "rect"> 
<!--<center><h2>Name</h2></center><center><p class = "alo"><b>Description</b><br> Hi Bye Peace................................................................. ........................................................ ..................................................... ......................................................</p></center><center><a href = "#" class="topL"></a> <br><button style = "display: flex; margin-left: 15px;" class = "new">Lang Swap</button><p>Native Language &rarr;</p><p>Language To Learn &rarr;</p></center><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a>-->

<center><a href = "#"><img src = "" alt = "Profile" class = "fd"></a></center><center><h2 style = "letter-spacing: 3px; font-family: cursive; display: inline;">Name</h2></center><br><center><p style = "max-width: 600px; height: 100px; overflow: scroll; border: 0.1px solid black;"><b>Description </b>.............................................................................................................................. ................ ........................................................................... ........ ................................. ................. ........................................................................... .......................................................................... ....<br></p></center><br><p>Native Language &rarr;</p><p>Language to Learn &rarr;</p><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a><br><center><a href = "#" class = "noe">LangSwap</a></center>




</div><br><br><center><div class = "rect"> 
<!--<center><h2>Name</h2></center><center><p class = "alo"><b>Description</b><br> Hi Bye Peace................................................................. ........................................................ ..................................................... ......................................................</p></center><center><a href = "#" class="topL"></a> <br><button style = "display: flex; margin-left: 15px;" class = "new">Lang Swap</button><p>Native Language &rarr;</p><p>Language To Learn &rarr;</p></center><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a>-->

<center><a href = "#"><img src = "" alt = "Profile" class = "fd"></a></center><center><h2 style = "letter-spacing: 3px; font-family: cursive; display: inline;">Name</h2></center><br><center><p style = "max-width: 600px; height: 100px; overflow: auto; border: 0.1px solid black;"><b>Description </b>.............................................................................................................................. ................ ........................................................................... ........ ................................. ................. ........................................................................... .......................................................................... ....<br></p></center><br><p>Native Language &rarr;</p><p>Language to Learn &rarr;</p><a href = "#" class = "pmo">💬</a><a href = "#" class = "pmo">📞</a><br><center><a href = "#" class = "noe">LangSwap</a></center>




</div>

<br><br><br><br><hr>
<center><p style = "opacity: 0.5; font-size: 9pt;">© 2020, LangSwap.com, Inc. or its affiliates</p></center><br><br><br>
</div>



<script>
    function notifyMe() {
      if (!("Notification" in window)) {
        alert("This browser does not support system notifications");
      }
      else if (Notification.permission === "granted") {
        notify();
      }
      else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
          if (permission === "granted") {
            notify();
          }
        });
      }  
//       function notify() {
//         var notification = new Notification('Welcome to LangSwap', {
//           body: "Hey! Welcome to LangSwap!",
//           icon: 'https://freesvg.org/img/internet-web-browser.png',
//         });

//         notification.onclick = function () {
//           window.loaction = "mainPage.php";      
//         };
//         setTimeout(notification.close.bind(notification), 7000); 
//       }
// }
// notifyMe();
    </script>
    <script>
      function main(){
        window.location = "mainPage.php";
      }
    </script>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
function oj(){
  window.location = "shop.php"
}
function odo(){
  window.location = "singleLang.php"
}
function opo(){
  window.location = "help.php"
}
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



</script>
</body>
</html>
