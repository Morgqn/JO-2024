<?php
$url = "http://www.lemonde.fr/jeux-olympiques/rss_full.xml"; 
$rss = simplexml_load_file($url);

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 $linkk=$item->link;
 $itemm=$item->title;
 $description=$item->description;


 echo"
 <center>
 <a href='$linkk'><h4>$itemm</h4></a>
 <p class='lead' ><center>$description</center></p>
 </center>";
}
?>
