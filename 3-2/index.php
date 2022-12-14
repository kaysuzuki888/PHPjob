<?php
$fruits = ["りんご" => 150, "みかん" => 75, "桃" => 1500];
foreach($fruits as $key => $value){
$price = $value * 2 ;
echo $key ;
print "は"; echo $price. "円です。"; 
echo '<br>';
}
?>