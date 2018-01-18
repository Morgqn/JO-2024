<?php
$url = "http://www.lemonde.fr/jeux-olympiques/rss_full.xml"; 
$rss = simplexml_load_file($url);

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 $linkk=$item->link;
 $itemm=$item->title;
 $image=$item->enclosure['url'];
 $description=$item->description;


 echo"
 <center>
 <img height='215px' width='450px' src='$image' alt='Card image'>
 <br><br>
 <a href='$linkk'><h4 style='color:#018ed9;font-size: 21px;font-family: sans-serif;'>$itemm</h4></a>
 <p class='lead'><center style='color:#00aef3;font-size: 14px;font-family: sans-serif;font-style:italic;'>$description</center></p>
 </center>
 <hr>";
}

