<?php
$servername = "127.0.0.1"; // hoặc "localhost"
$username = "root"; // Tên người dùng MySQL (mặc định là "root")
$password = ""; // Mật khẩu MySQL (để trống nếu chưa thiết lập)
$dbname = "user_registration"; // Tên cơ sở dữ liệu của bạn
$port = 3306; // Cổng bạn đã cấu hình trong XAMPP

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

$input1 = $_POST['user_name']; 
$input33 = $_POST['user_email'];  
$input2 = $_POST['user_passward']; 

$sql = "INSERT INTO users (username , password, email ) VALUES ('$input1', '$input2','$input3')";
if ($conn->query($sql) === TRUE) { 
    echo "Dữ liệu đã được lưu thành công!"; 
} else { 
    echo "Lỗi: " . $sql . "<br>" . $conn->error; 
} // Đóng kết nối 
$conn->close();
?>

