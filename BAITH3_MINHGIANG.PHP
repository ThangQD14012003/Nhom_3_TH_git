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

//cách 3
echo "<hr>";
function kiemTra($i){
        if($i%2==0){
            echo $i. "là số chẵn!";
            echo "<br>";
        } else {
            echo $i. "là số lẻ!";
            echo "<br>";
        }
    } 
kiemTra(5);
?>

<!-- Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
//cách 1
echo "<hr>";
$n=10;
$sum=0;
for($i=1;$i<=$n;$i++){
        $sum+=$i;
    }
    echo "Tổng các số từ 1 đến n là: ".$sum."<br>";

function tinhTong($n){
    $tong=0;
    for ($i=1;$i<=$n;$i++){
        $tong+=$i;
    }
    return $tong;
    }
echo tinhTong(5);
?>
<!-- Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<hr>
<!-- Cách 1 -->
<table border="1" width="100%">
    <tr>
        <?php
        for ($i=1;$i<=10;$i++){
            echo "<td>";
            for ($j=1;$j<=10;$j++){
                echo $i.'x'.$j.'='.$i*$j.'<br>';
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>
<!-- Cách 2 -->
<?php
echo "<hr>";
function printMultiplicationTable($n) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result<br>";
    }
}
printMultiplicationTable(5);
?>
<hr>
<!-- Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
$x = "Hoang Thi Minh Giang";
$y = "Giang";
if(strpos($x, $y) !== FALSE) {
    echo $x.' có chứa từ '.$y;
}else{
    echo $x.' không chứa từ '.$y;
}
?>
<hr>
<!-- Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function TimgiatriLN($array) {
  $min = $array[0];
  $max = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $min) {
      $min = $array[$i];
    }
    if ($array[$i] > $max) {
      $max = $array[$i];
    }
  }
  return array($min, $max);
}
$array = array(1, 23, 64, 3, 89, 20, 4, 100, 94);
$minMax = TimgiatriLN($array);
echo "Giá trị nhỏ nhất là: $minMax[0]<br>";
echo "Giá trị lớn nhất là: $minMax[1]<br>";
?>
<hr>
<!-- Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
// Mảng cần sắp xếp
$array = array(10, 5, 2, 7, 9);

// Tạo một bản sao mới của mảng và sắp xếp theo thứ tự tăng dần
$sortedArray = $array;
sort($sortedArray);

// In mảng gốc
echo "Mảng gốc: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";
// In mảng sau khi đã sắp xếp
echo "\nMảng sau khi sắp xếp: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
?>

<!-- Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
echo "<hr>";
$n=5;
if ($n>0){
    $result=1;
    for($i=1;$i<=$n;$i++){
        $result*=$i;
    }
    echo "Giai thừa của ".$n."! = ".$result."<br>";  
} else {
    echo "Không hợp lệ";
}
?>
<!-- Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
echo "<hr>";
$a = 1;
$b = 50;

// Định nghĩa hàm kiểm tra số nguyên tố
function isPrime($n) {
  // Nếu n < 2 thì không phải số nguyên tố
  if ($n < 2) {
    return false;
  }
  // Kiểm tra các số từ 2 đến căn bậc hai của n
  for ($i = 2; $i <= sqrt($n); $i++) {
    // Nếu n chia hết cho i thì không phải số nguyên tố
    if ($n % $i == 0) {
      return false;
    }
  }
  // Nếu không thì là số nguyên tố
  return true;
}

// Duyệt qua các số từ a đến b
for ($i = $a; $i <= $b; $i++) {
  // Nếu i là số nguyên tố thì in ra
  if (isPrime($i)) {
    echo "$i là số nguyên tố\n";
    echo "<br>";
  }
}
?>
<!-- Câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng.-->
<?php
echo "<hr>";
$mang = array(5, 3, 8, 20, 4);
$tong = 0;
foreach($mang as $value){
    $tong += $value;
}
echo 'Tổng của mảng là: '.$tong;
?>

<!-- Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
echo "<hr>";
function fibonacci($n) {
    $f = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
    }
    return $f;
}

$start = 1;
$end = 10;

for ($i = $start; $i <= $end; $i++) {
    echo fibonacci($i)[1] . " ";
}
?>

<!-- Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
echo "<hr>";
function isArmstrong($number) {
    $sum = 0;
    $numDigits = strlen((string)$number);
    $temp = $number;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    return ($number == $sum);
}

$number = 153;
if (isArmstrong($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}
?>
<!-- Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
echo "<hr>";
$a = array(3, 4, 5, 8);
    $length = 0;
    foreach($a as $value){
        $length++;
    }
    function insert($gt, $vt){
        global $a, $length;
        for($i = 0; $i <= $length; $i++){
            if($vt == $i){
                for($j = $length; $j > $i; $j--){
                    $a[$j] = $a[$j-1];   
                }
                $a[$i] = $gt;
            }
            
        }  
    }
    echo "Trước thêm: "."<br>";
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    insert(2, 2);
    echo "Sau thêm: "."<br>";
    echo '<pre>';
    print_r($a);
    echo '</pre>';
?>
<!-- Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
echo "<hr>";
$my_array = array(1, 2, 2, 3, 4, 4, 5);
$unique_array = array_unique($my_array);
print_r($unique_array);
?>
<!-- Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
echo "<hr>";
$my_array = array(1, 2, 2, 3, 4, 4, 5);
$search_value = 3;
$index = array_search($search_value, $my_array);
if ($index !== false) {
    echo "Phần tử " . $search_value . " được tìm thấy tại chỉ số " . $index . ".";
} else {
    echo "Không tìm thấy phần tử " . $search_value . " trong mảng.";
}
?>
<!-- Câu 15: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev(). -->
<?php
echo "<hr>";
echo strrev('Hoang Thi Minh Giang');
echo '<br>';
?>
<!-- Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
echo "<hr>";
$my_array = array(1, 2, 2, 3, 4, 4, 5);
$count = count($my_array);
echo "Số lượng phần tử trong mảng là: " . $count;
?>

<!-- Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
echo "<hr>";
function is_palindrome($string) {
    $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
    return $string == strrev($string);
}

$string = "A man a plan a canal Panama";
if (is_palindrome($string)) {
    echo "Chuỗi \"$string\" là chuỗi Palindrome.";
} else {
    echo "Chuỗi \"$string\" không phải là chuỗi Palindrome.";
}
?>

<!-- Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
echo "<hr>";
$my_array = array(1, 2, 2, 3, 4, 4, 5);
$counted_array = array_count_values($my_array);
print_r($counted_array);
?>

<!-- Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
echo "<hr>";
$numbers = array(4, 2, 8, 6, 0);
rsort($numbers);

foreach($numbers as $number) {
    echo $number . " ";
}
?>
<!-- Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.  -->
<?php
echo "<hr>";
$x='Xin chào, ';
$y='Chúng tôi là K57SD2!';
$maxLength = strlen($x) + strlen($y); // Độ dài mục tiêu là tổng độ dài của $x và $y

// Thêm chuỗi vào đầu
$xyz = str_pad($x, $maxLength, $y, STR_PAD_LEFT);
echo "Thêm vào đầu: $xyz<br>";

// Thêm chuỗi vào cuối
$xyt = str_pad($x, $maxLength, $y, STR_PAD_RIGHT);
echo "Thêm vào cuối: $xyt<br>";
?>
<!-- Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
echo "<hr>";
$numbers = array(4, 2, 8, 6, 0);
rsort($numbers);
echo "The second largest number is: " . $numbers[1];
$numbers = array(4, 2, 8, 6, 0);
$max = $numbers[0];
$second_max = $numbers[0];

foreach($numbers as $number) {
    if($number > $max) {
        $second_max = $max;
        $max = $number;
    } else if($number > $second_max && $number != $max) {
        $second_max = $number;
    }
}

echo "Số lớn thứ hai trong một mảng là: " . $second_max;
?>
<!-- Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
echo "<hr>";
function uscln($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return uscln($b, $a % $b);
    }
}
function bscnn($a, $b) {
    return ($a * $b) / uscln($a, $b);
}
$a = 15;
$b = 40;

echo "USCLN của $a và $b là: " . uscln($a, $b) . "<br>";
echo "BSCNN của $a và $b là: " . bscnn($a, $b);
?>
<!-- Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.-->
<?php
echo "<hr>";
function Timsohoanhao($n) {
    $flag = 0;
    $total = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $total += $i;
        }
    }

    if ($total == $n) {
        $flag = 1;
    }

    if ($flag == 1) {
        echo "$n là số hoàn hảo.";
    } else {
        echo "$n không phải là số hoàn hảo.";
    }
}
?>
<!-- Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?
echo "<hr>";
$array = array(2, 3, 4, 1, 5, 7, 6);
function soleln($arr) {
    rsort($arr);
    foreach($arr as $value){
        if($value % 2 != 0){
            echo "Số lẻ lớn nhất của mảng =: $value";
            break;
        }
    }
}
soleln($array);
?>
<!-- Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
input: Số nguyên N
output: Thông báo số N có phải số nguyên tố hay không?
Số nguyên tố:
- Lớn hơn 1
- Chỉ chia hết cho 1 và chính nó
Giải thuật: 
- Kiểm tra N có lớn hơn 1 hay không
- Nếu số N lớn hơn 1: 
+ Dùng vòng lặp chạy từ 2 -> n-1
+ Kiểm tra trong phạm vi từ 2 đến n-1 có chia hết cho số nào không?
+ Nếu có chia hết => Kết luận không phải số nguyên tố 
+ Nếu không chia hết => Kết luận là số nguyên tố
- Nếu số N <=1: Thông báo không phải số nguyên tố-->
<?php
echo "<hr>";
$n = 5; //Số cần kiểm tra 
if ($n>1){
    $check=true; //Giả định n là số nguyên tố
    for ($i=2;$i<$n;$i++){
        if ($n%$i==0){
            $check = false;
        }
    }
    if ($check){ // if (check==true)
        echo $n. " là số nguyên tố";
    } else {
        echo $n. " không phải là số nguyên tố";
    }
} else {
    echo "n không phải là số nguyên tố";
}
?>
<!-- Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.-->
<?php
echo "<hr>";
function Soduongln($arr) {
    $max = 0;
    foreach($arr as $num) {
        if($num > $max && $num > 0) {
            $max = $num;
        }
    }
    return $max;
}

$numbers = array(1, -2, 3, 4, -5, 6, 7, -8, 9);
echo "Mảng: ";
print_r($numbers);
echo "Số dương lớn nhất trong mảng là: " . Soduongln($numbers);
?>
<!-- Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
echo "<hr>";
function Soamln($arr) {
    $max = 0;
    foreach($arr as $num) {
        if($num < $max && $num < 0) {
            $max = $num;
        }
    }
    return $max;
}

$numbers = array(1, -2, 3, 4, -5, 6, 7, -8, 9);
echo "Mảng: ";
print_r($numbers);
echo "Số âm lớn nhất trong mảng là: " . Soamln($numbers);
?>
<!-- Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
echo "<hr>";
function sum_odd_numbers($n) {
    $sum = 0;
    for($i = 1; $i <= $n; $i++) {
        if($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}

$n = 10;
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . sum_odd_numbers($n);
?>
<!-- Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
echo "<hr>";
function sochinhphuong($start, $end){
echo "Số chính phương trong đoạn từ $start đến $end là: ";
    for($i = $start; $i <= $end; $i++){
        if(pow(round(sqrt($i)),2) == $i) {
            echo $i." ";
        }
    }
}
sochinhphuong(1, 10);
?>

<!-- Câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
echo "<hr>";
$x='Say hello word';
$y='Hello world!';
$yLength = strlen($y);

if (substr($y, -$yLength) === $y) {
    echo 'Chuỗi kết thúc bằng chuỗi con y';
} else {
    echo 'Chuỗi kết thúc bằng chuỗi con khác';
}
echo '<br>';
?>