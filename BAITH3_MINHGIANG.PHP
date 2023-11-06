<!-- Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<!-- Cách 1: -->
<?php
$start=1;
$end=100;
for($i=$start;$i<=$end;$i++){
    if($i%2==0){
        echo $i." là số chẵn!";
        echo "<br>";
    } else {
        echo $i." là số lẻ!";
        echo "<br>";
    }
}

echo "<hr>";
// Cách 2
$start=1;
$end=100;
$result_1=null;
$result_2=null;
for($i=$start;$i<=$end;$i++){
    if($i%2==0){
        // echo $i." là số chẵn!";
        // echo "<br>";
        $result_1.=$i.', ';
    } else {
        // echo $i." là số lẻ!";
        // echo "<br>";
        $result_2.=$i.', ';
    }
}
echo "Số chẵn là: ".$result_1."<br>";
echo "Số lẻ là: ".$result_2."<br>";
?>

<!-- Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
