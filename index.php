<?php 
    $username='root';
    $password='';
    $server='localhost';
    $dbname='quanlyhoctap';
    $connect= new mysqli($server, $username, $password, $dbname);
if ($connect->connect_error){
    die("Khong ket noi:" . $conn->connect_error);
    exit();
}
$sql="DELETE FROM hocsinh WHERE student_id=1";
if ($connect->query($sql) === TRUE){
    echo "Xoa thanh cong.";
} else {
    echo "Lỗi xóa: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>