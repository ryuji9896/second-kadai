<?php
#1:回答
$name = "龍二";
if($name == "龍二"){
    echo "私は" . $name . "です";
    echo "\n" ;
    
}   else{
    echo $name . "ではありません";
    echo "\n";
}

#2:回答
$total = 0;
for($i = 0;$i <= 10000;$i++){
    $total += $i;
}
echo $total;
echo "\n";

#3:回答
$fruits = array("apple","banana","orange","peach","lemon");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

#4:回答
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n"; #縦並びになるように改行を追加
    }
}

