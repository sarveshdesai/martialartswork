
<!DOCTYPE html>
<html>
 <head>
   <title>Martial Artswork - NEWS</title>
 	<link rel="shortcut icon" HREF="../image/logo.png">
  <link rel="stylesheet" type="text/css" href="pp.css">
  <link rel="stylesheet" type="text/css" href="../style/navbc.css">
  <script src="http://www.google.com/jsapi" type="text/javascript"></script>
  <script type="text/javascript">
        google.load("jquery", "1.3.2");
  </script>
  <script type="text/javascript">
      function getFresh(){
        $('#loadArea').load("feeder.php");
        console.log("ck")
      };
      $(function(){
        getFresh();
        var int = setInterval("getFresh()",5000)
      });
      $('#loadArea').load("feeder.php");
  </script>
</head>
<body>
<div class="wrapper">
    <div class="menu">
			<nav>

			    <div class="hamburger">
			    	<div class="line"></div>
			    	<div class="line"></div>
			    	<div class="line"></div>
			    </div>

			    <div class="logod" onclick="home()">
			    </div>
					<script type="text/javascript">
			       function home(){
			         location.href="index.html"
			       }
			    </script>

			    <ul class="nav-links">
					<li><a href="index.html"> HOME </a></li>
					<li><a href="Training.html"> TRAINING </a></li>
					<li><a href="ht.php"  id="onlink"> NEWS </a></li>
					<li><a href="about us.html"> About US </a></li>
			    </ul>
   			</nav>

		</div>
  <div class="container">
   <br />
   <h2 align="center" color="#212121">.</h2>
   <br />
   <div class="sin" id="loadArea">
<!--  <!-- <?php

   foreach($content as $row)
   {
    echo '<h3 class="text-info">' . $row->getElementsByTagName("title")->item(0)->nodeValue . '</h3>';
    echo '
    <div class="row">
     <div class="col-md-3">
      <p>'.$row->getElementsByTagName("pubDate")->item(0)->nodeValue.'</p>
      <br />
      <img src="'.$row->getElementsByTagName("enclosure")->item(0)->attributes["url"]->nodeValue.'" class="img-responsive img-thumbnail" />
     </div>
     <div class="col-md-9">
      <p align="right"><b><i>By '.$row->getElementsByTagNameNS("ns:1", "*")->item(0)->nodeValue.'</i></b></p>
      <br />
      <p>'.$row->getElementsByTagName("description")->item(0)->nodeValue.'</p>
     </div>
     <br />
    </div>';
    echo '<br />';
    echo '<hr id="hrr"/>';
    echo '<br />';

   }

   ?>--> -->
 </div>
  </div>
</div>
 </body>
</html>
