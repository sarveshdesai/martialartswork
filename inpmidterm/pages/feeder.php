<?php

//read.php

$feed_url = "http://localhost/phpmyadmin/phpp/tryrss.php";

$object = new DOMDocument();

$object->load($feed_url);

$content = $object->getElementsByTagName("item");


?>
<?php

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

?>
