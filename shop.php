<html>
<head>
<title>LangSwap - Shop</title>
<link rel = "icon" href = "https://freesvg.org/img/internet-web-browser.png">
<style>
#slides {
    position: relative;
    height: 500px;
    width: 70%;
    padding: 0px;
    margin: 0px;
    list-style-type: none;
}

.slide {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 1;

    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
}

.showing {
    opacity: 1;
    z-index: 2;
}
.slide {
    font-size: 40px;
    padding: 40px;
    box-sizing: border-box;
    background: #333;
    color: #fff;
}


.slide:nth-of-type(1) {
    background-image: url('https://upload.wikimedia.org/wikipedia/en/a/af/Ilocano_Dictionary_Published_by_the_CICM_in_1930.JPG');
     background-size: 100% 100%;
}
.slide:nth-of-type(2) {
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/4c/Oxford_Advanced_Learner%27s_English-Chinese_Dictionary_7th_Edition.jpg');
    background-size: 100% 100%;
}
.slide:nth-of-type(3) {
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/01/Kenkyusha%E2%80%99s_New_Japanese-English_Dictionary_5th_Edition.jpg');
     background-size: 100% 100%;
}
.slide:nth-of-type(4) {
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/e/e1/DictionaryBaretti.jpg');
    background-size: 100% 100%;
}
.slide:nth-of-type(5) {
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/5d/Russian_dictionary.jpg');
    background-size: 100% 100%;
}
.sear{
  border: 1px solid black;
  width: 40%;
  height: 40px;
  display: inline;
  font-size: 11pt;
  padding: 8px;
}
.sear:focus{
  outline-color: orange;
}
.but{
  height: 40px;
  display: inline;
  width: 80px;
  font-size: 12pt;
}
.but:focus{
  outline-color: orange;
}
.but:hover{
  cursor: pointer;
}
.ol{
   -webkit-appearance: none;
  -webkit-border-radius: 0px;
  height: 40px;
  width: 80px;
  text-align-last: center;
  font-size: 11pt;
}
.ol:hover{
  cursor: pointer;
}
.ol:focus{
  outline-color: orange;
}
a{
  text-decoration: none;
  color: blue;
  font-size: 9pt;
}
a:hover{
  text-decoration: underline;
}
hr{
  opacity:0.4;
}
.lsw{
  display: inline;
   letter-spacing: -4px; 
   font-size: 20pt; 
   color: black; 
   position: absolute; 
   top: -15px; 
   left: 0;
}
@media only screen and (min-width: 1100px){
        
        .lsw{
          font-size: 28pt;
          top: -30px;
        }
        a{
          font-size: 12pt;
        }
}
</style>
</head>
<body>
<p class = "point lsw">LangSwap</p>
<div><form><center><select class = "ol"><option>Any</option><option>Audible</option><option>Art</option><option>Books</option><option>Dictionaries</option><option>Poems</option></select><input type = "text" class = "sear" placeholder = "Search product..."><button class = "but">Search</button></form></div><hr><br>
<center>
<ul id="slides">
    <li class="slide showing"><a href = "#"></a></li>
    <li class="slide"><a href = "#"></a></li>
    <li class="slide"><a href = "#"></a></li>
    <li class="slide"><a href = "#"></a></li>
    <li class="slide"><a href = "#"></a></li>
</ul>
</center>
<a href = "#" style = "float: left; display: inline; position: absolute; top: 100px;">Dictionaries</a><br><a href = "#" style = "float: left; display: inline; position: absolute; top: 130px;">Newspapers</a><br><a href = "#" style = "float: left; display: inline; position: absolute; top: 160;">Novels</a>
<script>
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);

function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}
</script>
</body>

</html>
