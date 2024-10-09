<?php
include('db_connect.php');

// Add Items

if(isset($_POST['add'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$photo = $_FILES['photo'];

$basepath = 'photo/';


$fullpath = $basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'], $fullpath);

$sql = "INSERT INTO student (name, email, password, phone_number, address, profile_photo) VALUES (:name, :email, :password, :phone, :address, :photo)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':photo', $fullpath);
$stmt->execute();

echo "<script>
    alert('Update successful!');
    window.location.href = 'index.php';
</script>";

}
