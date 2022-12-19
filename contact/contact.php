<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>
<style>
*{
    font-family:"Century Gothic",sans-serif;
    margin: 0;
}
.navbar{
    position: fixed;
    top: 0;
    background-color: white;
    width:100%;
    height:5.313rem;
}
.navbar .container{
    height: inherit;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left:0.625rem;
    padding-left: 0.375rem;
}
.navbar-menu li{
    list-style-type:none;
    padding-left: 0;
    margin-bottom: 0;
}
.navbar-menu li{
    display: inline-block;

}
.navbar-menu li a{
    display: inline-block;
    color: #000;
    font-weight: 700;
    opacity: 0.8;
    text-decoration: none;
    padding:0.625rem;

}
.navbar-menu li a:hover{
    color:#e0bc75;
    text-decoration:underline;
    opacity: 1;
    transition: all .07s ease-in-out;
}

.navbar-wrap{
    display: flex;
    flex-flow:row nowrap;
}
.contact{
    margin-left:0.625rem;
    padding: 0.625rem;
    background-color:#e0bc75;
    color:#000;
    font-weight: 600;
    text-decoration: none;
    margin-right: 1.875rem;
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
    font-size: 2.3vh;
}
.contact-form{
  width:calc(100%-20px);
  max-width: 500px;
  background-color: #e0bc75;
  padding: 50px 40px;
}
.input-control{
  margin-bottom:12px;
  position: relative;
}

.input-control input{
  width: 80%;
  height: 50px;
  border:none;
  background-color: white;
}
.submit{
  width: 150px;
  height: 50px;
  background-color: #333;
  color: white;
  border: none;
}
.block{
  display: flex;
  justify-content:space-evenly;

}
.contact-info{
  background-color: #bab2b2;
  border: 20px solid black;
  width:calc(100%-20px);
  max-width: 500px;
  padding: 50px 40px;
}
a{
  text-decoration: none;
  color: #e0bc75;
}
.clients{
    background-color: #f8f8f8;
    margin-top: 5rem;
    font-weight: 300;
    padding: 15px;
    font-style: italic;
    font-family: georgia,serif;
    height: 350px;
}
.blockss{
    display: flex;
    justify-content:space-evenly;
}
.clients h2{
   font-size: 2.5rem;
   text-align: center;
   margin: 30px;
   padding: 20px;
}
.client1{
  margin-top: 20px;
  display: flex;
  justify-content: space-evenly;
  
}
.client2{
  margin-top: 20px;
  display: flex;
  justify-content: space-evenly;
}
.img1{
  border-radius: 50%;
  width: 80px;
  height: 80px;
}
.img2{
  border-radius: 50%;
  width: 80px;
  height: 80px;
}
.fblock{
  font-weight: 600;
  font-family: georgia,serif;
}
.sblock{
  font-weight: 600;
  font-family: georgia,serif;
}

.subfooter{
    position:relative;
    text-align:center;
    color:black;
    width: 100%;
    height: 400px;
}
.sub{
    width: 100%;
    height: 400px;
}
.text-c{
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.input-control-e input{
    height: 40px;
    width: 400px;
    border: 1px solid rgba(255, 255, 255, 0.67);

}
.submitt{
    height: 50px;
    width: 400px;
    background-color: #333;
    color: white;
    font-weight: 600;
    font-size: 14px;
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



</style>
<body>
<header>
<div class="navbar">
    
    <div class="container">
        <img src ="logo-dark.png" alt="">
        <div class="navbar-wrap">
            <ul class="navbar-menu">
                <li><a href="#">WORK</a></li>
                <li><a href="#">INDUSTRIES</a></li>
                <li><a href="#">OUR AGENCY</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">RESOURCES</a></li>
                <li><a href="#">INSIGHTS</a></li>
                <a href="#" class="contact">CONTACT</a>
            </ul>
            
            </div>
        </div>
</div>
</header>

<div class="main">
    <div class="first">
        <h1>Get Results. Contact Us Today:</h1>
        <p class="subpage">Your brand’s success matters to us. Contact us to find out how our digital <br>
        experts can help you take your brand to the next level.
        </p>
    </div>
</div>

<div class="block">
    <div class="form">
        <form method="POST" action="client.php" class="contact-form">
        <h2>Fill out the form below to get started:</h2><br>
      <div class="input-control">
        <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>  
      </div><br>
      <div class="input-control">
        <input type="email" name="email" id="email" placeholder="Email Address" required>
      </div><br>
      <div class="input-control">
      <input type="number" name="phone" id="phone" placeholder="Phone" required>
      </div><br>
      <div class="input-control">
        <input type="textarea" name="message" id="message" placeholder="Message" required>
      </div><br>
      <div class="input-control-check">
        <input type="checkbox" name="checkbox" id="checkbox" required> Subscribe to Newsletter
      </div><br>
      <a href="https://mediaboom.com"><button type="submit" class="submit" name="save_client" >CONTACT US</button> </a>
      <!--<button type="submit" class="submit" name="save_client" >CONTACT US</button>  -->
    </form>
    </div>
    
    <div class="conatact-info">
    <h2>General Inquiries</h2><br>
    <p>Have a question… or just want to say hello? Get in touch:</p><br>
    <a href="info@mediaboom.com" style="color:#e0bc75" ">INFO@MEDIABOOM.COM</a><br>
    <a href="tel:+18007103975" style="color: #e0bc75;">800.710.3975</a><br><br>
    
    <h2>Our Location</h2>
    <p>73 Church St</p><br>
    <p>Guilford, CT 06437</p><br>
    <a href="https://www.google.com/maps" style="color:#e0bc75">GET DIRECTIONS></a><br><br>
    
    <h2>Mediaboom Newsletter</h2>
    <p>Exclusive digital marketing & advertising insights</p><br>
    <a href="https://mediaboom.com/newsletter-signup/" style="color:#e0bc75">SIGN UP HERE</a>

    </div>
  </div>

    <div class="clients">
      <h2>What Our Clients Say</h2>
    <div class="blockss">
    <div class="flocks">
        <div class="fblock">
          <p>“I have worked with Mediaboom on several projects and <br> 
          had nothing but stellar experiences!”</p>
        </div>
        <div class="client1">
        <img src="homer-liwag-color.png" alt="" class="img1">
          <p><strong> HOMER LIWAG</strong><br>
          Creative Director, Copperfield Design</p>
        </div>
      </div>
      
      <div class="slocks">
        <div class="sblock">
          <p>“I could not have asked for a more talented, creative <br>
          and patient partner for our website & branding project.”</p>
        </div>
        <div class="client2">
          <img src="Joanna-Sherriff_03.png" alt="" class="img2">
          <p><strong>JOANNA SHERRIFF</strong><br>
          Director of Corporate Sales at Elegant Banquets </p>
        </div>
      </div>
    </div>
    </div>
    
    <div class="subfooter">
        <img class="sub" src="newsletter-bg.jpg" alt="...">
        <div class="text-c">
        <h2 style="font-style:italic;">Subscribe To Mediaboom's Newsletter</h2><br>
            <p>Digital advertising never rests, and neither do we. Receive exclusive insights on <br> 
                what’s new, what’s hot, and what’s challenging the rules in digital advertising and <br>
                marketing so you’re always the first to know.</p><br>
                <form id="form">
                    <div class="input-control-e">
                        <input id="email" name="emaill" type="email" placeholder="Enter your email" required>
                    </div><br>
                    <button class="submitt" type="submit">RECEIVE INSIGHTS NOW</button>
                </form>
            </div>
    </div>
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
      
</body>
</html>