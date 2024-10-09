<?php 

include("db_connect.php");

function updateStudent($id, $name, $email, $phone, $address, $newphoto, $oldphoto) {
    global $conn;
    
    $basepath = 'photo/';
    // Check if a new photo is uploaded
    if ($newphoto['size'] > 0) {
        $fullpath = $basepath . $newphoto['name'];
        move_uploaded_file($newphoto['tmp_name'], $fullpath);
    } else {
        $fullpath = $oldphoto;
    }

    // SQL update query
    $sql = "UPDATE student SET name = :name, email = :email, phone_number = :phone, address = :address, profile_photo = :photo WHERE id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':photo', $fullpath);
    
    if ($stmt->execute()) {
        // JavaScript to show confirmation message
        echo "<script>
            alert('Update successful!');
            window.location.href = 'index.php';
        </script>";
        exit();
    } else {
        echo "<script>
            alert('Error: Unable to update the student record.');
            window.location.href = 'index.php';
        </script>";
        exit();
    }
}

// Get form data and call the function
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$oldphoto = $_POST['oldphoto'];
$newphoto = $_FILES['photo'];

updateStudent($id, $name, $email, $phone, $address, $newphoto, $oldphoto);


