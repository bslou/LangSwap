<html>
  <head>
  <link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
  <title>LangSwap - Profile</title>
  <style>
    .rom{
      background-color: lightblue;
      height: 80px;
      margin-top: -6px;
    }
    .o{
      height: 25px;
      width: 200px;
    }
    .o:focus{
      outline-color: orange;
    }
    .pop{
      float: left;
      margin-left: 10%;
      height: 70px;
      width: 70px;
      border-radius: 50%;
      border: 1px solid black;
      text-align: center;
      font-size: 40pt;
      background-color: lightgray;
      color: transparent;  
      text-shadow: 0 0 0 black;
      display: inline;
    }
    .pop:hover{
      opacity:0.7;
    }
    a{
      text-decoration: none;
    }
    textarea{
      resize: vertical;
    }
    .point:hover{
      cursor: pointer;
    }
    .ol:hover{
      opacity:0.7;
    }
    .image-upload>input {
      display: none;
    }
    .hov:hover{
      opacity: 0.7;
      cursor: pointer;
    }
    .butor{
    height: 30px;
    background-color: lightblue;
    border: none;
    font-weight: 700;
    width: 150px;
    border-radius: 10px;
  }
  .butor:hover{
    cursor: pointer;
    opacity:0.7;
  }
  .butor:focus{
    outline: none;
  }
  .borl{
    border: 1px solid black;
  }
  </style>
  </head>
  <body>
    <center>
    <div class = "rom">
    <div class="image-upload">
    <a href = "mainPage.php" onclick = "got();"><p style = "display: inline; letter-spacing: -4px; font-size: 25pt; position: absolute; left: 91%; top: -30px; color: black;" class = "point">LangSwap</p></a>
      <a href = "#" onclick = "ore();" style = "float: left; display: inline; font-size: 20pt;" class = "ol">⚙️</a>
      <center><h3 style = "font-size: 30pt;">Change Profile</h3></center>
      
    
    </div>
    </center>
    <br>
    <!--Idk if form is necessary-->
    <div class= "borl" id = "hid" style = "position: absolute; text-align: center; width: 200px; height: auto; left: 43%; top: 30%;">
      <a href = "#" id = "hid" style = "font-size: 14pt; color: blue;">Notifications</a><br><hr>
      <a href = "#" id = "hid" style = "font-size: 14pt; color: blue;">Logout</a><br><hr>
      <a href = "#" id = "hid" style = "font-size: 14pt; color: blue;">Report</a><br /><hr>
      <a href = "#" id = "hid" style = "font-size: 14pt; color: blue;">Bizzy Emails</a><br><hr>
      <a href = "#" id = "hid" style = "font-size: 14pt; color: blue;">Help and Support</a><br><hr>
      <a href = "#" id = "hid" onclick = "oof();" style = "font-size: 14pt; color: blue;">Close</a>
    </div>
    <script>
    document.getElementById("hid").style.display = "none";
      function ore(){
        document.getElementById("hid").style.display = "block";
      }
      function oof(){
        document.getElementById("hid").style.display = "none";
      }
    </script>
    
    <center>
      <div class="image-upload">
        <label for="file-input">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg" style = "height: 80px; width: 100px;\" class = "hov"/>
        </label>
        <input type = "file" id = "file-input">
      </div>
      </center><br>
    <center>Change Name: <input type = "text" class = "o" id = "name"></center><br>
    <center>Change Email: <input type = "email" class = "o" id = "email"></center><br>
    <center>Change Password: <input type = "password" class = "o" id = "password"></center><br><center>
    Language to Learn: <select style = "display: inline;" class = "ro" name = "lang" id = "lang1"><option value="EN" class="emoji"  selected>English</option>
				<option value="AF" class="emoji"> Afrikaans</option>
				<option value="AL" class="emoji" >Albanian</option>
				<option value="AM" class="emoji" >Amharic</option>
				<option value="AR" class="emoji" >Arabic</option>
				<option value="AM" class="emoji" >Armenian  </option>
				<option value="BA" class="emoji" >Basque</option>
				<option value="BE" class="emoji" >Bengali</option>
				<option value="BY" class="emoji" >Byelorussian</option>
				<option value="BU" class="emoji" >Burmese</option>
				<option value="BL" class="emoji" >Bulgarian</option>
        <option value="CA" class="emoji" >Cantonese</option>
				<option value="CT" class="emoji" >Catalan</option>
				<option value="CZ" class="emoji" >Czech</option>
        <option value="CR" class="emoji" >Croatian</option>
        <option value="DA" class="emoji" >Danish</option>
        <option value="DR" class="emoji" >Dari</option>
        <option value="DZ" class="emoji" >Dzongkha</option><option value="DU" class="emoji" >Dutch</option>
        <option value="ES" class="emoji" >Esperanto</option>
        <option value="ET" class="emoji" >Estonian</option>
        <option value="FR" class="emoji" >Faroese</option>
        <option value="FA" class="emoji" >Farsi</option>
        <option value="FI" class="emoji" >Finnish</option>
        <option value="FR" class="emoji" >French</option>
        <option value="GA" class="emoji" >Gaelic</option>
        <option value="GL" class="emoji" >Galician</option>
        <option value="GE" class="emoji" >German</option>
        <option value="GR" class="emoji" >Greek</option>
        <option value="HE" class="emoji" >Hebrew</option>
        <option value="HI" class="emoji" >Hindi</option>
        <option value="HU" class="emoji" >Hungarian</option>
        <option value="IC" class="emoji" >Icelandic</option>
        <option value="IN" class="emoji" >Indonesian</option>
        <option value="IK" class="emoji" >Inuktitut (Eskimo)</option>
        <option value="JA" class="emoji" >Japanese</option>
        <option value="KH" class="emoji" >Khmer</option>
        <option value="KO" class="emoji" >Korean</option>
        <option value="KU" class="emoji" >Kurdish</option>
        <option value="LA" class="emoji" >Laotian</option>
        <option value="LT" class="emoji" >Latvian</option>
        <option value="KP" class="emoji" >Lappish</option>
        <option value="LI" class="emoji" >Lithuanian</option>
        <option value="MA" class="emoji" >Macedonian</option>
        <option value="ML" class="emoji" >Malay</option>
        <option value="MT" class="emoji" >Maltese</option>
        <option value="NE" class="emoji" >Nepali</option>
        <option value="NO" class="emoji" >Norweigian</option>
        <option value="PA" class="emoji" >Pashto</option>
        <option value="PO" class="emoji" >Polish</option>
        <option value="PR" class="emoji" >Portuguese</option>
        <option value="RO" class="emoji" >Romanian</option>
        <option value="RU" class="emoji" >Russian</option>
        <option value="SC" class="emoji" >Scots</option>
        <option value="SE" class="emoji" >Serbian</option>
        <option value="SL" class="emoji" >Slovak</option>
        <option value="SO" class="emoji" >Slovenian</option>
        <option value="SM" class="emoji" >Somali</option>
        <option value="SP" class="emoji">Spanish</option>
        <option value="SW" class="emoji" >Swedish</option>
        <option value="SA" class="emoji" >Swahili</option>
        <option value="TF" class="emoji" >Tagalog-Filipino</option>
        <option value="TA" class="emoji" >Tajik</option>
        <option value="TM" class="emoji" >Tamil</option>
        <option value="TH" class="emoji" >Thai</option>
        <option value="TB" class="emoji" >Tibetan</option>
        <option value="TI" class="emoji" >Tigrinya</option>
        <option value="TO" class="emoji" >Tongan</option>
        <option value="TU" class="emoji" >Turkish</option>
        <option value="TR" class="emoji" >Turkmen</option>
        <option value="UK" class="emoji" >Ukrainian</option>
        <option value="UR" class="emoji" >Urdu</option>
        <option value="UZ" class="emoji" >Uzbek</option>
        <option value="VI" class="emoji" >Vietnamese</option>
        <option value="WE" class="emoji" >Welsh</option>
        </select>
        </center>
        <br>
    <center>Description:<br> <textarea class = "o" style = "height: 100px; width: 500px" id = "des"></textarea></center><br>
    <center><button class = "butor" onclick = "check();">Save Changes</button></center>
    <script>
    function leave(){
      var o = confirm("Are you sure you want to leave");
      if (o){
        window.location = "mainPage.php";
      }
    }
    function check(){
      var m = confirm("Are you sure you want to save changes");
      var namz = document.getElementById("name").value;
      var emailz = document.getElementById("email").value;
      var passwordz = document.getElementById("password").value;
      var dez = document.getElementById("des").value;
      if (m){
        window.location = "mainPage.php";
      }
    }
    </script>
    <script>
    function got(){
      var o = confirm("Are you sure you want to leave");
      if(o){
        window.location = "mainPage.php";
      }
    }
  </body>
</html>
