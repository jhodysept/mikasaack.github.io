
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
 <style type="text/css">

body, html {
  height: 100%;
  margin: 0;
}

  body{
  	background-image: url("img/background3.jpg"), url("img/background4.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
   margin: unset;
   overflow: flow;

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat, repeat;
}
.content p{
    font-size: 20px;
    color: #FFFFFF;
}
.content{
     margin-left: 5%;
     margin-top: 10%;
}

.content h1{
  z-index: 1000;
  font-family: 'Permanent Marker', cursive;
    font-size: 80px;
    font-weight: 100;
    margin-top: 30px;
    margin-left: 120px;
    margin-bottom: 15px;
    color: #FFFFFF;   
}

.content h2{
  font-family: 'Permanent Marker', cursive;
    font-size: 40px;
    font-weight: 100;
    margin-top: -40px;
    margin-left: 150px;
    margin-bottom: 15px;
    color: yellow;   
}

.button{
    margin-top: 40px;
    display: flex;
}

.button .btn{
  cursor: pointer;
  border: none;
  background: linear-gradient(to right, #A40404, #FF6800);
  color:white;
  border-radius: 50px;
  padding:10px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:12pt;
  margin-left: 250px;
  position: fixed;
}
.btn:hover{
  background-color: #FFFFFF; 
}

.feature-img2{
    height: 100%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 0px;
}
.feature-img{
    height: 100%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 20px;
}
.container {
  width:90%;
  margin:0 auto;
}
.container::after {
  content: '';
  display: block;
  clear: both;
}
.col-4 {
  width:25%;
  box-sizing: border-box;
  padding:5px;
  float: left;
  text-align: center;
  margin-bottom: 15px;
}

.col-4 img {
  width:100%;
  border-radius: 25%;
}
.col-4 a:hover img {
  transform: scale(1.2);
}

h1{
    font-family: 'Permanent Marker', cursive;
    font-size: 80px;
    font-weight: 100;
    color: yellow;   
}

@media (max-width: 858px){

.col-4 {
  width:50%;
  box-sizing: border-box;
  padding:5px;
  float: left;
  text-align: center;
  margin-bottom: 15px;
}

}

 </style>
</head>
<body>
<section id="portfolio">
      <div class="container">
        <br>
        <br>
        <h1 align="center">Photos</h1>
        <br>
        <br>
        <br>
        <div class="col-4">
          <a href="">
            <img src="img/M1.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M2.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M3.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M6.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M5.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M9.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M7.jpg">
          </a>
        </div>

        <div class="col-4">
          <a href="">
            <img src="img/M8.jpg">
          </a>
        </div>
      </div>
    </section>
</body>
</html>