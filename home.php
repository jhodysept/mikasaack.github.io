
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
 <style type="text/css">

body, html {
  height: 100%;
  margin: 0;
}

  body{
  	background-image: url("img/background.jpg") ;
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
  background-repeat: repeat;
}

.content{
     margin-left: 5%;
     margin-top: 10%;
}

.content p{
    font-size: 20px;
    color: #FFFFFF;
}

.content h1{
    z-index: 1000;
    font-family: 'Permanent Marker', cursive;
    font-size: 100px;
    margin-top: -5%;
    margin-left: 100px;
    margin-bottom: 15px;
    color: #FFFFFF;   
}

.content h2{
    font-family: 'Permanent Marker', cursive;
    font-size: 50px;
    font-weight: 100;
    margin-top: -50px;
    margin-left: 150px;
    margin-bottom: 15px;
    color: yellow;   
}

.button{
    margin-top: 40px;
    display: flex;
}

.button .btn{
  z-index: 999;
  cursor: pointer;
  border: none;
  background: linear-gradient(to right, #A40404, #FF6800);
  color:white;
  border-radius: 50px;
  padding:10px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:12pt;
  margin-left: 260px;
  position: fixed;
}

.feature-img2{
    width: 50%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 0;
}
.feature-img{
    width: 50%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 20px;
}

@media (max-width: 858px){

.content h1{
    z-index: 1000;
    font-family: 'Permanent Marker', cursive;
    font-size: 14vh;
    margin-top: -10%;
    margin-left: auto;
    text-align: center;
    margin-bottom: 15px;
    color: #FFFFFF;   
}

.content h2{
    font-family: 'Permanent Marker', cursive;
    font-size: 50px;
    font-weight: 100;
    margin-top: -50px;
    margin-left: auto;
    text-align: center;
    margin-bottom: 15px;
    color: yellow;   
}

.content p{
    text-align: center;
    font-size: 20px;
    color: #FFFFFF;
}

.feature-img{
    width: 50%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 20px;
}

.feature-img2{
    width: 50%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 0;
}
.feature-img{
    width: 50%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 10px;
}

.button .btn{
  z-index: 999;
  cursor: pointer;
  border: none;
  background: linear-gradient(to right, #A40404, #FF6800);
  color:white;
  border-radius: 50px;
  padding:10px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:8pt;
  margin-top: -10px;
  margin-left: 200px;
  position: fixed;
}

}
 </style>
</head>
<body>
  <div class="content">      
    <h1>Mikasa</h1><h2>Ackerman</h2>
    <p>Mikasa Ackerman (ミカサ・アッカーマン Mikasa Akkāman)<br>is one of the two deuteragonists of the series, along with Armin Arlert</p>
</div>

<div class="button">
     <a href='?p=profil'><button type="button" class="btn"><b>Learn More</b></button></a>
</div>
<img src="img/shape.png" class="feature-img2">
<img src="img/mikasa.png" class="feature-img">

</body>
</html>