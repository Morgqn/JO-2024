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
 
         <img height='215px' width='350px' src='$image' alt='Card image'>      
   ";
}
?>