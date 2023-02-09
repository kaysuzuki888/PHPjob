<span style="font-size:2em";>
<?php
$my_numbers = $_GET['my_numbers'];
echo date ("Y/m/d", time()); 
echo "の運勢は";
echo '<br>';
echo "選ばれた数字は";
$str = "$my_numbers";
$array = str_split($str);
$result = $array[ array_rand( $array ) ] ;
echo $result;
echo '<br>';
if($result == 0 ){
    echo "凶";
}elseif($result >=1 and $result <=3){
    echo "小吉";
}elseif($result >=4 and $result <=6){
    echo "中吉";
}elseif($result >=7 and $result <=8){
    echo "吉";
}elseif($result == 9 ){
    echo "大吉";
}
?>