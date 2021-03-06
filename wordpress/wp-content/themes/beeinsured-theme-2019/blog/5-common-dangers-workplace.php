<!doctype html>
<html amp>
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>BeeInsured, Steps that build your future </title>
    <link rel="canonical" lang="en" href="https://www.beeinsured.co">
    
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">


    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="DESCRIP">
    <meta name="keywords" content="KEYWORDS">
    <meta name="author" content="BeeInsured">
     <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AMPhtml">
    <meta name="twitter:creator" content="@AMPhtml">
    <meta name="twitter:title" content="Lorem Ipsum">
    <meta name="twitter:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.">
    <meta name="twitter:image" content="http://cdn.ampproject.org/leader.jpg">
   
    <!--GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--PARALLAX -->
    <script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>

    <!--BACK TO TOP-->
    <script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
    <script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>

    <!--SEARCH BOX-->
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
   <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <style amp-custom>
* {
    padding: 0;
    margin: 0
}

.top {
    background: #eda921;
    height: 200px;
    display: flex;
    align-items: center
}

.top .logo {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.menu-desktop {
    background: #000;
    height: 70px;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center
}

.social-media {
    float: left
}

.social-media li {
    display: inline-block;
    padding: 20px
}

hr {
    border: 1px solid #fff;
    margin: 10px
}

.navbar {
    font-family: 'Open Sans';
    display: block;
    margin-left: auto;
    margin-right: auto
}

.navbar a {
    float: left;
    font-size: 24px;
    color: #fff;
    text-align: center;
    padding: 13px;
    text-decoration: none
}

.dropdown {
    float: left;
    overflow: hidden
}

.dropdown .dropbtn {
    font-size: 24px;
    border: 0;
    outline: 0;
    color: #fff;
    padding: 13px;
    background-color: inherit;
    font-family: inherit;
    margin: 0
}

.navbar a:hover {
    color: #eda921
}

.dropdown:hover .dropbtn {
    color: #eda921
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #4f4f4f;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
    z-index: 1
}

.dropdown-content a {
    float: none;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    display: block;
    text-align: left
}

.dropdown-content a:hover {
    background-color: #eda921;
    color: #000
}

.dropdown:hover .dropdown-content {
    display: block
}


.searchboxelements {
    display: inline-block
}
        .searchboxelements input[type=search]{
            background-color: #00000000;
            background-image: url('/img/search.png');
            background-position: 3px 3px;
            background-repeat: no-repeat;
            padding-left: 38px;
           -webkit-transition: width 0.5s ease-in-out;
    transition: width 0.5s ease-in-out;  
            height: 35px;
            
            color: #ffffff;
            font-family: 'Open Sans';
            width: 20%;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
            float: right;
        }

.searchboxelements input[type=search]:focus {
    width: 100%;
    background-color: #ffffff;
    color: #000000;
}


.lang {
    float: right;
    margin-right: 30px;
    margin-left: 30px
}

.lang a {
    text-decoration: none;
    font-family: 'Open Sans';
    font-size: 18px;
    padding: 10px;
    color: #fff
}

.lang a:hover {
    color: #eda921
}

a:active {
    color: #eda921
}
        a{
    text-decoration: none;
    color: #000000;
}

.menu-responsive {
    background: #000;
    height: 70px;
    font-family: 'Open Sans';
    width: 100%
}

.menu-responsive .hamburger {
    float: right;
    background-color: #000;
    color: #fff;
    margin: 8px;
    padding: 5px;
    border: 0;
    font-size: 36px;
    outline: 0
}

.menu-responsive .hamburger:hover {
    color: #eda921
}

.content {
    display: none;
    position: absolute;
    background-color: #4f4f4f;
    width: 100%;
    top: 260px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
    z-index: 1;
    text-align: center
}

.content a {
    float: none;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid #000
}

.content a:hover {
    background-color: #eda921;
    color: #000
}

.menu-responsive:hover .content {
    display: block
}

.menu-responsive .content .searchboxelements {
    padding: 10px;
    height: 30px
}

.menu-responsive .espanol a {
    border: 0;
    background: 0
}

.menu-responsive .espanol {
    display: flex;
    background-color: #000;
    border: 0;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center
}

        .title-section{
            margin-top: 80px;
            text-align: center;
        }

        .title-section h1{
            font-family: 'Open Sans';
            font-size: 36px;
            font-weight: 700;
        }

p {
    font-family: 'Open Sans';
    font-size: 16px;
    font-weight: 300;
    text-align: left
}

        .breadcrumbs{
            margin-top: 20px;
           
            margin-bottom: 45px;
        }
        .breadcrumbs li{
            display: inline-block;
            font-family: 'Open Sans';

            }

        .breadcrumbs li a{
            color: #000000;
            text-decoration: none;
        }

         .breadcrumbs li a:hover{
            color:  #eda921;
        }
        .breadcrumbs .active{
            color: #eda921;
        }

       
    h2{
    font-family: 'Open Sans';
    font-size: 24px;
    font-weight: 700;
    text-align: center;
    margin: 15px;
    margin-bottom: 0;
}
        .blog{
            display: block;
            margin-left: auto;
            margin-right: auto;
          
        }
        .blog p{
            max-width: 70%;
           text-align: left;
            padding-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
        }

footer {
    background: #000;
    width: 100%;
    height: 260px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
    flex-direction: row
}

footer .statement {
    font-family: 'Open Sans';
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    margin: auto;
    display: inline-block
}

footer .statement a {
    font-family: 'Open Sans';
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    font-style: none;
    text-decoration: none
}

footer .follow {
    display: block;
    margin-left: auto;
    margin-right: auto
}

footer .follow p {
    font-family: 'Open Sans';
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    text-align: center
}

footer .follow li {
    display: inline-block;
    padding: 10px
}

@media only screen and (max-width:600px) {
    .menu-desktop {
        display: none
    }
    .breadcrumbs{
        text-align: center;
        }
   
}

@media only screen and (max-width:1199px) and (min-width:601px) {
    .menu-desktop {
        display: none
    }
     .breadcrumbs{
        text-align: center;
        }
     
}

@media(min-width:1200px) {
    .menu-responsive {
        display: none
    }
}

 /*SCROLL TO TOP*/
         .scrollToTop {
    color: #000000;
    font-size: 1.4em;
    box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12), 0 1px 1px 0 rgba(0,0,0,.24);
    width: 50px;
    height: 50px;
    border-radius: 100px;
    border: none;
    outline: none;
    background: #eda921;
    z-index: 200;
    bottom: 10px;
    right: 10px;
    position: fixed;
    opacity: 0;
    visibility: hidden;
  }
  #marker {
    position: absolute;
    top: 100px;
    width: 0px;
    height: 0px;
  }
</style>

</head>

<body>
    <div id="top-page"></div>
    <amp-animation id="showAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "1",
          "visibility": "visible"
        }]
      }]
    }
  </script>
</amp-animation>


<amp-animation id="hideAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "0",
          "visibility": "hidden"
        }]
      }]
    }
  </script>
</amp-animation>
<div id="marker">
  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start"
    layout="nodisplay">
  </amp-position-observer>
</div>
<?php include('../menu.php');?>
   
    <div class="title-section">
            <h1>4 common dangers in workplace 
                <amp-img src="../img/icon.png" width="35" height="35" alt="#" title="#"></amp-img>
         </h1></div>
    <ol class="breadcrumbs">
        <li><a href="/index">Home /&nbsp;</a></li>
        <li><a href="/blog">Blog /&nbsp;</a></li>
        <li><a href="../blogs/5-common-dangers-workplace.php" class="active">5 common dangers in workplace</a></li>
    </ol>


<!--NOTA-->
 <div class="blog">
 <amp-img src="../img/blog/danger-workplace.jpg" width="1680" height="370" layout="responsive" title="#"></amp-img>
  <div class="texto">
                <h2>4 common dangers in workplace</h2><br>
      <p>In the recent years many <strong>several types of accidents</strong> are occurring in the construction industry causing severe and fatal injuries for workers although deaths in the workplace have declined recently, deaths in construction continue. Many insurance companies recommend some safety measures and mention the most common types of injuries to help workers and employers reduce <strong>accidents in the workplace.</strong><br><br>

          1. Objects:<br>
           Many workers suffer serious injury when an object suddenly falls over or ignites them. <strong>Construction equipment operators</strong> must observe appropriate protocols, including signaling, visual observation and limited speed. Workers should also be aware of their surroundings and check for machinery in motion.<br><br>

          2. Machinery:<br> One of the major injuries occurs when a worker gets trapped between pieces of machinery or between moving equipment and a wall or other surface. The Probability of this type of injury increases in excavation projects. Safety practices may include the proper technique to ensure that a trench does not collapse.  <strong>Operators of training equipment</strong> and people working close to them in proper safety procedures can also reduce injuries.<br><br>

3. Falls: <br>Falls are frequent at construction sites and are more common than resulting in new construction. Several causes may be to blame for a fall, including poor scaffold construction, lack of proper harnesses or railings, and lack of flooring etiquette.<br><br>

4. Electrical hazards:<br>
Construction workers often do their work in the vicinity of power lines. They also use power tools and electrical equipment in the course of their work. For this reason, electrocution presents a significant risk. Effective precautions may include comprehensive training, proper insulation and grounding, clear marking of power lines, and powering the line when necessary.<br><br>

          <i>Source: osha.gov</i></p>
           </div>
        </div>
        
        
        
        
  <button id="scrollToTopButton"
  on="tap:top-page.scrollTo(duration=200)"
  class="scrollToTop">⌃</button>
<!--BACK TO TOP-->  <button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop">⌃</button> </body>
<?php include('../footer.php');?>
</html>
