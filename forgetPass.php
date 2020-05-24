<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Bizzy - Reset Password</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
    <style>
      a{
        text-decoration: none;
      }
      .wrap{
        border: 15px solid #1D4A7C;
        border-radius: 10px 10px 10px 10px;
        width: 30%;
        text-align: left;
        
      }
      .inputbo{
        width:300px;
        height: 22px;
        border-radius: 4px;
        margin-top: -5px;
      }
      .inputbo:focus{
        outline-color: lightblue;
      }
      .wo-fon{
        border: none;
        font-size: 10pt;
        padding: 10px 10px;
        background: linear-gradient(to right, lightblue, blue, lightblue);
        opacity:0.8;
        color: white;
        border-radius: 10px;
      }
      .wo-fon:hover{
        cursor: pointer;
        background: blue;
        opacity:1;
      }
      .forget{
        color: blue;
      }
      .forget:hover{
        text-decoration: underline;
        color: orange;
      }
      .point:hover{
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <script></script>
    <center><p style = "display: inline; letter-spacing: -4px; font-size: 28pt;" class = "point" onclick = "go();">LangSwap</p><br><br></center><form action = "success.php" method = "post" id = "my-form" onsubmit = "return checkforblank();">
    <center><div class = "wrap">
      <br><p style = "margin-left: 15%; font-size: 16pt; font-weight: 300;">Password Help</p><p style = "margin-left: 15%; font-size: 11pt;">Please enter your email. We will send you an email<br> with instructions for creating a new password.</p><p style = "margin-left: 15%;"><b>Email</b></p><center><p id = "error" style = "color: red; width: 300px; background-color: #F9E1E1; border-radius: 10px 10px 10px 10px; text-align: center;"></p></center><center><input type = "email" name = "email" class = "inputbo" id = "email"></center>
      <br><center><button id = "my-form-button" class = "wo-fon" style = "margin: 5px;">Find Account</button></center><br>
    </div></center><center><br></center><br><br><br><br><br><br><br><br><hr style = "opacity:0.5;"><center><p style = "font-size: 8pt; opacity: 0.5;">© 2020, LangSwap.com, Inc. or its affiliates</p></center></form>
    <script>
      function go(){
        var o = confirm("Do you want to go back?");
        if (o){
          window.location = "index.php";
        }
      }
      function checkforblank(){
      var errormessage = "";
        if (document.getElementById("email").value == ""){
          errormessage += "No email entered";
          document.getElementById("email").style.borderColor = "red";
        }else{
          document.getElementById("email").style.borderColor = "lightgray";
        }
        if (errormessage != ""){
          document.getElementById("error").innerHTML = errormessage;
          document.getElementById("error").style.border = "1px solid red";
          return false;
        }
      }

    </script>
  </body>
</html>
