<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <script src="https://kit.fontawesome.com/5a0b3efb01.js" crossorigin="anonymous"></script>
  <script src="scripts.js"></script>

</head>
<style>
*{
    font-family:"Century Gothic",sans-serif;
    margin: 0;
}
.topnav {
  overflow: hidden;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 999;
  background-color: rgb(255, 255, 255);
}

.topnav a {
  margin: 1.20rem 0.5rem;
  padding: 0.6rem 0.9rem;
  float: right;
  text-decoration: none;
  font-size: 0.9rem;
  color: black;
}

.moovingLink {
  background: 
    linear-gradient(to right, rgba(100, 200, 200, 0), rgba(100, 200, 200, 0)),
    linear-gradient(to right, #e0bc75, #e0bc75);
  background-size: 100% 0.1em, 0 0.1em;
  background-position: 100% 100%, 0 100%;
  background-repeat: no-repeat;
  transition: 400ms;
}

.moovingLink:hover,
.moovingLink:focus {
  color: #e0bc75;
  background-size: 0 0.1em, 100% 0.1em;
}

#logo {
  margin: 0.60rem;
  float: left;
}

#contact {
  background: #e0bc75;
  margin-right: 1.4rem;
  transition: 400ms;
}

#contact:hover {
  color: white;
}

#mySidebar {
    display: none;
}

#openNav {
    display: none;
}
.first{
    margin: 8vw;
}
.line{
    margin: 8vw;
}
h1{
    -webkit-font-smoothing:auto;
    font-style: italic;
    margin-bottom: 0.625rem;
    font-weight: 300;
    font-size: 10vh;
    text-transform: none;
    color:#333;
}
.subpage{
    max-width: 37.5rem;
    text-align: left;
    padding-left: 1.25rem;
    border-left:0.125rem solid #e0bc75;
    color:#adadad;
    font-size: 2.5vh;
}
.gold{
    border:solid #e0bc75;
    border-width:0.063rem;
    height: 0;
}
.story{
    
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    margin-bottom: 60px;
}
.story p:nth-child(1){
    font-family: "Century Gothic",sans-serif;
    font-size: 40px;
    color: #f3b543;
    margin-bottom: 0px;
}
.story p:nth-child(2){
    font-family: "Century Gothic",sans-serif;
    font-size: 16px;
    letter-spacing: 2;
    margin-bottom: 60px;
}
.story .pic p:nth-child(1){
    font-family: "Century Gothic",sans-serif;
    color: #f3b543;
    font-size: 40px;
}
.story .pic p:nth-child(2){
    font-family: "Century Gothic",sans-serif;
    font-size: 18px;
    letter-spacing: 2;
}

.picture{
    display: flex;
    justify-content: space-evenly;
}
.picture .pic{
    width: 40%;
    height: 300px;
    cursor: pointer;
}

.picture .pic:nth-child(1){
    background: url(../pic1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.picture .pic .overlay{
    text-align: left;
    margin: 10px;
    padding: 5% 3%;
    width: 90%;
    background-color: rgba(0, 0, 0, 0.7);
    transition: 0.3s;
}
.picture .pic .overlay:hover{
    margin: 0px;
    padding: 7.3% 5%;
}
.picture .pic:nth-child(2){
    background: url(../pic2.jpg);
}
.picture .pic div p:nth-child(1){
    color: white;
    font-size: 20px;
}
.picture .pic div p:nth-child(2){
    color: white;
    font-size: 24px;
    font-family: georgia,serif;
    font-style: italic;
}
.picture .pic div p:nth-child(3){
    color: #f3b543;
    font-size: 20px;
    font-family: "Century Gothic",sans-serif;
}
.story a button{
    margin-top: 40px;
    border: 2px solid #f3b543;
    background: none;
    font-family: "Century Gothic",sans-serif;
    color: #f3b543;
    font-size: 16px;
    height: 40px;
    padding: 8 18;
    cursor: pointer;
    transition: 0.3s;
}
.story a button:hover{
    opacity: 0.8;
}
.story a button:focus{
    color: rgb(118, 118, 249);
}
.last{
    padding-top: 50px;
    display: flex;
    color: white;
    border: 2px solid #333;
    height: 400px;
    background-color: #333;
    font-family: "Century Gothic",sans-serif;
    justify-content: space-between;
    padding-left: 10%;
    padding-right: 10%;
}
.last div:nth-child(1) img{
    margin-bottom: 30px;
}
.last div{
    width: 25%;
}
.last .grey{
    opacity: 0.7;
}
.last a{
    text-decoration: none;
    color: white;
    transition: 0.3s;
}
.last .opa:hover{
    opacity: 0.5;
}
.last .opa:focus{
    color: rgb(114, 114, 250);
}
.last .logo{
    display: flex;
    margin-bottom: 30px;
}
.last .logo img{
    width: 20px;
    height: 25px;
    margin-right: 20px;
    margin-left: -2px;
    cursor: pointer;
}
.last div:nth-child(4) a{
    color: white;
}
#message {
    width: 60px;
    position: fixed;
    bottom: 36px;
    left: 93%;
    z-index: 5;
}

#message button {
    background: url(../message.png);
    border-radius: 35px;
    border: none;
    background-color: #093587;
    align-items: center;
    width: 70px;
    height: 70px;
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    filter: invert(100%);
    cursor: pointer;
    transition: 0.3s;
}

#message button:hover {
    background: url(../pen.png);
    border-radius: 35px;
    border: none;
    background-color: #f8a900;
    align-items: center;
    width: 75px;
    height: 75px;
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
}

#typing {
    border: 2px solid black;
    border-radius: 20px;
    background-color: white;
    position: fixed;
    width: 350px;
    height: 500px;
    right: 4%;
    bottom: 30px;
    display: none;
}

#typing #hum {
    height: 25%;
    border-radius: 19px 19px 0px 0px;
    background-color: #f6ca78;
}

#typing #hum div {
    display: flex;
}

#typing #hum img {
    width: 75px;
    margin-top: 30px;
    margin-left: 20px;
    border-radius: 40px;
}

#typing #hum div p {
    margin-top: 50px;
    margin-left: 20px;
    font-family: "Century Gothic", sans-serif;
    font-weight: 600;
    font-size: 25px;
    color: white;
}

#typing #hum div button {
    margin-left: 60px;
    height: 40px;
    width: 40px;
    margin-top: 45px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    border-radius: 20px;
    border: none;
    background: none;
    transition: 0.3s;
    padding-top: 4px;
    padding-right: 7px;
}

#typing #hum div button:hover {
    background: rgba(68, 68, 68, 0.559);
}

#typing #mes {
    height: 55%;
}

#typing #mes div {
    border-radius: 20px;
    background-color: #4f4f4f20;
    margin-top: 20px;
    margin-left: 20px;
    width: 250px;
    height: 80px;
}

#typing #mes div p {
    padding: 14px 5px 10px 15px;
    font-family: "Century Gothic", sans-serif;
    font-size: 14px;
}

#typing #type {
    height: 15%;
    border-top: 2px solid rgba(128, 128, 128, 0.582);
    border-radius: 0px 0px 19px 19px;
    width: 80%;
    margin-left: 10%;
    display: flex;
}

#typing #type input {
    width: 100%;
    height: 50px;
    border: none;
    outline: none;
}

#typing #send {
    width: 60px;
    position: fixed;
    bottom: 36px;
    left: 93%;
    z-index: 5;
}

#typing #send button {
    background: url(../send.png);
    border-radius: 35px;
    border: none;
    background-color: #093587;
    align-items: center;
    width: 70px;
    height: 70px;
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    filter: invert(100%);
    cursor: pointer;
    transition: 0.3s;
    font-size: 0px;
}

#typing #send button:hover {
    border-radius: 35px;
    border: none;
    background-color: #f8a900;
    align-items: center;
    width: 75px;
    height: 75px;
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
}

form #text.shake {
    animation: shake 0.3s ease-in-out;
}
@keyframes shake {

0%,
100% {
    margin-left: 0px;
}

20%,
80% {
    margin-left: -5px;
}

40%,
60% {
    margin-left: 5px;
}
}

@media screen and (max-width: 980px) {
  .block{
  display: inline;
  text-align: center;
}
.subfooter{
display: none;
}

.blockss{
    display: flex;
    flex-direction: column;
}
.navbar{
  display: flex;
  
}
h1{
  padding-top: 70px;
}
.topnav {
  display: none;
 }

 #openNav {
  display: flex;
  position: sticky;
  height: 10vw;
  top: 0;
  justify-content: space-between;
  background-color: rgba(255, 255, 255, 0.75);
  z-index: 999;
 }

#openNav a img{
  width: 25vw;
}

#openNav a {
  color:white;
  margin: 3vw;
  margin-left: 3vw;
}

#openNav p{
    color: white;
}

#openNav i {
  filter: brightness(0.5);
  font-size: 2vw;
  margin: 3.5vw;
}
 
 #openNav button {
  right: 0;
  background: none;
  border-style: none;
 }

 #mySidebar {
  position: fixed;
  top: 0;
  right: 0;
  float: right;
  height: 150vh;
  overflow: hidden;
  width: 20vw;
  background-color: #333;
  margin-right: -20.5vw;
  z-index: 2000;
  transition: margin-right 5s;
 }

#mySidebar a {
  text-decoration: none;
}

#links {
  position: absolute;
  top: 30vh;
}

 #mySidebar p {
  font-size: 1.5vw;
  margin: 2vw;
  font-weight: bold;
  text-decoration: none;
 }

 #mySidebar button {
  position: absolute;
  height: 3vh;
  width: 3vh;
  top: 2vh;
  margin-left: 12.5vw;
  color: black;
  position: relative;
  border-style: none;
  background: none;
 }

 #mySideBar i {
  width: 1.5vw;
 }




.last{
        padding-top: 50px;
        display: block;
        color: white;
        border: 2px solid #333;
        height: 1000px;
        background-color: #333;
        font-family: "Century Gothic",sans-serif;
        justify-content: space-between;
        padding-left: 10%;
        padding-right: 10%;
    }
    .last div{
        width: 100%;
        margin-top: 40px;
        margin-bottom: 40px;
    }
}

.message {
        width: 80px;
        position: fixed;
        bottom: 30px;
        left: 80%;
    }

    .message button {
        background: url(../message.png);
        border-radius: 80px;
        border: none;
        background-color: #f8a900;
        align-items: center;
        width: 140px;
        height: 140px;
        background-size: 70px;
        background-repeat: no-repeat;
        background-position: center;
    }

</style>

<body>

    <div class="topnav">
        <a id="contact" href="/contact/contact.html">CONTACT</a>
        <a href="/resources/resourses.html" class="moovingLink">RESOURCES</a>
        <a href="/services/index.html" class="moovingLink">SERVICES</a>
        <a href="/our_agency/index.html" class="moovingLink">OUR AGENCY</a>
        <a href="/Industries/index.html" class="moovingLink">INDUSTRIES</a>
        <a href="/work/index.html" class="moovingLink">WORK</a>
        <a id="logo" href="#"><img src="logo-dark.png"></a>
    </div>

    <div id="openNav">
    <a href="../index.html"><img src="../logo-dark.png"></a>
    <button onclick="openNav()"><i class="fa-solid fa-bars"></i></button>
</div>
<div id="mySidebar">
    <button onclick="openNav()"><i class="fa-solid fa-xmark"></i></button>
    <div id="links">
        <a href=""><p>WORK</p></a>
        <a href="../Industries/index.html"><p>INDUSTRIES</p></a>
        <a href="../our_agency/index.html"><p>OUR AGENCY</p></a>
        <a href="../services/index.html"><p>SERVICES</p></a>
        <a href="../resources/resourses.html"><p>RESOURCES</p></a>
        <a href="../contact/contact.php"><p>CONTACT</p></a>
    </div>
</div>

<div class="main">
    <div class="first">
        <h1>Thank You</h1>
        <p class="subpage">Your message has been sent and you can expect us to get back to you <br>
        soon. We appreciate you contacting us and look forward to the<br>
        opportunity of working together.
        </p>
    </div>
    <div class="line"><hr class="gold"></div>
    <div class="story">
            <p>PICTURES THAT TELL A STORY</p>
            <p>LET THESE SAMPLES OF OUR RECENT WORK SPARK IDEAS OF WHAT WE COULD CREATE FOR YOUR BRAND.</p>
            <div class="picture">
                <div class="pic">
                    <div class="overlay"><p>MUSHA CAY</p>
                        <p>Web Design & Development | 3D Animation</p>
                        <p>SEE CASE STUDY</p>
                    </div>
                </div>
                <div class="pic">
                    <div class="overlay">
                        <p>JW MARRIOTT</p>
                        <p>Web Design & Development | Print</p>
                        <p>SEE CASE STUDY</p>
                    </div>     
                </div>
            </div>
            <a href="../work/index.html">
                <button class="work">SEE ALL CASE STUDIES</button>
            </a>
        </div>
        
        <div class="last">
            <div>
                <img src="../mediaboom.png">
                <p class="grey">Mediaboom <br>
                    73 Church St <br>
                    Guilford, CT 06437 <br>
                    <a class="opa" href="">info@mediaboom.com</a><br>
                    <a class="opa" href="">800.710.3975</a></p>
            </div>
            <div>
                <p>FOLLOW US</p><br>
                <div class="logo">
                    <a href="https://www.facebook.com/mediaBOOM/"><img src="../facebook.png"></a>
                    <a href="https://www.twitter.com/mediaboom"><img src="../twitter.png"></a>
                    <a href="https://www.linkedin.com/company/mediaboom"><img src="../in.png"></a>
                    <a href="https://www.instagram.com/mediaboom/"><img src="../insta.png"></a>
                </div>
                <p>JOIN THE TEAM</p>
                <p class="grey"><a class="opa" href="https://mediaboom.com/careers">View open positions »</a></p>
            </div>
            <div>
                <p>OUR SERVICES</p><br>
                <p class="grey"><a class="opa" href="https://mediaboom.com/services/digital/">Digital</a><br>
                <a class="opa" href="https://mediaboom.com/services/advertising/">Advertising</a><br>
                <a class="opa" href="https://mediaboom.com/services/marketing/">Marketing</a><br>
                <a class="opa" href="https://mediaboom.com/services/content-creation/">Content Creation</a><br>
                <a class="opa" href="https://mediaboom.com/specialty-services/">Industry Specific</a></p>
            </div>
            <div>
                <p>LATEST NEWS</p><br>
                <a class="opa" href="https://mediaboom.com/news/online-review-management/">Online Review Management – What It Is and Why You Need it </a>
                <a class="opa" href="https://mediaboom.com/news/luxury-hotel-social-media-marketing/">Top 10 Strategies for Luxury Hotel Social Media Marketing</a><br>
                <p class="grey"><a class="opa" href="https://mediaboom.com/privacy-policy">Privacy Policy</a></p>
            </div>
        </div>

        <div id="message">
            <button onclick="show()" id="but"></button>
         </div>
   
         <div id="typing">
            <div id="hum">
               <div>
                  <img src="../Our_agency/era.jpg" alt="">
                  <p>Hi there!</p>
                  <button onclick="show()">&#215;</button>
               </div>
            </div>
            <div id="mes">
               <div>
                  <p>Welcome back! You can begin by asking your question below. Someone will be with you shortly.</p>
               </div>
            </div>
            <div id="type">
               <form name="form" id="form1">
                  <input id="text" type="text" name="text" placeholder="Enter your message...">
               </form>
            </div>
            <div id="send">
               <button type="submit" id="send_but" onclick="empty()"></button>
            </div>
         </div>

         <script>
            var closeMes = true;

function show(){
  if (closeMes) {
    document.getElementById("typing").style.display = "inline";
    document.getElementById("message").style.display = "none";
    closeMes = false;
  }else{
    document.getElementById("typing").style.display = "none";
    document.getElementById("message").style.display = "inline";
    closeMes = true;
  }
}

  function empty(){ 
    var x=document.forms["form"]["text"].value;
    var y = document.getElementById("text");
    if (x.length==0){
        y.classList.add("shake");
    }
  }
         </script>
        
</body>
</html>