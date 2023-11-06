<?php
define("_WEB_HOST_ROOT", "http:/minhgiang.net");
echo _WEB_HOST_ROOT;
 //hoặc 
 echo "<br>";
 const _WEB_PATH_ROOT = "http:/minhgianght.net";
 echo _WEB_PATH_ROOT;
 ?>
 <?php
 echo "<hr>";
 echo "<br>";
 $a=2;
 $b=15;
 if($a==10){
    echo "Đúng";
 } else if ($a>10) {
    echo "Sai";
 } else {
    echo "a bé hơn 10";
 }
 ?>

 <?php
echo "<hr>";
 echo "<br>";
//  kiểm tra thứ trong tuần 
/* $a=1 -> chủ nhật 
$a=2 ->t2 
...
a=7 -> t7
*/
//Câu rẽ nhánh: switch case 
 $a=10;
 switch($a){
    case 1:
        echo 'hôm nay là chủ nhật';
    break;
    
    case 2: 
        echo 'Hôm nay là thứ 2';
    break;

    case 3:
        echo 'hôm nay là thứ 3';
    break;
    
    case 4: 
        echo 'hôm nay là thứ 4';
    break;

    case 5:
        echo 'hôm nay là thứ 5';
    break;

    case 6: 
        echo 'hôm nay là thứ 6';
    break;

    case 7:
        echo 'hôm nay là thứ 7';
    break;
    
    default: 
        echo 'không hợp lệ';
    break;
 }
echo "<hr>";
?>
<!-- Câu lệnh Switch case lồng if else
Kiểm tra số ngày trong tháng 
input: Nhập tháng, năm 
output: đưa ra số ngày trong tháng 
tháng 31 ngày: 1, 3, 5, 7, 8, 10, 12
tháng 30 ngày: 4, 6, 9, 11
tháng 28, 29 ngày: 2, năm nhuận = chia hết cho 4-->
<?php
// input
$month=2;
$year=2024;
echo "<br>";
switch ($month){
    case 2: 
        if ($year%4==0){
            echo "Tháng 2 có 29 ngày";
        } else{
            echo "Tháng 2 có 28 ngày";
        }
    break;
    case 1:
    case 3:
    case 5: 
    case 7: 
    case 8: 
    case 10:
    case 12:
        echo "Tháng có 31 ngày";
    break;

    case 4:
    case 6: 
    case 9: 
    case 11:
        echo "Tháng có 30 ngày";
    break;

    default:
        echo "Không hợp lệ";
    break;
}
?> 
<!-- Vòng lặp for trong PHP
for ($ten_bien=gia_tri_dau;dieu_kien_dung;bieu_thuc_tang){
    //cau lenh
}
 -->
 <?php
//Vòng lặp for tăng
echo "<hr>";
echo "<br>";
 for($i=0;$i<=10;$i++){
    echo "Test: ".$i;
    echo "<br>";
 }
 //hoặc 
 echo "<hr>";
 echo "<br>";
 $count=10;
 $start=0;
 for($i=$start;$i<=$count;$i+=2){
    echo "Đây là vòng lặp thứ: ".$i;
    echo "<br>";
 }

//  Tính tổng S=1+2+3+4...+n
echo "<hr>";
echo "<br>";
$n=5;
$s=0; //giả định =0;
for ($i=1; $i<=$n; $i++){
    $s+=$i; //s=s+i;
}
echo 'tổng S = '.$s;
?>
<!-- 
    s=0;
    i=1 => s=s+i=0+1;
    i=2 => s=s+i=1+2=3;
    i=3 => s=s+i=3+3=6;
    i=4 => s=s+i=6+4=10;
    i=5 => s=s+i=10+5=15;
 -->
<?php
echo "<hr>";
//vòng lặp for giảm
$n = 10;
for($i = $n; $i>=1; $i--){
    echo "Đây là vòng lặp thứ: ".$i."<br>";
}