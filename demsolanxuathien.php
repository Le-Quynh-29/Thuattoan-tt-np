<?php
$numbers = [1,2,4,54,4,5,6,6,9,6];
$value = 6;
$count = new SplStack();
for($i = 0; $i <count($numbers); $i++){
        if($value === $numbers[$i]){
            $count->push($numbers[$i]);
        }
}
echo "Phan tu ".$value." xuat hien ".$count->count()." lan";
//echo "<pre>";
//print_r(array_count_values($numbers));