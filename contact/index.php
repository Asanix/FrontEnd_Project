<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
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
    transition: all .07s  ease-in-out;
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

</style>

<body>

<header>
<div class="navbar">
    
    <div class="container">
    
        <img src ="logo-dark.png" alt="...">
        
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
        
    



</body>
</html>