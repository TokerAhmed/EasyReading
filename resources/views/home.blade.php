<!DOCTYPE html>
<html>
<head>

<style>h5{font-weight: bold;}
h1{font-size: 70px;
    color: purple;
    padding-left: 400px;
    }</style>
    <title>Easy Reading</title>
    <link rel="stylesheet" type="text/css" href="sub_css.css">
</head>
<body>
<section class="background">

<img 
onmouseover="this.src='image/bulb_on.png';" 
onmouseout="this.src='image/bulb_off.png';" src="image/bulb_off.png" 
 alt="hover effect" class="bulb" />
<a href=""><h1>Easy Reading</h1></a>

<form class="search">
    <input type="text" placeholder="search" class="go">
    <button type="submit">Go</button>
</form>
</section> </br>
<section class="nav">
<ul>
<li><a href="#">Book Categories</a>
<ul>
<li><a href="#">Bengali Literature</a></li>
<li><a href="#">English Literature</a></li>
<li><a href="#">Mathematics</a></li>
<li><a href="#">Computer Science</a></li>
<li><a href="#">Electrics & Electronics</a></li>
<li><a href="#">Biography</a></li>
</ul>
</li>
<li><a href="/homein">Home</a></li>
 @if (Route::has('login'))
                
    @if (Auth::check())
@else
<li><a href="{{ url('/login') }}">Log in</a></li>
<li><a href="{{ url('/register') }}">Registration</a></li>
 @endif
            
     @endif

<li><a href="/about">About</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="/home">My Account</a></li>
</UL>

</section>
<div id="images"> <img  name="slide" src="image/25.jpg"/>
<script type="text/javascript" >
var slideShow=document.getElementById("images");
var allImages= new Array();
allImages=["image/1.jpg","image/2.jpg","image/3.jpg","image/4.jpg","image/5.jpg","image/6.jpg","image/7.jpg","image/8.jpg","image/9.jpg","image/11.jpg","image/12.jpg","image/13.jpg","image/14.jpg","image/15.jpg","image/16.jpg","image/17.jpg","image/18.jpg","image/19.jpg","image/20.jpg","image/21.jpg","image/22.jpg","image/23.jpg","image/24.jpg","image/25.jpg"];
var imageIndex=0;
function changeImage()
{
    document.images.slide.src=allImages[imageIndex];
    //slideShow.setAtrribute("src",allImages[imageIndex]);
    console.log("executing 1");
    imageIndex++;
    if(imageIndex >= allImages.length)
    {
       console.log("executing 2");
       imageIndex=0;
    }
}console.log("executing 3");
setInterval("changeImage()",3000);
console.log("executing 4");
</script>
</div>
<section class="last">

 <h5>FOLLOW US ON</h5>
 <div id="share-buttons">
    
    <!-- Buffer -->
    <a href="#&amp;text=Simple Share Buttons" target="_blank">
        <img src="image/facebook-128.png" alt="facebook" />
</a>
<a href="#&amp;text=Simple Share Buttons" target="_blank">
        <img src="image/twitter-128.png" alt="twitter" />
</a>
<a href="#&amp;text=Simple Share Buttons" target="_blank">
        <img src="image/instragram-128.png" alt="instragam" />
</a>
<a href="#&amp;text=Simple Share Buttons" target="_blank">
        <img src="image/linkedin-128.png" alt="linkedin" />
</a>
<a href="#&amp;text=Simple Share Buttons" target="_blank">
        <img src="image/youtube2-128.png" alt="youtube" />
</a>
</div>
  <br>
 <span> Easy Reading</span> | 
                    <a href="#">Sitemap</a> | 
                    <a href="#">Terms of Use</a> | 
                    <a href="#">Privacy Policy</a>  <br>   
    Copyright&copy;2017<a href="#" target="_parent"> Tagar Chowdhury </a> <br>
     This web application is developed by <a href="#" target="_parent">Easy Readying Team.</a>
</section>


</body>
</html>