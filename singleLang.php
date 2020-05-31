<html>
  <head>
    <title>LangSwap - SinglePlayer</title>
    <link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
  <style>
    .car{
      border: 1px solid black;
      border-radius: 4px 4px 4px 4px;
      transition: transform .2s;
      color: black;
      text-align: center;
      font-size: 15pt;
      width: 150px;
      height: 150px;
      background-color: lightblue;
    }
    .car:hover{
      transform: scale(1.5);
    }
    a{
      text-decoration: none;
    }


  </style>
  </head>
  <body>
  <!--
  <button onclick = "mok();" style = "float: left; display: inline; position: absolute;">Go Back</button>-->
    <center><h1>Select Langauge you want to learn</h1></center>
    <center>
    <div class = "car">
    <a href = "spanish.php" style = "color: black;">Learn Spanish<br><br> 
    <img src = "https://cdn.pixabay.com/photo/2014/04/03/10/54/lady-311672_1280.png" style = "width: 100px; height: 100px;" alt = "Learn Spanish"></a></div>
    </center>
    <center>
    <div class = "car" style = "background-color: white;">
    <a href = "french.php" style = "color: black;">Learn French<br><br> 
    <img src = "https://freesvg.org/img/clark-gable.png" style = "width: 100px; height: 100px;" alt = "Learn French"></a></div>
    </center>
    <script>
// function mok(){
//   var o = confirm("Are you sure you want to go back?");
//   if (o){
//     window.history.back();
//   }
  
// }
</script>
  </body>

</html>
