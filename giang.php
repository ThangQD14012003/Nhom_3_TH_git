<!-- 
<?php
echo 'Hello world!';
echo '<br>';
?>

<?php
echo str_word_count ('Hoàng Thị Minh Giang');
echo '<br>';
?>

<?php
$x=5;
$result=$x*$x*$x;
echo 'Lập phương của result là'." ".$result;
echo '<br>';
?>

<?php
echo strrev('Hoang Thi Minh Giang');
echo '<br>';
?> -->

<!--Câu 1: Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen() -->
<?php
echo strlen('1. Hoàng Thị Minh Giang');
echo '<br>';
?>

<!-- Câu 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().-->
<?php
echo str_word_count('2. Hoang Thi Minh Giang');
echo '<br>';
?>  

<!-- Câu 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev(). -->
<?php
echo strrev('3. Hoang Thi Minh Giang');
echo '<br>';
?>

<!-- Câu 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos(). -->
<?php
echo strpos('4. Hoàng Thị Minh Giang','Giang');
echo '<br>';
?>

<!-- Câu 5: Thay thế Linh -> Minh -->
<?php
echo str_replace('Linh','Minh','Hoàng Thị Linh Giang');
echo '<br>';
?>

<!-- Câu 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp(). -->
<?php
$x='Hello';
$y='Hello world!';
$result= strncmp($x,$y,5);
    if($result == 0){
        echo 'chuỗi có bắt đầu bằng một chuỗi con của x';
    }
    else {
        echo 'Chuỗi bắt đầu bằng một chuỗi con khác';
    }
echo '<br>';
?>

<!-- Câu 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper(). -->
<?php
echo strtoupper('7. hoàng thị minh giang');
echo '<br>';
?>

<!-- Câu 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower(). -->
<?php
echo strtolower('8. HOÀNG THỊ MINH GIANG');
echo '<br>';
?>

<!-- Câu 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords(). -->
<?php
echo ucwords('9. hoàng thị minh giang');
echo '<br>';
?>

<!-- Câu 10: Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim(). -->
<?php
echo trim(' 10. hoàng thị minh giang ');
echo '<br>';
?>

<!-- Câu 11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim(). -->
<?php
$originalString = 'Hello, World!';
$firstCharToRemove = $originalString[0]; // Lấy ký tự đầu tiên
$modifiedString = ltrim($originalString, $firstCharToRemove);
echo $modifiedString;
echo '<br>';
?>


<!-- Câu 12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim(). -->
<?php
$originalString = 'Hello, World!';
$lastCharToRemove = $originalString[strlen($originalString) - 1]; // Lấy ký tự cuối cùng
$modifiedString = rtrim($originalString, $lastCharToRemove);
echo $modifiedString;
echo '<br>';
?>


<!-- Câu 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().-->
<?php
$x=explode(' ','hoàng thị minh giang');
var_dump ($x);
echo '<br>';
?>

<!-- Câu 14: Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode(). -->
<?php
$array=array('Hoàng','Thị','Minh','Giang');
$x=' ';
$y=implode($x,$array);
var_dump ($y);
echo '<br>';
?>

<!-- Câu 15: Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad(). -->
<?php
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

<!-- Câu 16: Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr(). -->
<?php
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

<!-- Câu 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr(). -->
<?php
$x = 'Say Hello word!';
$y = 'Hello world!';

if (strstr($x, $y) !== false) {
    echo 'Chuỗi chứa chuỗi con y';
} else {
    echo 'Chuỗi không chứa chuỗi con y';
}
echo '<br>';
?>

<!-- Câu 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace(). -->
<?php
$x = 'Ch@o bạn!';
$pattern = '/[^a-zA-Z0-9]+/';
$replacement = '_';

$y = preg_replace($pattern, $replacement, $x);
echo $y;
echo '<br>';
?>

<!-- Câu 19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int(). -->
<?php
$x = '1245.7896';
$intValue = (int) $x;

if ($x == $intValue && is_int($intValue)) {
    echo 'Chuỗi là số nguyên';
} else {
    echo 'Chuỗi không phải là số nguyên';
}
echo '<br>';
?>

<!-- Câu 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var(). -->
<?php
$email = 'example@email.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email hợp lệ';
} else {
    echo 'Email không hợp lệ';
}
?>
