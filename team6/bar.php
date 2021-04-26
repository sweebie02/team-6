<?php  
//Connecting to database
$site123 = "http://f70792o2.beget.tech/"; //linkof the site
$catsql = "SELECT * FROM categories;"; 
$catres = mysql_query($catsql); 
while($catrow = mysql_fetch_assoc($catres)) 
{ 
echo "<li><a href='" . $config_basedir. "products.php?id=" . $catrow['id'] . "'>". $catrow['name'] . "</a></li>"; 
} 
?> 
