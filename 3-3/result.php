<span style="font-size:2em";>
<?php
$my_numbers = $_GET['my_numbers'];
echo date ("Y/m/d", time()); 
echo の運勢は;
echo '<br>';
echo 選ばれた数字は;
$str = "$my_numbers";
$array = str_split($str);
$response = $array[ array_rand( $array ) ] ;
echo $response;
echo '<br>';
if($response === "0" ) {
    echo "凶";
}elseif($response === "1" ) {
    echo "小吉";
}elseif($response === "2" ) {
    echo "小吉";
}elseif($response === "3" ) {
    echo "小吉";
}elseif($response === "4") {
    echo "中吉";
}elseif($response === "5") {
    echo "中吉";
}elseif($response === "6") {
    echo "中吉";
}elseif($response === "7" ) {
    echo "吉";
}elseif($response === "8" ) {
    echo "吉";
}elseif($response === "9" ) {
    echo "大吉";
}
?>
</span>